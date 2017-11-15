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
                'title' => 'lauko aikštelė',
            )
        );

        Type::create(
            array(
                'title' => 'sporto salė',
            )
        );

        Type::create(
            array(
                'title' => 'privati aikštelė',
            )
        );




    }
}
