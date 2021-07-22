<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimsModel extends Model
{
    use HasFactory;
    public $table = "claims";

    public function user() {
        return $this->belongsTo(User::class);
    }

}
