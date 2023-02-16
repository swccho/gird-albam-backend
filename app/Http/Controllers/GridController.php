<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Repository\GridRepository;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class GridController extends BaseController
{
    public function list(Request $request){

    }

    public function Create(Request $request)
    {
        $rv = GridRepository::Create($request);
        return response()->json($rv, 200);
    }
}
