<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Question;
use App\Rrenovation;

use Illuminate\Http\Request;

class RenovationController extends Controller
{
    public function getrenovation()
    {     
        $ppss = DB::table('rrenovations')
                    ->select('id','renoname')
                    ->where('renotype','PPS')
                    ->get();
        $pcs = DB::table('rrenovations')
                    ->select('id','renoname')
                    ->where('renotype','PC')
                    ->get();
        
        return view('try',compact(['ppss','pcs']));
        
    }
    
  
}
