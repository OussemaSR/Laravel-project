<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Test;
use Illuminate\Support\Facades\Mail;
// use App\Mail\SmdevisMail;
// use App\Mail\AdminMail;
use App\Mail\testMail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

// use Mail;
class TestController extends Controller
{


    public function send_mail(Request $request)
    {
        $data["email"] = "websolutionstuff@gmail.com";
        $data["title"] = "websolutionstuff.com";
        $data["body"] = "This is test mail with attachment";
        $data["files"] = "|<plans>||<uploads/oxMt8wbyf589cPqVcfyeme1RUFERLbscvex2xJUl.png>||<uploads/NnwodbiBkWmTNSsJxOtH3izpk7eLWBZoyk1vk65r.png>|";
        // $data["files"] = "<div>plans</div>";
        $fullstring = $data["files"];
        $files = array();

        while(!empty($fullstring = substr($fullstring, strpos($fullstring, ">|") + strlen(">|"))) ){
        $parsed = get_string_between($fullstring, '|<','>|');
        if (!empty($parsed)) {
            array_push($files,$parsed);
        }
        }
            
        Mail::send('emails.mail', $data, function($message)use($data, $files) {
            $message->to($data["email"])
                    ->subject($data["title"])->with($data);
 
            foreach ($files as $file){
                $message->attach(public_path('storage/'.$file));
            }            
        });
        return view('emails/mail');
    }

    function mailing()
    {

        $data["id"] = "01";
        $data["name"] = "client_name";
        $data["prename"] = "client_prename";
        $data["phone"] = "123456789";
        $data["categorie"] = "categorie";
        $data["ville"] = "ville";
        $data["data_1"] = ["Question1",
                           "Question10||answer1||answer2",];
        $data["data_2"] = ["plans||uploads/oxMt8wbyf589cPqVcfyeme1RUFERLbscvex2xJUl.png||uploads/NnwodbiBkWmTNSsJxOtH3izpk7eLWBZoyk1vk65r.png",
                           "inspire||uploads/BkvphCmYj7Jtwk6osgFoHelbl1yKTHAyUVXSg9Ts.png||uploads/NnwodbiBkWmTNSsJxOtH3izpk7eLWBZoyk1vk65r.png",
                           "actuel||uploads/QY17FKwmsd6wRFXkltRGLvAbyRfZmNLqq9ZATOTX.png||uploads/NnwodbiBkWmTNSsJxOtH3izpk7eLWBZoyk1vk65r.png"];

        $data["data_3"] = ["Question1",
                           "Question10||answer1||answer2",];
        $data["appointement_date"] = "MER.17/02/21";
        $data["appointement_time"] = "07:00";   
        $data["email"] = "Client_email@gmail.com";
        
        //// store Client data in an array (BIG_data) ////
        $BIG_data = $data ;
        
        //// reformatting data type from string to arrays then ////
        ////////////
        $BIG_data["newdata1"] = array();
        $BIG_data["newdata1"]= make_string_toArray($BIG_data["data_1"],"||");
        ////////////

        ////////////
        $BIG_data["newdata2"] = array();
        $BIG_data["newdata2"]= make_string_toArray($BIG_data["data_2"],"||"); // Helper function
        ////////////

        ////////////
        $BIG_data["newdata3"] = array();
        $BIG_data["newdata3"]= make_string_toArray($BIG_data["data_3"],"||"); // Helper function
        ////////////
        
        //// create new array-case for attachements ////
        $BIG_data["attachments"] = array();

        ////  retrieve attachement files from data_2 array ////
        $BIG_data["attachments"] = array();
        foreach($BIG_data["data_2"] as $files){
            $parsed = get_links($files,"||"); // Helper function
            $val = array_shift($parsed);
            if (!empty($parsed)) {
                $BIG_data["attachments"] = array_merge($BIG_data["attachments"],$parsed);
            }
        }
        //// remove duplicated files ////
        $BIG_data["attachments"] = array_unique($BIG_data["attachments"]);



        //// send email with BIG_data ////
        Mail::to('wd@dds.xom')->send(new testMail($BIG_data));

        return view('emails/mail');
    }


}