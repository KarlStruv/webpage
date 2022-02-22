<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Navbar;


class NavbarSeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        $links = [

            [
                'name' => 'Home',
                'route' => 'home',
                'ordering' => 1,
            ],

            [
                'name' => 'Services',
                'route' => 'services',
                'ordering' => 2,
            ],

            [
                'name' => 'About',
                'route' => 'about',
                'ordering' => 3,
            ],

            [
                'name' => 'Contact',
                'route' => 'contact',
                'ordering' => 4,
            ],

            [
                'name' => 'FAQ',
                'route' => 'faq',
                'ordering' => 5,
            ],

            [
                'name' => 'Sign Up',
                'route' => 'sign.up',
                'ordering' => 6,
            ]
        ];

        foreach ($links as $key => $navbar) {

            Navbar::create($navbar);

        }

    }

}
