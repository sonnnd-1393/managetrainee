<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $tables = 'batches';

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];
}
