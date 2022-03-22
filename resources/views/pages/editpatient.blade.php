@extends('home')


@section('page')

<h2>Edit Patient</h2>
<hr class="fm">
<div class="container">
       <table class="table form-table">
          <tbody>
             <tr>
                <td colspan="1">
                   <form action="{{ route('patient.update',$patient->id) }}" method="post" class="well form-horizontal addpatient">
                   @csrf
                   @method('PUT')
                      <fieldset>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Patient Name</label>
                                    <input id="patientname" name="patientname" placeholder="Full Name" class="form-control" required="true" value="{{$patient->patientname}}" type="text">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                               <label class="g1" for="gender">Gender</label>
                                    <select class="form-control" id="gender" name="gender">
                                        <option value="" {{ $patient->gender == '' ? 'selected' : '' }} >---Select Gender---</option>  
                                        <option value="Male" {{ $patient->gender == 'Male' ? 'selected' : '' }} >Male</option>
                                        <option value="Female" {{ $patient->gender == 'Female' ? 'selected' : '' }} >Female</option>
                                        <option value="Others" {{ $patient->gender == 'Others' ? 'selected' : '' }} >Others</option>
                                    </select>
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Address Line 1</label>
                                    <input id="address1" name="address1" placeholder="Address Line 1" class="form-control" required="true" value="{{$patient->address1}}" type="text">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label for="addmissiondate">Addmission Date</label>
                                    <input type="date" id="addmissiondate" name="addmissiondate" value="{{$patient->addmissiondate}}">
                                </div>
                            </div>
                         </div>  
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Case</label>
                                    <input id="case" name="case" placeholder="Case" class="form-control" required="true" value="{{$patient->case}}" type="text">
                                </div>
                            </div>
                         </div>                           
                      
                         </td>
                <td colspan="1">
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Mobile Number</label>
                                    <input id="number" name="number" placeholder="Mobile Number" class="form-control" required="true" value="{{$patient->number}}" type="tel">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                               <label class="g2" for="dob">Date of Birth</label>
                                <input type="date" id="dateofbirth" name="dateofbirth" value="{{$patient->dateofbirth}}">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Address Line 2</label>
                                    <input id="address2" name="address2" placeholder="Address Line 2" class="form-control" required="true" value="{{$patient->address2}}" type="text">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label for="addmissiontime">Addmission Time</label>
                                    <input type="time" id="addmissiontime" name="addmissiontime" value="{{$patient->adddmissiontime}}">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Modality</label>
                                    <input id="modality" name="modality" placeholder="Modality" class="form-control" required="true" value="{{$patient->modality}}" type="text">
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