<?php

namespace App\Http\Interfaces;

interface RoleInterface{
    public function all();

    public function find($id);

    public function save(array $data);

    public function update($id, array $data);

    public function delete($id);
}

