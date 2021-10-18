<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Mail\SmdevisMail;
use App\Mail\AdminMail;
use Illuminate\Support\Str;
use App\Mail\testMail;
use App\Client;
use App\Appointement;

class FormController extends Controller
{
    public function preserve(Request $request){

        $request->session()->put('save_url', $request->input());
        return redirect('/call_scheduler');
   
    }

    public function save_data(Request $request){
        

        $date  = $request->input("date");
        $time = $request->input("time");
        $Appointement = Appointement::create([
            "date" => $date,
            "time" => $time,
        ]);
        
        if($request->session()->Has("save_url")){

            $Client = new Client();
            $Client->name  = $request->session()->get('save_url.given_name');
            $Client->prename = $request->session()->get('save_url.family_name');
            $Client->phone = $request->session()->get('save_url.phone');
            $Client->email = $request->session()->get('save_url.email');
            $Client->categorie = $request->session()->get('save_url.categorie');
            $Client->ville = $request->session()->get('save_url.ville');
            $Client->data_1 = $request->session()->get('save_url.data_1');
            $Client->data_2 = $request->session()->get('save_url.data_2');
            $Client->data_3 = $request->session()->get('save_url.data_3');
            $Client->appointement_date = $date;
            $Client->appointement_time = $time;
            $Client->save();


            //// store Client data in an array (BIG_data) ////
            $BIG_data = $Client ;
            
            //// Converting data-type from string to arrays then ////
            ////////////
            $BIG_data["newdata1"] = array();
            $BIG_data["newdata1"]= make_string_toArray($BIG_data["data_1"],"||"); // Helper function
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



   
        
            Mail::to($Client["email"])->send(new SmdevisMail($Client));
            //// send email with BIG_data ////
            Mail::to('stratosphur4basic@gmail.com')->send(new AdminMail($BIG_data));
            
            if (Mail::failures()) {
                echo 'email adress '.$Client["email"].'is invalid';
            }
        }

        ////// redirect to sm-devis URL ///////
        return redirect("/try");
    }

}