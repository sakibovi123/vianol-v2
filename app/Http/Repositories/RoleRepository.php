<?php

namespace App\Http\Repositories;

use App\Models\Role;
use App\Http\Interfaces\RoleInterface;

class RoleRepository implements RoleInterface
{
    protected $roleModel;
    public function __construct(Role $roleModel)
    {
        $this->roleModel = $roleModel;
    }

    public function all()
    {
        return $this->roleModel->all();
    }

    public function find($id)
    {
        return $this->roleModel->findOrFail($id);
    }

    public function save(array $data)
    {
        return $this->roleModel->create($data);
    }


    public function update($id, array $data)
    {
        $role = $this->find($id);
        $role->update($data);
        return $role;
    }

    public function delete($id)
    {
        return $this->roleModel->destroy($id);
    }
}