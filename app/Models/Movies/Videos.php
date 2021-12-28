<?php

namespace App\Models\Movies;

use App\Models\Shows\Episodes;
use App\Models\Shows\Trailers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Screen\AsSource;

/**
 * App\Models\Videos
 * @property $url_path
 * @property $title
 * @property $thumb_url
 * @property $provider
 * @property $code
 * @property $movie
 * @property $shows
 * @property $thumbnail
 * @property $trailer_files
 */
class Videos extends Model
{
    use HasFactory,AsSource,Attachable;

    protected $fillable = [
        'title',
        'author',
        'channel',
        'height',
        'width',
        'provider',
        'thumb_h',
        'thumb_w',
        'code',
        'thumb_url',
        'url_path',

    ];

    protected $hidden = ['created_at','updated_at'];


    protected static function booted()
    {
        static::deleted(function ($video) {
            $video->attachment->each->delete();
        });
    }


    public function movies()
    {
        return $this->belongsTo(Movies::class,'videos_id','id')->withDefault();
    }

    public function episodes()
    {
        return $this->belongsTo(Episodes::class,'videos_id','id')->withDefault();
    }

    public function thumbnail()
    {
        return $this->hasOne(Attachment::class, 'id', 'thumb_url')->withDefault();
    }

    public function trailers()
    {
        return $this->belongsTo(Trailers::class,'videos_id','id')->withDefault();
    }



}
