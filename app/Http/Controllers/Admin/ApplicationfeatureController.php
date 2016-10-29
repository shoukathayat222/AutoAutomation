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
use App\Model\Applicationfeature;
//use Validator;
use Faker\Provider\Image;

class ApplicationfeatureController extends \App\Http\Controllers\Controller
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
        $Applicationfeature= new Applicationfeature();// \App\Model\Applicationfeature();
        $data=$Applicationfeature::all();
        return view('admin.applicationfeaturelisting',array('data'=>$data));
        //return view('admin.Applicationfeature');
        
    }
    public function edit($id){
        //echo $id;die;
        $page= new Applicationfeature();
        $data=$page::find($id);
//        echo "<pre>";
//        print_r($data);die;
        //$data_image = Image::make('assets/service_images/'.$data->image)->encode('data-url');
        //var_dump($data_image);die;
        return view('admin.editapplicationfeature',array('data'=>$data));
    }
    public function save(Request $request){
       
            $page= new Applicationfeature();
            $page->text = $request->text;
            //$page->locked = 'no';
            $page->save();
            return redirect('admin/applicationfeature');
        
    }
    public function update(Request $request){
        
       
            $Applicationfeature= new Applicationfeature();
            $Applicationfeature_row=$Applicationfeature::find($request->id);

            $Applicationfeature_row->text= $request->text;
          //  $Applicationfeature_row->locked= $request->locked;
            //$page->text = $data->text;
            //$page->locked = $data->locked;
            $Applicationfeature_row->update();
            
            return redirect('admin/applicationfeature/');
        
    }
    
}