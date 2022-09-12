<?php

namespace App\Providers;


use Revolution\Google\Sheets\Facades\Sheets;

class MyServiceProvider
{
    //service to get the spreadsheet data
    //initially stored the spreadsheet id's in the config
    public static function getStockData()
    {
        return Sheets::spreadsheet('11Prx4AB7_krtTwIhrNSiq_ZQeOLCwWwJm-SeE2WaUw8')->sheetById('0')->all();
    }


}
