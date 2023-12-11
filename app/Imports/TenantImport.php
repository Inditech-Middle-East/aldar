<?php

namespace App\Imports;

use App\Models\Tenant;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Log;


class TenantImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
	
	    
        return new Tenant([
            'tenant_name' => $row[0],
            'tenant_code' => $row[1],
            'username' => $row[2],
            'password' => $row[3],
            'outlet_code' => $row[4],
            'mall_code' => $row[5],
            'floor' => $row[6],
            'category' => $row[7],
            'lease_startdate' => $this->excelToDate($row[8]),
            'lease_enddate' => $this->excelToDate($row[9]),
            'created_date' => $this->excelToDate($row[10]),
            'modified_date' => $this->excelToDate($row[11]),
            'created_by' => $row[12],
            'group_name' => $row[13],
            'areas' => $row[14],
            'base_rent' => $row[15],
            'active' => $row[16],
            'unit_type' => $row[17],
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
	
	private function excelToDate($excelDate)
    {
        // Convert Excel serial date to Carbon date
        return Carbon::createFromDate('1899-12-30')->addDays($excelDate)->toDateString();
    }
}
