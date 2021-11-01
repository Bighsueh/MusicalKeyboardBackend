<?php

namespace App\Http\Controllers;

use App\Melody;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MelodyController extends Controller
{
    public function storeMelody(Request $request,$value)
    {
        DB::table('melodies')->insert([
            'name'=> $value,
            'melody'=>$value,
        ]);
    }

    public function getMelody()
    {
        $data = Melody::all()->toJson();
        return $data;
    }
}
