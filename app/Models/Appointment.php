<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\NotificationController;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable =[
        'patientname',
        'number',
        'gender',
        'dateofbirth',
        'appointmentdate',
        'appointmenttime',
        'type',
        'case'
    ];

   /* public static function boot() {
        parent::boot();
        static::created(function($item) {           
            
                Write Logic Here
             
  
            NotificationController::class, 'sendSmsNotificaition'
        });
  
    }*/
}
