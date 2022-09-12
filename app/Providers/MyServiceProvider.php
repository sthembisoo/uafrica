<?php

namespace App\Providers;


use Revolution\Google\Sheets\Facades\Sheets;

class MyServiceProvider
{
    /**
     * Register any application services.
     *
     *
     */
    public static function getStockData()
    {
        return Sheets::spreadsheet('11Prx4AB7_krtTwIhrNSiq_ZQeOLCwWwJm-SeE2WaUw8')->sheetById('0')->all();
    }


}
