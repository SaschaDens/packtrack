@extends('layouts.support')

@section('content')

<h2>Locations</h2>
<table class="table">
    <thead>
        <tr>
            <th>Address</th>
            <th>City</th>
            <th>Country</th>
            <th>Modify</th>
        </tr>
    </thead>
    <tbody>
        @foreach($locations as $loc)
        <tr>
            <td>{{ $loc->address }}</td>
            <td>{{ $loc->city }}</td>
            <td>{{ $loc->country }}</td>
            <td>Bewerk / Wis</td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop