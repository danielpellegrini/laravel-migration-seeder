<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Seed;

class ApiController extends Controller
{

    public function getFirstSeed() {

        $firstSeed = Seed::orderBy('id', 'asc')->first();
        // dd($firstSeed);
        return response()->json($firstSeed);

        // $allSeeds = Seed::all();
        // return response()->json($allSeeds);
        // dd($allSeeds);

    }

}
