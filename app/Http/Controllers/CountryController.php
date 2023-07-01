<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\Country\CountryFilterResource;
use App\Http\Resources\Country\CountryResource;
use App\Models\Country;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CountryController extends Controller
{
    public function countries_filter (Request $request):JsonResponse
    {
        $countries = Country::query();
        $continents = $request->input('continent');
        switch ($continents){
            case 'default':
                break;
            default:
                $continents = explode(',', $continents);
                $countries->continents($continents);
        }
        return $this->sendResponse(CountryFilterResource::collection($countries->get()), 'Countries retrieved with success');
    }
}
