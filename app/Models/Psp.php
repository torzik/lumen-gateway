<?php


namespace App\Models;

interface Psp {

    public function getDepositForm();

    public function deposit();
}
