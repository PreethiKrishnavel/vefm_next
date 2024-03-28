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
                                <th scope="col">Company Name</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Door No/Flat no/Build Name</th>
                                <th scope="col">City</th>
                                <th scope="col">Road/Street Name</th>
                                <th scope="col">Area</th>
                                <th scope="col">Pincode</th>
                                <th scope="col">State</th>
                                <th scope="col">Email</th>
                                <th scope="col">TIN No</th>
                                <th scope="col">TAN NO</th>
                                <th scope="col">PAN No</th>
                                <th scope="col">Service Tax Exemption  </th>
                                <th scope="col">TDS %</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">State</th>
                                <th scope="col">GST Number</th>
                                <th scope="col">PAN Number</th>
                                <th scope="col">Action</th>


                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>ABCD</td>
                                    <td>984236954</td>
                                    <td>XYZ</td>
                                    <td>Chennai</td>
                                    <td>ABC street</td>
                                    <td>Chennai</td>
                                    <td>895998</td>
                                    <td>Tamilnadu</td>
                                    <td>abc@gmail.com</td>
                                    <td>E12DS34</td>
                                    <td>DE45SA</td>
                                    <td>987124785GF</td>
                                    <td>rewre</td>
                                    <td>232545</td>
                                    <td>Raj</td>
                                    <td>Tamilnadu</td>
                                    <td>546343</td>
                                    <td>gt56789</td>
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

