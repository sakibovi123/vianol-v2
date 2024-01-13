<?php

namespace App\Http\Interfaces;


interface GalleryInterface {
    public function get_galleries();

    public function get_gallery_by_id($id);

    public function post_gallery(array $data);

    public function update_gallery(array $data, $id);

    public function delete_gallery($id);
}