<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TourPackage extends \Eloquent
{
    protected $table = 'tour_package';

    protected $fillable = ['tour_id', 'tour_start_date', 'place_total', 'place_for_sale', 'number_adult', 'number_child', 'price_agency_adult', 'price_agency_child', 'price_client_adult', 'price_client_child'];

    public function tours() {
        return $this->belongsTo(Tour::class, 'tour_id');
    }
}
