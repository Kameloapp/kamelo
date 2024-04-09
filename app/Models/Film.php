<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Film extends Item
{
    public $timestamps = false;
    protected $table = 'films';
    protected $support = 'film';
    protected $fillable = [ 'idImdb', 'titre', 'synopsys', 'sortie', 'duree', 'noteBase' ];

    public static function getUrlMedia($type, $object, $taille = 'large')
    {
        return Item::getItemMedia('films', $type, $object, $taille);
    }


}
