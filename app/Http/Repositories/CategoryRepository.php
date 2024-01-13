<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\CategoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryInterface
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getAllCategories(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->category->all();
    }

    public function getCategoryById($id)
    {
        return $this->category->where("id", $id)->first();
    }

    public function storeCategory(array $data)
    {
        return $this->category->create($data);
    }

    public function updateCategory($id, array $data)
    {
        $category = $this->category->findById($id);

        if( $category ) {
            return $this->category->update($data);
        }
        else{
            return null;
        }
    }

    public function deleteCategory($id)
    {
        return $this->category->delete($id);
    }

}
