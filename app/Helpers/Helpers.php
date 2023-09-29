<?php

if (!function_exists('count_mf'))
{
    function count_mf($sectie){
        $mf = \App\Models\Mf::where('section_id', $sectie)->get();
        $count_mf = count($mf);
        return $count_mf;
    }
}

if (!function_exists('count_omvsd')){
    function count_omvsd($sectie)
    {
        $omv = \App\Models\Omvsd::where('section_id', $sectie)->get();
        $count_omv= count($omv);
        return $count_omv;
    }
}
