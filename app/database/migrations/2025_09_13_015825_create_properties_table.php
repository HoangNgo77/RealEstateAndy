<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name', 500);
            $table->string('slug', 500)->unique();
            $table->text('description');
            $table->double('price')->nullable();

            /**
             * Address details
             */
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();

            /**
             * Property details
             */
            $table->string('type')->nullable();
            $table->integer('room')->nullable();
            $table->integer('bedroom')->nullable();
            $table->integer('bathroom')->nullable();
            $table->integer('bigyard')->nullable();
            $table->string('purpose')->nullable();
            $table->double('area')->nullable();
            $table->boolean('parking')->nullable();
            $table->boolean('elevator')->nullable();
            $table->boolean('wifi')->nullable();
            $table->integer('builded_year')->nullable();

            /**
             * User action tracking
             */
            $table->foreignIdFor(User::class, 'created_by');
            $table->foreignIdFor(User::class, 'updated_by')->nullable();

            /**
             * Publication details
             */
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
