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
//use Validator;

class IndexController extends \App\Http\Controllers\Controller
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
        return view('admin.index');
    }
//    public function createpage(){
//        //print_r($_REQUEST);die;
//        return view('admin.createpage');
//    }
    public function listing(){
        $page= new \App\Model\Pages();
        $data=$page::all();
        return view('admin.listing',array('data'=>$data));
    }
//    protected function validator(array $data)
//    {
//        
//    }

            
    public function savepage(Request $data){
        
//        $data->validate([
//            "title"=>'required',"text"=>'required'
//        ]);
        //dump($data);
        /*$array_data= $data->toArray();
        Validator::make($array_data, [
            'title' => 'required|max:255',
            'text' => 'required',
        ]);*/
        //'email' => 'required|email|max:255|unique:users',
        // 'password' => 'required|min:6|confirmed',
        $messages=['text.required'=>'Page Content is required'];
        $this->validate($data, [
             'title' => 'required|max:255|unique:pages,title',
            'text' => 'required',
        ],$messages);
        
        $page = new \App\Model\Pages();
        $page->title = $data->title;
        $page->text = $data->text;
        $page->locked = 'no';
        //$page->created_date = time();
        $page->save();
        return redirect('admin/listing');
        //return view('admin.index');
        //print_r($data);die;
        //return \App\Model\Pages::create(['title'=>$data['title'],'text'=>$data['text'],'locked'=>'no']);
    }
    public function editpage($id){
        //echo $id;die;
        $page= new \App\Model\Pages();
        $data=$page::find($id);
//        echo "<pre>";
//        print_r($data);die;
        return view('admin.editpage',array('data'=>$data));
    }
    public function updatepage(Request $data){
      //echo $data->locked;die;   
//        echo csrf_field()."<br>";
//        echo $data->_token;die;
        $messages=['text.required'=>'Page Content is required'];
         $this->validate($data, [
             'title' => 'required|max:255|unique:pages,title,'.$data->id,
             'text' => 'required',
        ],$messages);
        $page= new \App\Model\Pages();
        $page=$page::find($data->id);
        $page->title = $data->title;
        $page->text = $data->text;
        $page->locked = $data->locked;
        $page->update();
        return redirect('admin/listing');
    }
}