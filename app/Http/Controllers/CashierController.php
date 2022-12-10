<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CashierController extends Controller
{
    public function index(){
        $products = Item::all();
        return view('cashier.index', ['products' => $products]);
    }

    public function store(Request $request){
        $items_lists = $request->items_lists;
        $items_lists = preg_split('/\//', $items_lists, -1, PREG_SPLIT_NO_EMPTY);
        $order_id = DB::table('item_user')->max('id');
        $sum = 0;
        if(!$order_id) $order_id = 1;
        else $order_id++;

        //items_lists format [[0] => {item_id}, [1] =>{qty}, [2] => {total}]
        for($i = 0; $i < count($items_lists); $i++){
            $items_lists[$i] = preg_split('/#|@/', $items_lists[$i], -1, PREG_SPLIT_NO_EMPTY);
        }

        //update item_user table
        foreach($items_lists as $item){
            DB::table('item_user')->insert([
                'id' => $order_id,
                'item_id' => $item[0],
                'user_id' => Auth::id(),
                'quantity' => $item[1],
                'total' => $item[2],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            $sum += $item[2];
        }
        
        foreach($items_lists as $key => $item_list){
            $item = Item::findOrFail($item_list[0]);
            $item->stock -= $item_list[1];
            $item->save();
            $items_lists[$key][3] = $item->name;
            $items_lists[$key][4] = $item->price;
        }

        $sum = "Rp " . number_format($sum, 2, ',', '.');
        return view('cashier.nota', ['id' => $order_id, 'items_lists' => $items_lists, 'sum' => $sum]);
    }
}
