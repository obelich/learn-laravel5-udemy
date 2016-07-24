<?php


namespace App\Http\Controller;

class NiceActionController extends Controller
{
  public function getNiceAction($action, $name = null)
  {
    return view('actions.' . $action, ['name'=> $name]);
  }
}
