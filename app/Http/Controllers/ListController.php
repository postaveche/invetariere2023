<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Omvsd;
use App\Models\Mf;
use App\Models\Section;

class ListController extends Controller
{
    public function omvsd_neatribuite(){
        $omvsd = Omvsd::where('section_id', '0')->get();
        $nr = 1;
        return view('list',[
            'allomvsd' => $omvsd,
            'nr' => $nr,
        ]);
    }

    public function mf_neatribuite(){
        $mf = Mf::where('section_id', '0')->get();
        $nr = 1;
        return view('list',[
            'allomvsd' => $mf,
            'nr'=>$nr,
        ]);
    }

    public function sectii(){
        $sectii = Section::orderBy('nume')->get();

        return view('list_sectii',[
            'sectii' => $sectii,
        ]);
    }

    public function count_mf($section){
        $mf = Mf::where('section_id', $section)->get();
        $mf_count = count($mf);
        return $mf;
    }

    public function sectii_info($section){
        $omvsd = Omvsd::where('section_id', $section)->orderBy('tip_id', 'ASC')->get();
        $mf = Mf::where('section_id', $section)->get();
        return view('sectii_info', [
            'omvsd' => $omvsd,
            'mf' => $mf,
        ]);
    }
}
