<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Message;
use App\Models\Like;
use App\Models\Comment;
use App\Models\Order;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }
    
    public function index() {
        if(!(auth()->user()->type === 'admin' || auth()->user()->type === 'editor')) {
            abort(403);
        }
        
        $users = User::all();
        $products = Product::all();
        $messages = Message::all();

        $likes = DB::table('likes')
            ->join('users', 'users.userID', '=', 'likes.userID')
            ->join('products', 'products.productID', '=', 'likes.productID')
            ->select('likes.likeID', 'likes.created_at', 'users.username', 'products.naziv')
        ->get();
        
        $comments = DB::table('comments')
            ->join('users', 'users.userID', '=', 'comments.userID')
            ->join('products', 'products.productID', '=', 'comments.productID')
            ->select('comments.commentID', 'comments.created_at', 'comments.tekst', 'users.username', 'products.naziv')
        ->get();

        $orders = DB::table('orders')
            ->join('users', 'users.userID', '=', 'orders.userID')
            ->join('products', 'products.productID', '=', 'orders.productID')
            ->select('orders.orderID', 'orders.amount', 'orders.created_at', 'users.username', 'products.naziv', 'products.cena', 'orders.status')
        ->get();     

        return view('pages.dashboard', [
            'users' => $users,
            'products' => $products,
            'messages' => $messages,
            'likes' => $likes,
            'comments' => $comments,
            'orders' => $orders
        ]);
    }

}
