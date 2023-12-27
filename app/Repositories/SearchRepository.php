<?php

namespace App\Repositories;
use App\Models\Property;

class SearchRepository
{
    private $query;

    public function __construct()
    {
        $this->query = Property::query();
    }

    public function model()
    {
       return $this->query;
    }

    public function applyNameFilter($name)
    {
        $this->query->where('name', 'like', '%' . $name . '%');
    }

    public function applyBedroomsFilter($bedrooms)
    {
        $this->query->where('bedrooms', $bedrooms);
    }

    public function applyBathroomsFilter($bathrooms)
    {
        $this->query->where('bathrooms', $bathrooms);
    }

    public function applyStoreysFilter($storeys)
    {
        $this->query->where('storeys', $storeys);
    }

    public function applyGaragesFilter($garages)
    {
        $this->query->where('garages', $garages);
    }

    public function applyMinPriceFilter($min_price)
    {
        $this->query->where('price', '>=', $min_price);
    }

    public function applyMaxPriceFilter($max_price)
    {
        $this->query->where('price', '<=', $max_price);
    }

    
}
