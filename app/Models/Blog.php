<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Blog extends Model implements HasMedia

{
    use HasFactory,InteractsWithMedia;


    protected $fillable =
    ['title',
    'image',
    'imagealt',
    'url',
    'description',
    'category',
    'author',
    'metakey',
    'metatital',
    'metadescription'
    ];

}
