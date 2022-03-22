@extends('home')


@section('page')
<h2>Edit Visit</h2>
<hr class="fm">
<div class="container">
       <table class="table form-table">
          <tbody>
             <tr>
                <td colspan="1">
                   <form action="{{ route('schedule.update',$schedule->id) }}" method="post" class="well form-horizontal">
                      @csrf
                      @method('PUT')
                      <fieldset>                      
                        <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="g1" for="scheduledate">Date</label>
                                    <input class="g3" type="date" id="scheduledate" name="scheduledate" value="{{$schedule->scheduledate}}">
                                </div>
                            </div>
                         </div>  
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Name</label>
                                    <input id="name" name="name" placeholder="Name" class="form-control" required="true" value="{{$schedule->name}}" type="text">
                                </div>
                            </div>
                         </div>    
                         </div>  
                         <div class="form-group">
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                               <label class="g1" for="visit">Visit</label>
                                    <select class="g2 form-control" id="visit" name="visit">
                                        <option value="" {{ $schedule->visit == '' ? 'selected' : '' }} >---Select Visit---</option>  
                                        <option value="Hospital" {{ $schedule->visit == 'Hospital' ? 'selected' : '' }} >Hospital</option>
                                        <option value="Home" {{ $schedule->visit == 'Home' ? 'selected' : '' }} >Home</option>
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
                                    <input class="g1" type="time" id="scheduletime" name="scheduletime" value="{{$schedule->scheduletime}}">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Address</label>
                                    <input id="address" name="address" placeholder="Address" class="form-control" required="true" value="{{$schedule->address}}" type="text">
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