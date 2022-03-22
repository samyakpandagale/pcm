@extends('home')


@section('page')

<h2>Add Reminder</h2>
<hr class="fm">
<div class="container">
       <table class="table form-table">
          <tbody>
             <tr>
                <td colspan="1">
                   <form action="{{ route('reminder.store') }}" method="post" class="well form-horizontal addpatient">
                      @csrf
                      <fieldset>                   
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="g1" for="reminderdate">Date</label>
                                    <input class="g3" type="date" id="reminderdate" name="reminderdate">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Reason</label>
                                    <input id="reason" name="reason" placeholder="Reason" class="form-control" required="true" value="" type="text">
                                </div>
                            </div>
                         </div>
                </td>
                <td colspan="1">
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label for="remindertime">Time</label>
                                    <input type="time" id="remindertime" name="remindertime">
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
      <h4> {{ $message }}</h4>
    </div>
@endif
@endsection