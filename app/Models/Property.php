<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Property extends Model implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'type',
        'room',
        'bedroom',
        'bathroom',
        'bigyard',
        'purpose',
        'area',
        'parking',
        'elevator',
        'wifi',
        'builded_year',
        'user_id',
        'published_at',
    ];

    /**
     * Register media collections.
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured_image');
    }

    public function getFeaturedImageUrlAttribute()
    {
        return $this->getFirstMediaUrl('featured_image');
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }
}
