@extends('home')


@section('page')
<h2>Add Visit</h2>
<hr class="fm">
<div class="container">
       <table class="table form-table">
          <tbody>
             <tr>
                <td colspan="1">
                   <form action="{{ route('schedule.store') }}" method="post" class="well form-horizontal">
                      @csrf
                      <fieldset>                      
                        <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="g1" for="scheduledate">Date</label>
                                    <input class="g3" type="date" id="scheduledate" name="scheduledate">
                                </div>
                            </div>
                         </div>  
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Name</label>
                                    <input id="name" name="name" placeholder="Name" class="form-control" required="true" value="" type="text">
                                </div>
                            </div>
                         </div>    
                         </div>  
                         <div class="form-group">
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                               <label class="g1" for="visit">Visit</label>
                                    <select class="g2 form-control" id="visit" name="visit">
                                        <option value="">---Select Visit---</option>  
                                        <option value="Hospital">Hospital</option>
                                        <option value="Home">Home</option>
                                    </select>
                                </div>
                            </div>
                         </div>                        
                      
                </td>
                <td colspan="1">
                  
                        <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="g1" for="scheduletime">Time</label>
                                    <input class="g1" type="time" id="scheduletime" name="scheduletime">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Address</label>
                                    <input id="address" name="address" placeholder="Address" class="form-control" required="true" value="" type="text">
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
       @if ($message = Session::get("success"))
    <div class="alert alert-dark success_message" id="success_message">
      <h4> {{ $message }}</h4>
    </div>
@endif
    </div>
@endsection