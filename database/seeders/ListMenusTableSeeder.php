<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ListMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('list_menus')->delete();
        
        \DB::table('list_menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dashboard',
                'icon' => 'ri-apps-line',
                'route' => '/',
                'path' => 'Modules/Home',
                'group' => 'Menu',
                'order' => 1,
                'has_child' => 0,
                'is_mother' => 1,
                'is_active' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Dropdown',
                'icon' => 'ri-list-check',
                'route' => '/lists/dropdowns',
                'path' => 'Modules/Lists/Dropdowns',
                'group' => 'Lists',
                'order' => 2,
                'has_child' => 0,
                'is_mother' => 1,
                'is_active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Locations',
                'icon' => 'ri-earth-fill',
                'route' => NULL,
                'path' => 'Modules/Lists/Locations',
                'group' => 'Lists',
                'order' => 3,
                'has_child' => 1,
                'is_mother' => 1,
                'is_active' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Regions',
                'icon' => NULL,
                'route' => '/lists/locations/regions',
                'path' => '/lists/locations/regions',
                'group' => 'Locations',
                'order' => 1,
                'has_child' => 0,
                'is_mother' => 0,
                'is_active' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Provinces',
                'icon' => NULL,
                'route' => '/lists/locations/provinces',
                'path' => '/lists/locations/provinces',
                'group' => 'Locations',
                'order' => 2,
                'has_child' => 0,
                'is_mother' => 0,
                'is_active' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Municipalities',
                'icon' => NULL,
                'route' => '/lists/locations/municipalities',
                'path' => '/lists/locations/municipalities',
                'group' => 'Locations',
                'order' => 3,
                'has_child' => 0,
                'is_mother' => 0,
                'is_active' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Barangays',
                'icon' => NULL,
                'route' => '/lists/locations/barangays',
                'path' => '/lists/locations/barangays',
                'group' => 'Locations',
                'order' => 4,
                'has_child' => 0,
                'is_mother' => 0,
                'is_active' => 1,
            ),
        ));
        
        
    }
}