<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Teams;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = factory(Teams::class)->create([
            'name' => 'ApplTree'
        ]);


        $user = factory(User::class)->create([
                'name' => 'Almae',
                'last_name' => 'Hangad',
                'team_id' => $team->id,
                'email' => 'almae@example.com'
        ]);
        $user->assignRole('team_lead');

        
        $user = factory(User::class)->create([
            'name' => 'IJ',
            'last_name' => 'Enot',
            'team_id' => $team->id,
            'email' => 'ij@example.com'
        ]);
        $user->assignRole('user');

        $user = factory(User::class)->create([
            'name' => 'Gerald',
            'last_name' => 'Dayak',
            'team_id' => $team->id,
            'email' => 'gerald@example.com'
        ]);
        $user->assignRole('user');

    }
}
