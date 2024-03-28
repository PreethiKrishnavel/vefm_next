@extends('layout.template')
@section('content')
    <div class="container">

        <!-- begin::page header -->
        <div class="page-header d-md-flex align-items-center justify-content-between">
            <div>
                <h4>Modules</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Business Management System</a></li>
                        <li class="breadcrumb-item"><a href="#">Enquiry</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Enquiry Create</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end::page header -->
	<form action="{{ url('/store') }}" method="POST">
		@csrf
        <div class="card">
            <div class="card-body">
                <h6 class="card-title"><u>Enquiry Details</u></h6>
				<div class="form-row">
					<div class="col-md-4 mb-3">
						<label for="validationCustom01">Tender No<span style="color: red">* </span></label>
						<input type="text" class="form-control" name="tender_no" id="tender_no" value=""readonly required />
					</div>
					<div class="col-md-4 mb-3">
						<label for="validationCustom02">Enquiry Received Date<span style="color: red">* </span></label>
						<input type="text" class="form-control" name="enquiry_received_date" id="enquiry_received_date" required />
					</div>
					<div class="col-md-4 mb-3">
							<label for="validationCustom03">Project Name<span style="color: red">* </span></label>
							<input type="text" class="form-control" name="Project_name" id="Project_name" required="">
					</div>
				</div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
				<h6 class="card-title"><u>Client Details</u></h6>
				<div class="form-row">
					<div class="col-md-4 mb-3">
						<label for="validationCustom01">Client Name<span style="color: red">* </span></label>
						<select name="client_id" class="form-control" id="client_id" required>
							<option value="" selected disabled>select client name..</option>

                        </select>
					</div>
					<div class="col-md-4 mb-3">
						<label for="validationCustom02">Contact Person<span style="color: red">* </span></label>
						<input type="text" class="form-control" name="contact_person" pattern="^[a-zA-Z. ]+$" id="contact_person" required />
					</div>
					<div class="col-md-4 mb-3">
							<label for="validationCustom03">Contact No<span style="color: red">* </span></label>
							<input type="text" class="form-control" name="contact_no" id="contact_no" required />
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-4 mb-3">
						<label for="validationCustom03">Email ID<span style="color: red">* </span></label>
						<input type="text" class="form-control" name="mail_id" id="mail_id" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" required />
					</div>
					<div class="col-md-4 mb-3">
						<label for="validationCustom01">Address<span style="color: red">* </span></label>
						<textarea class="form-control" name="address" id="address" required></textarea>
					</div>
					<div class="col-md-4 mb-3">
						<label for="validationCustom02">Country<span style="color: red">* </span></label>
						<select id="country" name="country" class="form-control" required>
							<option value="" selected disabled>select Country..</option>

						</select>
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-4 mb-3">
						<label for="validationCustom03">State<span style="color: red">* </span></label>
						<input type="text" class="form-control" pattern="[A-Za-z]+"name="state" id="state" required />
					</div>
					<div class="col-md-4 mb-3">
						<label for="validationCustom02">City<span style="color: red">* </span></label>
						<input type="text" class="form-control" pattern="[A-Za-z]+" name="city" id="city" required />
					</div>
					<div class="col-md-4 mb-3">
							<label for="validationCustom03">Others</label>
						   <input type="text" class="form-control" name="others" id="others">
					</div>
				</div>
            </div>
        </div>
		<div class="card">
            <div class="card-body">
                <h6 class="card-title"><u>Project Details</u></h6>
				<div class="form-row">
					<div class="col-md-4 mb-3">
					<label for="validationCustom03">End Client<span style="color: red">* </span></label>
					<input type="text" class="form-control" name="end_client" id="end_client" required />
					</div>
					<div class="col-md-4 mb-3">
					 <label for="validationCustom03">Enquiry Due Date<span style="color: red">* </span></label>
					 <input type="text" class="form-control" name="enquiry_due_date" id="enquiry_due_date" required />
					</div>
				</div>
				<div class="form-row">
					<div class="col-md-4 mb-3">
						<label for="validationCustom01">Project Details<span style="color: red">* </span></label>
						<textarea class="form-control" rows="2" cols="200" name="project_detail" id="project_detail" required></textarea>
					</div>
					<div class="col-md-4 mb-3">
						<label for="validationCustom02">Scope of Works<span style="color: red">* </span></label>
						<textarea class="form-control" name="scope_of_works" id="scope_of_works" required></textarea>
					</div>
					<div class="col-md-4 mb-3">
					<label for="CustomerDetails">Customer Details<span style="color: red">* </span></label>
					<textarea class="form-control" name="customer_detail" id="customer_detail" required ></textarea>
					</div>
					<input type="hidden" class="form-control" name="status" value="Enquiry Received">
				</div>
                    <hr class="m-t-b-5">
                <div class="row text-center justify-content-md-center">
                    <div class="col-md-3 m-t-b-20">
					<a href="{{url('/enquiry')}}" onclick="return confirm('Are you sure you want to cancel this item?');">
						<button type="button" class="btn btn-warning btn-sm btn-square btn-uppercase" style="color: white">
                           <i class="fa fa-backward"> </i>&nbsp;  Back
                        </button>
					</a>
                    </div>
                    <div class="col-md-3 m-t-b-20">
                    </div>
                    <div class="col-md-3 m-t-b-20">
                    </div>
                    <div class="col-md-3 m-t-b-20">
						<button type="submit" class="btn btn-success btn-square btn-sm btn-uppercase"> Save &nbsp; <i class="fa fa-forward"> </i> </button>
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

