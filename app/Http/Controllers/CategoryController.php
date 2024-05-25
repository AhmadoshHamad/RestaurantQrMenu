<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Menu $menu){
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;

            if ($currentUserId == $menu['user_id']){
                $categories = Category::where('menu_id', $menu->id)->get();
                return view('categories.show',[
                    'categories' => $categories,
                    'menu'=>$menu
                ]);
            }
        }
        abort(404);
    }

    public function create(Menu $menu){
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;

            if ($currentUserId == $menu['user_id']){
                return view('categories.create',[
                    'menu' =>$menu
                ]);
            }
        }
        abort(404);
    }

    public function store(Request $request, Menu $menu){
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;

            if ($currentUserId == $menu['user_id']){
                $data = $request->validate([
                    'name' => ['required'],
                ]);
                $data['menu_id'] = $menu->id;
                if($request->hasFile('image')){
                    $data['image'] = $request->file('image')->store('image','public');
                }
                Category::create($data);
                return redirect('/menus/'.$menu->id.'/categories');
            }
            abort(404);
        }
    }
    public function edit(Menu $menu, Category $category){
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;
            if ($currentUserId == $menu['user_id']) {
                return view('categories.update',[
                    'menu'=>$menu,
                    'category'=>$category
                ]);
            }
        }
        abort(404);
    }

    public function update(Menu $menu, Category $category,Request $request){
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;

            if ($currentUserId == $menu['user_id']) {
                $data = $request->validate([
                    'name' => ['required'],
                ]);
                if($request->hasFile('image')){
                    $data['image'] = $request->file('image')->store('image','public');
                }
                $category->update($data);
                return redirect('/menus/'.$menu->id.'/categories');
            }
        }
        abort(404);
    }

    public function destroy(Menu $menu, Category $category){
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;

            if ($currentUserId == $menu['user_id']) {
                $category->delete();
                return redirect('/menus/'.$menu->id.'/categories');
            }
        }
        abort(404);
    }
}
