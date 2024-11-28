<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sub_division_documents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('sub_division_document_category_id')->nullable()->constrained()->nullOnDelete();
            $table->string('publisher')->nullable();
            $table->date('date');
            $table->longText('description')->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('mark_as_new')->default(1);
            $table->foreignId('sub_division_id')->constrained()->cascadeOnDelete();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sub_division_documents');
    }
};
