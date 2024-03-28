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
                                <th scope="col">Company</th>
                                <th scope="col">Location</th>
                                <th scope="col">Address</th>
                                <th scope="col">City Town</th>
                                <th scope="col">State</th>
                                <th scope="col">Country</th>
                                <th scope="col">Pin/Post Code</th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Website</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                                <?php

                                  $i = 1;

                                ?>
                                @foreach ($company as $company)


                            <tr>
                                <th scope="row"><?php echo $i;   ?></th>
                                <td>{{$company->company_name}}</td>
                                <td>{{$company->location}}</td>
                                <td>{{$company->address1}}</td>
                                <td>{{$company->city}}</td>
                                <td>{{$company->state}}</td>
                                <td>{{$company->country}}</td>
                                <td>{{$company->pincode}}</td>
                                <td>{{$company->telephone}}</td>
                                <td>{{$company->mobile}}</td>
                                <td>{{$company->website }}</td>
                                <td>{{$company->status}}</td>

                                <td><i class="ti-new-window"></i><i class="ti-trash"></i> </td>
                            </tr>
                            <?php

                            $i++;

                          ?>


                            @endforeach

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

