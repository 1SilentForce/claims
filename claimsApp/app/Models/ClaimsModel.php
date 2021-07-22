<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClaimsModel extends Model
{
    use HasFactory;
    public $table = "claims";

    protected $fillable = [
        'user_id',
        'claim_text',
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }

}
