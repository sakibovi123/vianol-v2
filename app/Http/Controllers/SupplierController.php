<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\SupplierInterface;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    protected $supplierInterface;

    public function __construct(SupplierInterface $supplierInterface)
    {
        $this->supplierInterface = $supplierInterface;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = $this->supplierInterface->all();
        return view("suppliers.index", [
            "suppliers" => $suppliers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("suppliers.create", [

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $img = $request->file("image")->store("images");
        $condition_of_sale = $request->file("condition_of_sale")->store("images");
        $data = [
            "slug" => uniqid(),
            "name" => $request->input("name"),
            "landline_number" => $request->input("landline_number"),
            "mobile_phone" => $request->input("mobile_phone"),
            "email" => $request->input("email"),
            "city" => $request->input("city"),
            "address" => $request->input("address"),
            "longitude" => $request->input("longitude"),
            "latitude" =>   $request->input("latitude"),
            "google_map_link" => $request->input("google_map_link"),
            "is_active" => $request->input("is_active"),
            "description" => $request->input("description"),
            "image" => asset("storage/".$img),
            "condition_of_sale" => asset("storage/".$condition_of_sale),
            "privacy_consent" => $request->input("privacy_consent")
        ];
        $supplier = $this->supplierInterface->save($data);
        return redirect("/providers")->with("success", "Supplier added!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $supplier = $this->supplierInterface->findById($id);
        $GOOGLE_API_KEY = env("GOOGLE_API_KEY");
        return view("suppliers.edit", [
            "supplier" => $supplier,
            "GOOGLE_API_KEY" => $GOOGLE_API_KEY
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $GOOGLE_API_KEY = env("GOOGLE_API_KEY");
        return view("suppliers.edit", [
            "GOOGLE_API_KEY" => $GOOGLE_API_KEY
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $supplier = $this->supplierInterface->findById($id);


        if( $request->hasFile( "image" ) & $request->hasFile( "condition_of_sale" ) ) {
            $img = $request->file("image")->store("images");
            $condition = $request->file("condition_of_sale")->store("condition_of_sale");
            $data = [
                "name" => $request->input("name"),
                "landline_number" => $request->input("landline_number"),
                "mobile_phone" => $request->input("mobile_phone"),
                "email" => $request->input("email"),
                "city" => $request->input("city"),
                "address" => $request->input("address"),
                "longitude" => $request->input("longitude"),
                "latitude" =>   $request->input("latitude"),
                "google_map_link" => $request->input("google_map_link"),
                "is_active" => $request->input("is_active"),
                "description" => $request->input("description"),
                "image" => asset("storage/".$img),
                "condition_of_sale" => asset("storage/".$condition),
                "privacy_consent" => $request->input("privacy_consent")
            ];

            $this->supplierInterface->update($id, $data);
        }
        else{
            $data = [
                "name" => $request->input("name"),
                "landline_number" => $request->input("landline_number"),
                "mobile_phone" => $request->input("mobile_phone"),
                "email" => $request->input("email"),
                "city" => $request->input("city"),
                "address" => $request->input("address"),
                "longitude" => $request->input("longitude"),
                "latitude" =>   $request->input("latitude"),
                "google_map_link" => $request->input("google_map_link"),
                "is_active" => $request->input("is_active"),
                "description" => $request->input("description"),
                "image" => $supplier->image,
                "condition_of_sale" => $supplier->condition_of_sale,
                "privacy_consent" => $request->input("privacy_consent")
            ];

            $this->supplierInterface->update($id, $data);
        }


        return redirect("/providers");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplier = $this->supplierInterface->findById($id);
        $supplier->delete();
        return redirect("/providers");
    }
}
