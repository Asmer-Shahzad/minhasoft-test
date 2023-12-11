@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <h2>Add Consignment</h2>
        </div>
    </div>
    <div class="row justify-content-center mt-4">
        <form method="POST" action="{{url('/consignments')}}">
            @csrf
            <div class="col-md-12 mt-4">
                <div class="row mt-4">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="company" placeholder="Company">
                    </div>
                    <div class="col-md-6">
                        <input type="number" class="form-control" name="contact" placeholder="Contact">
                    </div>
                </div>      
                <div class="row mt-4">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="address_line_1" placeholder="Address Line 1">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="address_line_2" placeholder="Address Line 2">
                    </div>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="address_line_3" placeholder="Address Line 3">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="city" placeholder="City">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="country" placeholder="Country">
                    </div>
                </div> 
                <div class="row mt-4">
                    <div class="col-12" style="text-align:right">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
                </div>
            </div>
           
        </form>
    </div>
</div>
@endsection
