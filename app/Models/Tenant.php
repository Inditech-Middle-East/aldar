<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
	  
        protected $fillable = [
        'tenant_name', 'tenant_code', 'username', 'password', 'outlet_code',
        'mall_code', 'floor', 'category', 'lease_startdate', 'lease_enddate',
        'created_date', 'modified_date', 'created_by', 'group_name', 'areas',
        'base_rent', 'active', 'unit_type', 'insurance_expiry_date',
    ];

}
