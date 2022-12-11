<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\User;
use App\Models\Motorcycle;
use Storage;
use Carbon\Carbon;
//spreadsheet export dependencies
use App\Exports\SalesExport;
use Maatwebsite\Excel\Facades\Excel;
//end of spreadsheet export dependencies

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
        $motorcycles = Motorcycle::all();
        return view('dashboard.edit', ['item'=>$item, 'categories'=>$categories, 'motorcycles'=>$motorcycles]);
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
            'motorcycles' => 'required',
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
        $item->motorcycles()->sync($request->motorcycles);
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
            'motorcycles' => 'required',
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
        // if(gettype($request->category) == "string"){
        //     $category = new Category();
        //     $category->name = $request->category;
        //     $category->save();

        //     $item->category_id = $category->id;
        // }else{
            $item->category_id = $request->category;
        // }
        $item->stock = $request->stock;
        $item->discount = $request->discount;
        $item->description = $request->description;
        $item->manufacturer = $request->manufacturer;

        $item->photo = $path;
        $item->save();
        $item->motorcycles()->sync($request->motorcycles);
        return redirect('/dashboard');
    }

    public function create(){
        $categories = Category::all();
        $motorcycles = Motorcycle::all();
        return view('dashboard.create',['categories'=>$categories, 'motorcycles'=>$motorcycles]);
    }

    public function delete($id){
        $item = Item::find($id);
        $item->stock = 0;
        $item->save();
        return redirect('/dashboard');
    }

    public function account(){
        $users = User::all();
        return view('dashboard.account',['users'=>$users]);
    }

    public function deleteAccount($id){
        $user = User::find($id);
        $user->role = 0;
        $user->save();
        return redirect('/account');
    }

    public function hire($id){
        $user = User::find($id);
        $user->role = 2;
        $user->save();
        return redirect('/account');
    }

    // public function stock(){
    //     $items = Item::all();
    //     return view('dashboard.stock',['items' => $items] );
    // }

    // public function addStock(Request $reqest){
    //     $item = Item::find($request->id);
    //     $item->description = "ini hasil test berhasil";
    // }
    
    public function exportSales(){
        return Excel::download(new SalesExport, Carbon::now()->toDateString().' KSPECMOTOR report.xlsx');
    }
}
