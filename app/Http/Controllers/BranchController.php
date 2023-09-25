<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.branch.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $branch = new Branch();

        $branch->name = $request->name;
        $branch->slug = Str::slug($request->name ,'-');
        $branch->logo = $request->logo;
        $branch->save();

        return redirect()->route('branch')->with('success', 'Thành công');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        $compacts =[
            'branches' => DB::table('branches')->paginate(15)
        ];
        return view('web.branch.list_branch',$compacts);
    }

    public function edit(Branch $branch ,string $slug)
    {

        $dataBranch = Branch::where('slug', $slug)->first();
        $compacts = [
            'dataBranch' => $dataBranch
        ];
        return view('web.branch.edit',$compacts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch, string $slug)
    {
        $dataBranchUpdate = Branch::where('slug', $slug)->first();
        if (!$dataBranchUpdate) {
            abort(404);
        } //end if

        $accepts = [
            'name',
            'logo',
        ];

        foreach ($accepts as $col) {
            if ($dataBranchUpdate->$col != $request->$col) {
                $dataBranchUpdate->$col = $request->$col;
            } //end if
        } //end foreach

        $dataBranchUpdate->save();
        return redirect()->back()->with('success', 'Thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch, string $slug)
    {
        DB::table('branches')->where('slug', $slug)->delete();
        return redirect()->route('branch.list')->with('success', 'Thành công');
    }
}
