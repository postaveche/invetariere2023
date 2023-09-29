<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use App\Models\Mf;
use App\Models\Tip;
use App\Models\Personal;

class MfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allmf = Mf::orderBy('name', 'ASC')->get();
        return view('mf', [
            'allmf' => $allmf,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alltip = Tip::all();
        $allsectii = Section::all();
        $allperson = Personal::all();
        return view('mf_create',[
            'alltip' => $alltip,
            'allsectii' => $allsectii,
            'allpersonal' => $allperson,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $mf = new Mf();
        $mf->name = $request->name;
        $mf->nr_inv = $request->nr_inv;
        $mf->tip_id = $request->tip;
        $mf->section_id = $request->sectia;
        $mf->personal_id = $request->person;
        $mf->save();
        return redirect()->back()->with('message', 'MF a fost adaugat cu succes!');
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
        $mf = Mf::where('id', $id)->first();
        $alltip = Tip::all();
        $allsectii = Section::all();
        $allperson = Personal::all();
        //dd($omvsd);
        return view('mf_edit', [
            'mf' => $mf,
            'alltip' => $alltip,
            'allsectii' => $allsectii,
            'allpersonal' => $allperson,
        ]);
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
        $mf = Mf::find($id);
        $mf->name = $request->name;
        $mf->nr_inv = $request->nr_inv;
        $mf->section_id = $request->sectia;
        $mf->tip_id = $request->tip;
        $mf->personal_id = $request->person;
        $mf->save();
        return redirect()->route('mf.index')
            ->with('success', 'Modificarile au fost efectuate cu succes!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
