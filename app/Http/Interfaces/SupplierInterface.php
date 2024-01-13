<?php

namespace App\Http\Interfaces;

interface SupplierInterface
{
    public function all();

    public function findById($id);

    public function findBySlug($slug);

    public function findByName($name);

    public function save(array $data);

    public function update($id, array $data);

    public function remove($id);
}