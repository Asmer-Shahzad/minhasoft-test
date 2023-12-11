@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12" style="text-align:right">
            <button style="text-align:right" class="btn btn-primary" onclick="exportToPdf()">Export To PDF</button>
            <a href="/consignments/create" style="text-align:right" class="btn btn-primary">Add</a>
        </div>
    </div>
    <div class="mt-2 row justify-content-center">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Company</th>
                        <th>Contact</th>
                        <th>Address Line 1</th>
                        <th>Address Line 2</th>
                        <th>Address Line 3</th>
                        <th>City</th>
                        <th>Country</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($consignment) > 0)
                        @foreach($consignment as $con)
                        <tr>
                            <td>{{$con->company ? $con->company : ''}}</td>
                            <td>{{$con->contact? $con->contact : ''}}</td>
                            <td>{{$con->address_line_1 ? $con->address_line_1 : ''}}</td>
                            <td>{{$con->address_line_2 ? $con->address_line_2 : ''}}</td>
                            <td>{{$con->address_line_3 ? $con->address_line_3 : ''}}</td>
                            <td>{{$con->city ? $con->city : ''}}</td>
                            <td>{{$con->country ? $con->country : ''}}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection



<script>
    function exportToPdf() {
        window.location.href = '/consignments/export';
    }
</script>
