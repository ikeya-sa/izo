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
        Schema::create('news', function (Blueprint $table) {
            $table->id(); // 記事ID
            $table->string('title', 90); // タイトル
            $table->string('body_1', 255);  // 本文1
            $table->string('body_2', 255)->nullable();;  // 本文2
            $table->string('body_3', 255)->nullable();;  // 本文3
            $table->string('body_4', 255)->nullable();;  // 本文4
            $table->string('image_path', 255)->nullable(); // 画像パス
            $table->string('ref_text_1', 255)->nullable();  // 参照先1
            $table->text('ref_url_1')->nullable();  // 参照先URL1
            $table->string('ref_text_2', 255)->nullable();  // 参照先2
            $table->text('ref_url_2')->nullable();  // 参照先URL2
            $table->string('ref_text_3', 255)->nullable();  // 参照先3
            $table->text('ref_url_3')->nullable();  // 参照先URL3
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
        Schema::dropIfExists('news');
    }
};
