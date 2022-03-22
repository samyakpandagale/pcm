<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::all()->sortBy(['appointmentdate', 'appointmenttime']);
        return view('pages.appointmentview', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addappointment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment = new Appointment;
        $appointment->patientname = $request->input('patientname');
        $appointment->number = $request->input('number');
        $appointment->gender = $request->input('gender');
        $appointment->dateofbirth = $request->input('dateofbirth');
        $appointment->appointmentdate = $request->input('appointmentdate');
        $appointment->appointmenttime = $request->input('appointmenttime');
        $appointment->type = $request->input('type');
        $appointment->case = $request->input('case');   
        $appointment->save();
        try {

            app(\App\Http\Controllers\NotificationController::class)->sendSmsNotificaition($appointment);
          
          } catch (\Exception $e) {
          
              return redirect()->route('appointment.create')->with('success', 'Appointment Added Successfully with Non White Listed Number');;
          }
       
        return redirect()->route('appointment.create')->with('success', 'Appointment Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        return view('pages.editappointment',compact('appointment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        $appointment->update($request->all());
    
        return redirect()->route('appointment.index')
                        ->with('success','Appointment Details Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointment.index')->with('success','Appointment Deleted Successfully.');
    }
}
