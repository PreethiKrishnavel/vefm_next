@extends('layout.template')
@section('content')
    <div class="container">

        <!-- begin::page header -->
        <div class="page-header d-md-flex align-items-center justify-content-between">
            <div>
                <h4>Modules</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        {{-- <li class="breadcrumb-item"><a href="#">Business Management System</a></li> --}}
                        <li class="breadcrumb-item"><a href="#">Setup</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Customer</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end::page header -->
	<form action="{{ url('/store') }}" method="POST">
		@csrf
        <div class="card">
            <div class="card-body">
                {{-- <h6 class="card-title"><u>Front End Details</u></h6> --}}

						<div class="form-row">

                            <div class="col-md-3 mb-3">
                                <label>Company Name</label>
                                <input type="text" class="form-control"  name="company">
                           </div>

                           <div class="col-md-3 mb-3">
                                <label>Contact Number</label>
                                <input type="text" class="form-control"  name="contact">
                           </div>
                            <div class="col-md-3  mb-3">
                                <label>Door No/Flat no/Build Name</label>
                                <input type="text" class="form-control"  name="door-no">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>City</label>
                                <input type="text" class="form-control"  name="city">
                            </div>
                        </div>

						<div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label>Road/Street Name</label>
                                <input type="text" class="form-control"  name="road">
                           </div>

                           <div class="col-md-3 mb-3">
                                <label>Area</label>
                                <input type="text" class="form-control"  name="area">
                           </div>
                            <div class="col-md-3  mb-3">
                                <label>Pincode</label>
                                <input type="text" class="form-control"  name="pincode">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>State</label>
                                <input type="text" class="form-control"  name="state">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label>Email</label>
                                <input type="text" class="form-control"  name="email">
                           </div>

                           <div class="col-md-3 mb-3">
                                <label>TIN No</label>
                                <input type="text" class="form-control"  name="tin-no">
                           </div>
                            <div class="col-md-3  mb-3">
                                <label>TAN NO</label>
                                <input type="text" class="form-control"  name="tan-no">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>PAN No</label>
                                <input type="text" class="form-control"  name="pan-no">
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="col-md-3 mb-3">
                                <label>Customer Name</label>
                                <select class="form-control " id="" name="customer">
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                  </select>
                           </div>

                           <div class="col-md-3 mb-3">
                                <label>State</label>
                                <select class="form-control " id="" name="state">
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                  </select>
                           </div>
                            <div class="col-md-3  mb-3">
                                <label>GST Number</label>
                                <input type="text" class="form-control"  name="tan-no">
                            </div>
                            <div class="col-md-3 mb-3">
                                <label>PAN Number</label>
                                <input type="text" class="form-control"  name="pan-no">
                            </div>
                        </div>



                        <div class="form-row">
                            <div class="col-md-2 mb-3">

                                <label>Service Tax Exemption </label>
                                    <input type="radio" name="etp" id="etp" value="Yes"> Yes
                                    <input type="radio" name="etp" id="etp" value="No"> No

                           </div>

                           <div class="col-md-3 mb-3">
                                <label>TDS %</label>
                                <select class="form-control " id="" name="state">
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                  </select>
                           </div>

                        </div>





                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <button type="button" class="btn btn-primary btn-rounded btn-top">Submit</button>
                    </div>
                  </div>




            </div>
        </div>






	</form>
  </div>
</div>

@endsection
@push('scripts')
<script type="text/javascript">

'use strict';
$(document).ready(function () {
    $('#client_id,#country').select2();
});
$('#enquiry_due_date,#enquiry_received_date').daterangepicker({
	singleDatePicker: true,
	showDropdowns: true,
	autoclose: true,
	zIndex: 2048,
	format: 'dd-mm-yy',
	changeMonth: true,
	changeYear: true,
	 locale: {
			format: 'DD-MM-YYYY',
			zIndex: 2048,
		},
	yearRange: '1950:' + new Date().getFullYear().toString()
});


</script>
@endpush

