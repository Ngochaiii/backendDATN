<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Post;
use App\Models\Product_categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{

    public static function getFilters(array $request = [])
    {
        $accepts = [
            'title', 'type', 'status'
        ];
        $filters = [];

        foreach ($accepts as $col) {
            $filters[$col] = Arr::get($request, $col);
        } //end foreach

        return $filters;
    }
    private static function getPosts(array $filters = [], $limit = 10)
    {
        extract($filters);
        $data = Post::query();
        if (!is_null($title)) {
            $data->where('title', 'LIKE',  "%" . $title . "%");
        } //end if


        if (!is_null($status) && in_array($status, Post::STATUSES_ARR)) {
            $data->where('status', $filters['status']);
        } //end if
        if (!is_null($type) && in_array($type, Post::TYPE_ARR)) {
            $data->where('type', $filters['type']);
        } //end if

        return $data->orderBy('status', 'desc')->orderBy('id', 'desc')->paginate($limit);
    }

    private static function findPost(int $id)
    {
        return Post::find($id);
    }

    public function index(Request $request)
    {
        $filters = self::getFilters($request->toArray());
        $compacts = [
            'siteTitle' => 'Danh sách bài Post',
            "posts" => self::getPosts($filters),
            "filters" => $filters,
            "post_type" => Post::TYPES,
            "post_status" => Post::STATUSES,
        ];

        return view('web.posts.index', $compacts);
    }
    public function create()
    {
        $brands = Branch::all();
        $categories = Product_categories::all();
        $compacts = [
            'brands' => $brands,
            'categories' => $categories,
            'siteTitle' => 'Thêm bài post',
            "post_status" => Post::STATUSES,
            "post_type" => Post::TYPES,
            'form_data' => new Post()
        ];
        return view('web.posts.add', $compacts);
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $post = new Post;

        $post->title = $request->title;
        $slug = Str::slug($request->title, '-');
        $post->slug = $slug . '_' . rand();
        $post->version = $request->version;
        $post->brand_id = $request->brand_id;
        $post->cate_id = $request->cate_id;
        $post->description = $request->description;
        $post->content = $request->content;
        $post->type = (int) $request->type;
        $post->status = (int) $request->status;
        if ($request->created_at) {
            $post->created_at = $request->created_at;
        } //end if

        $post->save();
        $postId = $post->id;
        if ($postId && $request->hasFile('image')) {
            $reqFile = $request->file('image');
            $fileName = storeFile($reqFile, "posts/$postId", 'post_');
            $post->image = $fileName;
            $post->save();
        } //end if

        return redirect()->route('admin.posts')->with('success', 'Thành công');
    }
    public function edit(int $id)
    {
        $post = self::findPost($id);
        if (!$post) {
            abort(404);
        } //end if
        $brands = Branch::all();
        $categories = Product_categories::all();
        $compacts = [
            'siteTitle' => "Bài Post: " . $post->title,
            "post_status" => Post::STATUSES,
            "post_type" => Post::TYPES,
            'form_data' => $post,
            'brands' => $brands,
            'categories' => $categories,
        ];
        return view('web.posts.add', $compacts);
    }

    public function update(int $id, Request $request)
    {
        $posts = self::findPost($id);

        if (!$posts) {
            abort(404);
        } //end if

        $accepts = [
            'title',
            'version',
            'description',
            'cate_id',
            'brand_id',
            'content',
            'type',
            'status',
            'created_at'
        ];

        foreach ($accepts as $col) {
            if ($posts->$col != $request->$col) {
                $posts->$col = $request->$col;
            } //end if
        } //end foreach

        $postId = $posts->id;
        if ($request->hasFile('image')) {
            $reqFile = $request->file('image');
            $fileName = storeFile($reqFile, "posts/$postId", 'post_');
            $posts->image = $fileName;
        }

        $posts->save();
        return redirect()->back()->with('success', 'Thành công');
    }

    public function delete(int $id)
    {
        $post = self::findPost($id);

        if (!$post) {
            abort(404);
        } //end if

        $post->delete();
        return redirect()->route('admin.posts')->with('success', 'Thành công');
    }
}
