<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vol;

class VolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vols = Vol::paginate(10);
        return view("pages.vol", [
            "vols" => $vols
        ]);
    }
}
