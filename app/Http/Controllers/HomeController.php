<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        $category = Category::all();
        return view('home.index', ['items' => $items]);
    }

    public function edit($id){
        $item = Item::findOrFail($id);
        return view('home.edit', ['item'=>$item]);
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        $photo = Storage::url($item->photo);
        return view('home.show', ['item'=>$item]);
    }

    public function update(Request $request, $id){
        if($request->file('photo') == null){
            $path = Student::find($id)->photo;
        }else{
            $path = $request->file('photo')->storePublicly('photos', 'public');
            $ext = $request->file('photo')->extension();
        }

        $item = Item::findOrFail($id);
        $item->photo = $path;
        $item->save();
        return redirect('/');
    }

    public function store(Request $request){
        $path = $request->file('photo')->storePublicly('photos', 'public');
        $ext = $request->file('photo')->extension();

        
    }
    
}
