<?php

namespace App\Services;

class CheckFormService
{
    public static function checkGender($data) {

        if($data->gender === 0) {
            $gender = '男性';
        } else {
            $gender = '女性';
        }

        return $gender;
    }

    public static function checkAge($data) {

        if($data->age === 1){ $age = '～１９歳'; }
        if($data->age === 2){ $age = '２０～１９歳'; }
        if($data->age === 3){ $age = '３０～１９歳'; }
        if($data->age === 4){ $age = '４０～１９歳'; }
        if($data->age === 5){ $age = '５０～１９歳'; }
        if($data->age === 6){ $age = '６０歳～'; }

        return $age;
    }
}

