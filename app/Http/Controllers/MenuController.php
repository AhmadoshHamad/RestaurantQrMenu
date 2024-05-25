<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Pagination\AbstractPaginator;

class MenuController extends Controller
{
    public function show(Menu $menu)
    {
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;

            if ($currentUserId == $menu['user_id']) {
                return view('menus.show', [
                    'menu' => $menu
                ]);
            }
        }
        abort(404);
    }

    public function create(){
        if (auth()->check()) { 
            return view('menus.create');       
        }
        abort(404);
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => ['required'],
        ]);
        $data['user_id'] = auth()->user()->id;
        if($request->hasFile('image')){
            $data['image'] = $request->file('image')->store('image','public');
        }
        Menu::create($data);
        return redirect('/users');
    }

    public function destroy(Menu $menu){
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;

            if ($currentUserId == $menu['user_id']) {
                $menu->delete();
                return redirect('/users');
            }
        }
        abort(404);
    }

    public function edit(Menu $menu){
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;
            if ($currentUserId == $menu['user_id']) {
                return view('menus.update',[
                    'menu'=>$menu
                ]);
            }
        }
        abort(404);
    }
    public function update(Menu $menu,Request $request){
        if (auth()->check()) {
            $currentUserId = auth()->user()->id;

            if ($currentUserId == $menu['user_id']) {
                $data = $request->validate([
                    'title' => ['required'],
                ]);
                if($request->hasFile('image')){
                    $data['image'] = $request->file('image')->store('image','public');
                }
                $menu->update($data);
                return redirect('/users');
            }
        }
        abort(404);
    }
    
}
