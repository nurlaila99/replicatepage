<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kajian;

class KajianController extends Controller
{
    public function getData(){
        $data = Kajian::all();
        return response()->json($data);
    }

}
