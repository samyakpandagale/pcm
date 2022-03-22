<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable =[
        'patientname',
        'number',
        'gender',
        'dateofbirth',
        'address1',
        'address2',
        'addmissiondate',
        'adddmissiontime',
        'case',
        'modality'
    ];
}
