<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setup_Details extends Model
{
    use HasFactory;
    protected $table = 'setup_details';

    protected $fillable = [
        'bank_name',
        'state',
        'country',

    ];

}
