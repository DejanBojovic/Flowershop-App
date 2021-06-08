<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    public function addLike(Request $request) {
        $isLiked = Like::where('userID', $request->userID)->where('productID', $request->productID)->get();

        if(!count($isLiked)) {
            Like::create([
                'userID' => $request->userID,
                'productID' => $request->productID
            ]);
        }

        return redirect()->route('product', ['id' => $request->productID]);
    }

    public function deleteLike($id) {
        $like = Like::where('likeID', $id)->get();
        if(!Gate::allows('delete', $like[0])) {
            abort(403);
        }

        Like::where('likeID', $id)->delete();

        return redirect()->back();
    }
}
