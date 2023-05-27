<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
            // this mean that we need to update the table we need
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('category_id')
            ->constrained('categories', 'id'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // عكس ما قمنا به في الاب  
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            // this will be run when we rollback the database , if we create new column and we do rollback -> this function response of delete the column  
            $table->dropForeignId('category_id');
        });
    }
};
