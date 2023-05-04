<?php
namespace App\Helpers; //pacotes

class DateTimeHelper{

    // Converte data no formato americano (US) para o brasileiro (BR)
    //@param date: data no americano (yyyy-mm-dd)
    //@return string: data no formato brasileiro (dd/mm/aaaa)

    public static function UStoBRDate($date) {
        echo $date;
        $aux = explode('-', $date);
        $aux = array_reverse($aux);
        $data = implode('/', $aux);
        dd($data);
    }

}
?>