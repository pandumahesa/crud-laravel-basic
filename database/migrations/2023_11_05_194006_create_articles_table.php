<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('content');
        });
    }
}
