<?php

namespace App\Models;

use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class EscortProfile extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $guarded = [


    ];

    protected $casts = [
        "persoenlichkeit" => 'array',
        'haare' => 'array',
        'busen_merkmale' => 'array',
        'hautfarbe' => 'array',
        'augenfarbe' => 'array',
        'intimbehaarung' => 'array',
        'koerperschmuck' => 'array',
        'piercing' => 'array',
        'sonstiges'=> 'array',
        'typ' => 'array',
        'sprachen' => 'array',
        'allg_service' => 'array',
        'service_fuer'  => 'array',
        'verkehr'   => 'array',
        'massage' => 'array',
        'service_detail' => 'array',
        'service_basic' => 'array',
        'fetisch_basic' => 'array',
        'fetisch_bizar' => 'array',
        'bizarr' => 'array',

     ];

     public function registerMediaConversions(Media $media = null): void
     {

         $this->addMediaConversion('fotos')
               ->performOnCollections('escortfotos')
               ->width(368)
               ->height(232)
               ->sharpen(10)
               ->withResponsiveImages()
               ->nonQueued();

         $this->addMediaConversion('thumbs-fotos')
               ->performOnCollections('escortfotos')
               ->crop('crop-center', 90, 40) // Trim or crop the image to the center for specified width and height.
               ->border(1, 'black', Manipulations::BORDER_OVERLAY)
               ->sharpen(10)
               ->nonQueued();

         $this->addMediaConversion('hintergrund')
               ->performOnCollections('escorthintergrund')
               ->width(368)
               ->height(232)
               ->sharpen(10)
               ->nonQueued();

         $this->addMediaConversion('thumbs-hintergrund')
               ->performOnCollections('escorthintergrund')
               ->crop('crop-center', 60, 80) // Trim or crop the image to the center for specified width and height.
               ->border(2, 'red', Manipulations::BORDER_OVERLAY)
               ->sharpen(10)
               ->nonQueued();


         $this->addMediaConversion('old-picture')
               ->sepia()
               ->border(10, 'black', Manipulations::BORDER_OVERLAY)
               ->nonQueued();

         $this->addMediaConversion('thumb-cropped')
              ->performOnCollections('escortfotos')

             ->crop('crop-center', 60, 60) // Trim or crop the image to the center for specified width and height.
             ->border(2, 'red', Manipulations::BORDER_OVERLAY)
             ->nonQueued();
     }


}
