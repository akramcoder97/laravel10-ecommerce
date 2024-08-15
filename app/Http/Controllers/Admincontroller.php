<?php

namespace App\Http\Controllers;
use App\Models\Product;     // ---- added
use App\Models\Order;       // ---- added
use App\Models\Category;       // ---- added
use Illuminate\Support\Facades\DB;   // ---- added

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    //
    public function index()
    {
        $products = Product::count();
        $total = Order::sum('total');
        $orders = Order::count();
        return view ('admin.index',['products'=>$products,'total'=>$total,'orders'=>$orders]);
        //return view ('produits',['products'=>$products,'total'=>$total,'orders'=>$orders]);
        //return view('produits', compact('data'));
    }
    
    public function productsIndex()
    {
        $productsCount = Product::count();
        //$products = Product::all();
        $products = Product::with('category')->get();
        $categories = Category::all();
        $total = Order::sum('total');
        $orders = Order::count();

         /* hadi bach ntestiw le produit li fihom defaut fel category
        foreach ($products as $product) {
            $categoryName = $product->category ? $product->category->category_name : 'No category';
            echo $product->product_name . ' belongs to category ' . $categoryName . '<br>';
        } */
        return view ('admin.produits',['products'=>$products,'productsCount'=>$productsCount,'total'=>$total,'orders'=>$orders,'categories'=>$categories]);
    } 

    public function ordersIndex()
    {
        $products = Product::count();
        $total = Order::sum('total');
        $orders = Order::count();
        return view ('admin.orders',['product'=>$products,'total'=>$total,'orders'=>$orders]);
    }

    public function addNewProduct(Request $request)
    {

        $filename='';
        if($request->hasFile('image')){
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);  // stock image in img folder
        }
        $product = new Product;

        $product->name=$request->name;
        $product->slug=$request->slug;
        $product->short_description=$request->short_description;
        $product->description=$request->description;
        $product->regular_price=$request->regular_price;
        $product->sale_price=$request->sale_price;
        $product->SKU=$request->SKU;
        $product->quantity=$request->quantity;
        $product->SKU=$request->SKU;
        $product->image=$filename; 
        $product->category_id=$request->category; 

        //dd($request->all());

        $product->save();
        return redirect()->back()->with('message','produit ajouté avec succéss !'); 
    }

    public function updateProduct(Request $request)
    {
        $filename='';
        if($request->hasFile('image')){           
            $filename = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/assets/img/'), $filename);  // stock image in img folder
        }
        $update=[
            'id'     =>$request->id,
            'name'   =>$request->name,
            'slug'   =>$request->slug,
            'short_description' =>$request->short_description,
            'description'   =>$request->description,
            'regular_price' =>$request->regular_price,
            'sale_price'    =>$request->sale_price,
            'SKU'           =>$request->SKU,
            'stock_status'  =>$request->status,
            'quantity'      =>$request->quantity,
            'image'         =>$filename,
            'category_id'   =>$request->category,
        ];        
        DB::table('products')->where('id',$request->id)->update($update);
        return redirect()->back()->with('message','produit ajouté avec succéss !');
        //return dd($update);
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('message','produit ajouté avec succéss !');
    }
}