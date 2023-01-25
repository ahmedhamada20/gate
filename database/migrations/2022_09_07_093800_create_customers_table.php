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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->longText('name')->nullable();
            $table->longText('email')->nullable();
            $table->longText('phone')->nullable();
            $table->longText('code')->nullable();
            $table->longText('sloppy')->comment('المؤهل')->nullable();
            $table->longText('jops')->nullable();
            $table->longText('type')->nullable();
            $table->longText('data')->nullable();
            $table->longText('time')->comment('الساعه')->nullable();

            $table->string('duplicate')->default(0);
            $table->string('test');
            $table->string('pagesTypes');
            $table->string('TitlePagesTYpe')->nullable();
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
        Schema::dropIfExists('customers');
    }
};
