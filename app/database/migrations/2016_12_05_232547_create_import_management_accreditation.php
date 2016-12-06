<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImportManagementAccreditation extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('import_management_accreditation', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('id_customer')->nullable();
            $table->string('customer_name', 500)->nullable();
            $table->integer('import_day')->nullable();
            $table->integer('import_month')->nullable();
            $table->integer('import_year')->nullable();
            $table->integer('id_vote')->nullable();
            $table->string('license_plate',20)->nullable();
            $table->string('weights_total_tons', 20)->nullable();
            $table->string('vehicle_weight_tons', 20)->nullable();
            $table->string('fresh_weight_tons', 20)->nullable();
            $table->string('percentage_humus', 20)->nullable();
            $table->string('percentage_oversize', 20)->nullable();
            $table->string('percentage_shells', 20)->nullable();
            $table->string('weights_minus_tons', 20)->nullable();
            $table->string('production_locations',20)->nullable();
            $table->integer('id_status')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('import_management_accreditation');	}

}
