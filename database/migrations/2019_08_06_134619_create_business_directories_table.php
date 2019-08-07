<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessDirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_directories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('business_name');
            $table->string('office_contact');
            $table->text('office_address');
            $table->text('business_description');
            $table->string('image');
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
        Schema::dropIfExists('business_dir');
    }
}
