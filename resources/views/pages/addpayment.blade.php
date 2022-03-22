@extends('home')


@section('page')
<h2>Add Payment</h2>
<hr class="fm">
<div class="container">
       <table class="table form-table">
          <tbody>
             <tr>
                <td colspan="1">
                   <form action="{{ route('payment.store') }}" method="post" class="well form-horizontal addpatient">
                      @csrf
                      <fieldset>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Patient Name</label>
                                    <input id="patientname" name="patientname" placeholder="Patient Name" class="form-control" required="true" value="" type="text">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="g1" for="paymentdate">Date</label>
                                    <input class="g3" type="date" id="paymentdate" name="paymentdate">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Amount</label>
                                    <input id="amount" name="amount" placeholder="Amount" class="form-control" required="true" value="" type="number">
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
                                    <label class="g1" for="paymenttime">Time</label>
                                    <input class="g1" type="time" id="paymenttime" name="paymenttime">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                               <label class="g1" for="mode">Mode</label>
                                    <select class="g4 form-control" id="mode" name="mode">
                                        <option value="">---Select Payment Mode---</option>  
                                        <option value="Cash">Cash</option>
                                        <option value="Credit/Debit Card">Credit/Debit Card</option>
                                        <option value="UPI">UPI</option>
                                        <option value="Wallet">Wallet</option>
                                    </select>
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