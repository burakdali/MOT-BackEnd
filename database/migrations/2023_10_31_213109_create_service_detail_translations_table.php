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
        Schema::create('service_detail_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('service_detail_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');
            $table->text('content');
            $table->unique(['locale', 'service_detail_id']);
            $table->foreign("service_detail_id")->references("id")->on("service_details")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_detail_translations');
    }
};
