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
use App\Model\Preferences;
//use Validator;

class PreferencesController extends \App\Http\Controllers\Controller
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
        $Preferences= new Preferences();// \App\Model\Preferences();
        $data=$Preferences::all();
        //var_dump($data);die;
        return view('admin.preferences',array('data'=>$data));
        //return view('admin.preferences');
        
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
    public function updatepreferences(Request $data){
        //print_r($data->all_info);die;
        $Preferences= new Preferences();
        foreach($data->all_info as $key=>$value){
           // echo $key." ".$value."<br>";
            //$Preferences=$Preferences::find();
            if($key=='logo')
                continue;
          
            
            $Preferences_row = Preferences::where('name', '=', $key)->first();
            //print_r($Preferences_row);die;
            $Preferences_row->value=$value;
            $Preferences_row->save();
//            ->where('type', '=', 1)
//            ->where('is_active', '=', 1)
//            ->first(['type', 'c_id']);

//            if( $user->id == 1 )
//            {
//               $user->name = 'john';
//               $user->lastname = 'doe';
//               $user->save();
//            }
            
        }
          //var_dump($data);die;
            if ($data->hasFile('logo')) {
                //echo "pic found";die;
                $destinationPath='assets/service_images/';
                //$file = $request->file('pic');
                //print_r($file);die;
                $fileName=time().'.'.$data->file('logo')->getClientOriginalExtension();
                //echo $fileName;die;
                $data->file('logo')->move($destinationPath, $fileName);
                //echo "done";die;
                $key='logo';
                //echo "here";die;
                $Preferences_row = Preferences::where('name', '=', 'logo')->first();
                //print_r($Preferences_row);die;
                $Preferences_row->value=$fileName;
                $Preferences_row->save();
            }
            
            
            if ($data->hasFile('gen_services_logo')) {
                //echo "pic found";die;
                $destinationPath='assets/service_images/';
                //$file = $request->file('pic');
                //print_r($file);die;
                $fileName=time().'.'.$data->file('gen_services_logo')->getClientOriginalExtension();
                //echo $fileName;die;
                $data->file('gen_services_logo')->move($destinationPath, $fileName);
                //echo "done";die;
                $key='gen_services_logo';
                //echo "here";die;
                $Preferences_row = Preferences::where('name', '=', 'gen_services_logo')->first();
                //print_r($Preferences_row);die;
                $Preferences_row->value=$fileName;
                $Preferences_row->save();
            }
            
            
            
            if ($data->hasFile('app_feature_logo')) {
                //echo "pic found";die;
                $destinationPath='assets/service_images/';
                //$file = $request->file('pic');
                //print_r($file);die;
                $fileName=time().'.'.$data->file('app_feature_logo')->getClientOriginalExtension();
                //echo $fileName;die;
                $data->file('app_feature_logo')->move($destinationPath, $fileName);
                //echo "done";die;
                $key='app_feature_logo';
                //echo "here";die;
                $Preferences_row = Preferences::where('name', '=', 'app_feature_logo')->first();
                //print_r($Preferences_row);die;
                $Preferences_row->value=$fileName;
                $Preferences_row->save();
            }
            
            
            if ($data->hasFile('track_report_logo')) {
                //echo "pic found";die;
                $destinationPath='assets/service_images/';
                //$file = $request->file('pic');
                //print_r($file);die;
                $fileName=time().'.'.$data->file('track_report_logo')->getClientOriginalExtension();
                //echo $fileName;die;
                $data->file('track_report_logo')->move($destinationPath, $fileName);
                //echo "done";die;
                $key='track_report_logo';
                //echo "here";die;
                $Preferences_row = Preferences::where('name', '=', 'track_report_logo')->first();
                //print_r($Preferences_row);die;
                $Preferences_row->value=$fileName;
                $Preferences_row->save();
            }
        //die;
      //echo $data->locked;die;   
//        echo csrf_field()."<br>";
//        echo $data->_token;die;
//        $messages=['text.required'=>'Page Content is required'];
//         $this->validate($data, [
//             'title' => 'required|max:255|unique:pages,title,'.$data->id,
//             'text' => 'required',
//        ],$messages);
//       $Preferences= new \App\Model\Preferences();
//        $Preferences=$page::find($data->id);
//     
//        $Preferences->value= $data->title;
//        //$page->text = $data->text;
//        //$page->locked = $data->locked;
//        $Preferences->update();
//        echo "<pre>";
//        print_r($data);die;
//        
        return redirect('admin/preferences/');
    }
}