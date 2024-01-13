<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\SupplierInterface;
use App\Models\Supplier;


class SupplierRepository implements SupplierInterface
{

    protected $supplier;

    public function __construct(Supplier $supplier)
    {
        $this->supplier = $supplier;
    }

    public function all()
    {
        return $this->supplier->all();
    }

    public function findById($id)
    {
        return $this->supplier->find($id);
    }

    public function findBySlug($slug)
    {
        return $this->supplier->where("slug", $slug)->first();
    }

    public function findByName($name)
    {
        return $this->supplier->where("name", $name)->first();
    }

    public function save(array $data)
    {
        return $this->supplier->create($data);
    }

    public function update($id, array $data)
    {
        $supplier = $this->findById($id);
        if( $supplier ) {
            $supplier->update($data);
            return $supplier;
        }
        else {
            return null;
        }
    }

    public function remove($id)
    {
        $supplier = $this->findById($id);
        return $supplier->delete();
    }
}
