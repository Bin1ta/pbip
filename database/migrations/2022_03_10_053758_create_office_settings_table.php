<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('office_settings', function (Blueprint $table) {
            $table->id();
            $table->string('office_name')->nullable();
            $table->string('office_phone')->nullable();
            $table->string('office_email')->nullable();
            $table->string('cover_photo')->nullable();
            $table->string('office_address')->nullable();
            $table->string('en_header')->nullable();
            $table->string('ne_header')->nullable();
            $table->foreignId('chief_id')->nullable()->constrained('employees')->nullOnDelete()->onUpdate('no action');
            $table->foreignId('information_officer_id')->nullable()->constrained('employees')->nullOnDelete()->onUpdate('no action');
            $table->text('map_iframe')->nullable();
            $table->text('facebook_iframe')->nullable();
            $table->text('twitter_iframe')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('office_settings');
    }
};
