<?php

namespace App\Repositories;

# Repo
use App\Repositories\RepositoryAbstract;

# Model
use App\Models\Tour;
use App\Models\TourPackage;

/**
 * Description of TourRepository
 *
 * @author thanh
 */
class TourRepository extends RepositoryAbstract {
    public function all($columns = array()) {

    }

    public function findBy($field, $value, $columns = array()) {

    }

    public function model() {
        return Tour::class;
    }

    public function paginate($perPage = 10, $columns = array()) {

    }

    public function store(array $data) {
        //: Update start place, end place
        if( !empty($data['start_place']) && is_array($data['start_place']) ){
            $data['start_place'] = implode('|', $data['start_place']);
        }
        if( !empty($data['end_place']) && is_array($data['end_place']) ){
            $data['end_place'] = implode('|', $data['end_place']);
        }

        //: Check show customer, agency
        $data['show_for_agency'] = !empty($data['show_for_agency']) ? true : false;
        $data['show_for_customer'] = !empty($data['show_for_customer']) ? true : false;

        //: Set default value for some field
        $data['images'] = '';
        $data['details'] = '';
        $data['user_id'] = 0;
        $data['status'] = Tour::$status_close;

        try {
            //: Insert tour
            $tourObj = $this->create($data);
            if( $tourObj ){
                //: Insert tour package
                $tour_package = $data['tour_package'];
                if( !empty($tour_package) && is_array($tour_package) ){
                    foreach($tour_package as $package){
                        $package['tour_id'] = $tourObj->id;

                        //: Default value
                        $package['number_adult'] = 0;
                        $package['number_child'] = 0;

                        $tourPackageObj = new TourPackage();
                        $tourPackageObj->create($package);
                    }
                }

                return [
                    'success' => true,
                    'message' => 'Save data success'
                ];
            }
            else{
                return [
                    'success' => false,
                    'message' => 'Save data fail!'
                ];
            }

        } catch(\Exception $ex) {
            return [
                'success' => false,
                'message' => $ex->getMessage()
            ];
        }
    }

}
