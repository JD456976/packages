<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Comments\Models\Concerns\HasComments;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Laravel\Scout\Searchable;
use \Venturecraft\Revisionable\RevisionableTrait;


class Video extends Model implements Viewable, HasMedia
{
    use HasFactory, InteractsWithViews, Sluggable, Taggable, InteractsWithMedia, HasComments, Searchable, RevisionableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'content',
        'zip',
        'is_featured',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    protected $removeViewsOnDelete = true;

    protected $keepRevisionOf = ['title','zip','content'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->extractVideoFrameAtSecond(20)
            ->performOnCollections('videos')
            ->nonQueued();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('videos')
            ->useFallbackUrl('/images/anonymous-user.jpg')
            ->useFallbackPath(public_path('/images/anonymous-user.jpg'));
    }

    public function recent()
    {
        return $this->Video::orderBy('created_at', 'desc')->get()->take(5);
    }

    public static function count()
    {
        return Video::where('user_id', Auth::user()->id)->count();
    }

    public static function pending()
    {
        return Video::where('is_approved', 0)->count();
    }

    public static function approved()
    {
        return Video::where('is_approved', 1)->count();
    }
}
