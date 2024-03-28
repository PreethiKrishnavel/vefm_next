@extends('layout.template')
@section('content')
    <div class="container">

        <!-- begin::page header -->
        <div class="page-header d-md-flex align-items-center justify-content-between">
            <div>
                <h4>Modules</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Setup</a></li>
                        <li class="breadcrumb-item"><a href="#">Company</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Company Edit</li>
                    </ol>
                </nav>

            </div>
            <button id="editButton" class="btn btn-primary " type="button">Edit</button>
        </div>
        <!-- end::page header -->
	<form action="{{url('Setup_company_update/'.$company->id)}}" method="POST">
		@csrf
        <div class="card">

            <div class="card-body">
                <h6 class="card-title"><u>Company</u></h6>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >Company Name</label>
                        <input type="text" class="form-control"  name="company_name" value="{{$company->company_name}}" disabled required>
                    </div>
                    <div class="col-md-4 mb-3">
                       <label >Location</label>
                       <input type="text" class="form-control"  name="location" value="{{$company->location}}" disabled required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label >Address </label>
                        <textarea class="form-control" id="exampleFormControl" rows="3" name="address" disabled required>{{$company->address}}</textarea>
                     </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>City Town</label>
                        <input type="text" class="form-control" name="city" value="{{ old('city', $company->city) }}" disabled required>
                    </div>
                    

                    <div class="col-md-4 mb-3">
                        <label>State</label>
                        <select class="form-control" id="state" name="state" disabled required>
                            <option value="">Select State</option>
                            @foreach ($state as $state)
                                <option value="{{ $state->state }}" {{ $company->state == $state->state ? 'selected' : '' }}>
                                    {{ $state->state }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label >Country </label>
                        <select class="form-control " id="" name="country" disabled required>
                            <option selected value="{{$company->country}}">{{$company->country}}</option>
                            <option disabled>-- Select Country --</option>
                            <option value="India">India</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >Pin/Post Code</label>
                        <input type="text" class="form-control" value="{{$company->pincode}}" name="pincode" disabled required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label >Telephone</label>
                        <input type="text" class="form-control"  value="{{$company->telephone}}" name="telephone" disabled required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label >Mobile</label>
                        <input type="text" class="form-control"  value="{{$company->mobile}}" name="mobile" disabled required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >Website</label>
                        <input type="text" class="form-control" value="{{$company->website}}" name="website" disabled required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Status</label>
                        <select class="form-control " id="" name="status" disabled required>
                            <option selected value="{{$company->status}}">{{$company->status}}</option>
                            <option disabled>-- Select Status --</option>
                            <option value ="Active">Active</option>
                            <option value ="In-Active">In-Active</option>
                            <option value ="Pause">Pause</option>
                        </select>
                    </div>
                </div>
                <div>

                    <div class="col-md-3 mb-3" style="padding-top:26px;">
                        <!-- Cancel button with route -->
                        <a href="{{ route('comapny_list') }}" class="btn btn-warning float-left">Cancel</a>
                        <button id="updateButton" class="btn btn-success float-right" style="display: none; position: relative;left: 700px;" type="submit">Update</button>
                    </div>



            </div>
            </div>
        </div>
	</form>
    </div>
@endsection

@push('scripts')
<script type="text/javascript">
    'use strict';
    $(document).ready(function () {

$('input, textarea, select').prop('disabled', true);
$('#editButton').click(function() {
    $('input, textarea, select').prop('disabled', function(_, val) { return !val; });
    $("#editButton").hide();
    $("#updateButton").show(); // Show the update button
});
});
</script>
@endpush

