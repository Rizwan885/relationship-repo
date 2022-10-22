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
        Schema::create('profile_one_throughs', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('phone');
            $table->unsignedBigInteger('profileable_id');
            $table->string('profileable_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_one_throughs');
    }
};
