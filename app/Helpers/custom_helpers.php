<?php

use Illuminate\Support\Carbon;


    function printData($data)
    {
        echo '<pre>';
        print_r($data);
        exit;
    }

    function getCurrentDateTime()
    {
        return now()->format('Y-m-d H:i:s');
    }

