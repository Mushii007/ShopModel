<?php

namespace App\RespositoryInterface;

interface CategoryRepositoryInterface
{

    public function create();
    public function update(int $id);
    public function delete(int $id);
    public function get(int $id);
    public function getAll();
}