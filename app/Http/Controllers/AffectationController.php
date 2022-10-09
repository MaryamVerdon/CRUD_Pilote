<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use App\Models\Avion;
use App\Models\Pilote;
use App\Models\Vol;
use Illuminate\Http\Request;

class AffectationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affectations = Affectation::orderBy("dateVol", "asc")->paginate(10);
        return view("pages.affectation", [
            "affectations" =>  $affectations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pilotes = Pilote::all();
        $avions = Avion::all();
        $vols = Vol::all();
        return view("pages.createAffectation", compact('pilotes', 'avions', 'vols'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nbPassager" => "required",
            "dateVol" => "required",
            "vol_id" => "required",
            "pilote_id" => "required",
            "avion_id" => "required",
        ]);

        Affectation::create($request->all());
        return back()->with("success", "Affectation ajouté avec succès ! ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Affectation $affectation
     * @return \Illuminate\Http\Response
     */
    public function delete(Affectation $affectation)
    {
        $affectation->delete();
        return back()->with("successDelete", "L'affectation $affectation->id à été supprimée avec succès ! ");
    }
}
