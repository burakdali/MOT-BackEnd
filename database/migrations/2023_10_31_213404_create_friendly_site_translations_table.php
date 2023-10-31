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
        Schema::create('friendly_site_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('friendly_site_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->unique(['locale', 'friendly_site_id']);
            $table->foreign("friendly_site_id")->references("id")->on("friendly_sites")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friendly_site_translations');
    }
};
