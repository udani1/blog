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
        ->addColumn('action', function ($ajaxdata) { 
            $buttons ='<a class="btn btn-info btn-sm" href="' .url('/ajax/'.$ajaxdata->id.'/').'"> View </a>
            <a class="far fa-edit btn btn-sm btn-success btn-rounded m-b-1 m-l-5" href="'.url('/ajax/'.$ajaxdata->id.'/edit').'"> Edit</a>
            <input type="hidden" id="hiddenID" value="'.$ajaxdata->id.'">

            <button data-token="'.csrf_token() .'" class="far fa-trash-alt btn btn-sm btn-danger btn-rounded m-b-1 m-l-5" id="delete"> Delete </button>

            return $buttons;

        })
        ->make(true) ;
     
        }

    public function see (){
        return view ('datatable.index') ;
    } 

}
