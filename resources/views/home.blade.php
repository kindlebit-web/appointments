@extends('layouts.app')

@section('content')
  <!--   <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div> -->


    <div class="app-content content">
    
       <!-- Chart -->
<!-- Chart -->
<!-- eCommerce statistic -->
<div class="row pt-2">
    <div class="col">
        <div class="card pull-up ecom-card-1  count_boxes">
            <div class="card-content ecom-card2 box-1 height-150">
			<div class="icon"><i class="fa fa-calendar"></i></div>
                <h5 class="text-muted danger pt-1 pl-1">Scheduled Appointments</h5>
                <div class="colorlib-counter pull-left">
        {{ App\Appointment::count() }}
                   
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card pull-up ecom-card-1  count_boxes">
            <div class="card-content ecom-card2 box-2 height-150">
			<div class="icon"><i class="fa fa-group"></i></div>
                <h5 class="text-muted danger p-1">Users</h5>
                <div class="colorlib-counter pull-left">
                    {{ App\User::count() }}
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card pull-up ecom-card-1  count_boxes">
            <div class="card-content ecom-card2 box-3 height-150">
			<div class="icon"><i class="fa fa-cogs"></i></div>
                <h5 class="text-muted danger p-1">Services</h5>
                <div class="colorlib-counter pull-left" >
                    {{ App\Service::count() }}
                </div>
            </div>
        </div>
    </div>
	<div class="col">
        <div class="card pull-up ecom-card-1  count_boxes">
            <div class="card-content ecom-card2 box-4 height-150">
			<div class="icon"><i class="fa fa-handshake-o"></i></div>
                <h5 class="text-muted danger p-1">Clients</h5>
                <div class="colorlib-counter pull-left">
        {{ App\Client::count() }}
                   
                </div>
            </div>
        </div>
    </div>
	<div class="col">
        <div class="card pull-up ecom-card-1  count_boxes">
            <div class="card-content ecom-card2 box-5 height-150">
			<div class="icon"><i class="fa fa-user"></i></div>
                <h5 class="text-muted danger p-1">Employees</h5>
                <div class="colorlib-counter pull-left">
                    {{ App\Employee::count() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="row">
 
    <div class="col">
        <div class="card pull-up ecom-card-1  count_boxes">
            <div class="card-content ecom-card2 box-5 height-150">
			<div class="icon"><i class="fa fa-user"></i></div>
                <h5 class="text-muted danger p-1">Employees</h5>
                <div class="colorlib-counter pull-left">
                    {{ App\Employee::count() }}
                </div>
            </div>
        </div>
    </div>
</div>-->
<!--/ eCommerce statistic -->

<!-- Statistics -->
<!--/ Statistics -->
 
    
    </div>

@endsection

