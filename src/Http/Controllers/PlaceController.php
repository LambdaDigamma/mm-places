<?php

namespace LambdaDigamma\MMPlaces\Controllers;

use Illuminate\Http\JsonResponse;
use LambdaDigamma\MMPlaces\Http\Requests\UpdateGeneralPlace;
use LambdaDigamma\MMPlaces\Models\Place;

class PlaceController extends Controller
{
    public function update(UpdateGeneralPlace $request, Place $place)
    {
        $place->update($request->validated());

        return $request->wantsJson()
                ? new JsonResponse('', 200)
                : back()->with('success', 'Die Daten wurden gespeichert.');
    }
}
