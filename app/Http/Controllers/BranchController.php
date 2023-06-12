<?php

namespace App\Http\Controllers;

use App\Http\Resources\BranchResource;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $data = Branch::with('employees', 'cats')->paginate();
        return  BranchResource::collection($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Branch $branch): BranchResource
    {
        $branch->load('employees', 'cats');
        return new BranchResource($branch);
    }


}
