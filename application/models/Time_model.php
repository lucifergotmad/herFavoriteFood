<?php

class Time_model extends CI_Model
{
    public function getGreetingTime()
    {
        date_default_timezone_set("Asia/Jakarta");
        $jamBerapa = date("H");

        if ($jamBerapa > 0 && $jamBerapa < 12) {
            $salam = "Pagi";
        } else if ($jamBerapa >= 12 && $jamBerapa < 15) {
            $salam = "Siang";
        } else if ($jamBerapa >= 15 && $jamBerapa <= 18) {
            $salam = "Sore";
        } else {
            $salam = "Malam";
        }
        return $salam;
    }
}
