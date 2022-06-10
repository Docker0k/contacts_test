<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Number;
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
        Contact::factory(100)->create();
        Number::factory(1000)->create();
    }
}
