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
                {{-- <h6 class="card-title"><u>Front End Details</u></h6> --}}
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >Collection Date</label>
                        <input type="date" class="form-control"  name="from-date">
                    </div>
                    <div class="col-md-4 mb-3">
                       <label >Customer Name</label>
                       <select class="form-control " id="" name="division">
                        <option>XYZ</option>
                        <option>XYZ</option>
                        <option>XYZ</option>
                        <option>XYZ</option>
                        <option>XYZ</option>
                      </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Credited amount </label>
                        <input type="text" class="form-control"  name="from-date">

                     </div>
                </div>


						<div class="form-row">

                            <div class="col-md-4 mb-3">
                                <label>Mode of payment</label>
                                <input type="text" class="form-control"  name="from-date">
                           </div>

                           <div class="col-md-4 mb-3">
                                <label>Credited Date</label>
                                <input type="date" class="form-control"  name="from-date">
                           </div>
                            <div class="col-md-4 mb-3">
                                <label>Deposited Bank </label>
                                <input type="text" class="form-control"  name="from-date">
                            </div>
                        </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label >Invoice Date From</label>
                            <input type="date" class="form-control"  name="to-date">
                       </div>
                       <div class="col-md-4 mb-3">
                            <label >Invoice Date To</label>
                            <input type="date" class="form-control"  name="to-date">
                        </div>

                  </div>



                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <button type="button" class="btn btn-primary btn-top">Add Collection</button>
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

