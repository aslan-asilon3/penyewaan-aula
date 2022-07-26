<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dataruang;

class DataRuangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [

            [

               'namaruangan'=>'aula',

               'jenisruangan'=>'multifunction hall',

               'keterangan'=>'-',

            ],
            [

                'namaruangan'=>'aula',

                'jenisruangan'=>'ruang rapat',

                'keterangan'=>'-',

            ],



        ];

        foreach ($dataruang as $key => $value) {

            Dataruang::create($value);

        }

    }
}
