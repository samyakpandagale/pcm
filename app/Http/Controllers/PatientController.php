<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all()->sortBy('id');
       // return ($patients);
        return view('pages.patientview', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addpatient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $patient = new Patient;
        $patient->patientname = $request->input('patientname');
        $patient->number = $request->input('number');
        $patient->gender = $request->input('gender');
        $patient->dateofbirth = $request->input('dateofbirth');
        $patient->address1 = $request->input('address1');
        $patient->address2 = $request->input('address2');
        $patient->addmissiondate = $request->input('addmissiondate');
        $patient->adddmissiontime = $request->input('addmissiontime');
        $patient->case = $request->input('case');
        $patient->modality = $request->input('modality');       
        $patient->save();
       
        return redirect()->route('patient.create')->with('success', 'Patient Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('pages.reportview',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('pages.editpatient',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $patient->update($request->all());
    
        return redirect()->route('patient.index')
                        ->with('success','Patient details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patient.index')->with('success','Patient Data Deleted Successfully.');
    }
}
