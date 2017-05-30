<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SearchController extends Controller
{
    public function postSearch(Request $request) {

      $search = $request->input('search');
      if (strlen($search) !=0) {
      $countries = \App\Country::where('title', 'LIKE', '%'.$search.'%')->get();
      return response()->json($countries, 200);
    }
      //return response()->json($countries, 200);
    }
}
