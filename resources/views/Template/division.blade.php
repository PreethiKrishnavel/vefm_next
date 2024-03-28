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
                        <li class="breadcrumb-item active" aria-current="page">Division</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end::page header -->
	<form action="{{ url('/store') }}" method="POST">
		@csrf
        <div class="card">
            <div class="card-body">
                <h6 class="card-title"><u>Division</u></h6>


                <div class="card">
                    <div class="card-body">
                        {{-- <h6 class="card-title">Collection Details</h6> --}}

                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label >Company </label>
                                <select class="form-control " id="">
                                 <option>XYZ</option>
                                 <option>XYZ</option>
                                 <option>XYZ</option>
                                 <option>XYZ</option>
                                 <option>XYZ</option>
                               </select>
                             </div>

                            <div class="col-md-4 mb-3">
                                <label >Division</label>
                                <input type="text" class="form-control"  name="city">
                           </div>

                           <div class="col-md-4 mb-3" style="padding-top:26px;">
                            <button class="btn btn-success form-control" type="submit">Go</button>
                            </div>

                      </div>

                            <div class="form-row">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">SI</th>
                                            <th scope="col">Company</th>
                                            <th scope="col">Division</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>ABC123</td>
                                            <td>2000</td>
                                            <td><i class="ti-new-window"></i><i class="ti-trash"></i> </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>ABC123</td>
                                            <td>2000</td>
                                            <td><i class="ti-new-window"></i><i class="ti-trash"></i> </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>




                        <button class="btn btn-success" type="submit">Submit</button>
                        <button class="btn btn-warning" type="submit" style="position: relative;left: 700px;">Cancel</button>

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

