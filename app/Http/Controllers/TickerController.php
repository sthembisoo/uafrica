<?php

namespace App\Http\Controllers;

use App\Providers\MyServiceProvider;
use Illuminate\Routing\Controller as BaseController;

class TickerController extends BaseController
{

public function index()
{
    $values =  MyServiceProvider::getStockData();
     return view("index", ["stock"=>$values]);

}

public function refresh()
{
   return  $this->index();
}

}
