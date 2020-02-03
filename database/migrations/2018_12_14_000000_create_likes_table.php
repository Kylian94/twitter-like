<?php

/*
 * This file is part of the overtrue/laravel-like.
 *
 * (c) overtrue <anzhengchao@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(config('like.likes_table'), function (Blueprint $table) {
            $table->increments('id');

            if (version_compare(app()->version(), '5.8', '>=')) {
                $table->unsignedBigInteger(config('like.user_foreign_key'))->index()->comment('user_id');
            } else {
                $table->unsignedInteger(config('like.user_foreign_key'))->index()->comment('user_id');
            }

            $table->morphs('likable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(config('like.likes_table'));
    }
}
