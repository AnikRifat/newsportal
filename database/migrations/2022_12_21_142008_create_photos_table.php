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
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->string('photo_id')->unique();
            $table->string('key');
            $table->string('title', 500);
            $table->string('subtitle', 2000)->nullable();;
            $table->longText('content');
            $table->string('image');
            $table->string('social_image')->nullable();
            $table->string('status')->default('1')->comment('1->active,0->inactive');
            $table->string('datetime')->nullable();
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
        Schema::dropIfExists('photos');
    }
};
