<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Appointement;
class SchedulerController extends Controller
{

    public function call_scheduler(){
        return redirect('/call-scheduler');
    }
    

    public function get_date(Request $request)
    {
        $appointements = DB::table('appointements')->get();
        return response()->json(['appointements' => $appointements]);

    }

}
