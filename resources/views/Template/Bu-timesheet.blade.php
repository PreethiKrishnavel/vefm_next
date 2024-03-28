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
                        <label >Current Date</label>
                        <input type="date" class="form-control"  name="current-date">
                    </div>
                    <div class="col-md-4 mb-3">
                       <label >Timesheet Date</label>
                       <input type="date" class="form-control"  name="timesheet-date">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label >Company </label>
                        <select class="form-control " id="" name="company">
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
                                <label >Unit Ref</label>
                                <select class="form-control" id="" name="Unit-ref">
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                  </select>
                           </div>

                           <div class="col-md-4 mb-3">
                                <label >Job Type</label>
                                <select class="form-control" id="" name="job-type">
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                    <option>XYZ</option>
                                  </select>
                           </div>
                            <div class="col-md-4 mb-3">
                                <label >Customer Name </label>
                                <select class="form-control" id="" name="customer-name">
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
                            <label >Division</label>
                            <select class="form-control" id="" name="division">
                                <option>XYZ</option>
                                <option>XYZ</option>
                                <option>XYZ</option>
                                <option>XYZ</option>
                                <option>XYZ</option>
                              </select>
                       </div>
                       <div class="col-md-4 mb-3">
                            <label >Region / Division</label>
                            <select class="form-control" id="" name="region-div">
                                <option>XYZ</option>
                                <option>XYZ</option>
                                <option>XYZ</option>
                                <option>XYZ</option>
                                <option>XYZ</option>
                              </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label >Customer Name</label>
                            <textarea class="form-control" id="exampleFormControl" rows="3"></textarea>
                         </div>
                </div>

                <div class="form-row">

                    <div class="col-md-2 mb-3">
                        <label >Job Number</label>
                        <input type="text" class="form-control"  name="website" readonly>
                   </div>
                   <div class="col-md-2 mb-3" style="padding-top:25px;">
                    <input type="text" class="form-control"  name="website">
                   </div>

                   <div class="col-md-2 mb-3" style="padding-top:25px;">
                    <input type="text" class="form-control"  name="website" readonly>
                   </div>

                    <div class="col-md-6 mb-3">
                        <label>Customer Contact Name</label>
                        <input type="text" class="form-control"  name="website">
                    </div>
                </div>


                <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <label>Mail</label>
                        <input type="text" class="form-control"  name="mail">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Mobile No</label>
                        <input type="text" class="form-control"  name="mobile">
                    </div>

                    <div class="col-md-4 mb-3">
                        <label>Ultimate Client</label>
                        <input type="text" class="form-control"  name="ultimate">
                    </div>
                </div>


                <div class="form-row">

                    <div class="col-md-8 mb-3">
                        <label>Customer Address</label>
                        <textarea class="form-control" id="" rows="3"></textarea>

                    </div>


                </div>

            </div>
        </div>


        <div class="card">
            <div class="card-body">
                <h6 class="card-title"><u>Project Details</u></h6>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >Project Site</label>
                        <input type="date" class="form-control"  name="current-date">
                    </div>
                    <div class="col-md-4 mb-3">
                       <label >Contact Person At Site</label>
                       <input type="date" class="form-control"  name="timesheet-date">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label >Project start Date </label>
                        <input type="date" class="form-control"  name="timesheet-date">
                     </div>
                </div>


                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >Industry Type</label>
                        <input type="text" class="form-control"  name="current-date">
                    </div>
                    <div class="col-md-4 mb-3">
                       <label >Contact Number</label>
                       <input type="date" class="form-control"  name="timesheet-date">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label >Project End Date </label>
                        <input type="date" class="form-control"  name="timesheet-date">
                     </div>
                </div>

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label>Project / Invoice Description</label>
                            <textarea class="form-control" id="exampleFormControl" rows="3"></textarea>
                       </div>
                       <div class="col-md-4 mb-3">

                        </div>

                        <div class="col-md-4 mb-3"></div>
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


                <button class="btn btn-success" type="submit" >Submit</button>
				<button class="btn btn-danger" type="submit" style="position: relative;left: 700px;">Delete</button>
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

