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
use App\Model\Services;
//use Validator;
use Faker\Provider\Image;

class ServicesController extends \App\Http\Controllers\Controller
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
        $Services= new Services();// \App\Model\Services();
        $data=$Services::all();
        return view('admin.serviceslisting',array('data'=>$data));
        //return view('admin.Services');
        
    }
//    public function createpage(){
//        //print_r($_REQUEST);die;
//        return view('admin.createpage');
//    }
//    public function listing(){
//        $page= new \App\Model\Pages();
//        $data=$page::all();
//        return view('admin.listing',array('data'=>$data));
//    }
//    protected function validator(array $data)
//    {
//        
//    }

            
//    public function savepage(Request $data){
//        
////        $data->validate([
////            "title"=>'required',"text"=>'required'
////        ]);
//        //dump($data);
//        /*$array_data= $data->toArray();
//        Validator::make($array_data, [
//            'title' => 'required|max:255',
//            'text' => 'required',
//        ]);*/
//        //'email' => 'required|email|max:255|unique:users',
//        // 'password' => 'required|min:6|confirmed',
//        $messages=['text.required'=>'Page Content is required'];
//        $this->validate($data, [
//             'title' => 'required|max:255|unique:pages,title',
//            'text' => 'required',
//        ],$messages);
//        
//        $page = new \App\Model\Pages();
//        $page->title = $data->title;
//        $page->text = $data->text;
//        $page->locked = 'no';
//        //$page->created_date = time();
//        $page->save();
//        return redirect('admin/listing');
//        //return view('admin.index');
//        //print_r($data);die;
//        //return \App\Model\Pages::create(['title'=>$data['title'],'text'=>$data['text'],'locked'=>'no']);
//    }
//    public function editpage($id){
//        //echo $id;die;
//        $page= new \App\Model\Pages();
//        $data=$page::find($id);
////        echo "<pre>";
////        print_r($data);die;
//        return view('admin.editpage',array('data'=>$data));
//    }
    public function edit($id){
        //echo $id;die;
        $page= new Services();
        $data=$page::find($id);
//        echo "<pre>";
//        print_r($data);die;
        //$data_image = Image::make('assets/service_images/'.$data->image)->encode('data-url');
        //var_dump($data_image);die;
        return view('admin.editservices',array('data'=>$data));
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
            $page= new Services();
            $page->title = $request->title;
            $page->description = $request->description;
            $page->image = $fileName;
            $page->locked = 'no';
            //$page->created_date = time();
            $page->save();
            return redirect('admin/services');
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
            $Services= new Services();
            $Services_row=$Services::find($request->id);

            $Services_row->title= $request->title;
            $Services_row->description = $request->description;
            $Services_row->image=$fileName;
            //$page->text = $data->text;
            //$page->locked = $data->locked;
            $Services_row->update();
            
            return redirect('admin/services/');
        }
        else{
            $Services= new Services();
            $Services_row=$Services::find($request->id);
            //print_r($Services_row);die;
            $Services_row->title= $request->title;
            $Services_row->description = $request->description;
            $Services_row->locked= $request->locked;
            //$page->text = $data->text;
            //$page->locked = $data->locked;
            $Services_row->update();
            
            return redirect('admin/services/');
        }
    }
    
}