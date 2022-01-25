<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'reportable_type',
        'reportable_id',
        'reason',
        'comment',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
    ];

    public function reportable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function video()
    {
        return $this->hasOne(Video::class,'id');
    }

    public function users()
    {
        return $this->hasOne(User::class, 'id');
    }

    public static function reported(Video $video)
    {
        return Report::where('reportable_id', $video->id)->count();
    }

    public static function allReported()
    {
        return Report::groupBy('reportable_id')->pluck('reportable_id')->count();
    }
}
