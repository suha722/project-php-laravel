<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Illuminate\Database\Schema\Blueprint::__call("bigIncremants") ;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigincrements("post_id");
            $table->string("p_title");
            $table->string("p_content");
            $table->bigInteger("post_user")->unsigned();
            $table->bigInteger("post_cat")->unsigned();
            $table->foreign("post_user")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("post_cat")->references("cat_id")->on("categories")->onDelete("cascade");
            $table->timestamp('date_from')->nullable();
            $table->timestamp('date_to')->nullable();
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
        Schema::dropIfExists('posts');
    }
};
