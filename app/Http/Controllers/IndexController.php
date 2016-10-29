<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Model\Preferences;
use App\Model\Applicationfeature;
use \App\Model\Generalservices;
use App\Model\Manufactures;
use App\Model\Pages;
use App\Model\Services;
use App\Model\Testimonial;
use Mail;
class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function feedback(Request $request){
        
        
        $preferences_obj= new Preferences();// \App\Model\Preferences();
        $data=$preferences_obj::where('name','Technical_Support')->first();
//        echo $data->value;
//        print_r($data);die;
        $name= $request->name;
        $email=$request->email;
        $comments=$request->comments;
        //die;
        $user=array();
        $user['name']=$name;
        $user['email']=$email;
        $user['comments']=nl2br($comments);
        $user['subject']='New Suggestions / Feedback from AutoAutomation';
        try{
        Mail::send('email', ['user' => $user], function ($m) use ($user) {
            $m->from($user['email'], $user['name']);//
            $m->to('rick@telcoautomation.com')->subject($user['subject']);//$data->value
            //$m->getHeaders()->addTextHeader('From', $user['email'].' <test@gmail.com>');
            $m->replyTo($user['email'], $user['name']);
        });
        }
        catch(Exception $e){
            var_dump($e);
            die;
        }
        return redirect('/');
//        $headers = 'From: '.$user['email'] . "\r\n" .
//        'Reply-To: webmaster@example.com' . "\r\n" .
//        'X-Mailer: PHP/' . phpversion();
//
//        mail("shoukathayat222@gmail.com",$user['subject'],$user['comments'],$headers);
//        echo "here";die;
//        
//         $mail = new \PHPMailer(true); // notice the \  you have to use root namespace here
//        try {
//            $mail->isSMTP(); // tell to use smtp
//            $mail->CharSet = "utf-8"; // set charset to utf8
//            $mail->SMTPAuth = true;  // use smpt auth
//            $mail->SMTPSecure = "tls"; // or ssl
//            $mail->Host = "autoautomation.com";
//            $mail->Port = 2525; // most likely something different for you. This is the mailtrap.io port i use for testing. 
//            $mail->Username = "username";
//            $mail->Password = "password";
//            $mail->setFrom("youremail@yourdomain.de", "Firstname Lastname");
//            $mail->Subject = "Test";
//            $mail->MsgHTML("This is a test");
//            $mail->addAddress("recipient@anotherdomain.de", "Recipient Name");
//            $mail->send();
//        } catch (phpmailerException $e) {
//            dd($e);
//        } catch (Exception $e) {
//            dd($e);
//        }
        //die('success');

        
    }
    public function contactus(){
        $preferences_obj= new Preferences();// \App\Model\Preferences();
        $data=$preferences_obj::all();
        $dataforView=array();
        
        foreach ($data as $row) {
            //echo $flight->name;
            $dataforView[$row->name]=$row->value;
        }
        
        $pages_obj= new Pages();
        $data = $pages_obj::all();
        $pages_info=array();
        foreach ($data as $row) {
            //echo $flight->name;
            //$info=array();
           // $info[]=$row->title;
            //$info[]=$row->image;
           //[$row->title]=$row->image;
           $pages_info[]=$row->title;
           //$service_info[]['image']=$row->image;
        }
        $dataforView['pages_info']=$pages_info;
        return view('pages',array('data'=>$dataforView));
    }
    public function privacy(){
        
        $preferences_obj= new Preferences();// \App\Model\Preferences();
        $data=$preferences_obj::all();
        $dataforView=array();
        
        foreach ($data as $row) {
            //echo $flight->name;
            $dataforView[$row->name]=$row->value;
        }
        
        $pages_obj= new Pages();
        $data = $pages_obj::all();
        $pages_info=array();
        foreach ($data as $row) {
            //echo $flight->name;
            //$info=array();
           // $info[]=$row->title;
            //$info[]=$row->image;
           //[$row->title]=$row->image;
           $pages_info[]=$row->title;
           //$service_info[]['image']=$row->image;
        }
        $dataforView['pages_info']=$pages_info;
        //return view('pages',array('data'=>$dataforView));
        
        $pages_obj= new Pages();// \App\Model\Preferences();
        $data=$pages_obj::where('id','2')->first();
        
        $dataforView['pages_data']=$data;
//        echo $data->value;
        //print_r($dataforView);die;
        return view('privacy',array('data'=>$dataforView));
    }
    public function applink(){
        if(isset($_REQUEST['userEmail'])){
           //require_once('download_email.php');
            
            $emailTemplate ='
                <p class="MsoNormal">Thank you for requesting to download our Companion Cell Phone App for your Android Cell phone or Apple IPhone by clicking appropriate link below. With this app, you will be able to book an appointment using your cell phone in just 6 taps of your finger.</p>
                <p class="MsoNormal"><span style="font-size:8.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;"><br>
                <a href="http://~CANCELURL/download.php?key=~cancel&type=android"><img src="http://~CANCELURL/images/android.jpg"></a>
                <a href="http://~CANCELURL/download.php?key=~cancel&type=ios"><img src="http://~CANCELURL/images/apple.jpg"></a>
                <div style="font-size:1.5em;font-weight:bold;">Your Dealer Code is: <b>~DEALERCODE</b></div>
                <p class="MsoNormal">(<i>NOTE: Once Installed, you will need the Dealer Code to register the app.</i>)</p>
                <br>        
                <p class="MsoNormal">We look forward to servicing your every need<br>

                Sincerely, <br>
                <br>
                ~DEALERSHIPNAME <br>
                <a href="tel:~DEALERSHIPPHONE" value="+~DEALERSHIPPHONE" target="_blank">~DEALERSHIPPHONE</a> <br>
                <br>
                </p>
                <div class="MsoNormal" align="center" style="text-align:center"><span style="font-size:8.0pt;font-family:&quot;Verdana&quot;,&quot;sans-serif&quot;">
                <hr size="2" width="100%" align="center">
                </span></div>
                ';
                      
            
            $email=$_REQUEST['userEmail'];
            $user_info=explode("@",$email);

//            $request['email']=$email;
//            $request['name']=$user_info[0];
//            $request['phone']='8316568888';
//            $request['serviceCall']=0;
//            $request['appointment']=date("Y/m/d",time());
//            $request['type']='appdownload';
//            if(isset($_COOKIE['userID'])){
//                $request['employee_id']=$_COOKIE['userID'];
//            }
            //$key=txmCreateAppointment($dealerID,'',$request);


            try {
                // The message
                $message = $emailTemplate;
                $key='123123123';

                $message = str_replace('~DEALERSHIPNAME','Harvest Valley Toyota',$message);
                $message = str_replace('~DEALERSHIPPHONE','844-656-8800',$message);
                $message = str_replace('~DEALERCODE','00000',$message);     

                $message = str_replace('~CANCELURL','txm.serviceexpress.us',$message);
                $message = str_replace('~cancel',$key,$message);
                // In case any of our lines are larger than 70 characters, we should use wordwrap()
                //$message = wordwrap($message, 70, "\r\n");

                //echo $message;die;
                // Send

                //$to      = $email;
                //$subject = "Download APP Link";
                //$headers = 'From: '.$dealerInfo->dealership_email.' \r\n Reply-To: '.$dealerInfo->dealership_email.' \r\n';
                //$headers = 'From: <appointment@serviceexpress.us>, <appointment@serviceexpress.us>';
                //$headers .= "MIME-Version: 1.0\r\n";
                //$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                //$ok=mail($to, $subject, $message, $headers);
                //mail($to,"test","hello world",$headers);
                //echo "here";die;
                $user=array();
                $user['name']='AutoAutomation';
                $user['email']=$email;
                $user['comments']=$message;
                $user['subject']='Download APP Link';
                Mail::send('email', ['user' => $user], function ($m) use ($user) {
                    $m->from('appointment@serviceexpress.us','AutoAutomation');//
                    $m->to($user['email'])->subject($user['subject']);//$data->value
                    //$m->getHeaders()->addTextHeader('From', $user['email'].' <test@gmail.com>');
                    //$m->replyTo($user['email'], $user['name']);
                });
                
              } catch (Exception $e) {
                echo $e->getMessage();
              }

        }

        return redirect('/');   
    }
    public function index()
    {
        $preferences_obj= new Preferences();// \App\Model\Preferences();
        $data=$preferences_obj::all();
        $dataforView=array();
        
        foreach ($data as $row) {
            //echo $flight->name;
            $dataforView[$row->name]=$row->value;
        }
        
        $services_obj= new Services();
        $data = $services_obj::all();
        $service_info=array();
        foreach ($data as $row) {
            //echo $flight->name;
            $info=array();
            $info[]=$row->title;
            $info[]=$row->image;
            $info[]=$row->description;
           //[$row->title]=$row->image;
           $service_info[]=$info;
           //$service_info[]['image']=$row->image;
        }
         $dataforView['services']=$service_info;
         
         $app_features= new Applicationfeature();
         $data=$app_features::all();
         
         
         $app_features_info=array();
         foreach($data as $row){
             $app_features_info[]=$row->text;
         }
         $dataforView['app_features']=$app_features_info;
         
         
         $app_Generalservices= new Generalservices();
         $data=$app_Generalservices::all();
         
         
         $app_Generalservices_info=array();
         foreach($data as $row){
             $app_Generalservices_info[]=$row->text;
         }
         //print_r($app_Generalservices_info);die;
         $dataforView['generalservices_info']=$app_Generalservices_info;
         
         
         
        $client_test_obj= new Testimonial();
        $data = $client_test_obj::all();
        $client_test_info=array();
        foreach ($data as $row) {
            //echo $flight->name;
            $info=array();
            $info[]=$row->text;
            $info[]=$row->image;
           //[$row->title]=$row->image;
           $client_test_info[]=$info;
           //$service_info[]['image']=$row->image;
        }
         $dataforView['client_test_info']=$client_test_info;
         
         
         
         
        $manufactures_obj= new Manufactures();
        $data = $manufactures_obj::all();
        $manufactures_info=array();
        foreach ($data as $row) {
            //echo $flight->name;
            $info=array();
            $info[]=$row->title;
            $info[]=$row->image;
           //[$row->title]=$row->image;
           $manufactures_info[]=$info;
           //$service_info[]['image']=$row->image;
        }
        $dataforView['manufactures_info']=$manufactures_info;

        
        
        $pages_obj= new Pages();
        $data = $pages_obj::all();
        $pages_info=array();
        foreach ($data as $row) {
            //echo $flight->name;
            //$info=array();
           // $info[]=$row->title;
            //$info[]=$row->image;
           //[$row->title]=$row->image;
           $pages_info[]=$row->title;
           //$service_info[]['image']=$row->image;
        }
        $dataforView['pages_info']=$pages_info;
        
        //echo "<pre>";
        //print_r($pages_info);die;
        
        // print_r($client_test_info);die;
         
//         echo "<pre>";
//         print_r($app_features_info);
//         die;
         //print_r($dataforView['services']);die;
        //$preferences_data='';
        //echo $dataforView['Corporate_Office_Toll_Free'];die;
//        echo "<pre>";
//            print_r($data);
//        die;
        return view('welcome',array('data'=>$dataforView));
        
    }
}
