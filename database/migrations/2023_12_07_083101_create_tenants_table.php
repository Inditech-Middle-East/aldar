<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->id();
            $table->string('store_name');
            $table->string('tenant_code');
            $table->string('email_id');
            $table->string('username');
            $table->string('password');
            $table->string('outlet_code');
            $table->string('mall_code');
            $table->string('floor');
            $table->string('category');
            $table->date('lease_startdate');
            $table->date('lease_enddate');
            $table->date('created_date');
            $table->date('modified_date');
            $table->string('created_by');
            $table->string('group_name');
            $table->string('areas');
            $table->decimal('base_rent', 10, 2);
            $table->decimal('revenue_share', 10, 2);
            $table->boolean('disable');
            $table->boolean('manual_flag');
            $table->string('unit_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
