<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class search2Controller extends Controller
{
    public function index () {
        return view ('search2.index');
    }
    // searching using SELECT2.org site
    public function autocomplete (Request $request){
        $data = [];

        if ($request ->has('q')){
            $search = $request->q;
            $data = Supplier::select ("id","fname")
                    ->where('fname','LIKE',"%$search%")
                    ->get();
        }
        return response()-> json ($data);
    }

    //searching without using SELECT2.org site(using normal way)
    //for page show
    public function index_2(){
        return view('search2.autoComplete');
    }
    //for get searching data
    public function fetchdata(Request $request)
    {
        if ($request ->get('query'))
         {
          $query = $request ->get ('query');
          $data = DB::table('Supplier')
                ->where('fname','LIKE', "%{$query}%")
                ->get();
          $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
          foreach($data as $row)
          {
              $output .= '
              <li>'.$row->fname.'</li>
              ';
           }
           $output .= '</ul>';
           echo $output;
        }
    }

}