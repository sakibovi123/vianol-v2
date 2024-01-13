<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\RoleInterface;
use Exception;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private RoleInterface $roleInterface;

    public function __construct(RoleInterface $roleInterface)
    {
        $this->roleInterface = $roleInterface;
    }

    public function index()
    {
        // showing all roles
        try{
            $roles = $this->roleInterface->all();
            return view("roles.index", [
                "roles" => $roles
            ]);
        } catch(Exception $e) {
            return $e;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            return view("roles.create");
        } catch ( Exception $e ) {
            return $e;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = [
                "role_name" => $request->input("role_name")
            ];
            $this->roleInterface->save($data);
            return redirect()->route("")->with("success","Role added successfully");
        } catch ( Exception $e ) { 
            return $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $role = $this->roleInterface->find($id);
            return view("", [
                "role" => $role
            ]);
        } catch( Exception $e ) {
            return $e;
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = $this->roleInterface->find($id);
        return view("roles.edit", [
            "role" => $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // $role = $this->roleInterface->find($id);
            $data = [
                "role_name" => $request->input("role_name")
            ];
            $role = $this->roleInterface->update($id, $data);
            return redirect()->route("")->with("success","Role updated!!");
        } catch ( Exception $e ) {
            return $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->roleInterface->delete($id);
    }
}
