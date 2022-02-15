<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postcard;

class ApiController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    // get all postcards
    public function getPostcards() {
        $postcards = Postcard::all();
        return json_encode($postcards);
    }
}
