@extends('home')


@section('page')
<h2>Edit Payment</h2>
<hr class="fm">
<div class="container">
       <table class="table form-table">
          <tbody>
             <tr>
                <td colspan="1">
                   <form action="{{ route('payment.update',$payment->id) }}" method="post" class="well form-horizontal addpatient">
                      @csrf
                      @method('PUT')
                      <fieldset>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Patient Name</label>
                                    <input id="patientname" name="patientname" placeholder="Patient Name" class="form-control" required="true" value="{{$payment->patientname}}" type="text">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="g1" for="paymentdate">Date</label>
                                    <input class="g3" type="date" id="paymentdate" name="paymentdate" value="{{$payment->paymentdate}}">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Amount</label>
                                    <input id="amount" name="amount" placeholder="Amount" class="form-control" required="true" value="{{$payment->amount}}" type="number">
                                </div>
                            </div>
                         </div>
                      
                </td>
                <td colspan="1">
                  
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="col-md-4 control-label">Mobile Number</label>
                                    <input id="number" name="number" placeholder="Mobile Number" class="form-control" required="true" value="{{$payment->number}}" type="tel">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">                            
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                                    <label class="g1" for="paymenttime">Time</label>
                                    <input class="g1" type="time" id="paymenttime" name="paymenttime" value="{{$payment->paymenttime}}">
                                </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <div class="col-md-12 inputGroupContainer">
                               <div class="input-group">
                               <label class="g1" for="mode">Mode</label>
                                    <select class="g4 form-control" id="mode" name="mode">
                                        <option value="" {{ $payment->mode == '' ? 'selected' : '' }}>---Select Payment Mode---</option>  
                                        <option value="Cash" {{ $payment->mode == 'Cash' ? 'selected' : '' }}>Cash</option>
                                        <option value="Credit/Debit Card" {{ $payment->mode == 'Credit/Debit Card' ? 'selected' : '' }}>Credit/Debit Card</option>
                                        <option value="UPI" {{ $payment->mode == 'Male' ? 'UPI' : '' }}>UPI</option>
                                        <option value="Wallet" {{ $payment->mode == 'Male' ? 'Wallet' : '' }}>Wallet</option>
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