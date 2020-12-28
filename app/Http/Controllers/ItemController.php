<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return response()->json($items);
    }

    public function show(int $item_id)
    {
        $item = Item::findOrFail($item_id);
        return response()->json($item);
    }

    public function getItemsOfUser($userId)
    {
        $user = User::findOrFail($userId);
        $items = DB::table('item_user')
            ->where('user_id', $user->id)
            ->join('items', 'item_user.item_id', '=', 'items.id')
            ->get();
        return response()->json($items);
    }
}
