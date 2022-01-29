<?php

namespace App\Models;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentTaggable\Taggable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Laravel\Scout\Searchable;
use \Venturecraft\Revisionable\RevisionableTrait;


class Video extends Model implements Viewable, HasMedia
{
    use HasFactory, InteractsWithViews, Sluggable, Taggable, InteractsWithMedia, Searchable, RevisionableTrait;

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

    public static function recent()
    {
        return Video::where('is_approved', 1)->orderBy('created_at', 'desc')->get()->take(5);
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

    public static function hot()
    {
        return Video::orderByViews()->where('is_approved',1)->whereDate('created_at', '>=', Carbon::now()->subDays(7))->take(12)->get();
    }

    public function reports()
    {
        return $this->morphMany(Report::class, 'reportable');
    }

    public function report()
    {
        return $this->hasOne(Report::class, 'reportable_id');
    }

    public function comment()
    {
        return $this->hasOne(Comment::class, 'commentable_id');
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
