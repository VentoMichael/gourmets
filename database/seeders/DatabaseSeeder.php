<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(ExposantSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(PraticalInfosSeeder::class);
        $this->call(RandomImagesSeeder::class);
        $this->call(RestaurantSeeder::class);
        $this->call(SalesSeeder::class);
        $this->call(ContactSeeder::class);
    }
}
