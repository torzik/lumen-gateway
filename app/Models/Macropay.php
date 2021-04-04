<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Macropay extends Model implements Psp {


    public function getDepositForm() {
        // TODO: Implement getDepositForm() method.

       $form = '<!DOCTYPE html>';
       $form .= '<html>';
       $form .= '<body>';
       $form .= '<h2>HTML Forms</h2>';
       $form .= '<form action="">';
       $form .= '<label for="fname">First name:</label><br>';
       $form .= ' <input type="text" id="fname" name="fname" value="John"><br>';
       $form .= '<label for="lname">Last name:</label><br>';
       $form .='<input type="text" id="lname" name="lname" value="Doe"><br><br>';
       $form .=' <input type="submit" value="Submit">';
       $form .= '</form>

</body>
</html>';
       return $form;
    }
}
