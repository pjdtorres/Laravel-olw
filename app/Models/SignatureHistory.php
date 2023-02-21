<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignatureHistory extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'signature_id',
        'last_updated_at',
        'last_plan_at',
        'last_status'
    ];

    protected $casts = [
        'last_status'  => SignatureStatus::class
    ];
}
