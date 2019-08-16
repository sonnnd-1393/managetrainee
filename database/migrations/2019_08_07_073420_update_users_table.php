<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('university')->after('password');
            $table->unsignedInteger('batch_id')->after('university');
            $table->unsignedInteger('language_id')->after('batch_id');
            $table->unsignedInteger('user_id')->nullable()->after('language_id');
            $table->unsignedInteger('position_id')->after('user_id');
            $table->string('avatar')->nullable()->after('position_id');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'university',
                'batch_id',
                'user_id',
                'position_id',
                'avatar'
            ]);
        });
    }
}
