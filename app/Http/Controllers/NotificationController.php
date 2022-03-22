<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendSmsNotificaition($appointment)
    {
        $basic  = new \Vonage\Client\Credentials\Basic('163dd280', '7Km4AJvPuG8xudIl');
        $client = new \Vonage\Client($basic);
 
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS($appointment->number,'918976631332','Dear '.$appointment->patientname.' You have an appointment on '.date_format(date_create($appointment->appointmentdate),'F j, Y').' ,'.date_format(date_create($appointment->appointmenttime),'h:i A').' Regards, PCM Clinic.')
        );
        
        $message = $response->current();
        
        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
    }
}
