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
            $table->enum('type', ['Business_Administration','commercial_arbitration','Diplomatic_relations','Human_Resource_Management'])->nullable();
            $table->longText('data')->nullable();
            $table->longText('time')->comment('الساعه')->nullable();

            $table->string('duplicate')->default(0);
            $table->string('test');
            $table->string('asdasdasdasdasd')->default('=COUNTIF(D:D,D3)');
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
