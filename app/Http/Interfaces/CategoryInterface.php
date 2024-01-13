<?php

namespace App\Http\Interfaces;

interface CategoryInterface
{
    public function getAllCategories();

    public function getCategoryById($id);

    public function storeCategory(array $data);

    public function updateCategory($id, array $data);

    public function deleteCategory($id);
}
