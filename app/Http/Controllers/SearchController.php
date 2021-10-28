<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('query');

        $data = Product::search(['title', 'description'], $query)->get();

        return response()->json($data);
    }
}
