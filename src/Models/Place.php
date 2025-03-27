<?php

namespace LambdaDigamma\MMPlaces\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use LambdaDigamma\MMPlaces\Database\Factories\PlaceFactory;
use LambdaDigamma\MMPlaces\Traits\SerializeTranslations;
use Spatie\Translatable\HasTranslations;

class Place extends Model
{
    use SoftDeletes;
    use SerializeTranslations;
    use HasFactory;
    use HasTranslations;

    protected $table = "mm_places";
    protected $guarded = ['*', 'id'];
    protected $translatable = ['name', 'tags'];
    protected $casts = [
        'tags' => 'array',
        'extras' => 'array',
        'validated_at' => 'datetime',
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

    protected static function newFactory()
    {
        return PlaceFactory::new();
    }

    public function scopeValidated($query)
    {
        return $query->where('validated_at', '!=', null);
    }
}
