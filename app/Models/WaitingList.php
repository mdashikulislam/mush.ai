<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WaitingList extends Model
{
    protected $table = 'waiting_list';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'terms_accepted',
    ];

    protected $casts = [
        'terms_accepted' => 'boolean',
    ];
}
