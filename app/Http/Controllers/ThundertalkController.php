<?php

namespace App\Http\Controllers;

use App\Models\Thundertalk;
use Illuminate\Http\Request;

class ThundertalkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataThundertalk = Thundertalk::all();
        // return response()->json(['status' => 'success', 'employee' => $dataThundertalk], 200); 

        return view('thundertalk', compact('dataThundertalk'));
    }
}
