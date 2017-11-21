<?php

use App\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Eloquent::unguard();

        Type::create(
            array(
                'title' => 'Lauko aikštelė',
            )
        );

        Type::create(
            array(
                'title' => 'Sporto salė',
            )
        );

        Type::create(
            array(
                'title' => 'Privati aikštelė',
            )
        );




    }
}
