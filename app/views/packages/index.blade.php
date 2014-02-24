@extends('layouts.master')

@section('html-tag', 'ng-app')
@section('title', 'Dashboard')

@section('content')
    <h3>Quick Settings</h3>
    <div class="row">
        <div class="col-md-3">
            <a class="info-box-click" href="{{ action('PackageController@create') }}">
                <div class="info-box slideLeft">
                    <h3>Create Package</h3>
                    <span class="glyphicon glyphicon-th-large"></span>
                    <p>
                        <small>Create a package. Deliver it at one of our locations. And we will do the rest!</small>
                    </p>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a class="info-box-click" href="{{ action('HomeController@getLocations') }}">
                <div class="info-box slideLeft">
                    <h3>Locate Center</h3>
                    <span class="glyphicon glyphicon-send"></span>
                    <p>
                        <small>Create a package. Deliver it at one of our locations. And we will do the rest!</small>
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
    <hr/>
    <h3>Packages</h3>
    @if($packages->first())
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Created at</th>
                <th>Tracking Code</th>
                <th>Address</th>
                <th>Postal Code</th>
                <th>City</th>
                <th>Country</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($packages as $package)
                <tr>
                    <td>{{ $package->created_at }}</td>
                    <td>{{ link_to_action('PackageController@show', $package->tracking_code, array($package->id)) }}</td>
                    <td>{{ $package->address }}</td>
                    <td>{{ $package->postal_code }}</td>
                    <td>{{ $package->city }}</td>
                    <td>{{ $package->country }}</td>
                    <td>Not tracked yet</td>
                    <td>
                        @if($package->status_code == 0)
                        <a><span class="glyphicon glyphicon-trash" data-toggle="modal" data-target=".deletePackage-{{ $package->id }}"></span></a>

                        <div class="modal fade deletePackage-{{ $package->id }}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myLargeModalLabel">Delete Form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>You're about to delete the following packet.</p>
                                        <dl class="dl-horizontal">
                                            <dt>Address</dt>
                                            <dd>{{ $package->address }}</dd>

                                            <dt></dt>
                                            <dd>{{ $package->postal_code . ' ' . $package->city }}</dd>

                                            <dt>Reciever name</dt>
                                            <dd>{{ $package->reciever_name }}</dd>

                                            <dt>Country</dt>
                                            <dd>{{ $package->country }}</dd>

                                            <dt>Tracking Code</dt>
                                            <dd>{{ $package->tracking_code }}</dd>

                                            <dt>Reciever email</dt>
                                            <dd>{{ $package->reciever_mail or 'None given' }}</dd>

                                            <dt>Package description</dt>
                                            <dd>{{ $package->description or 'None given' }}</dd>
                                        </dl>
                                        <div class="clearfix"></div>
                                        <hr/>
                                        {{ Form::open(array('action' => array('PackageController@destroy', $package->id), 'method' => 'delete')) }}
                                        {{ Form::bt_button('Confirm', array('class' => 'btn-danger btn-block btn-lg', 'tabindex' => '8')) }}
                                        {{ Form::close() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>No packages created yet. Create a package to start tracking</p>
    @endif

    {{ $packages->links() }}
@stop

@section('scripts')
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.12/angular.min.js"></script>
@stop