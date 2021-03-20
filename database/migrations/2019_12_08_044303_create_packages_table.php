<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->text('slug');
            $table->string('size')->nullable();
            $table->string('capacity')->nullable();
            $table->string('bed')->nullable();
            $table->string('packageservice')->nullable();
            $table->string('oldprice')->nullable();
            $table->string('newprice')->nullable();
            $table->string('perday')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedInteger('offer')->nullable()->default('0');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('packages');
    }
}
