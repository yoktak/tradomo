<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Redirect;

class ItemController extends Controller
{
    public function index()
    {
        return inertia('Item/Index')->with(['items' => Item::with('user')->get()]);
    }
    
    public function show(Item $item)
    {
        return inertia('Item/Show')->with(['item' => $item->load('user')]);
    }
    
    public function create()
    {
        return inertia('Item/Create');
    }
    
    public function store(Request $request, Item $item)
    {
        $input = $request->all();
        $input['user_id'] = Auth::id();
        $item->fill($input)->save();
        
        return Redirect::route('item.show', $item->id);
    }
    
    
}
