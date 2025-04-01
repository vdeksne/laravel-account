<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Unique ID
            $table->string('first_name'); // First name
            $table->string('last_name'); // Last name
            $table->string('email')->unique(); // Unique email
            $table->boolean('subscribed')->default(0); // Subscribed to newsletter
            $table->timestamp('email_verified_at')->nullable(); // Email verification timestamp
            $table->string('password'); // Password
            $table->rememberToken(); // Token for "remember me" functionality
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

class UpdateUsersTableStructure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->nullable(false)->after('id'); // Add first_name
            $table->string('last_name')->nullable(false)->after('first_name'); // Add last_name
            $table->boolean('subscribed')->default(0)->after('email'); // Add subscribed
            $table->string('email')->unique(); // Unique email
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
            $table->dropColumn(['first_name', 'last_name', 'subscribed', 'email']);
        });
    }
}
