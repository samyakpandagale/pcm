@extends('home')


@section('page')
  <h2 class="mb-5">Visit</h2>
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
              <th scope="col">Date</th>
              <th scope="col">Time</th>
              <th scope="col">Visit</th>
              <th scope="col">Address</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          @foreach ($schedules as $schedule)
          <tr scope="row">
            <td>
              <?php
                echo date_format(date_create($schedule->scheduledate),'F j, Y')
              ?>
            </td>
            <td>
              <?php
              echo date_format(date_create($schedule->scheduletime),'h:i A')
              ?>
            <td>{{$schedule->visit}}</td> 
            <td>{{$schedule->name}}
              <small class="d-block">{{$schedule->address}}</small>
            </td>
            <td>
                      <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <a class="btn  btn-sm rounded-0" href="{{ route('schedule.edit',$schedule->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                                </li>
                                                <li class="list-inline-item">
                                                <form action="{{ route('schedule.destroy', $schedule->id) }}" method="post">
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