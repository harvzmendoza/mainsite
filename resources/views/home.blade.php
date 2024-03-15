@extends('layouts.auth')

@section('content')
<div class="container-fluid">
    <h2>Dashboard</h2>
    <div class="row">
        <div class="col-md-3 p-2">
            
        </div>
    </div>
    <h2>Recent</h2>
    <div class="row">
        <div class="col-md-3 p-2">
            <div class="card">
                <div class="card-body">
                    <a href="http://10.172.0.21/home">ICTO - Ticketing System</a>
                </div>
            </div>
        </div>
    </div>
    <h2>Offices</h2>
    <div class="row">
        @foreach($offices as $office)
        <div class="col-md-3 p-2">
            <div class="card">
                <div class="card-body">
                    {{$office->office_code}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <h2 class="pt-4">Systems</h2>
    <div class="row">
        <div class="col-md-3 p-2">
            <div class="card">
                <div class="card-body">
                    <a href="http://10.172.0.21">ICTO - Ticketing System</a>
                </div>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card">
                <div class="card-body">
                    <a href="">PSS Portal</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
