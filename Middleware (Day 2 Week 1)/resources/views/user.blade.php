@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">                    
                    <h3 class="header">User Page</h3>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
