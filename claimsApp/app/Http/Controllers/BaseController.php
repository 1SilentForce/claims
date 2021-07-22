<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

abstract class BaseController extends JsonResource
{
    public function __construct()
    {
//        parent::construct();
    }
}
