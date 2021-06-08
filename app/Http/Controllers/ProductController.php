<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Comment;
use App\Models\User;
use App\Models\Like;

class ProductController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index($id) {
        $product = Product::where('productID', $id)->get();

        $comments = DB::table('comments')
            ->join('users', 'users.userID', '=', 'comments.userID')
            ->join('products', 'products.productID', '=', 'comments.productID')
            ->where('products.productID', $id)
            ->select('comments.commentID', 'comments.created_at', 'comments.tekst', 'users.username')
        ->get();

        $likes = Like::where('productID', $product[0]->productID)->get();

        return view('pages.product', [
            'p' => $product[0],
            'likes' => $likes,
            'comments' => $comments
        ]);
    }

    public function editProduct($id) {
        $product = Product::where('productID', $id)->get();

        if(!Gate::allows('update', $product[0])) {
            abort(403);
        }

        return view('pages.editProduct', [
            'product' => $product[0]
        ]);
    }

    public function updateProduct(Request $request) {
        Product::where('productID', $request->id)->update([
            'naziv' => $request->naziv,
            'cena' => (float)$request->cena,
            'naStanju' => (int)$request->naStanju,
            'dimenzije' => $request->dimenzije,
            'opis' => $request->opis,
            'img' => $request->img
        ]);
        
        return redirect()->route('dashboard');
    }

    public function deleteProduct($id) {
        $product = Product::where('productID', $id)->get();
        if(!Gate::allows('delete', $product[0])) {
            abort(403);
        }

        Product::where('productID', $id)->delete();

        return redirect()->route('dashboard');
    }

    public function newProduct() {
        if(auth()->user()->type === 'admin' || auth()->user()->type === 'editor') {
            return view('pages.addProduct');
        }

        abort(403);
    }

    public function addProduct(Request $request) {
        Product::create([
            'naziv' => $request->naziv,
            'cena' => (float)$request->cena,
            'naStanju' => (int)$request->naStanju,
            'dimenzije' => $request->dimenzije,
            'opis' => $request->opis,
            'img' => $request->img
        ]);

        return redirect()->route('dashboard');
    } 
}
