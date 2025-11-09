<?php

use App\Models\Amenity;
use App\Models\Property;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('amenity_property', function (Blueprint $table) {
            $table->foreignIdFor(Amenity::class);
            $table->foreignIdFor(Property::class);
            $table->string('value')->nullable();

            $table->primary([
                (new Amenity)->getForeignKey(),
                (new Property)->getForeignKey(),
            ]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amenity_property');
    }
};
