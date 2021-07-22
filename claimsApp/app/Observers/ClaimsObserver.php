<?php

namespace App\Observers;

use App\Models\ClaimsModel;

class ClaimsObserver
{
    /**
     * Handle the ClaimsModel "created" event.
     *
     * @param  \App\Models\ClaimsModel  $claimsModel
     * @return void
     */
    public function created(ClaimsModel $claimsModel)
    {
        //
    }

    /**
     * Handle the ClaimsModel "updated" event.
     *
     * @param  \App\Models\ClaimsModel  $claimsModel
     * @return void
     */
    public function updated(ClaimsModel $claimsModel)
    {
        //
    }

    /**
     * Handle the ClaimsModel "deleted" event.
     *
     * @param  \App\Models\ClaimsModel  $claimsModel
     * @return void
     */
    public function deleted(ClaimsModel $claimsModel)
    {
        //
    }

    /**
     * Handle the ClaimsModel "restored" event.
     *
     * @param  \App\Models\ClaimsModel  $claimsModel
     * @return void
     */
    public function restored(ClaimsModel $claimsModel)
    {
        //
    }

    /**
     * Handle the ClaimsModel "force deleted" event.
     *
     * @param  \App\Models\ClaimsModel  $claimsModel
     * @return void
     */
    public function forceDeleted(ClaimsModel $claimsModel)
    {
        //
    }
}
