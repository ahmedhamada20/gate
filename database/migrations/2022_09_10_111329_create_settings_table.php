<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name_site')->nullable();
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->string('numberSendSms')->default(0);
            $table->text('notes')->nullable();
            $table->string('phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('url')->nullable();
            $table->longText('photo_navbar')->nullable();
            $table->longText('photo_cover')->nullable();
            $table->longText('photo_site')->nullable();
            $table->foreignId('page_id')->nullable()->constrained('pages')->cascadeOnDelete();
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
        Schema::dropIfExists('settings');
    }
};
