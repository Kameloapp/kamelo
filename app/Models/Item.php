<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Item extends Model
{
    public static function getItemMedia($folder, $type, $object, $taille)
    {
        if ($type == 'affiche') {
            if (!$object->hasAffiche) {
                return config('kifim.default_affiche');
            }
            $mediaId = $object->hasAffiche;
        } else {
            if (!$object->hasFanart) {
                return config('kifim.default_fanart');
            }
            $mediaId = $object->hasFanart;
        }

        return Media::getMediaUrl($mediaId, $folder, $taille);
    }

    /*
     * Retourne l'URL d'un jeu pour un id et un titre
     * */
    public static function getUrl($item, $titre = false)
    {
        if (is_object($item)) {
            return Item::getItemUrl('/film/'.Str::slug($item->titre).'/'.$item->id.'/');
        } else {
            return Item::getItemUrl('/film/'.Str::slug($titre).'/'.$item.'/');
        }
    }

    public static function getItemUrl( $uri )
    {
        return config('kifim.base_url').$uri;
    }

}
