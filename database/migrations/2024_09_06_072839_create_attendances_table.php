<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_number'); // Changed to match the 'id_number' field in 'employees' table
            $table->date('date');
            $table->enum('status', ['present', 'absent', 'on_leave']);
            $table->timestamps();

            // Foreign key constraint linking to the 'employees' table
            $table->foreign('id_number')->references('id_number')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
