<?php

use Illuminate\Database\Seeder;
use App\SiteConfig;
class SiteConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SiteConfig::Create([
          'site_title' => 'Web App Starter',
          'front_page_title' => 'Welcome To Our Site',
          'front_page_body' => 'Welcome to our site. Please feel free to browse!'
          ]);
    }
}
