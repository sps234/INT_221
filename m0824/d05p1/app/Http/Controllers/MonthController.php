<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthController extends Controller {

    public function _construct() {
        $this->middleware('month');
    }

    public function numMonth( $num ) {
        if ( $num == 1 ) {
            return 'January';
        }
        else if ( $num == 2 ) {
            return 'February';
        }
        else if ( $num == 3 ) {
            return 'March';
        }
    }
}

?>
