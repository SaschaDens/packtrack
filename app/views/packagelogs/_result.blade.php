<div class="clearfix"></div>

<h2>Latest scans <small>20 results</small></h2>
<hr/>
<table class="table">
    <thead>
    <tr>
        <th>Tracking code</th>
        <th>Scanned on</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    @foreach($packages as $package)
    <tr>
        <td>{{ $package->package->tracking_code }}</td>
        <td>{{ $package->created_at }}</td>
        <td>CHECKIN / CHECKOUT</td>
    </tr>
    @endforeach
    </tbody>
</table>