<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Interfaces\ProductInterface;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $productInterface;

    public function __construct(ProductInterface $productInterface)
    {
        $this->productInterface = $productInterface;
    }

    public function index()
    {
        $products = $this->productInterface->getAllProducts();
        return view("product.index", [
            "products" => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view("product.create", [
            "categories" => $categories,
            "suppliers" => $suppliers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file("image")->store("images");
        $data = [
            "destination" => $request->input("destination"),
            "product_title" => $request->input("product_title"),
            "category_id" => $request->get("category_id"),
            "supplier_id" => $request->input("supplier_id"),
            "image" => asset("storage/".$image),

            "in_evidence" => $request->input("in_evidence"),
            "adult_amount" => $request->input("adult_amount"),
            "adult_age" => $request->input("adult_age"),
            "adult_price" => $request->input("adult_price"),
            "boy_amount" => $request->input("boy_amount"),
            "boy_age" => $request->input("boy_age"),
            "boy_price" => $request->input("boy_price"),
            "infant_amount" => $request->input("infant_amount"),
            "infant_age" => $request->input("infant_age"),
            "infant_price" => $request->input("infant_price"),
            "total_price" => $request->input("total_price"),
            "discount_adult_amount" => $request->input("discount_adult_amount"),
            "discount_adult_discount" => $request->input("discount_adult_discount"),
            "discount_adult_from_date" => $request->input("discount_adult_from_date"),
            "discount_adult_to_date" => $request->input("discount_adult_to_date"),

            "discount_boy_amount" => $request->input("discount_boy_amount"),
            "discount_boy_discount" => $request->input("discount_boy_discount"),
            "discount_boy_from_date" => $request->input("discount_boy_from_date"),
            "discount_boy_to_date" => $request->input("discount_boy_to_date"),

            "discount_infant_amount" => $request->input("discount_infant_amount"),
            "discount_infant_discount" => $request->input("discount_infant_discount"),
            "discount_infant_from_date" => $request->input("discount_infant_from_date"),
            "discount_infant_to_date" => $request->input("discount_infant_to_date"),
            "meeting_point" => $request->input('meeting_point'),
            "destination_address" => $request->input("destination_address"),
            "address" => $request->input("address"),
            "cancellation" => $request->input("cancellation"),
            "duration_of_service" => $request->input("duration_of_service"),

            "languages" => json_encode($request->input("languages")),
            "includes" => $request->input("includes"),
            "operation_from_date" => $request->input("operation_from_date"),
            "operation_to_date" => $request->input('operation_to_date'),
            "opening_closing" => $request->input("opening_closing"),
            "flight_included " => $request->input("opening_closing"),
            "subject_to_reconfirmation" => $request->input("subject_to_reconfirmation"),
            "immediate_reconfirmation" => $request->has("immediate_reconfirmation") ? $request->get("immediate_reconfirmation") : 0,
            "timetables" => json_encode($request->input("timetables"))

        ];
//        dd($data);
//        die();
        $this->productInterface->storeProduct($data);
        return redirect("/products");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = $this->productInterface->fingByProductId($id);
        return view("products.show", [
            "product" => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = $this->productInterface->fingByProductId($id);
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view("product.edit", [
            "product" => $product,
            "categories" => $categories,
            "suppliers" => $suppliers
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $img = $request->file("image")
            ->store("images");

        $data = [
            "destination" => $request->input("destination"),
            "product_title" => $request->input("product_title"),
            "category_id" => $request->input("category_id"),
            "supplier_id" => $request->input("supplier_id"),
            "image" => asset("storage/".$img),
            "in_evidence" => $request->input("in_evidence"),
            "adult_amount" => $request->input("adult_amount"),
            "adult_age" => $request->input("adult_age"),
            "adult_price" => $request->input("adult_price"),
            "boy_amount" => $request->input("boy_amount"),
            "boy_age" => $request->input("boy_age"),
            "boy_price" => $request->input("boy_price"),
            "infant_amount" => $request->input("infant_amount"),
            "infant_age" => $request->input("infant_age"),
            "infant_price" => $request->input("infant_price"),
            "total_price" => $request->input("total_price"),
            "discount_adult_amount" => $request->input("discount_adult_amount"),
            "discount_adult_discount" => $request->input("discount_adult_discount"),
            "discount_adult_from_date" => $request->input("discount_adult_from_date"),
            "discount_adult_to_date" => $request->input("discount_adult_to_date"),

            "discount_boy_amount" => $request->input("discount_boy_amount"),
            "discount_boy_discount" => $request->input("discount_boy_discount"),
            "discount_boy_from_date" => $request->input("discount_boy_from_date"),
            "discount_boy_to_date" => $request->input("discount_boy_to_date"),

            "discount_infant_amount" => $request->input("discount_infant_amount"),
            "discount_infant_discount" => $request->input("discount_infant_discount"),
            "discount_infant_from_date" => $request->input("discount_infant_from_date"),
            "discount_infant_to_date" => $request->input("discount_infant_to_date"),
            "meeting_point" => $request->input('meeting_point'),
            "address" => $request->input("address"),
            "cancellation" => $request->input("cancellation"),
            "duration_of_service" => $request->input("duration_of_service"),

            "languages" => json_encode($request->input("languages")),
            "includes" => $request->input("includes"),
            "operation_from_date" => $request->input("operation_from_date"),
            "operation_to_date" => $request->input('operation_to_date'),
            "opening_closing" => $request->input("opening_closing"),
            "flight_included " => $request->input("opening_closing"),
            "subject_to_reconfirmation" => $request->input("subject_to_reconfirmation"),
            "immediate_reconfirmation" => $request->input("immediate_reconfirmation"),
            "timetables" => json_encode($request->input("timetables"))

        ];

        $product = $this->productInterface->updateProduct($id, $data);
        return redirect("");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = $this->productInterface->fingByProductId($id);
        $product->delete();
        return redirect("");
    }
}
