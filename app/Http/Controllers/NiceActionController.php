<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;

class NiceActionController extends Controller
{
  public function getNiceAction($action, $name = null)
  {
    return view('actions.' . $action, ['name'=> $name]);
  }

  public function postNiceAction(Request $request)
  {
//    $this->validate($request, [
//        'action'=>'required',
//        'name'=>'required'
//
//    ]);

     Validator::make(
        array('action' => 'required'),
        array('name' => 'required|alpha')
    );

    return view('actions.nice', ['action'=> $request['action'], 'name'=>   $this->transformName($request['name']) ]);

  }



  private function transformName($name)
  {
    $prefix = 'KING ';
    return $prefix . strtoupper($name);
  }

}
