<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Services\SearchService;




class SearchController extends Controller
{
    protected $service;

    /**
     * SearchController constructor.
     * @param SearchService $service
     */
    public function __construct(SearchService $service)
    {
        $this->service = $service;
    }

    
    /**
 * @OA\Get(
 *     path="/api/properties/search",
 *     summary="Search properties",
 *     tags={"Properties"},
 *     @OA\Parameter(
 *         name="name",
 *         in="query",
 *         description="Name to search",
 *         required=false,
 *         @OA\Schema(type="string")
 *     ),
 *     @OA\Parameter(
 *         name="bedrooms",
 *         in="query",
 *         description="Number of bedrooms",
 *         required=false,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Parameter(
 *         name="bathrooms",
 *         in="query",
 *         description="Number of bathrooms",
 *         required=false,
 *         @OA\Schema(type="integer")
 *     ),
 *      @OA\Parameter(
 *         name="storeys",
 *         in="query",
 *         description="Number of storeys",
 *         required=false,
 *         @OA\Schema(type="integer")
 *     ),
 *      @OA\Parameter(
 *         name="garages",
 *         in="query",
 *         description="Number of garages",
 *         required=false,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Parameter(
 *         name="prices",
 *         in="query",
 *         description="price range",
 *         required=false,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Created",
 *     ),
 *     @OA\Response(
 *         response=400,
 *         description="Bad request",
 *     ),
 * )
 */
    

    public function search(Request $request)
    {
        $query = $this->service->search($request->only(['name', 'bedrooms', 'bathrooms', 'storeys', 'garages', 'min_price', 'max_price']));
        $result = $query->get();
        return response()->json($result, Response::HTTP_CREATED);
    }
}
