<?php

namespace LambdaDigamma\MMPlaces\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use LambdaDigamma\MMEvents\Traits\HasPackageFactory;
use LambdaDigamma\MMPlaces\Traits\SerializeTranslations;
use Spatie\Translatable\HasTranslations;

class Place extends Model
{
    use SoftDeletes;
    use SerializeTranslations;
    use HasPackageFactory;
    use HasTranslations;

    protected $table = "mm_places";
    protected $translatable = ['name', 'tags'];
    protected $dates = ['validated_at'];
    protected $casts = [
        'tags' => 'array',
        'extras' => 'array',
    ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('street_name', 'like', '%' . $search . '%');
        })->when($filters['trashed'] ?? null, function ($query, $trashed) {
            if ($trashed === 'with') {
                $query->withTrashed();
            } elseif ($trashed === 'only') {
                $query->onlyTrashed();
            }
        });
    }

    public function scopeValidated($query)
    {
        return $query->where('validated_at', '!=', null);
    }
}
