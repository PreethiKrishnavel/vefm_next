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

class BudgetController extends Controller
{
      //Setup Engineer
      public function Setup_engineer()
      {
          $divisions = Setup_Division::where('flag', true)->get();
          $units = [];
          $regions = [];
          $bank = Setup_Details::get('bank_name');
          $company = Setup_Company::where('flag', true)->get();
          return view('Budget.addengineer', compact('divisions', 'units', 'regions', 'company', 'bank'));
      }
      public function checkEngineerEmail(Request $request)
      {
          // Retrieve the email from the request
          $email = $request->input('email');
  
          // Check if the email already exists in the database
          $unique = !Setup_Engineer::where('email_id', $email)->exists();
  
          // Return the response as JSON
          return response()->json(['unique' => $unique]);
      }
      
      
    public function engineer_save(Request $request)
    {

        // Check if an engineer with the same engineer_ecode already exists
        $existingEngineer = Setup_Engineer::where('engineer_ecode', $request->engineer_ecode)->first();

        // If the engineer already exists, show a message and redirect back
        if ($existingEngineer) {
            return redirect()->route('Setup_engineer')->withInput()->with('warning', 'Engineer with this Ecode already exists!');
        }

        // If the engineer doesn't exist, create a new one
        Setup_Engineer::create([
            'company_id' => $request->input('company_id'),
            'division_id' => $request->input('division'),
            'unit_id' => $request->input('unit'),
            'region_id' => $request->input('region'),
            'person_role' => $request->input('person_role'),
            'engineer_ecode' => $request->engineer_ecode,
            'engineer_name' => $request->engineer_name,
            'engineer_designation' => $request->engineer_designation,
            'email_id' => $request->email_id,
            'mobile_number' => $request->mobile_number,
            'doj' => $request->doj,
            'dop' => $request->dop,
            'experience' => $request->experience,
            'yocc' => $request->yocc,
            'eligible_allowance' => $request->eligible_allowance,
            'perday_allowance' => $request->perday_allowance,
            'bank_name' => $request->bank_name,
            'account_number' => $request->account_number,
            'ifsc_code' => $request->ifsc_code,
        ]);

        // Redirect back to the engineer creation page with a success message
        return redirect()->route('Setup_engineer_list')->with('success', 'Engineer created successfully!');
    }


    public function checkUniqueEngineerId(Request $request)
    {
        $engineer_ecode = $request->engineer_ecode;

        $engineer_ecode = Setup_Engineer::where('engineer_ecode', $engineer_ecode)->first();

        if ($engineer_ecode) {
            return response()->json(['unique' => false]);
        } else {
            return response()->json(['unique' => true]);
        }
    }

    public function engineer_list()
    {
        $engineer = Setup_Engineer::where('flag', true)->get();
        return view('Budget.engineerlist', compact('engineer'));
    }

    public function edit_engineer_page($id)
    {
        $engineer = Setup_Engineer::find($id);
        return view('Budget.editengineer', compact('engineer'));
    }

    public function update_engineer(Request $request, $id)
    {
        try {
            // Find the engineer record by ID
            $engineer = Setup_Engineer::findOrFail($id);

            // Check if the email ID exists for another engineer
            $existingEngineer = Setup_Engineer::where('email_id', $request->email_id)
                ->where('id', '!=', $id) // Exclude the current engineer being updated
                ->exists();

            // If the email ID exists for another engineer, return with an error message
            if ($existingEngineer) {
                return redirect()->route('edit_engineer', ['id' => $id])->withInput()->with('error', 'Email ID already exists for another engineer.');
            }
            // Update the engineer details
            $engineer->update([
                'email_id' => $request->email_id,
            ]);

            // Redirect back with success message
            return redirect()->route('Setup_engineer_list')->withInput()->with('info', 'Engineer details updated successfully.');
        } catch (\Exception $e) {
            // Handle any unexpected errors
            return redirect()->route('edit_engineer')->withInput()->with('error', 'An error occurred while updating engineer details.');
        }
    }


    public function delete_engineer($id)
    {
        $engineer = Setup_Engineer::where('id', $id);
        $engineer->update([
            'flag' => 0,
            'updated_at' => now(),
        ]);
        return redirect()->route('Setup_engineer_list')->with('delete', 'Engineer Deleted Sucessfully');
    }

}