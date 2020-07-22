<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;

class ProductController extends Controller
{
    public function getProducts(){

        $productos= Product::All();

        // foreach($productos as $products){
        //     echo $products;
        //     echo "</br>";
        //     echo "\n";
        // }
    
        
     return view('tienda', ['productos' => $productos]);

    }

    public function getPicadas($id){

       $productos= Product::where('tipo',$id)->get();
        
        // foreach($picadas as $picada){
        //     echo $picada;
        //     echo "</br>";
        //     echo "\n";
        // }
        
        return view('picadas', ['productos' => $productos]);
    }

    public function getProductos($id){

        $productos = Product::where('tipo', $id)->get();

        return view('productos', ['productos' => $productos]);

    }

    public function addtoCart(Request $request, $id){

        $product= Product::find($id);

        // session()->flush();

        $oldCart= Session::has('cart') ? Session::get('cart') : null;
        

        $cart= new Cart($oldCart);
        $cart->add($product, $product->id);
        
        

        $request->session()->put('cart', $cart);
        return back();

    }
    
    public function addWithQty(Request $request, $id, $qty){

        $product= Product::find($id);
        
        // session()->flush();

        $oldCart= Session::has('cart') ? Session::get('cart') : null;
        

        $cart= new Cart($oldCart);
        $cart->addWithQty($product, $product->id, $qty);
        
        

        $request->session()->put('cart', $cart);
        return back();

    }

    public function reduceOne(Request $request, $id){

        $product= Product::find($id);
        $oldCart= Session::has('cart') ? Session::get('cart') : null;

        $cart= new Cart($oldCart);
        $cart->reduce($product, $product->id);

        $request->session()->put('cart', $cart);
        return back();
        
    }
    public function delete(Request $request, $id){

        $product= Product::find($id);
        $oldCart= Session::has('cart') ? Session::get('cart') : null;

        $cart= new Cart($oldCart);
        $cart->delete($product, $product->id);

        $request->session()->put('cart', $cart);
        return back();
    }

    public function cart(){
        
        $oldCart= Session::get('cart');

        $cart = new Cart($oldCart);    
        //  dd(Session::get('cart'));

        return view('carrito',['products'=> $cart->items, 'totalPrice' => $cart->totalPrice]);
    }
}
