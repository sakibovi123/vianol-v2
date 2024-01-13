<?php

namespace App\Http\Repositories;


use App\Http\Interfaces\ProductInterface;
use App\Models\Product;

class ProductRepository implements ProductInterface
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAllProducts()
    {
        return $this->product->all();
    }

    public function fingByProductId($id)
    {
        return $this->product->find($id);
    }

    public function storeProduct(array $data)
    {
        return $this->product->create($data);
    }

    public function updateProduct($id, array $data)
    {
        $product = $this->find($id);
        if($product) {
            $product->update($data);
            return $product;
        }
        else {
            return null;
        }
    }

    public function deleteProduct($id)
    {
        $product = $this->findById($id);
        return $product->delete();
    }
}

