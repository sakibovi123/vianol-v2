<?php

namespace App\Http\Interfaces;

interface ProductInterface {
    public function getAllProducts();

    public function fingByProductId($id);

    public function storeProduct(array $data);

    public function updateProduct($id, array $data);

    public function deleteProduct($id);
}
