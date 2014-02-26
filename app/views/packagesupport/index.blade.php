@extends('layouts.master')

@section('content')
<h1>Package Support Panel</h1>
{{ Form::open(array('action' => 'PackageSupportController@store')) }}
<div class="row">
    <div class="col-md-10">
        {{ Form::bt_text('search_package', null, null, array('class' => 'input-lg', 'placeholder' => 'Search Package Tracking', 'tabindex' => '1')) }}
    </div>
    <div class="col-md-2">
        {{ Form::bt_button('Search', array('class' => 'btn-pack btn-block btn-lg', 'tabindex' => '2')) }}
    </div>
</div>
{{ Form::close() }}
<table class="table table-hover">
    <thead>
        <tr>
            <th>User</th>
            <th>Tracking Code</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($packages as $package)
        <tr>
            <td>{{ $package->user->first_name . ' ' . $package->user->last_name }}</td>
            <td>{{ link_to_action('PackageSupportController@show', $package->tracking_code, $package->tracking_code) }}</td>
            <td>{{ $package->status_code }}</td>
            <td>
            <td>
                {{--<a href="{{ action('PackageSupportController@edit', $package->id) }}"><span class="glyphicon glyphicon-pencil"></span></a>--}}
            </td>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $packages->links() }}

<div class="clearfix">
    <div class="pull-right">
        {{ link_to_action('SupportController@index', 'Return to Control Panel') }}
    </div>
</div>
@stop