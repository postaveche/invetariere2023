<?php

namespace App\Http\Controllers;

use App\Models\Omvsd;
use App\Models\Personal;
use App\Models\Section;
use App\Models\Tip;
use Illuminate\Http\Request;

class OmvsdController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allomvsd = Omvsd::all();
        return view('omvsd', [
            'allomvsd' => $allomvsd,
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
        return view('omvsd_create', [
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
        $omvsd = new Omvsd();
        $omvsd->name = $request->name;
        $omvsd->nr_inv = $request->nr_inv;
        $omvsd->tip_id = $request->tip;
        $omvsd->section_id = $request->sectia;
        $omvsd->personal_id = $request->person;
        $omvsd->save();
        return redirect()->back()->with('message', 'OMVSD a fost adaugat cu succes!');
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
        $omvsd = Omvsd::where('id', $id)->first();
        $alltip = Tip::all();
        $allsectii = Section::all();
        $allperson = Personal::all();
        //dd($omvsd);
        return view('omvsd_edit', [
            'omvsd' => $omvsd,
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
        $omvsd = Omvsd::find($id);
        $omvsd->name = $request->name;
        $omvsd->nr_inv = $request->nr_inv;
        $omvsd->section_id = $request->sectia;
        $omvsd->tip_id = $request->tip;
        $omvsd->personal_id = $request->person;
        $omvsd->save();
        return redirect()->route('omvsd.index')
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
