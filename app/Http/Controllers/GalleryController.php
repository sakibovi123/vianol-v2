<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\GalleryInterface;
use App\Models\Supplier;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $galleryInterface;

    public function __construct(GalleryInterface $galleryInterface)
    {
        $this->galleryInterface = $galleryInterface;
    }

    public function index()
    {
        
        $gallery = $this->galleryInterface->get_galleries();
        return view("gallery.index", [
            "gallery"=> $gallery,
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view("gallery.create", [
            "suppliers" => $suppliers
        ]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("gallery.update");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
