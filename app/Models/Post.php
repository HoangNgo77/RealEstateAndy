<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'slug',
        'excerpt',
        'is_published',
        'published_at',
        'user_id',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured_image')
            ->singleFile();
    }

    public function getFeaturedImageUrlAttribute()
    {
        return $this->getFirstMediaUrl('featured_image', 'large');
    }

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function scopePublished($query)
    {
        return $query->where('is_published', true)
            ->where('published_at', '<=', now());
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
