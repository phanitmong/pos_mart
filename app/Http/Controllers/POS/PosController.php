<?php

namespace App\Http\Controllers\POS;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PosController extends Controller
{
    public function index()
    {
        return view('pos.index');
    }
    public function get(Request $request)
    {

        $data = Product::where('code',$request->code)
        ->select('name','code','price')
        ->first();
        if($data)
        {
            return response()->json($data);
        }

        // return view('pos.index');
    }
}
