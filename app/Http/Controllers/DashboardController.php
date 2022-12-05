<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use Storage;

class DashboardController extends Controller
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
        return view('dashboard', ['items' => $items]);
    }

    public function edit($id){
        $item = Item::findOrFail($id);
        $categories = Category::all();
        return view('dashboard.edit', ['item'=>$item, 'categories'=>$categories]);
    }

    public function show($id)
    {
        $item = Item::findOrFail($id);
        $photo = Storage::url($item->photo);
        return view('home.show', ['item'=>$item]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required|unique:items,name,'.$id,
            'price' => 'required',
            'stock' => 'required',
            'discount' => 'required',
            'description' => 'required',
            'manufacturer' => 'required',
            'category' => 'required',
            'photo' => 'image'
        ]);
        
        if($request->file('photo') == null){
            $path = Item::find($id)->photo;
        }else{
            $path = $request->file('photo')->storePublicly('photos', 'public');
            $ext = $request->file('photo')->extension();
        }

        $item = Item::findOrFail($id);
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->discount = $request->discount;
        $item->manufacturer = $request->manufacturer;
        $item->category_id = $request->category;
        $item->photo = $path;
        $item->save();
        return redirect('/dashboard');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|unique:items',
            'price' => 'required',
            'stock' => 'required',
            'discount' => 'required',
            'description' => 'required|string',
            'manufacturer' => 'required',
            'category' => 'required',
            'photo' => 'image'
        ]);
        
        if($request->file('photo') == null){
            $path = null;
        }else{
            $path = $request->file('photo')->storePublicly('photos', 'public');
            $ext = $request->file('photo')->extension();
        }

        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->manufacturer = $request->manufacturer;
        $item->category_id = $request->category;
        $item->photo = $path;
        $item->save();
        return redirect('/dashboard');
    }

    public function create(){
        $categories = Category::all();
        return view('dashboard.create',['categories'=>$categories]);
    }
    
}