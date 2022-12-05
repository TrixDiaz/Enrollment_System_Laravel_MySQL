<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
     protected $table = 'students';
     protected $primaryKey = 'id';
    protected $fillable = [
        'studentID',
        'firstName',
        'lastName',
        'middleName',
        'gender',
        'dateOfBirth',
        'address',
        'track',
        'strandID',
        'sectionID',
        'schoolLastAttended',
        'email',
        'password',
];
    use HasFactory;
}
