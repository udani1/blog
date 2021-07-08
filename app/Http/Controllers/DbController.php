<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog ;
use DataTables ;

class DbController extends Controller
{
    public function getdata (){

        //return view ('datatable.index') ;

        $ajaxdata = Blog::all() ; 
        return Datatables::of ($ajaxdata)
        ->make(true) ;
     
        }

    public function see (){
        return view ('datatable.index') ;
    } 

}
