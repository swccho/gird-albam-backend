<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class GridController extends BaseController
{
    public function list(Request $request){

    }

    public function Create(Request $request)
    {
        $rv = ProductRepository::Create($request);
        return response()->json($rv, 200);
    }
}
