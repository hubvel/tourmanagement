<?php

namespace App\Repositories;

# Repo
use App\Repositories\RepositoryAbstract;

# Model
use App\Models\TourPackage;

/**
 * Description of TourRepository
 *
 * @author thanh
 */
class TourPackageRepository extends RepositoryAbstract {
    //put your code here
    public function all($columns = array()) {

    }

    public function findBy($field, $value, $columns = array()) {

    }

    public function model() {
        return TourPackage::class;
    }

    public function paginate($perPage = 10, $columns = array()) {

    }

    public function store(array $data) {

        try {
            $this->create($data);

        } catch(Exception $ex) {

        }
    }

}
