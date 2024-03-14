@extends('layouts.auth')

@section('content')
<div class="container-fluid">
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
    <h2 class="pt-4">Apps</h2>
    <div class="row">
        <div class="col-md-3 p-2">
            <div class="card">
                <div class="card-body">
                    RMS
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
