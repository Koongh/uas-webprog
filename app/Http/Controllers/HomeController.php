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
        // $category = Category::all();
        $countDisct = Item::where('discount', ">", 0)->get();
        $countDisct = $countDisct->count();
        return view('home.index', ['items' => $items, 'countDisct' => $countDisct]);
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
        // if($request->file('photo') == null){
        //     $path = Student::find($id)->photo;
        // }else{
        //     $path = $request->file('photo')->storePublicly('photos', 'public');
        //     $ext = $request->file('photo')->extension();
        // }
        
        for($i = 1;$i<5;$i++){
            $index = "arr".$i;
            var_dump($request->$index);
        }
        
        exit;

        // $item = Item::findOrFail($id);
        // $item->photo = $path;
        // $item->save();
        // return redirect('/');
    }

    public function store(Request $request){
        $path = $request->file('photo')->storePublicly('photos', 'public');
        $ext = $request->file('photo')->extension();

        
    }

    public function discount(){
        $items = Item::all()->where('discount', '>', 0);
        return view('home.discount', ['items' => $items]);
    }
    
}
