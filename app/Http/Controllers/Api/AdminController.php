<?php

namespace App\Http\Controllers\Api;

use App\Models\Admin;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            $user = $request->get("user");
            if (Admin::where("users", $user)->exists()) {
                return response()->json(['status' => 'admin']);
            } else {
                return response()->json(['status' => 'user']);
            }
        }
        catch (\Exception) {
            return response()->json(['status' => 'error'], 401);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admins)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admins)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admins)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admins)
    {
        //
    }
}
