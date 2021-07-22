<?php

namespace App\Repositories;

use App\Models\ClaimsModel as Model;
//use Your Model

/**
 * Class ClaimsRepository.
 */
class ClaimsRepository extends CoreRepository
{
    public function getModelClass()
    {
        return Model::class;
    }
    /**
     * @return string
     *  Return the model
     */
    public function getAll() {
        $fields = array("id", "user_id", "claim_text");
        return $this->startConditions()->select($fields)->get();   // maybe add ->paginate($perPage);
    }
}
