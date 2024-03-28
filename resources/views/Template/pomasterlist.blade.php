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
                        <li class="breadcrumb-item active" aria-current="page">Companylist</li>
                        <div class="m-r-5">
                        <button type="button" class="btn btn-outline-primary btn-uppercase waves-effect waves-button waves-light">
                            <i class="fa fa-plus m-r-5"></i> Create Company
                        </button>
                    </div>
                    </ol>


                </nav>
            </div>
        </div>
        <!-- end::page header -->
	<form action="{{ url('/store') }}" method="POST">
		@csrf
        <div class="card">
            <div class="card-body">
                <h6 class="card-title"><u>CompanyList</u></h6>
                <button type="button" class="btn btn-success btn-rounded btn-top">ADD</button>

                <div class="form-row">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">SI</th>
                                <th scope="col">Division</th>
                                <th scope="col">Unit Ref</th>
                                <th scope="col">Region  </th>
                                <th scope="col">Customer</th>
                                <th scope="col">Project Site</th>
                                <th scope="col">PO Number</th>
                                <th scope="col">PO Date</th>
                                <th scope="col">PO Value</th>
                                <th scope="col">Consumed</th>
                                <th scope="col">Balance</th>
                                <th scope="col">Action</th>


                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>ABCD</td>
                                    <td>XYZ</td>
                                    <td>XYZ</td>
                                    <td>ABC street</td>
                                    <td>Chennai</td>
                                    <td>E12DS34</td>
                                    <td>DE45SA</td>
                                    <td>rewre</td>
                                    <td>232545</td>
                                    <td>Raj</td>
                                    <td><i class="ti-new-window"></i><i class="ti-trash"></i> </td>
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

