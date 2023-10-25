<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wishlists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishlistsController extends Controller
{
    public function save_wishlist(Request $request, int $id)
    {
        $dataWishlist = DB::table('wishlists')->where('product_id', $id)->first();
        if ($dataWishlist) {
            return redirect()->route('home.product')->with('alert', 'Sản phẩm đã có trong mục yêu thích');
        }
        $wishlist = new Wishlists();
        $wishlist->user_id = Auth::user()->id;
        $wishlist->product_id = $id;
        $wishlist->save();
        return redirect()->back();
    }
    public function show_wishlist($id)
    {
        $wish = User::findOrFail($id);
        // $wish = Wishlist::with('product')
        //   ->where('user_id', $user->id)
        //   ->orderby('id', 'desc')
        //   ->paginate(10);
        $compacts = [
            "wishlishs" => $wish,
        ];

        return view('web.product.wishlists', $compacts);
    }

    public function delete_wishlist($id)
    {
        $wish = Wishlists::findOrFail($id);
        $wish->delete();

        return redirect()->back();
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wishlists  $wishlists
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wishlists $wishlists)
    {
        //
    }
}
