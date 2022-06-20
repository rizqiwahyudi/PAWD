<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first',
        'last',
        'phone',
        'mobile',
        'fax',
        'email',
        'web'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
