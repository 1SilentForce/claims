<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\CreateUserApiRequest;
use Illuminate\Http\Request;
use App\Models\User;

class Users extends BaseController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserApiRequest $request)
    {
        $data = $request->input();
        $item = new User($data);
        $item->save();

        if($item){
            return response(["data" => "Done"]);
        } else {
            return response(["data" => "Error"]);
        }

    }
}
