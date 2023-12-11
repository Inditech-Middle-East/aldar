<?php

// app/Http/Controllers/FormController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Imports\TenantImport;
use Maatwebsite\Excel\Facades\Excel;

class TenantController extends Controller
{
    public function showForm()
    {
        //return view('form');
    }
	
	public function showTenants()
    {
        $data = tenant::select('id','tenant_name','tenant_code', 'outlet_code', 'mall_code', 'lease_startdate', 'lease_enddate','unit_type','floor')->take(10)->get();
		
			$data = $data->map(function ($item) {
        // Add the link to the first column
        //$item['tenant_name'] = '<a href="#" target="_blank">' . $item['tenant_name'] . '</a>';
        return $item;
    });

        return view('tenant-tenants', ['data' => $data]);
    }
	
	public function fetchData()
	{
	
    $data = tenant::select('id','tenant_name','tenant_code', 'outlet_code', 'mall_code', 'lease_startdate', 'lease_enddate','unit_type')->take(10)->get();
	

	$columnMapping = [
		'tenant_name' => 'TenantName',
		'tenant_code' => 'TenantCode',
		'outlet_code' => 'OutletCode',
		'mall_code' => 'MallCode',
		'lease_startdate' => 'LeaseStartDate',
		'lease_enddate' => 'LeaseEndDate',
		'unit_type' => 'UnitType',
	];


	$data = $data->map(function ($item) {
        // Add the link to the first column
        $item['tenant_name'] = '<a href="#" target="_blank">' . $item['tenant_name'] . '</a>';
        return $item;
    });


    return response()->json(['data' => $data]);
	

	}

    public function processForm(Request $request)
    {
          // Validate the form data
        $validator = Validator::make($request->all(), [
            'tenant_name' => 'required|string|max:255',
            'tenant_code' => 'required|string|max:255',
            'group_name' => 'required|string|max:255',
            'category' => 'required|string', // Adjust the field name
            'outlet_code' => 'required|string|max:255',
            'mall_code' => 'required|string|max:255',
            'unit_type' => 'required|string', // Adjust the field name
            'floor' => 'required|string|max:255',
            'lease_startdate' => 'required|date',
            'lease_enddate' => 'required|date',
            'insurance_expiry_date' => 'required|date',
            'created_date' => 'required|date',
            'modified_date' => 'required|date',
            'areas' => 'required|string|max:255',
            'base_rent' => 'required|numeric',
            'created_by' => 'required|string|max:255',
            'active' => 'required|boolean',
        ]); 
		
		 if ($validator->passes()) {
            // Validation passed, perform your logic here
            
        

        // Process and store the form data
        $tenant = new Tenant([
            'tenant_name' => $request->input('tenant_name'),
            'tenant_code' => $request->input('tenant_code'),
            'group_name' => $request->input('group_name'),
            'category' => $request->input('category'),
            'outlet_code' => $request->input('outlet_code'),
            'mall_code' => $request->input('mall_code'),
            'unit_type' => $request->input('unit_type'),
            'floor' => $request->input('floor'),
            'lease_startdate' => $request->input('lease_startdate'),
            'lease_enddate' => $request->input('lease_enddate'),
            'insurance_expiry_date' => $request->input('insurance_expiry_date'),
            'created_date' => $request->input('created_date'),
            'modified_date' => $request->input('modified_date'),
            'areas' => $request->input('areas'),
            'base_rent' => $request->input('base_rent'),
            'created_by' => $request->input('created_by'),
            'active' => $request->input('active'),
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            // Add other fields
        ]);

        $tenant->save();
		
		return redirect('/tenant-tenants')->with('success', 'Form submitted successfully!');
		
		} else {
            // Validation failed
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Do something with the form data (e.g., save to the database)

        // Redirect or return a response
        //return redirect('/')->with('success', 'Form submitted successfully!');
    }
	
	
	public function postImport(Request $request)
    {
        $request->validate([
			'file' => 'required|mimes:xlsx,xls',
		]);

		$file = $request->file('file');

		Excel::import(new TenantImport, $file, null, \Maatwebsite\Excel\Excel::XLSX, [
			'startRow' => 2, // Skip the first row (header)
		]);

        return redirect('/tenant-tenants')->with('success', 'Form submitted successfully!');
    }
	
	//view tenant 
	
	public function viewTenant(Request $request)
    {
	 $id= $request->input('tenant_id');
	 $data = Tenant::select('*')
    ->where('id', $id)
    ->first();
	
    return view('tenant-view-tenant', ['data' => $data]);
	
	//return redirect()->view('tenant-view-tenant')->with('data', $data);
	
	}
	
	//update Tenant
	    public function updateTenant(Request $request)
    {
          // Validate the form data
        $validator = Validator::make($request->all(), [
            'tenant_name' => 'required|string|max:255',
            'tenant_code' => 'required|string|max:255',
            'group_name' => 'required|string|max:255',
            'category' => 'required|string', // Adjust the field name
            'outlet_code' => 'required|string|max:255',
            'mall_code' => 'required|string|max:255',
            'unit_type' => 'required|string', // Adjust the field name
            'floor' => 'required|string|max:255',
            'lease_startdate' => 'required|date',
            'lease_enddate' => 'required|date',
            'insurance_expiry_date' => 'required|date',
            'created_date' => 'required|date',
            'modified_date' => 'required|date',
            'areas' => 'required|string|max:255',
            'base_rent' => 'required|numeric',
            'created_by' => 'required|string|max:255',
            'active' => 'required|boolean',
        ]); 
		
		 if ($validator->passes()) {
            // Validation passed, perform your logic here
            
        $tenant_id=$request->input('tenant_id');

        // Find the tenant by id
       $tenant = Tenant::find($tenant_id);

		if (!$tenant) {
			// Handle the case where the tenant with the given id is not found
			return response()->json(['message' => 'Tenant not found'], 404);
		}

		// Update the fields with the new values
		$tenant->update([
        'tenant_name' => $request->input('tenant_name'),
        'tenant_code' => $request->input('tenant_code'),
        'group_name' => $request->input('group_name'),
        'category' => $request->input('category'),
        'outlet_code' => $request->input('outlet_code'),
        'mall_code' => $request->input('mall_code'),
        'unit_type' => $request->input('unit_type'),
        'floor' => $request->input('floor'),
        'lease_startdate' => $request->input('lease_startdate'),
        'lease_enddate' => $request->input('lease_enddate'),
        'created_date' => $request->input('created_date'),
        'modified_date' => $request->input('modified_date'),
        'insurance_expiry_date' => $request->input('insurance_expiry_date'),
        'areas' => $request->input('areas'),
        'base_rent' => $request->input('base_rent'),
        'created_by' => $request->input('created_by'),
        'active' => $request->input('active'),
        'username' => $request->input('username'),
        'password' => $request->input('password')
        ]);
		
		return redirect('/tenant-tenants')->with('success', 'Form submitted successfully!');
		
		} else {
            // Validation failed
            //return redirect()->back()->withErrors($validator)->withInput();
			
			return redirect('/tenant-tenants')->with('success', 'Form submitted successfully!');
        }

        // Do something with the form data (e.g., save to the database)

        // Redirect or return a response
        //return redirect('/')->with('success', 'Form submitted successfully!');
    }
	
}

