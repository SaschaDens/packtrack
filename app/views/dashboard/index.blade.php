@extends('layouts.master')

@section('post-title', 'Dashboard')
@section('content')
    <h3>Quick Settings</h3>
    <div class="row text-center">
        <div class="col-md-4">
            <span>Create package</span>
        </div>
        <div class="col-md-4">
            <span>Random Box</span>
        </div>
        <div class="col-md-4">
            <span>Settings</span>
        </div>
    </div>

    <h3>Active Packages</h3>
    <table class="table table-hover">
        <thead>
            <th>Tracking Code</th>
            <th>Address</th>
            <th>Status</th>
        </thead>
    </table>
    <h3>Delivered Packages</h3>
    <table class="table table-hover">
        <thead>
        <th>Tracking Code</th>
        <th>Address</th>
        <th>Status</th>
        </thead>
    </table>
@stop