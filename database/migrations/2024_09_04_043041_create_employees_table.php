<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {

            $table->bigInteger('id_number')->primary();
            $table->string('full_name');
            $table->string('nickname');
            $table->date('contract_date');
            $table->date('work_date');
            $table->enum('status', ['Aktif', 'Berhenti']);
            $table->string('position');
            $table->string('nuptk');
            $table->enum('gender',['Pria', 'Wanita']);
            $table->string('place_birth');
            $table->date('birth_date');
            $table->string('religion');
            $table->string('email');
            $table->string('hobby');
            $table->enum('marital_status', ['Menikah', 'Belum']);
            $table->string('residence_address');
            $table->string('phone');
            $table->string('address_emergency');
            $table->string('phone_emergency');
            $table->string('blood_type');
            $table->string('last_education');
            $table->string('agency');
            $table->integer('graduation_year');
            $table->string('competency_training_place');
            $table->text('organizational_experience');
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
        Schema::dropIfExists('employees');
    }
}
