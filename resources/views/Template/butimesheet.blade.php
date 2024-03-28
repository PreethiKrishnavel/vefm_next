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
                <h6 class="card-title"><u>Front End Details</u></h6>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >Company</label>
                        <input type="date" class="form-control"  name="current-date">
                    </div>
                    <div class="col-md-4 mb-3">
                       <label >PO Peroid From</label>
                       <input type="date" class="form-control"  name="timesheet-date">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label >PO Value</label>
                        <input type="date" class="form-control"  name="timesheet-date">
                     </div>
                </div>


            </div>
        </div>




        <div class="card">
            <div class="card-body">
                <h6 class="card-title"><u>PO Details</u></h6>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >PO Number</label>
                        <input type="date" class="form-control"  name="current-date">
                    </div>
                    <div class="col-md-4 mb-3">
                       <label >PO Peroid From</label>
                       <input type="date" class="form-control"  name="timesheet-date">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label >PO Value</label>
                        <input type="date" class="form-control"  name="timesheet-date">
                     </div>
                </div>


                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >PO Remarks</label>
                        <textarea class="form-control" id="" rows="3"></textarea>
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Projected Revenue</label>
                       <input type="text" class="form-control"  name="timesheet-date">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label >PO Date </label>
                        <input type="date" class="form-control"  name="timesheet-date">
                     </div>
                </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label>Po Date</label>
                            <input type="date" class="form-control"  name="timesheet-date">
                       </div>
                       <div class="col-md-4 mb-3">
                        <label>Invoice Type</label>
                        <select class="form-control" id="" name="invoice-type">
                            <option>XYZ</option>
                            <option>XYZ</option>
                            <option>XYZ</option>
                            <option>XYZ</option>
                            <option>XYZ</option>
                          </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <button type="button" class="btn btn-success btn-rounded btn-top">ADD Engineer</button>
                        </div>
                    </div>
              </div>
         </div>


         <div class="card">
            <div class="card-body">
                <h6 class="card-title"><u>Add Engineer</u></h6>
                <div class="card-body">
                    <table id="example1" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>SI</th>
                            <th>Company Name</th>
                            <th>Collection No</th>
                            <th>Collection Date</th>
                            <th>Collection Amount</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>xyz</td>
                            <td>ABC123</td>
                            <td>5/5/2023</td>
                            <td>2000</td>
                            <td><i class="ti-trash"></i></td>
                            <td><i class="ti-new-window"></i></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>xyz</td>
                            <td>ABC123</td>
                            <td>5/3/2023</td>
                            <td>1000</td>
                            <td><i class="ti-trash"></i></td>
                            <td><i class="ti-new-window"></i></td>
                        </tr>

                        </tbody>

                    </table>
                </div>


                <button class="btn btn-success" type="submit" >Submit</button>
				<button class="btn btn-warning" type="submit" style="position: relative;left: 700px;">Cancel</button>

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

