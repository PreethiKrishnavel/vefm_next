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
                        <li class="breadcrumb-item active" aria-current="page">Timesheetedit</li>
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
                        <input type="text" class="form-control"  name="current-date">
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Division</label>
                       <input type="text" class="form-control"  name="division">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label >Timesheet Date </label>
                        <input type="text" class="form-control"  name="timesheet-date">
                     </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >Company</label>
                        <input type="text" class="form-control"  name="company">
                    </div>
                    <div class="col-md-4 mb-3" style="margin-top:28px;">

                       <button type="button" class="btn btn-success btn-rounded btn-top">Change</button>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Unit Ref</label>
                        <input type="text" class="form-control"  name="unit-ref">
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Region/division</label>
                       <input type="text" class="form-control"  name="region">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Job Number</label>
                        <input type="text" class="form-control"  name="job-number">
                     </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Job type</label>
                        <input type="text" class="form-control"  name="unit-ref">
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Customer Name</label>
                       <input type="text" class="form-control"  name="region">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Customer Address</label>
                        <textarea class="form-control" id="" rows="3"></textarea>
                     </div>
                </div>


                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >Company</label>
                        <select class="form-control " id="">
                            <option>XYZ</option>
                            <option>XYZ</option>
                            <option>XYZ</option>
                            <option>XYZ</option>
                            <option>XYZ</option>
                          </select>
                    </div>
                    <div class="col-md-4 mb-3" style="margin-top:28px;">
                       <button type="button" class="btn btn-success btn-rounded btn-top">Change</button>
                    </div>
                </div>


                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Customer Contact Name</label>
                        <p name="" class="form-control"></P>
                    </div>
                    <div class="col-md-6 mb-3">
                       <label>Customer Email</label>
                       <p name="" class="form-control"></P>
                    </div>

                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label>Ultimate Client</label>
                        <p name="" class="form-control"></P>
                    </div>
                    <div class="col-md-6 mb-3">
                       <label>Customer Mobile No</label>
                       <p name="" class="form-control"></P>
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
                        <input type="text" class="form-control"  name="current-date">
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>PO Date</label>
                       <input type="text" class="form-control"  name="division">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label >PO Value</label>
                        <input type="text" class="form-control"  name="timesheet-date">
                     </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label >PO Date</label>
                        <input type="text" class="form-control"  name="po-date">
                    </div>
                    <div class="col-md-6 mb-3">
                       <label>PO Value</label>
                       <p ></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label >PO Period from</label>
                        <p name="peroid-from"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                       <label>PO Period To</label>
                       <p name="peroid-to"></p>
                    </div>
                </div>


                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>PO Remarks</label>
                        <p name="peroid-from"></p>
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Invoice Type</label>
                       <p name="peroid-to"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Projected Revenue</label>
                        <input type="text" class="form-control"  name="projected-revenue">
                    </div>
                    <div class="col-md-4 mb-3" style="margin-top:25px;">
                       <button type="button" class="btn btn-success btn-rounded btn-top">Update Project Revenue</button>
                    </div>
                </div>

              </div>
         </div>


         <div class="card">
            <div class="card-body">
                <h6 class="card-title"><u>Project Details</u></h6>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >Project Description</label>
                        <input type="text" class="form-control"  name="projet-desc">
                    </div>
                    <div class="col-md-4 mb-3" style="margin-top:25px;">
                       <button type="button" class="btn btn-success btn-rounded btn-top">Update Project Details</button>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >Project site</label>
                        <input type="text" class="form-control"  name="projet-desc">
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Project Sector</label>
                       <p name="project-sector"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Contact Person At Site</label>
                        <p name="contact-person-at-site"></p>
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Contact Number</label>
                       <p name="contact-number"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Project Start Date</label>
                        <p name="project-start-date"></p>
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Project End Date</label>
                       <p name="project-end-date"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Certification Date</label>
                        <p name="certification-date"></p>
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Timesheet Status</label>
                       <p name="timesheet-status"></p>
                    </div>
                </div>

              </div>
         </div>


         <div class="card">
            <div class="card-body">
                <h6 class="card-title"><u>Project Details</u></h6>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >Project Description</label>
                        <input type="text" class="form-control"  name="projet-desc">
                    </div>
                    <div class="col-md-4 mb-3" style="margin-top:25px;">
                       <button type="button" class="btn btn-success btn-rounded btn-top">Update Project Details</button>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >Project site</label>
                        <input type="text" class="form-control"  name="projet-desc">
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Project Sector</label>
                       <p name="project-sector"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Contact Person At Site</label>
                        <p name="contact-person-at-site"></p>
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Contact Number</label>
                       <p name="contact-number"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Project Start Date</label>
                        <p name="project-start-date"></p>
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Project End Date</label>
                       <p name="project-end-date"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Certification Date</label>
                        <p name="certification-date"></p>
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Timesheet Status</label>
                       <p name="timesheet-status"></p>
                    </div>
                </div>

              </div>
         </div>


         <div class="card">
            <div class="card-body">
                <h6 class="card-title"><u>Engineer Details</u></h6>



                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Engr Entry date</label>
                        <p name="contact-person-at-site"></p>
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Engr Exit date</label>
                       <p name="contact-number"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Total no of days</label>
                        <p name="project-start-date"></p>
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>No of days allowed in project</label>
                       <p name="project-end-date"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Certified days</label>
                        <p name="certification-date"></p>
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Balance days</label>
                       <p name="timesheet-status"></p>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label>Equipment</label>
                        <p name="certification-date"></p>
                    </div>
                    <div class="col-md-4 mb-3">
                       <label>Team</label>
                       <p name="timesheet-status"></p>
                    </div>
                </div>

                <button class="btn btn-danger" type="submit" >Delete</button>
                <button class="btn btn-warning" type="submit" >Cancel</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Add Engineer
                  </button>

                  {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"> </button> --}}
                <button class="btn btn-danger" type="submit" >Delete</button>
				<button class="btn btn-primary" type="submit" style="position: relative;left: 500px;">Home</button>


                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>SI</th>
                                        <th scope="col">Engr Ecode</th>
                                        <th scope="col">Engr Name</th>
                                        <th scope="col">Engr Designatiom</th>


                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row"><input type="text" class="form-control" name=""></th>
                                        <td><select class="form-control " id="">
                                            <option>Select</option>
                                            <option>XYZ</option>
                                            <option>XYZ</option>
                                            <option>XYZ</option>
                                            <option>XYZ</option>
                                          </select> </td>
                                        <td></td>
                                        <td></td>

                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-warning">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>





{{--
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">



                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-warning">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div> --}}

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

