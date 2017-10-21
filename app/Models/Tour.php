<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tour extends \Eloquent
{
    protected $table = 'tours';

    protected $fillable = ['title', 'images', 'details', 'duration', 'vehicles', 'start_place', 'end_place', 'inclusions', 'common_policies', 'agency_policies', 'show_for_agency', 'show_for_customer', 'user_id', 'status'];

    public function tourPackage() {
        return $this->hasMany(TourPackage::class, 'tour_id');
    }

    public static $status_open = 'open';
    public static $status_close = 'close';

}
