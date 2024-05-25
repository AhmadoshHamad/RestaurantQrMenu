<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Menu $menu, Category $category){
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;

            if ($currentUserId == $menu['user_id']){
                $products = Product::where('category_id', $category->id)->get();
                return view('products.show',[
                    'products' => $products,
                    'category'=> $category,
                    'menu'=>$menu
                ]);
            }
        }
        abort(404);
    }
    public function create(Menu $menu, Category $category){
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;

            if ($currentUserId == $menu['user_id']){
                return view('products.create',[
                    'menu' =>$menu,
                    'category'=>$category,
                ]);
            }
        }
        abort(404);
    }

    public function store(Request $request, Menu $menu, Category $category){
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;

            if ($currentUserId == $menu['user_id']){
                $data = $request->validate([
                    'name' => ['required'],
                    'description' => ['nullable', 'string', 'max:255'],
                    'price'=>['required'],
                    
                ]);
                $data['category_id'] = $category->id;
                if($request->hasFile('image')){
                    $data['image'] = $request->file('image')->store('image','public');
                }
                Product::create($data);
                return redirect('/menus/'.$menu->id.'/'.$category->id.'/products');
            }
            abort(404);
        }
    }

    public function edit(Menu $menu, Category $category, Product $product){
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;
            if ($currentUserId == $menu['user_id']) {
                return view('products.update',[
                    'menu'=>$menu,
                    'category'=>$category,
                    'product'=> $product
                ]);
            }
        }
        abort(404);
    }

    public function update(Menu $menu, Category $category,Product $product,Request $request){
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;

            if ($currentUserId == $menu['user_id']) {
                $data = $request->validate([
                    'name' => ['required'],
                    'price'=> ['required'],
                    'description' => ['nullable', 'string', 'max:255'],
                ]);
                if($request->hasFile('image')){
                    $data['image'] = $request->file('image')->store('image','public');
                }
                $product->update($data);
                return redirect('/menus/'.$menu->id.'/'.$category->id.'/products');
            }
        }
        abort(404);
    }
    public function destroy(Menu $menu, Category $category, Product $product){
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;

            if ($currentUserId == $menu['user_id']) {
                $product->delete();
                return redirect('/menus/'.$menu->id.'/'.$category->id.'/products');
            }
        }
        abort(404);
    }
}
