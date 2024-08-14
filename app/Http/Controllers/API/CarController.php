<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Car\UpdateCarRequest;
use App\Http\Requests\Car\CreateCarRequest;
use App\Http\Resources\Car\CarResource;
use App\Models\Car;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CarController extends Controller
{
    public function __construct()
    {

    }

    public function index(): AnonymousResourceCollection
    {
        $cars = Car::useFilters()->dynamicPaginate();

        return CarResource::collection($cars);
    }

    public function store(CreateCarRequest $request): JsonResponse
    {
        $car = Car::create($request->validated());

        return $this->responseCreated('Car created successfully', new CarResource($car));
    }

    public function show(Car $car): JsonResponse
    {
        return $this->responseSuccess(null, new CarResource($car));
    }

    public function update(UpdateCarRequest $request, Car $car): JsonResponse
    {
        $car->update($request->validated());

        return $this->responseSuccess('Car updated Successfully', new CarResource($car));
    }

    public function destroy(Car $car): JsonResponse
    {
        $car->delete();

        return $this->responseDeleted();
    }

   
}
