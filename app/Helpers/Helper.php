<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;


function t($data)
{
    if (!Lang::hasForLocale('trans.' . $data, App::getLocale())) {
        return $data;
    }
    return __('trans.' . $data);
}