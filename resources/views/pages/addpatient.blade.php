@extends('home')


@section('page')

<h2>Add Patient</h2>
<hr class="fm">
<div class="container">
       <table class="table form-table">
          <tbody>
             <tr>
                <td colspan="1">
                   <form action="{{ route('patient.store') }}" method="post" class="well form-horizontal addpatient">
                   @csrf
                      <fieldset>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Patient Name</label>
                                    <input id="patientname" name="patientname" placeholder="Full Name" class="form-control" required="true" value="" type="text">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                               <label class="g1" for="gender">Gender</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="">---Select Gender---</option>  
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Address Line 1</label>
                                    <input id="address1" name="address1" placeholder="Address Line 1" class="form-control" required="true" value="" type="text">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label for="addmissiondate">Addmission Date</label>
                                    <input type="date" id="addmissiondate" name="addmissiondate">
                                </div>
                            </div>
                         </div>  
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Case</label>
                                    <input id="case" name="case" placeholder="Case" class="form-control" required="true" value="" type="text">
                                </div>
                            </div>
                         </div>                           
                      
                         </td>
                <td colspan="1">
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Mobile Number</label>
                                    <input id="number" name="number" placeholder="Mobile Number" class="form-control" required="true" value="" type="tel">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                               <label class="g2" for="dob">Date of Birth</label>
                                <input type="date" id="dateofbirth" name="dateofbirth">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Address Line 2</label>
                                    <input id="address2" name="address2" placeholder="Address Line 2" class="form-control" required="true" value="" type="text">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label for="addmissiontime">Addmission Time</label>
                                    <input type="time" id="addmissiontime" name="addmissiontime">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Modality</label>
                                    <input id="modality" name="modality" placeholder="Modality" class="form-control" required="true" value="" type="text">
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
                                    <button type="submit" class="btn btn-dark">Submit</button>
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
    @if ($message = Session::get("success"))
    <div class="alert alert-dark success_message" id="success_message">
      <h3> {{ $message }}</h3>
    </div>
@endif
@endsection