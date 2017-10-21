<?php

namespace App\Repositories;

interface RepositoryInterface {

    public function all($columns = array('*'));

    public function paginate($perPage = 10, $columns = array('*'));

    public function store(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function find($id);

    public function findBy($field, $value, $columns = array('*'));
}
