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
        Schema::create('media_center_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('media_center_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');
            $table->text('content');
            $table->unique(['locale', 'media_center_id']);
            $table->foreign("media_center_id")->references("id")->on("media_centers")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_center_translations');
    }
};
