<?php

namespace App\Http\Controllers;

use App\Providers\MyServiceProvider;
use Illuminate\Routing\Controller as BaseController;

class TickerController extends BaseController
{

public function index()
{
   //service call to get the spreadsheet data
    $values =  MyServiceProvider::getStockData();
     return view("index", ["stock"=>$values]);

}

public function refresh()
{
   //get updated spreadsheet data
   return  $this->index();
}

}
