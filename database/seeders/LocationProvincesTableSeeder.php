<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('location_provinces')->delete();
        
        \DB::table('location_provinces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'code' => '012800000',
                'name' => 'Ilocos Norte',
                'old_name' => NULL,
                'region_code' => '010000000',
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '012900000',
                'name' => 'Ilocos Sur',
                'old_name' => NULL,
                'region_code' => '010000000',
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '013300000',
                'name' => 'La Union',
                'old_name' => NULL,
                'region_code' => '010000000',
            ),
            3 => 
            array (
                'id' => 4,
                'code' => '015500000',
                'name' => 'Pangasinan',
                'old_name' => NULL,
                'region_code' => '010000000',
            ),
            4 => 
            array (
                'id' => 5,
                'code' => '020900000',
                'name' => 'Batanes',
                'old_name' => NULL,
                'region_code' => '020000000',
            ),
            5 => 
            array (
                'id' => 6,
                'code' => '021500000',
                'name' => 'Cagayan',
                'old_name' => NULL,
                'region_code' => '020000000',
            ),
            6 => 
            array (
                'id' => 7,
                'code' => '023100000',
                'name' => 'Isabela',
                'old_name' => NULL,
                'region_code' => '020000000',
            ),
            7 => 
            array (
                'id' => 8,
                'code' => '025000000',
                'name' => 'Nueva Vizcaya',
                'old_name' => NULL,
                'region_code' => '020000000',
            ),
            8 => 
            array (
                'id' => 9,
                'code' => '025700000',
                'name' => 'Quirino',
                'old_name' => NULL,
                'region_code' => '020000000',
            ),
            9 => 
            array (
                'id' => 10,
                'code' => '030800000',
                'name' => 'Bataan',
                'old_name' => NULL,
                'region_code' => '030000000',
            ),
            10 => 
            array (
                'id' => 11,
                'code' => '031400000',
                'name' => 'Bulacan',
                'old_name' => NULL,
                'region_code' => '030000000',
            ),
            11 => 
            array (
                'id' => 12,
                'code' => '034900000',
                'name' => 'Nueva Ecija',
                'old_name' => NULL,
                'region_code' => '030000000',
            ),
            12 => 
            array (
                'id' => 13,
                'code' => '035400000',
                'name' => 'Pampanga',
                'old_name' => NULL,
                'region_code' => '030000000',
            ),
            13 => 
            array (
                'id' => 14,
                'code' => '036900000',
                'name' => 'Tarlac',
                'old_name' => NULL,
                'region_code' => '030000000',
            ),
            14 => 
            array (
                'id' => 15,
                'code' => '037100000',
                'name' => 'Zambales',
                'old_name' => NULL,
                'region_code' => '030000000',
            ),
            15 => 
            array (
                'id' => 16,
                'code' => '037700000',
                'name' => 'Aurora',
                'old_name' => NULL,
                'region_code' => '030000000',
            ),
            16 => 
            array (
                'id' => 17,
                'code' => '041000000',
                'name' => 'Batangas',
                'old_name' => NULL,
                'region_code' => '040000000',
            ),
            17 => 
            array (
                'id' => 18,
                'code' => '042100000',
                'name' => 'Cavite',
                'old_name' => NULL,
                'region_code' => '040000000',
            ),
            18 => 
            array (
                'id' => 19,
                'code' => '043400000',
                'name' => 'Laguna',
                'old_name' => NULL,
                'region_code' => '040000000',
            ),
            19 => 
            array (
                'id' => 20,
                'code' => '045600000',
                'name' => 'Quezon',
                'old_name' => NULL,
                'region_code' => '040000000',
            ),
            20 => 
            array (
                'id' => 21,
                'code' => '045800000',
                'name' => 'Rizal',
                'old_name' => NULL,
                'region_code' => '040000000',
            ),
            21 => 
            array (
                'id' => 22,
                'code' => '174000000',
                'name' => 'Marinduque',
                'old_name' => NULL,
                'region_code' => '170000000',
            ),
            22 => 
            array (
                'id' => 23,
                'code' => '175100000',
                'name' => 'Occidental Mindoro',
                'old_name' => NULL,
                'region_code' => '170000000',
            ),
            23 => 
            array (
                'id' => 24,
                'code' => '175200000',
                'name' => 'Oriental Mindoro',
                'old_name' => NULL,
                'region_code' => '170000000',
            ),
            24 => 
            array (
                'id' => 25,
                'code' => '175300000',
                'name' => 'Palawan',
                'old_name' => NULL,
                'region_code' => '170000000',
            ),
            25 => 
            array (
                'id' => 26,
                'code' => '175900000',
                'name' => 'Romblon',
                'old_name' => NULL,
                'region_code' => '170000000',
            ),
            26 => 
            array (
                'id' => 27,
                'code' => '050500000',
                'name' => 'Albay',
                'old_name' => NULL,
                'region_code' => '050000000',
            ),
            27 => 
            array (
                'id' => 28,
                'code' => '051600000',
                'name' => 'Camarines Norte',
                'old_name' => NULL,
                'region_code' => '050000000',
            ),
            28 => 
            array (
                'id' => 29,
                'code' => '051700000',
                'name' => 'Camarines Sur',
                'old_name' => NULL,
                'region_code' => '050000000',
            ),
            29 => 
            array (
                'id' => 30,
                'code' => '052000000',
                'name' => 'Catanduanes',
                'old_name' => NULL,
                'region_code' => '050000000',
            ),
            30 => 
            array (
                'id' => 31,
                'code' => '054100000',
                'name' => 'Masbate',
                'old_name' => NULL,
                'region_code' => '050000000',
            ),
            31 => 
            array (
                'id' => 32,
                'code' => '056200000',
                'name' => 'Sorsogon',
                'old_name' => NULL,
                'region_code' => '050000000',
            ),
            32 => 
            array (
                'id' => 33,
                'code' => '060400000',
                'name' => 'Aklan',
                'old_name' => NULL,
                'region_code' => '060000000',
            ),
            33 => 
            array (
                'id' => 34,
                'code' => '060600000',
                'name' => 'Antique',
                'old_name' => NULL,
                'region_code' => '060000000',
            ),
            34 => 
            array (
                'id' => 35,
                'code' => '061900000',
                'name' => 'Capiz',
                'old_name' => NULL,
                'region_code' => '060000000',
            ),
            35 => 
            array (
                'id' => 36,
                'code' => '063000000',
                'name' => 'Iloilo',
                'old_name' => NULL,
                'region_code' => '060000000',
            ),
            36 => 
            array (
                'id' => 37,
                'code' => '064500000',
                'name' => 'Negros Occidental',
                'old_name' => NULL,
                'region_code' => '060000000',
            ),
            37 => 
            array (
                'id' => 38,
                'code' => '067900000',
                'name' => 'Guimaras',
                'old_name' => NULL,
                'region_code' => '060000000',
            ),
            38 => 
            array (
                'id' => 39,
                'code' => '071200000',
                'name' => 'Bohol',
                'old_name' => NULL,
                'region_code' => '070000000',
            ),
            39 => 
            array (
                'id' => 40,
                'code' => '072200000',
                'name' => 'Cebu',
                'old_name' => NULL,
                'region_code' => '070000000',
            ),
            40 => 
            array (
                'id' => 41,
                'code' => '074600000',
                'name' => 'Negros Oriental',
                'old_name' => NULL,
                'region_code' => '070000000',
            ),
            41 => 
            array (
                'id' => 42,
                'code' => '076100000',
                'name' => 'Siquijor',
                'old_name' => NULL,
                'region_code' => '070000000',
            ),
            42 => 
            array (
                'id' => 43,
                'code' => '082600000',
                'name' => 'Eastern Samar',
                'old_name' => NULL,
                'region_code' => '080000000',
            ),
            43 => 
            array (
                'id' => 44,
                'code' => '083700000',
                'name' => 'Leyte',
                'old_name' => NULL,
                'region_code' => '080000000',
            ),
            44 => 
            array (
                'id' => 45,
                'code' => '084800000',
                'name' => 'Northern Samar',
                'old_name' => NULL,
                'region_code' => '080000000',
            ),
            45 => 
            array (
                'id' => 46,
                'code' => '086000000',
                'name' => 'Samar',
                'old_name' => 'Western Samar',
                'region_code' => '080000000',
            ),
            46 => 
            array (
                'id' => 47,
                'code' => '086400000',
                'name' => 'Southern Leyte',
                'old_name' => NULL,
                'region_code' => '080000000',
            ),
            47 => 
            array (
                'id' => 48,
                'code' => '087800000',
                'name' => 'Biliran',
                'old_name' => NULL,
                'region_code' => '080000000',
            ),
            48 => 
            array (
                'id' => 49,
                'code' => '097200000',
                'name' => 'Zamboanga Del Norte',
                'old_name' => NULL,
                'region_code' => '090000000',
            ),
            49 => 
            array (
                'id' => 50,
                'code' => '097300000',
                'name' => 'Zamboanga Del Sur',
                'old_name' => NULL,
                'region_code' => '090000000',
            ),
            50 => 
            array (
                'id' => 51,
                'code' => '098300000',
                'name' => 'Zamboanga Sibugay',
                'old_name' => NULL,
                'region_code' => '090000000',
            ),
            51 => 
            array (
                'id' => 52,
                'code' => '101300000',
                'name' => 'Bukidnon',
                'old_name' => NULL,
                'region_code' => '100000000',
            ),
            52 => 
            array (
                'id' => 53,
                'code' => '101800000',
                'name' => 'Camiguin',
                'old_name' => NULL,
                'region_code' => '100000000',
            ),
            53 => 
            array (
                'id' => 54,
                'code' => '103500000',
                'name' => 'Lanao Del Norte',
                'old_name' => NULL,
                'region_code' => '100000000',
            ),
            54 => 
            array (
                'id' => 55,
                'code' => '104200000',
                'name' => 'Misamis Occidental',
                'old_name' => NULL,
                'region_code' => '100000000',
            ),
            55 => 
            array (
                'id' => 56,
                'code' => '104300000',
                'name' => 'Misamis Oriental',
                'old_name' => NULL,
                'region_code' => '100000000',
            ),
            56 => 
            array (
                'id' => 57,
                'code' => '112300000',
                'name' => 'Davao Del Norte',
                'old_name' => NULL,
                'region_code' => '110000000',
            ),
            57 => 
            array (
                'id' => 58,
                'code' => '112400000',
                'name' => 'Davao Del Sur',
                'old_name' => NULL,
                'region_code' => '110000000',
            ),
            58 => 
            array (
                'id' => 59,
                'code' => '112500000',
                'name' => 'Davao Oriental',
                'old_name' => NULL,
                'region_code' => '110000000',
            ),
            59 => 
            array (
                'id' => 60,
                'code' => '118200000',
                'name' => 'Davao De Oro',
                'old_name' => NULL,
                'region_code' => '110000000',
            ),
            60 => 
            array (
                'id' => 61,
                'code' => '118600000',
                'name' => 'Davao Occidental',
                'old_name' => NULL,
                'region_code' => '110000000',
            ),
            61 => 
            array (
                'id' => 62,
                'code' => '124700000',
                'name' => 'Cotabato',
                'old_name' => 'North Cotabato',
                'region_code' => '120000000',
            ),
            62 => 
            array (
                'id' => 63,
                'code' => '126300000',
                'name' => 'South Cotabato',
                'old_name' => NULL,
                'region_code' => '120000000',
            ),
            63 => 
            array (
                'id' => 64,
                'code' => '126500000',
                'name' => 'Sultan Kudarat',
                'old_name' => NULL,
                'region_code' => '120000000',
            ),
            64 => 
            array (
                'id' => 65,
                'code' => '128000000',
                'name' => 'Sarangani',
                'old_name' => NULL,
                'region_code' => '120000000',
            ),
            65 => 
            array (
                'id' => 66,
                'code' => '140100000',
                'name' => 'Abra',
                'old_name' => NULL,
                'region_code' => '140000000',
            ),
            66 => 
            array (
                'id' => 67,
                'code' => '141100000',
                'name' => 'Benguet',
                'old_name' => NULL,
                'region_code' => '140000000',
            ),
            67 => 
            array (
                'id' => 68,
                'code' => '142700000',
                'name' => 'Ifugao',
                'old_name' => NULL,
                'region_code' => '140000000',
            ),
            68 => 
            array (
                'id' => 69,
                'code' => '143200000',
                'name' => 'Kalinga',
                'old_name' => NULL,
                'region_code' => '140000000',
            ),
            69 => 
            array (
                'id' => 70,
                'code' => '144400000',
                'name' => 'Mountain Province',
                'old_name' => NULL,
                'region_code' => '140000000',
            ),
            70 => 
            array (
                'id' => 71,
                'code' => '148100000',
                'name' => 'Apayao',
                'old_name' => NULL,
                'region_code' => '140000000',
            ),
            71 => 
            array (
                'id' => 72,
                'code' => '150700000',
                'name' => 'Basilan',
                'old_name' => NULL,
                'region_code' => '150000000',
            ),
            72 => 
            array (
                'id' => 73,
                'code' => '153600000',
                'name' => 'Lanao Del Sur',
                'old_name' => NULL,
                'region_code' => '150000000',
            ),
            73 => 
            array (
                'id' => 74,
                'code' => '153800000',
                'name' => 'Maguindanao',
                'old_name' => NULL,
                'region_code' => '150000000',
            ),
            74 => 
            array (
                'id' => 75,
                'code' => '156600000',
                'name' => 'Sulu',
                'old_name' => NULL,
                'region_code' => '150000000',
            ),
            75 => 
            array (
                'id' => 76,
                'code' => '157000000',
                'name' => 'Tawi-Tawi',
                'old_name' => NULL,
                'region_code' => '150000000',
            ),
            76 => 
            array (
                'id' => 77,
                'code' => '160200000',
                'name' => 'Agusan Del Norte',
                'old_name' => NULL,
                'region_code' => '160000000',
            ),
            77 => 
            array (
                'id' => 78,
                'code' => '160300000',
                'name' => 'Agusan Del Sur',
                'old_name' => NULL,
                'region_code' => '160000000',
            ),
            78 => 
            array (
                'id' => 79,
                'code' => '166700000',
                'name' => 'Surigao Del Norte',
                'old_name' => NULL,
                'region_code' => '160000000',
            ),
            79 => 
            array (
                'id' => 80,
                'code' => '166800000',
                'name' => 'Surigao Del Sur',
                'old_name' => NULL,
                'region_code' => '160000000',
            ),
            80 => 
            array (
                'id' => 81,
                'code' => '168500000',
                'name' => 'Dinagat Islands',
                'old_name' => NULL,
                'region_code' => '160000000',
            ),
            81 => 
            array (
                'id' => 82,
                'code' => '170000000',
                'name' => 'Metro Manila',
                'old_name' => NULL,
                'region_code' => '130000000',
            ),
        ));
        
        
    }
}