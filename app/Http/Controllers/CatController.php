<?php

namespace App\Http\Controllers;

use App\Http\Resources\CatResource;
use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $data = Cat::with('branch')->paginate();
        return CatResource::collection($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cat $cat): CatResource
    {
        $cat->load('branch');
        return new CatResource($cat);
    }
}
