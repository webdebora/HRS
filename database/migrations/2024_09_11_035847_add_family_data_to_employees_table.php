<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFamilyDataToEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->string('spouse_name')->nullable()->after('position');
            $table->text('children_names')->nullable()->after('spouse_name');
            $table->date('marriage_date')->nullable()->after('children_names');
            $table->string('marriage_certificate_number')->nullable()->after('marriage_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn('spouse_name');
            $table->dropColumn('children_names');
            $table->dropColumn('marriage_date');
            $table->dropColumn('marriage_certificate_number');
        });
    }
}
