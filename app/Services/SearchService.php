<?php

namespace App\Services;
use App\Repositories\SearchRepository;



class SearchService

{
    protected $repository;

    public function __construct(SearchRepository $repository)
    {
        $this->repository = $repository;
    }

    public function search(array $searchParams)
    {
        $query = $this->repository->model();

        // Name
        if (isset($searchParams['name'])) {
            $this->repository->applyNameFilter($searchParams['name']);
        }

        // Bedrooms
        if (isset($searchParams['bedrooms'])) {
            $this->repository->applyBedroomsFilter($searchParams['bedrooms']);
        }

        // Bathrooms
        if (isset($searchParams['bathrooms'])) {
            $this->repository->applyBathroomsFilter($searchParams['bathrooms']);
        }

        // Storeys
        if (isset($searchParams['storeys'])) {
            $this->repository->applyStoreysFilter($searchParams['storeys']);
        }

        // Garages
        if (isset($searchParams['garages'])) {
            $this->repository->applyGaragesFilter($searchParams['garages']);
        }

        // Price
        if (isset($searchParams['min_price'])) {
            $this->repository->applyMinPriceFilter($searchParams['min_price']);
        }

        if (isset($searchParams['max_price'])) {
            $this->repository->applyMaxPriceFilter($searchParams['max_price']);
        }

        return $query; 
    }
}
