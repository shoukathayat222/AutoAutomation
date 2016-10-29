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
use App\Model\Manufactures;
//use Validator;
use Faker\Provider\Image;

class ManufacturesController extends \App\Http\Controllers\Controller
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
        $Manufactures= new Manufactures();// \App\Model\Manufactures();
        $data=$Manufactures::all();
        return view('admin.manufactureslisting',array('data'=>$data));
        //return view('admin.Manufactures');
        
    }
    public function edit($id){
        //echo $id;die;
        $page= new Manufactures();
        $data=$page::find($id);
//        echo "<pre>";
//        print_r($data);die;
        //$data_image = Image::make('assets/service_images/'.$data->image)->encode('data-url');
        //var_dump($data_image);die;
        return view('admin.editmanufactures',array('data'=>$data));
    }
    public function save(Request $request){
        if ($request->hasFile('pic')) {
            //echo "pic found";die;
            $destinationPath='assets/service_images/';
            //$file = $request->file('pic');
            //print_r($file);die;
            $fileName=time().'.'.$request->file('pic')->getClientOriginalExtension();
            //echo $fileName;die;
            $request->file('pic')->move($destinationPath, $fileName);
            //echo "done";die;
            $page= new Manufactures();
            $page->title = $request->title;
            $page->image = $fileName;
            $page->locked = 'no';
            //$page->created_date = time();
            $page->save();
            return redirect('admin/manufactures');
        }
        else{
            //echo "not found";die;
        }
    }
    public function update(Request $request){
        
        if ($request->hasFile('pic')) {
            //echo "pic found";die;
            $destinationPath='assets/service_images/';
            //$file = $request->file('pic');
            //print_r($file);die;
            $fileName=time().'.'.$request->file('pic')->getClientOriginalExtension();
            //echo $fileName;die;
            $request->file('pic')->move($destinationPath, $fileName);
            $Manufactures= new Manufactures();
            $Manufactures_row=$Manufactures::find($request->id);

            $Manufactures_row->title= $request->title;
            $Manufactures_row->image=$fileName;
            //$page->text = $data->text;
            //$page->locked = $data->locked;
            $Manufactures_row->update();
            
            return redirect('admin/manufactures/');
        }
        else{
            $Manufactures= new Manufactures();
            $Manufactures_row=$Manufactures::find($request->id);

            $Manufactures_row->title= $request->title;
            $Manufactures_row->locked= $request->locked;
            //$page->text = $data->text;
            //$page->locked = $data->locked;
            $Manufactures_row->update();
            
            return redirect('admin/manufactures/');
        }
    }
    
}