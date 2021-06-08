<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Order;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }
    
    public function index() {
        $comments = DB::table('comments')
            ->join('users', 'users.userID', '=', 'comments.userID')
            ->where('users.userID', auth()->user()->userID)
            ->join('products', 'products.productID', '=', 'comments.productID')
            ->select('comments.commentID', 'comments.created_at', 'comments.tekst', 'users.username', 'products.naziv')
        ->get();

        $likes = DB::table('likes')
            ->join('users', 'users.userID', '=', 'likes.userID')
            ->where('users.userID', auth()->user()->userID)
            ->join('products', 'products.productID', '=', 'likes.productID')
            ->select('likes.likeID', 'likes.created_at', 'users.username', 'products.naziv')
        ->get();

        $orders = DB::table('orders')
            ->join('users', 'users.userID', '=', 'orders.userID')
            ->where('users.userID', auth()->user()->userID)
            ->join('products', 'products.productID', '=', 'orders.productID')
            ->select('orders.orderID', 'orders.amount', 'orders.created_at', 'users.username', 'products.naziv', 'products.cena', 'orders.status')
        ->get();

        return view('pages.user', [
            'user' => auth()->user(),
            'comments' => $comments,
            'likes' => $likes,
            'orders' => $orders
        ]);
    }

    public function newUser() {
        if(auth()->user()->type === 'admin') {
            return view('pages.addUser');
        }

        abort(403);
    }

    public function addUser(Request $request) {
        $this->validate($request, [
            'username' => 'required|min:5',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:5',
            'type' => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => $request->type
        ]);

        return redirect()->route('dashboard');
    }

    public function editUser($id) {
        $user = User::where('userID', $id)->get();

        if(!Gate::allows('update', $user[0])) {
            abort(403);
        }

        return view('pages.editUser', [
            'user' => $user[0]
        ]);
    }

    public function updateUser(Request $request) {
        $this->validate($request, [
            'password' => 'required|confirmed|min:5'
        ]);

        User::where('userID', $request->id)->update([
            'type' => $request->type,
            'password' => Hash::make($request->password)
        ]);
        
        if(auth()->user()->type == 'user') {
            return redirect()->route('user');
        } else {
            return redirect()->route('dashboard');
        }
        
    }

    public function deleteUser($id) {
        $user = User::where('userID', $id)->get();

        if(!Gate::allows('delete', $user[0])) {
            abort(403);
        }
        
        User::where('userID', $id)->delete();

        return redirect()->route('dashboard');
    }
}
