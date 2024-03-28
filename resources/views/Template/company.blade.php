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
                <h6 class="card-title"><u>Company</u></h6>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >Name</label>
                        <input type="text" class="form-control"  name="name">
                    </div>
                    <div class="col-md-4 mb-3">
                       <label >Location</label>
                       <input type="text" class="form-control"  name="Location">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label >Address </label>
                        <textarea class="form-control" id="exampleFormControl" rows="3"></textarea>
                     </div>
                </div>

						<div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label >City Town</label>
                                <input type="text" class="form-control"  name="city">
                           </div>

                           <div class="col-md-4 mb-3">
                                <label >State</label>
                                <input type="text" class="form-control"  name="state">
                            </div>
                            <div class="col-md-4 mb-3">
                                <label >Country </label>
                                <select class="form-control " id="">
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
                            <label >Pin/Post Code</label>
                            <input type="text" class="form-control"  name="date">
                       </div>
                       <div class="col-md-4 mb-3">
                            <label >Telephone</label>
                            <input type="text" class="form-control"  name="telephone">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label >Mobile</label>
                            <input type="text" class="form-control"  name="mobile">
                         </div>
                </div>

                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label >Website</label>
                        <input type="text" class="form-control"  name="website">
                   </div>

                    <div class="col-md-4 mb-3">
                        <label>Status</label>
                        <select class="form-control " id="">
                            <option>Active</option>
                            <option>In-Active</option>
                            <option>Pause</option>
                            </select>
                    </div>
                </div>

                <button class="btn btn-success" type="submit" >Submit</button>
				<button class="btn btn-warning" type="submit" style="position: relative;left: 700px;">Cancel</button>
<br><br>

                <div class="form-row">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">SI</th>
                                <th scope="col">Company</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>ABC</td>
                                <td><i class="ti-trash"></i> <i class="ti-new-window"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>ABC</td>
                                <td><i class="ti-trash"></i> <i class="ti-new-window"></i></td>
                            </tr>

                            </tbody>
                        </table>
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

