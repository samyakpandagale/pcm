@extends('home')


@section('page')

<h2 class="mb-5">Reminder</h2>

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
              <th scope="col">Reminder Details</th>
              <th scope="col">Reason</th>
              <th scope="col">Action</th>              
            </tr>
          </thead>
          @foreach ($reminders as $reminder)
            <tr scope="row">
            <td>
                        <?php
                          echo date_format(date_create($reminder->reminderdate),'F j, Y')
                        ?>
                        <small class="d-block">
                          <?php
                            echo date_format(date_create($reminder->remindertime),'h:i A')
                            ?>
                        </small>
                      </td>
                      <td>{{$reminder->reason}}
                      </td> 
                      <td>
                      <ul class="list-inline m-0">
                      <li class="list-inline-item">
                            <a class="btn  btn-sm rounded-0" href="{{ route('reminder.edit',$reminder->id) }}" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </li>
                        <li class="list-inline-item">
                        <form action="{{ route('reminder.destroy', $reminder->id) }}" method="post">
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