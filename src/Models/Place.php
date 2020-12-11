<?php

namespace LambdaDigamma\MMPlaces\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use LambdaDigamma\MMEvents\Traits\HasPackageFactory;
use Spatie\Translatable\HasTranslations;

class Place extends Model
{
    use SoftDeletes;
    use HasPackageFactory;
    use HasTranslations;

    protected $table = "mm_places";
    protected $translatable = ['name'];
}
