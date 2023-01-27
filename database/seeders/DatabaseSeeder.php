<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Rating;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=> 'jaka malezic',
            'email'=> 'guest@si',
            'password'=> 'password'
        ]);
        
        $listing=Listing::create([
            'name' => 'Jaka',
            'lastname' => 'Malezic',
            'email' => 'jaka@male',
            'phonenumber' => '091989989',
            'user_id' => $user->id


        ]);
        Listing::create([
            'name' => 'Nastja',
            'lastname' => 'Keks',
            'email' => 'nast@keke',
            'phonenumber' => '123090929',
            'user_id' => $user->id


        ]);
        
        Rating::create([
            'rating'=>'good',
            'listing_id'=>$listing->id

        ]);


    }
}
