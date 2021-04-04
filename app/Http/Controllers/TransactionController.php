<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Macropay;

class TransactionController extends Controller {




    public function getDepositForm (Request $request) {

        $arrReq = ucwords($request->input('psp'));
        $class = 'App\Models\\' . $arrReq;
        $psp = new $class();
        $ret = $psp->getDepositForm();//$this->$arrReq();
        return $ret;

    }

    public function Macropay () {
        return ['Macropay' => 'form'];
    }
}
