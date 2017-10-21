<?php

namespace App\Repositories;

use Illuminate\Container\Container as App;

abstract class RepositoryAbstract implements RepositoryInterface {

    private $app;

    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * EloquentRepository constructor.
     */
    public function __construct(App $app) {
        $this->app = $app;
        $this->setModel();
    }

    /**
     * get model
     * @return string
     */
    abstract public function model();

    /**
     * Set model
     */
    public function setModel() {
        $model = $this->app->make($this->model());

        if(!$model instanceof \Illuminate\Database\Eloquent\Model){
            throw new \Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        return $this->model = $model;
    }

    /**
     * Get All
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll() {
        return $this->model->all();
    }

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function find($id) {
        $result = $this->model->find($id);
        return $result;
    }

    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes) {
        return $this->model->create($attributes);
    }

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return bool|mixed
     */
    public function update(array $attributes, $id) {
        $result = $this->find($id);
        if($result) {
            $result->update($attributes);
            return $result;
        }
        return false;
    }

    /**
     * Delete
     *
     * @param $id
     * @return bool
     */
    public function delete($id) {
        $result = $this->find($id);
        if($result) {
            $result->delete();
            return true;
        }

        return false;
    }

}
