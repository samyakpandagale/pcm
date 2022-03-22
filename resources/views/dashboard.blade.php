@extends('home')


@section('dashboard')
<div class="container dashboard-cards">
<div class="card-group">
<div class="card card_d">
  <h3><span><i class="far fa-user"></i> </span>Patients</h3>
    <div class="card-body">
      <h2 class="card-title">{{$patient}}</h2>
      <p class="card-text">You have {{$patient}} active patients.</p>
    </div>
    <div class="card-footer">
      <a class="btn text-muted" href="/patient">View patients</a>
    </div>
  </div>
  <div class="card card_d">
  <h3><span><i class="far fa-calendar-check"></i> </span>Appointments</h3>
    <div class="card-body">
      <h2 class="card-title">{{$appointment}}</h2>
      <p class="card-text">You have {{$appointment}} appointments pending.</p>
    </div>
    <div class="card-footer">
      <a class="btn text-muted" href="/appointment">View appointments</a>
    </div>
  </div>
  
</div>
<div class="card-group">

  <div class="card card_d">
  <h3><span><i class="far fa-calendar-alt"></i> </span> Visits</h3>
    <div class="card-body">
      <h2 class="card-title">{{$schedule}}</h2>
      <p class="card-text">You have {{$schedule}} Visits pending.</p>
    </div>
    <div class="card-footer">
    <a class="btn text-muted" href="/schedule">View Visit</a>
    </div>
  </div>
  <div class="card card_d">
  <h3><span><i class="far fa-bell"></i> </span> Reminders</h3>
    <div class="card-body">
      <h2 class="card-title">{{$reminder}}</h2>
      <p class="card-text">You have {{$reminder}} reminders.</p>
    </div>
    <div class="card-footer">
      <a class="btn text-muted" href="/reminder">View reminder</a>
    </div>
  </div>
</div>
</div>      
@endsection