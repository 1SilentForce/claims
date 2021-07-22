<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as GuestBaseController;

abstract class BaseController extends GuestBaseController
{
    public function __construct()
    {
        parent::__construct();
    }
}
