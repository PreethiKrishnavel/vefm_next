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
                        <P name="collection-date"></p>
                    </div>
                    <div class="col-md-4 mb-3">
                       <label >Customer Name</label>
                       <P name="customer-name"></p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Credited amount </label>
                        <P name="credited-amount"></p>

                     </div>
                </div>


						<div class="form-row">

                            <div class="col-md-4 mb-3">
                                <label>Mode of payment</label>
                                <P  name="mode-of-payment"></p>
                           </div>

                           <div class="col-md-4 mb-3">
                                <label>Credited Date</label>
                                <P  name="credited-date"></p>
                           </div>
                            <div class="col-md-4 mb-3">
                                <label>Deposited Bank </label>
                                <P  name="Deposited-date"></p>
                            </div>
                        </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label >Invoice Date From</label>
                            <P  name="invoice-date-from"></p>
                       </div>
                       <div class="col-md-4 mb-3">
                            <label >Invoice Date To</label>
                            <P name="invoice-date-to"></p>
                        </div>

                  </div>


                  <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>SI</th>
                            <th scope="col">Invoice No</th>
                            <th scope="col">Invoice Amt</th>
                            <th scope="col">Cheque Amt</th>
                            <th scope="col">TDS	</th>
                            <th scope="col">Deduction</th>
                            <th scope="col">Retention</th>
                            <th scope="col">Total Collection</th>
                            <th scope="col">Due Amt	</th>
                            <th scope="col">Remarks</th>


                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        </tbody>
                    </table>
                </div>

                <button type="button" class="btn btn-warning" style="align=right" >Cancel</button>
                <button type="button" class="btn btn-primary">edit</button>
                <button type="button" class="btn btn-danger">Delete</button>

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

