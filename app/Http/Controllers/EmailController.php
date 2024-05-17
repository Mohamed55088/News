<?php

namespace App\Http\Controllers;

use App\Traits\EmailTrait;
use Illuminate\Http\Request;


class EmailController extends Controller
{
    use EmailTrait;
    public function sendEmail(Request $request)
    {
        $this->sendEmail($request);
    }

}
