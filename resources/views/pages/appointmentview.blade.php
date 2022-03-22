@extends('home')


@section('page')
<h2 class="mb-5">Appointment</h2>
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
              <th scope="col">Appointment Details</th>
              <th scope="col">Patient Profile</th>
              <th scope="col">Reason</th>
              <th scope="col">Action</th>              
            </tr>
          </thead>
          @foreach ($appointments as $appointment)
            <tr scope="row">
                      <td>{{$appointment->patientname}}
                        <small class="d-block">APT0{{$appointment->id}}</small>
                      </td>
                      <td>
                        <?php
                          echo date_format(date_create($appointment->appointmentdate),'F j, Y')
                        ?>
                        <small class="d-block">
                          <?php
                            echo date_format(date_create($appointment->appointmenttime),'h:i A')
                          ?>
                        </small>
                      </td>
                      <td>{{$appointment->gender}}
                         <small class="d-block">
                          <?php
                            echo date_format(date_create($appointment->dateofbirth),'F j, Y')
                          ?>
                        </small>
                      </td> 
                      <td>{{$appointment->case}},
                         <small class="d-block">{{$appointment->type}}</small>
                      </td> 
                      <td>
                      <ul class="list-inline m-0">
                        <li class="list-inline-item">
                            <a class="btn  btn-sm rounded-0" href="{{ route('appointment.edit',$appointment->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </li>
                        <li class="list-inline-item">
                        <form action="{{ route('appointment.destroy', $appointment->id) }}" method="post">
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