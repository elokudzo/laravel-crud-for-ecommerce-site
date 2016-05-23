<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suppliers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('supplier_name');
			$table->string('supplier_uniq_id')->unique();
			$table->string('supplier_country');
			$table->string('supplier_website')->nullable();
			$table->string('supplier_phone_number_one');
			$table->string('supplier_phone_number_two')->nullable();
			$table->string('supplier_email')->nullable();
			$table->string('skype_id')->nullable();
			$table->string('supplier_pobox')->nullable();
			$table->string('contact_person_name')->nullable();
			$table->string('contact_person_phone')->nullable();
			$table->text('catalog');
			$table->string('our_id')->nullable();
			$table->string('reliability');
			$table->string('sell_credit');
			$table->string('supplier_currency');
			$table->string('approval');
			$table->string('legal_document')->nullable();
			$table->string('created_by');	
			$table->text('comments')->nullable();
			$table->timestamps();
			$table->softDeletes();
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('suppliers');
	}

}
