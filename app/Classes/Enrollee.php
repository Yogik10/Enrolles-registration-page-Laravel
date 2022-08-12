<?php

namespace App\Classes;

class Enrollee{
    public $name;
    public $surname;
    public $sex;
    public $group_number;
    public $email;
    public $points;
    public $birth_date;
    public $is_local;

    public function __construct($name, $surname, $sex, $group_number, $email, $points, $birth_date, $is_local){
        $this->name = $name;
        $this->surname = $surname;
        $this->sex = $sex;
        $this->group_number = $group_number;
        $this->email = $email;
        $this->points = $points;
        $this->birth_date = $birth_date;
        $this->is_local = $is_local;
    }
}
