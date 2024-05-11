<?php

    class Weather {

        static $temp_conditions = ["cold", "mild", "warm"]; // can only be accessed on the class itself

        static function celsius_to_fahrenheit($C) 
        {
            return $C * 9 / 5 + 32;
        }

        static function determine_temp_condition($F) 
        {
            if($F < 40) return self::$temp_conditions[0];
            elseif($F < 70) return self::$temp_conditions[1];
            else return self::$temp_conditions[2];
        }

    }

    echo Weather::$temp_conditions[0] . "<br>";
    echo Weather::celsius_to_fahrenheit(20) . "<br>";
    echo Weather::determine_temp_condition(42) . "<br>";

?>