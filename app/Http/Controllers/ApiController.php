<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Preferences;
use App\Http\Requests;

class ApiController extends Controller
{
    //
    public function getdata(){
        $preferences_obj= new Preferences();// \App\Model\Preferences();
        $data=$preferences_obj::all();
        $dataforView=array();
        
        foreach ($data as $row) {
            //echo $flight->name;
            $dataforView[$row->name]=$row->value;
        }
        echo json_encode($dataforView);die;
    }
}
