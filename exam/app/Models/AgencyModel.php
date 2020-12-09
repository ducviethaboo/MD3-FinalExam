<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencyModel extends Model
{
    protected $table = 'agencies';
    use HasFactory;
    protected $fillable = [
        'agencyName',
        'agencyPhone',
        'agencyEmail',
        'agencyManager',
        'agencyAddress',
        'status'
    ];
}
