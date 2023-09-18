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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // 問い合わせID
            $table->string('name', 90); // 名前
            $table->string('email', 254);  // メールアドレス
            $table->string('tel', 13)->nullable();  // 電話番号
            $table->string('genre', 100)->nullable();  // 種別
            $table->text('message');  // 内容
            $table->date('reply_date')->nullable(); // 回答日
            $table->text('reply_notes')->nullable();  // 回答記録
            $table->string('user_name', 90)->nullable();  // 更新管理者名
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
        Schema::dropIfExists('contacts');
    }
};
