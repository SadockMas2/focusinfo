<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, SoftDeletes, InteractsWithMedia;
// HasSlug,
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'category_id',
        'author_id',
        'featured_image',
        'published_at',
        'status',
        'view_count',
        'reading_time',
        'seo_meta',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'seo_meta' => 'array',
    ];

    // Relations
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'article_id');
    }



    // public function tags(): BelongsToMany
    // {
    //     return $this->belongsToMany(Tag::class);
    // }

    // Media Library Configuration
    // public function registerMediaCollections(): void
    // {
    //     $this->addMediaCollection('featured_image')
    //         ->singleFile()
    //         ->registerMediaConversions(function (Media $media) {
    //             $this->addMediaConversion('thumb')
    //                 ->fit(Manipulations::FIT_CROP, 300, 200)
    //                 ->nonQueued();

    //             $this->addMediaConversion('og_image')
    //                 ->fit(Manipulations::FIT_CROP, 1200, 630)
    //                 ->nonQueued();
    //         });

    //     $this->addMediaCollection('gallery');
    // }

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('status', 'published')
            ->where('published_at', '<=', now());
    }

    public function scopePopular($query)
    {
        return $query->orderBy('view_count', 'desc');
    }

    // Accessors
    public function getReadingTimeAttribute($value)
    {
        if ($value)
            return $value;

        // Calcul automatique du temps de lecture si non spécifié
        $wordCount = str_word_count(strip_tags($this->content));
        return max(1, ceil($wordCount / 200)); // 200 mots/minute
    }

    public function getFeaturedImageUrlAttribute()
    {
        return $this->getFirstMediaUrl('featured_image');
    }

    public function getFeaturedImageThumbUrlAttribute()
    {
        return $this->getFirstMediaUrl('featured_image', 'thumb');
    }

    // public function getSlugOptions(): SlugOptions
    // {
    //     return SlugOptions::create()
    //         ->generateSlugsFrom('title')
    //         ->saveSlugsTo('slug')
    //         ->doNotGenerateSlugsOnUpdate();
    // }

            // Article précédent
        public function previous()
        {
            return self::where('id', '<', $this->id)
                    ->published()
                    ->orderBy('id', 'desc')
                    ->first();
        }

        // Article suivant
        public function next()
        {
            return self::where('id', '>', $this->id)
                    ->published()
                    ->orderBy('id', 'asc')
                    ->first();
        }


}
