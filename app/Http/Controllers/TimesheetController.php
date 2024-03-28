<?php

namespace App\Http\Controllers;

use App\Models\Setup_Company;
use App\Models\Setup_Division;
use App\Models\Setup_Unit;
use App\Models\Setup_Region;
use App\Models\Setup_Customer;
use App\Models\Setup_User;
use App\Models\Setup_Po;
use App\Models\SetupGst;
use App\Models\Setup_Engineer;
use App\Models\Setup_Details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TimesheetController extends Controller
{

    public function pomaster_create()
    {
        $divisions = Setup_Division::where('flag', true)->get();
        $units = [];
        $regions = [];
        $customers = Setup_Customer::where('flag', true)->get();
        return view('Timesheet.pomaster', compact('divisions', 'units', 'regions', 'customers'));
    }

    public function pomaster_list()
    {
        $pomasters = Setup_Po::where('flag', true)->get();
        return view('Timesheet.pomasterlist', compact('pomasters'));
    }
    public function getUnitsByDivision($divisionId)
    {
        $units = Setup_Unit::where('division_id', $divisionId)->get();

        return response()->json(['units' => $units]);
    }



    public function pomaster_edit($id)
    {
        $pomaster = Setup_Po::find($id);
        $divisions = Setup_Division::where('flag', true)->get();
        $customers = Setup_Customer::where('flag', true)->get();
        $units = Setup_Unit::where('flag', true)->get();
        $region = Setup_Region::where('flag', true)->get();
        return view('Timesheet.pomaster_edit', compact(['pomaster', 'divisions', 'customers', 'units', 'region']));
    }

    public function pomaster_delete($id)
    {
        $region = Setup_Po::find($id);
        $region->update([
            'flag' => 0,
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('delete', 'Deleted successful');
    }


    public function pomaster_update(Request $request, $id)
    {
        // Find the PO being updated
        $po = Setup_Po::find($id);

        // Check if the PO exists
        if (!$po) {
            return redirect()->route('pomaster_list')->with('info', "PO not found.");
        }

        // Check if the updated po_number and po_date already exist for another PO
        $existingPo = Setup_Po::where('po_number', $request->input('po_number'))
            ->first();

        if ($existingPo) {
            return redirect()->route('pomaster_list')->with('info', "PO Master Updated Successfully");
        }

        // Update the PO
        $po->update([
            'project_site' => $request->input('project_site'),
            'po_number' =>  $request->input('po_number'),
            'po_date' => $request->input('po_date'),
            'po_value' => $request->input('po_value'),
            'consumed' => $request->input('consumed'),
        ]);

        return redirect()->route('pomaster_list')->with('info', "PO Master Updated Successfully");
    }


    public function pomaster_store(Request $request)
    {
        // Have to check if PO already exists
        $existingPO = Setup_PO::where('po_number', $request->po_number)
            ->where('po_date', $request->po_date)
            ->where('project_site', $request->Project_site)
            ->exists();

        if ($existingPO) {
            return redirect()->route('pomaster_create')->withInput()->with('warning', 'PO already exists.');
        }

        // Create a new PO record
        $po = new Setup_PO();
        $po->division_id = $request->division;
        $po->unit_id = $request->unit;
        $po->region_id = $request->region;
        $po->customer_id = $request->customer; // Ensure that customer_id is assigned from the request
        $po->project_site = $request->Project_site;
        $po->po_number = $request->po_number;
        $po->po_date = $request->po_date;
        $po->po_value = $request->po_value;
        $po->consumed = $request->consumed;
        $po->balance = $request->balance;
        $po->save();

        // Redirect back with success message
        return redirect()->route('pomaster_list')->with('success', 'PO Master added successfully');
    }


    // public function fetchUnits(Request $request)
    // {
    //     $divisionId = $request->input('division');

    //     $units = Unit::where('division_id', $divisionId)->get();

    //     return response()->json(['units' => $units]);
    // }

    public function fetchCustomers(Request $request)
    {
        $divisionId = $request->input('division');
        $regionId = $request->input('region');
        $unitId = $request->input('unit');

        // Fetch customers based on the provided IDs
        $customers = Setup_Customer::where('division_id', $divisionId)
            ->where('region_id', $regionId)
            ->where('unit_id', $unitId)
            ->get();

        // Return customers as JSON response
        return response()->json(['customers' => $customers]);
    }

    public function fetchRegions(Request $request)
    {
        $unitId = $request->input('unit');

        $regions = Setup_Region::where('unit', $unitId)->where('flag', 1)->get();

        return response()->json(['regions' => $regions]);
    }


    ///////////////////////////////////////////////////--> SETUP-CUSTOMER --> //////////////////////////////////////////////////

    //CUSTOMER-LIST
    public function customer_list()
    {

        $customer = Setup_Customer::where('flag', true)->where('flag', true)->get();
        return view('Timesheet.customerlist', compact('customer'));
    }

    //CUSTOMER-CREATE
    public function customer_create()
    {
        $companies = Setup_Company::all();
        $state = Setup_Details::get('state');
        return view('Timesheet.customer', compact(['companies', 'state']));
    }

    //CUSTOMER-STORE
    public function customer_store(Request $request)
    {
        // try {
        // Retrieve form data
        $formData = $request->only([
            'company_id' => 1,
            'contact_number',
            'contact_person_name',
            'door_flat_no_build_name',
            'city',
            'road_street_name',
            'area',
            'pincode',
            'state',
            'email',
            'tin_no',
            'tan_no',
            'pan_no',
            'service_tax_exemption',
            'customer_name',
            'tds_percentage',
            'company_id'
        ]);

        // Check if a customer with the same details already exists
        $existingCustomer = Setup_Customer::where('email', $formData['email'])
            ->where('tin_no', $formData['tin_no'])
            ->where('tan_no', $formData['tan_no'])
            ->where('customer_name', $formData['customer_name'])
            ->where('tds_percentage', $formData['tds_percentage'])
            ->exists();

        // If the customer already exists, redirect back with an error message
        if ($existingCustomer) {
            return redirect()->route('setup_customer_create')->withInput()->with('info', 'Customer already exists');
        }

        // Create a new customer
        Setup_Customer::create($formData);

        // Redirect to a route after successful submission
        return redirect()->route('customer_list')->with('success', 'Customer created successfully!');
        // } catch (\Exception $e) {
        // If an exception occurs, handle it here
        return redirect()->route('setup_customer_create')->withInput()->with('error', 'Failed error');
        // }
    }


    //CUSTOMER-DELETE
    public function customer_delete($id)
    {
        $region = Setup_Customer::find($id);
        $region->update([
            'flag' => 0,
            'updated_at' => now(),
        ]);
        return redirect()->route('customer_list')->with('delete', "Customer Deleted Successfully");
    }

    //CUSTOMER-EDIT
    public function customer_edit($id)
    {
        $customer = Setup_Customer::find($id);
        $state = Setup_Details::get('state');
        return view('Timesheet.customeredit', compact('customer', 'state'));
    }

    //CUSTOMER-UPDATE
    public function customer_update(Request $request, $id)
    {
        // try {
        // Find the customer by ID
        $customer = Setup_Customer::findOrFail($id);

        // Check if a customer with the same details already exists
        $existingCustomer = Setup_Customer::where([

            'tin_no' => $request->tin_no,
            'tan_no' => $request->tan_no,
            'pan_no' => $request->pan_no,
        ])->where('id', '!=', $id)->exists();

        // If the customer already exists, redirect back with an error message
        if ($existingCustomer) {
            return redirect()->route('setup_customer_create')->withInput()->with('info', 'Customer already exists');
            return redirect()->back()->with('info', 'Duplicate customer data. Customer already exists.');
        }

        // Update customer data
        $customer->update($request->all());

        // Redirect back with success message or do whatever needed
        return redirect()->route('customer_list')->with('info', 'Customer updated successfully');
        // } catch (\Exception $e) {
        // Handle the exception
        return redirect()->back()->with('error', 'Failed to update customer. Please try again.');
        // }
    }

///Gst
public function setup_gstmaster()
{
    $customers = Setup_Customer::where('flag', true)->get();
    $state = Setup_Details::get('state');
    return view('Timesheet.gstmaster', compact('customers', 'state'));
}

public function storegst(Request $request)
{
    // Retrieve form data
    $formData = $request->only([
        'customer_id',
        'state',
        'gst_number',
        'pan_number',
    ]);

    // Check if the GST number already exists
    $existingGST = SetupGst::where('gst_number', $formData['gst_number'])->exists();

    // If the GST number already exists, redirect back with an error message
    if ($existingGST) {
        return redirect()->back()->withInput()->with('error', 'GST number already exists.');
    }

    // Create a new GST record
    $newGST = SetupGst::create($formData);

    // Redirect to a route after successful submission
    return redirect()->route('customer_list')->with('success', 'GST created successfully!');
}


public function index()
{
    // Fetch all customers for the dropdown
    $customers = Setup_Customer::all();

    // Initially, set $gstdetails to an empty array
    $gstdetails = [];

    // Check if a customer is selected
    if (request()->has('customer_id')) {
        // Fetch the selected customer
        $selectedCustomer = Setup_Customer::findOrFail(request()->input('customer_id'));

        // Fetch the GST details for the selected customer
        $gstdetails = SetupGst::where('customer_id', $selectedCustomer->id)->get();
    }

    return view('Timesheet.index', compact('customers', 'gstdetails'));
}
public function fetchGstDetails(Request $request)
{
    $customerId = $request->input('customer_id');
    $gstdetails = SetupGst::where('customer_id', $customerId)->where('flag', true)->get();

    return response()->json(['gstdetails' => $gstdetails]);
}

public function checkGSTNumber(Request $request)
{
    $gstNumber = $request->input('gst_number');

    $exists = SetupGst::where('gst_number', $gstNumber)->exists();

    return response()->json(['exists' => $exists]);
}



public function update_gst(Request $request, $id)
{
    // Find the GST record by ID
    $gst = SetupGst::findOrFail($id);

    // Update the GST record with the new data
    $gst->update([
        'customer_id' => $request->customer_id,
        'state' => $request->state,
        'gst_number' => $request->gst_number,
        'pan_number' => $request->pan_number,
    ]);

    // Redirect back with success message
    return redirect()->route('gstmaster')->with('info', 'GST Master details updated successfully.');
}



public function edit_gst_page($id)
{
    $gst = SetupGst::find($id);
    $state = Setup_Details::get('state');
    $customers = Setup_Customer::where('flag', true)->get();
    return view('Timesheet.editgst', compact(['gst', 'customers', 'state']));
}



public function gst_delete($id)
{

    $division = SetupGst::find($id);
    $division->update([
        'flag' => 0,
        'updated_at' => now(),
    ]);
    return redirect()->route('gstmaster')->with('delete', 'GST Deleted Sucessfully');
}


}