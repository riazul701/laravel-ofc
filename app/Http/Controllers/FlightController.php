<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;

class FlightController extends Controller
{
    /**
     * Create a new flight instance.
     *
     * @param  Request  $request
     * @return Response
     */
    /* Inserts */
    /* Table: my_flights [ 	id  Primary  int(11)  AUTO_INCREMENT, name  varchar(255), created_at  timestamp, updated_at  timestamp] */
    public function store(Request $request) {
        // Validate the request...
        $flight = new Flight;
        $flight->name =  $request->name;
        $flight->save();
    }
}
