<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            'password' => 'umair@123',
            'accessoryh' => 'Accessories',
            'accessorysh' => 'Page',
            'categoryh' => 'Categories',
            'categorysh' => 'Page',
            'catalogueh' => 'Catalogues',
            'cataloguesh' => 'Page',
            'mediah' => 'Media',
            'mediash' => 'Page',
            'eventh' => 'Events',
            'eventsh' => 'Page',
            'abouth' => 'About',
            'aboutsh' => 'Page',
            'contacth' => 'Contact',
            'contactsh' => 'Page',
            'producth' => 'Products',
            'productsh' => 'Page',
            'bannercontact' => '+92 301 6001700+92 301 6001700',
            'bannermsg' => 'Get 30% discount on shopping more than 3000 Rs.',
            'banneremail' => 'info@fabrigan.com',
            'footerfb' => 'https://www.6flicks.com',
            'footerinsta' => 'https://www.6flicks.com',
            'footertwitter' => 'https://www.6flicks.com',
            'footeryoutube' => 'https://www.6flicks.com',
            'LPVheading' => 'New Collection',
            'LPVdescription' => 'Fighting / Karata Suits',
            'VideoId' => '1002379891',
        ]);
    }
}
