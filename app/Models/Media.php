<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    public $timestamps = false;
    protected $table = 'medias';
    protected $fillable = [ 'id', 'support', 'typeMedia', 'idSupport', 'idExterne', 'isMediaValid', 'isTopMedia',
        'dateAdded', 'description' ];


    public function jeu()
    {
        return $this->morphTo();
    }

    /*
     * Retourne l'url d'un media image stocké sur le CDN
     * */
    public static function getMediaUrl($fileName, $folder = 'jeux', $size = 'large')
    {
        if( $fileName > config('kifim.last_jpg') ) $extension = 'webp';
        else $extension = 'jpg';

        return config('kifim.cdn_base_url').'/'.$folder.'/'.$size.'/'.$fileName.'.'.$extension;
    }
}
