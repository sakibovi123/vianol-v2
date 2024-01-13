<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\CategoryInterface;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    protected $categoryInterface;

    public function __construct(CategoryInterface $categoryInterface)
    {
        $this->categoryInterface = $categoryInterface;
    }
    public function index()
    {
        $categories = $this->categoryInterface->getAllCategories();
        return view("category.index", [
            "categories" => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->file("image")->store("images");
        $data = [
            "category_name" => $request->input("category_name"),
            "description" => $request->input("description"),
            "image" => asset("storage/".$image)
        ];

        $category = $this->categoryInterface->storeCategory($data);

        return redirect("/categories")->with("success", $category->category_name."has been created");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = $this->categoryInterface->getCategoryById($id);
        return view("", [
            "category" => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = $this->categoryInterface->getCategoryById($id);
        return view("category.edit", [
            "category" => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = $this->categoryInterface->getCategoryById($id);
        $image = $request->file("image")->store("images");
        $data = [
            "category_name" => $request->input("category_name"),
            "description" => $request->input("description"),
            "image" => asset("storage/".$image)
        ];

        $this->categoryInterface->updateCategory($id, $data);
        return redirect("/categories");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect("/categories");
    }
}
