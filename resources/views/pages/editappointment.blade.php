@extends('home')


@section('page')
<h2>Edit Appointment</h2>
<hr class="fm">
<div class="container">
       <table class="table form-table">
          <tbody>
             <tr>
                <td colspan="1">
                   <form action="{{ route('appointment.update',$appointment->id) }}" method="post" class="well form-horizontal">
                      @csrf
                      @method('PUT')
                      <fieldset>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Patient Name</label>
                                    <input id="patientname" name="patientname" placeholder="Full Name" class="form-control" required="true" value="{{$appointment->patientname}}" type="text">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                               <label class="g3" for="gender">Gender</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="" {{ $appointment->gender == '' ? 'selected' : '' }}>---Select Gender---</option>  
                                        <option value="Male" {{ $appointment->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female" {{ $appointment->gender == 'Female' ? 'selected' : '' }}>Female</option>
                                        <option value="Others" {{ $appointment->gender == 'Others' ? 'selected' : '' }}>Others</option>
                                    </select>
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="g1" for="appointmentdate">Date</label>
                                    <input class="g3" type="date" id="appointmentdate" name="appointmentdate" value="{{$appointment->appointmentdate}}" >
                                </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                               <label class="g1" for="type">Type</label>
                                    <select class="g4 form-control" id="type" name="type">
                                        <option value="" {{ $appointment->type == '' ? 'selected' : '' }}>--Select Appointment Type--</option>  
                                        <option value="New Appointment" {{ $appointment->type == 'New Appointment' ? 'selected' : '' }}>New Appointment</option>
                                        <option value="Daily Appointment" {{ $appointment->type == 'Daily Appointment' ? 'selected' : '' }}>Daily Appointment</option>
                                    </select>
                                </div>
                            </div>
                         </div>
                </td>
                <td colspan="1">
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Mobile Number</label>
                                    <input id="number" name="number" placeholder="Mobile Number" class="form-control" required="true" value="{{$appointment->number}}" type="tel">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                               <label class="g3" for="dateofbirth">Date of Birth</label>
                                <input class="g5" type="date" id="dateofbirth" name="dateofbirth" value="{{$appointment->dateofbirth}}">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="g1" for="appointmenttime">Time</label>
                                    <input class="g1" type="time" id="appointmenttime" name="appointmenttime" value="{{$appointment->appointmenttime}}">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Case</label>
                                    <input id="case" name="case" placeholder="Case" class="form-control" required="true" value="{{$appointment->case}}" type="text">
                                </div>
                            </div>
                         </div>
                </td>
             </tr>
             <tr>
             <td colspan="1">
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <button type="submit" class="btn btn-dark">Update</button>
                                </div>
                            </div>
                         </div>                             
                      </fieldset>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>
    </div>
@endsection