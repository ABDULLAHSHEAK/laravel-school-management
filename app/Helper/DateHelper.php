<?php

use Carbon\Carbon;

if(!function_exists('convertDate')){
    function convertDate($date_time){
        return Carbon::createFromFormat('Y-m-d',$date_time)->format('d-m-Y');
    }
}
