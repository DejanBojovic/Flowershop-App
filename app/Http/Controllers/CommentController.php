<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function addComment(Request $request) {
        $this->validate($request, [
            'tekst' => 'required'
        ]);

        Comment::create([
            'productID' => $request->productID,
            'userID' => $request->userID,
            'tekst' => $request->tekst
        ]);

        return redirect()->route('product', ['id' => $request->productID]);
    }

    public function deleteComment($id) {
        $comment = Comment::where('commentID', $id)->get();
        if(!Gate::allows('delete', $comment[0])) {
            abort(403);
        }

        Comment::where('commentID', $id)->delete();

        return redirect()->back();
    }

    public function editComment($id) {
        $comment = Comment::where('commentID', $id)->get();

        if(!Gate::allows('edit', $comment[0])) {
            abort(403);
        }

        return view('pages.editComment', [
            'comment' => $comment[0]
        ]);
    }

    public function updateComment(Request $request) {
        Comment::where('commentID', $request->commentID)->update([
            'tekst' => $request->tekst
        ]);
        
        return redirect()->route('user');
    }
}
