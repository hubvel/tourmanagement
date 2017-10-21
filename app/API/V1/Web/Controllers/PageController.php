<?php
namespace App\Api\V1\Web\Controllers;

use App\Http\Controllers\Controller;

/**
 * Description of PageController
 *
 * @author thanh
 */
class PageController extends Controller {

    public function __construct() {
        ;
    }

    public function index() {
        return view('main');
    }
}
