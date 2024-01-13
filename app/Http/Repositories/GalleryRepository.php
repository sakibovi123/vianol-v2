<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\GalleryInterface;
use App\Models\Gallery;

class GalleryRepository implements GalleryInterface 
{
    protected $gallery;

    public function __construct(Gallery $gallery) {
        $this->gallery = $gallery;
    }

    public function get_galleries()
    {
        return $this->gallery->all();
    }

    public function get_gallery_by_id($id)
    {
        return $this->gallery->find($id);
    }

    public function post_gallery(array $data)
    {
        return $this->gallery->create($data);
    }

    public function update_gallery(array $data, $id)
    {
        $gallery = $this->gallery->find($id);
        return $this->gallery->update($gallery, $id);
    }

    public function delete_gallery($id)
    {
        return $this->gallery->delete($id);
    }
}