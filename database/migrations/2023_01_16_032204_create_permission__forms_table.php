<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission__forms', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('employee_number');
            $table->date('started_date');
            $table->string('ended_date');
            $table->string('reason');
            $table->integer('print');
            $table->integer('status');
            $table->string('rejection_reason');
            $table->integer('id_RejectedBy');
            $table->integer('id_PermissionType');
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
        Schema::dropIfExists('permission__forms');
    }
};
