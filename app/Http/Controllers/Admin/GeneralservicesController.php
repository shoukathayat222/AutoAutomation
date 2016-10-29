<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Illuminate\Http\Request;
//use Illuminate\Validation\Validator;
use Illuminate\Validation\Validator;
use App\Model\Generalservices;
//use Validator;
use Faker\Provider\Image;

class GeneralservicesController extends \App\Http\Controllers\Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Generalservices= new Generalservices();// \App\Model\Generalservices();
        $data=$Generalservices::all();
        return view('admin.generalserviceslisting',array('data'=>$data));
        //return view('admin.Generalservices');
        
    }
    public function edit($id){
        //echo $id;die;
        $page= new Generalservices();
        $data=$page::find($id);
//        echo "<pre>";
//        print_r($data);die;
        //$data_image = Image::make('assets/service_images/'.$data->image)->encode('data-url');
        //var_dump($data_image);die;
        return view('admin.editgeneralservices',array('data'=>$data));
    }
    public function save(Request $request){
       
            $page= new Generalservices();
            $page->text = $request->text;
            //$page->locked = 'no';
            $page->save();
            return redirect('admin/generalservices');
        
    }
    public function update(Request $request){
        
       
            $Generalservices= new Generalservices();
            $Generalservices_row=$Generalservices::find($request->id);

            $Generalservices_row->text= $request->text;
          //  $Generalservices_row->locked= $request->locked;
            //$page->text = $data->text;
            //$page->locked = $data->locked;
            $Generalservices_row->update();
            
            return redirect('admin/generalservices/');
        
    }
    
}