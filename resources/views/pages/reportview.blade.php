@extends('home')


@section('dashboard')
<div class="container">
    <h3>Patient Report</h3>
    <br>
    <div class="col-md-8 report-view">
        <div class="card-group">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$patient->patientname}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">DOB</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?php
                                echo date_format(date_create($patient->dateofbirth),'F j, Y')
                            ?>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$patient->address1}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Case</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$patient->case}}
                        </div>
                    </div>
                    <hr>                          
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Patient No.</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            PAT0{{$patient->id}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Gender</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$patient->gender}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$patient->address2}}
                        </div>
                    </div>
                    <hr> 
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Modality</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{$patient->modality}}
                        </div>
                    </div>
                    <hr>     
                </div>
            </div>            
        </div>        
    </div>
    
</div>
<!--
<div class="container dashboard-cards">
<div class="pat-view col-md-8">
<div class="card-group">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$patient->patientname}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Patient No.</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    PAT0{{$patient->id}}
                    </div>
                  </div>
                  <hr>
</div></div>
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php
                          echo date_format(date_create($patient->dateofbirth),'F j, Y')
                    ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$patient->gender}}
                    </div>
                  </div>
                  <hr>
                  </div></div></div>
                  <div class="card-group">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Case</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$patient->case}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Modality</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$patient->modality}}
                    </div>
                  </div>
                  <hr>
                  </div></div>
              <div class="card mb-3">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$patient->address1}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$patient->address2}}
                    </div>
                  </div>
                  <hr>
                </div></div>
</div>
-->
@endsection