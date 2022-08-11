<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollee;

class enrolleeController extends Controller
{
    public function initialize(){
        $default_enrolles = [
            [   'name' => 'Юрий',
                'surname' => 'Бородкин',
                'sex' => 'М',
                'group_number' => '8303',
                'email' => 'borodkin@mail.ru',
                'points' => 250,
                'birth_year' => 2001,
                'is_local' => 0
            ],
            [   'name' => 'Андрей',
                'surname' => 'Быков',
                'sex' => 'М',
                'group_number' => '8303',
                'email' => 'bykov@bk.ru',
                'points' => 260,
                'birth_year' => 2000,
                'is_local' => 0
            ],
            [   'name' => 'Артём',
                'surname' => 'Данилов',
                'sex' => 'М',
                'group_number' => '8303',
                'email' => 'joker@mail.ru',
                'points' => 256,
                'birth_year' => 2000,
                'is_local' => 0
            ],
            [   'name' => 'Никита',
                'surname' => 'Деркач',
                'sex' => 'М',
                'group_number' => '8303',
                'email' => 'derkach@gmail.com',
                'points' => 254,
                'birth_year' => 2000,
                'is_local' => 0
            ],
            [   'name' => 'Кирилл',
                'surname' => 'Журбин',
                'sex' => 'М',
                'group_number' => '8303',
                'email' => 'kirill@mail.ru',
                'points' => 270,
                'birth_year' => 2000,
                'is_local' => 0
            ],
            [   'name' => 'Кирилл',
                'surname' => 'Крыжановский',
                'sex' => 'М',
                'group_number' => '8303',
                'email' => 'thehighestmath@mail.ru',
                'points' => 250,
                'birth_year' => 2000,
                'is_local' => 0
            ],
            [   'name' => 'Антон',
                'surname' => 'Кибардин',
                'sex' => 'М',
                'group_number' => '8303',
                'email' => 'kibardin@mail.ru',
                'points' => 261,
                'birth_year' => 2000,
                'is_local' => 1
            ],
            [   'name' => 'Иван',
                'surname' => 'Иванов',
                'sex' => 'М',
                'group_number' => '8304',
                'email' => 'ivaiva@list.ru',
                'points' => 290,
                'birth_year' => 1999,
                'is_local' => 1
            ],
            [   'name' => 'Мария',
                'surname' => 'Лисок',
                'sex' => 'Ж',
                'group_number' => '8304',
                'email' => 'lisok@mail.ru',
                'points' => 266,
                'birth_year' => 2000,
                'is_local' => 0
            ],
            [   'name' => 'Марина',
                'surname' => 'Колосова',
                'sex' => 'Ж',
                'group_number' => '8304',
                'email' => 'mpkolos@mail.ru',
                'points' => 240,
                'birth_year' => 2000,
                'is_local' => 0
            ],
            [   'name' => 'Ольга',
                'surname' => 'Мельникова',
                'sex' => 'Ж',
                'group_number' => '8304',
                'email' => 'olga@mail.ru',
                'points' => 259,
                'birth_year' => 2000,
                'is_local' => 1
            ],
            [   'name' => 'Антон',
                'surname' => 'Пушпышев',
                'sex' => 'М',
                'group_number' => '8301',
                'email' => 'pushka@mail.ru',
                'points' => 258,
                'birth_year' => 1999,
                'is_local' => 0
            ],
            [   'name' => 'Никита',
                'surname' => 'Почаев',
                'sex' => 'М',
                'group_number' => '8301',
                'email' => 'pochyka@mail.ru',
                'points' => 255,
                'birth_year' => 2000,
                'is_local' => 1
            ],
            [   'name' => 'Александр',
                'surname' => 'Стукалев',
                'sex' => 'М',
                'group_number' => '8301',
                'email' => 'axel@mail.ru',
                'points' => 261,
                'birth_year' => 2000,
                'is_local' => 1
            ],
            [   'name' => 'Глеб',
                'surname' => 'Хохлов',
                'sex' => 'М',
                'group_number' => '8301',
                'email' => 'hohlik@gmail.com',
                'points' => 245,
                'birth_year' => 1999,
                'is_local' => 0
            ],
        ];

        foreach ($default_enrolles as $enrollee){
            Enrollee::firstOrCreate(['email' => $enrollee['email']], $enrollee);
            dump($enrollee);
        }
        dump('initialized');
    }
}
