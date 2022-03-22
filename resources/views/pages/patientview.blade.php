@extends('home')


@section('page')
      <h2 class="mb-5">Patients</h2>
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
              <th scope="col">Admission Details</th>
              <th scope="col">Patient Profile</th>
              <th scope="col">Address</th>
              <th scope="col">Action</th>              
            </tr>
          </thead>
          @foreach ($patients as $patient)
            <tr scope="row">
                      <td> {{$patient->patientname}}
                        <small class="d-block">PAT0{{$patient->id}}</small>
                      </td>
                      <td>
                        <?php
                          echo date_format(date_create($patient->addmissiondate),'F j, Y')
                        ?>
                        <small class="d-block">
                          <?php
                            echo date_format(date_create($patient->adddmissiontime),'h:i A')
                            ?>
                        </small>
                      </td>
                      <td>{{$patient->gender}}
                         <small class="d-block">
                         <?php
                          echo date_format(date_create($patient->dateofbirth),'F j, Y')
                        ?>
                        </small>
                      </td> 
                      <td>
                        {{$patient->address1}}<small class="d-block">{{$patient->address2}}</small>
                      </td> 
                      <td>
                      <ul class="list-inline m-0">
                        <li class="list-inline-item">
                            <a class="btn  btn-sm rounded-0" href="{{ route('patient.edit',$patient->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </li>
                        <li class="list-inline-item">
                        <form action="{{ route('patient.destroy', $patient->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn  btn-sm rounded-0" type="submit" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                        </form>
                        </li>
                        </ul>
                        <a class="btn  btn-dark rounded-0" href="{{ route('patient.show',$patient->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="View Report">View Report</a>
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