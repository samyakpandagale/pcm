@extends('home')


@section('page')

<h2 class="mb-5">Payment</h2>

<div class="input-group" id="search">
    <div class="form-outline">
      <input type="search" id="myInput" class="form-control" onkeyup="myFunction()" class="form-control" placeholder="Search"/>
    </div>
    <button type="button" class="btn btn-dark">
      <i class="fas fa-search"></i>
    </button>
  </div>  
      <div class="table-responsive">
      <div class="scrollbar" id="style-1">
			  <div class="force-overflow">
        <table class="table custom-table" id="myTable">
          <thead>
            <tr>              
              <th scope="col">Patient Details</th>
              <th scope="col">Payment Details</th>
              <th scope="col">Amount</th>
              <th scope="col">Action</th>              
            </tr>
          </thead>
          @foreach ($payments as $payment)
          <tr scope="row">
                      <td>{{$payment->patientname}}
                        <small class="d-block">
                         P0{{$payment->id}}</small>
                      </td>
                      <td>
                        <?php
                          echo date_format(date_create($payment->paymentdate),'F j, Y')
                        ?>
                        <small class="d-block">
                          <?php
                            echo date_format(date_create($payment->paymenttime),'h:i A')
                            ?>
                        </small>
                      </td>
                      <td><i class="fas fa-rupee-sign"></i>{{$payment->amount}}
                         <small class="d-block">{{$payment->mode}}</small>
                      </td> 
                      <td>
                      <ul class="list-inline m-0">
                      <li class="list-inline-item">
                            <a class="btn  btn-sm rounded-0" href="{{ route('payment.edit',$payment->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </li>
                        <li class="list-inline-item">
                        <form action="{{ route('payment.destroy', $payment->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn  btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </form>
                        </li>
                                            </ul>
                      </td>         
            </tr>
            @endforeach
        </table>
</div>
</div>
</div>
@if ($message = Session::get("success"))
    <div class="alert alert-dark success_message" id="success_message">
      <h4> {{ $message }}</h4>
    </div>
@endif

@endsection