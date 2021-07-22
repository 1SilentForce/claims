<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Repositories\ClaimsRepository;
use App\Models\ClaimsModel;
use App\Http\Requests\CreateClaimApiRequest;

class Claims extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->ClaimsRepository = app(ClaimsRepository::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(['data' => $this->ClaimsRepository->getAll()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClaimApiRequest $request)
    {
        $data = $request->input();
        $item = new ClaimsModel($data);
        $item->save();

        if($item){
            return response(["data" => "Done"]);
        } else {
            return response(["data" => "Error"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = ClaimsModel::destroy($id);

        if($result) {
            return response(["data" => "Done"]);
        } else {
            return response(["data" => "Error"]);
        }
    }
}
