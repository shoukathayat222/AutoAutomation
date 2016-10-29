<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Preferences;
use App\Http\Requests;

class ApiController extends Controller
{
    //
    public function storedata()
    {
        // this is your NEW store method
        // put logic here to save the record to the database
         $ch = curl_init();
        //$postdata = "username=".$username."&password=".$password; 
        $url="http://toyotatxm.local/test.php";
        curl_setopt ($ch, CURLOPT_URL, $url); 
        curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
        curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
        curl_setopt ($ch, CURLOPT_TIMEOUT, 600); 
        curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1); 
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt ($ch, CURLOPT_REFERER, $url); 

        //curl_setopt ($ch, CURLOPT_POSTFIELDS, $postdata); 

        curl_setopt($ch, CURLOPT_POST, 1);
        $result = curl_exec ($ch); 
        curl_close($ch);
        print_r($result);die;

    }
}
