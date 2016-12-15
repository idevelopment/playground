<?php

use Illuminate\Database\Seeder;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('games')->insert([
        [
        'name' =>  'Battlefield 1942',
        'public' =>  '0',
        ],
        [
        'name' =>  'Call of Duty',
        'public' =>  '0',
        ],
        [
        'name' =>  'Call of Duty: United Offensive',
        'public' =>  '0',
        ],
        [
        'name' =>  'Call of Duty: World at War',
        'public' =>  '0',
        ],
        [
        'name' =>  'Call of Duty 2',
        'public' =>  '0',
        ],
        [
        'name' =>  'Counter-Strike 1.6',
        'public' =>  '0',
        ],
        [
        'name' =>  'Counter-Strike: Source',
        'public' =>  '0',
        ],
        [
        'name' =>  'Counter-Strike: Condition Zero',
        'public' =>  '0',
        ],
        [
        'name' =>  'Counter-Strike: Global Offensive',
        'public' =>  '0',
        ],
        [
        'name' =>  'Half-Life: Deathmatch',
        'public' =>  '0',
        ],
        [
        'name' =>  'Half-Life Deathmatch: Source',
        'public' =>  '0',
        ],
        [
        'name' =>  'half-Life 2: Deathmatch',
        'public' =>  '0',
        ],
        [
        'name' =>  'Just Cause 2',
        'public' =>  '0',
        ],
        [
        'name' =>  'Left 4 Dead',
        'public' =>  '0',
        ],
        [
        'name' =>  'Left 4 Dead 2',
        'public' =>  '0',
        ],
        [
        'name' =>  'No More Room in Hell',
        'public' =>  '0',
        ],
        [
        'name' =>  'Half-Life: Opposing force',
        'public' =>  '0',
        ],
        [
        'name' =>  'Quake 3: Arena',
        'public' =>  '0',
        ],
        [
        'name' =>  'Serious Sam 3: BFE',
        'public' =>  '0',
        ],
        [
        'name' =>  'Team Fortress Classic',
        'public' =>  '0',
        ],
        [
        'name' =>  'Team Fortress 2',
        'public' =>  '0',
        ],
        [
        'name' =>  'Grand Theft Auto IV',
        'public' =>  '1',
        ],
        [
        'name' =>  'Unreal Tournament 99',
        'public' =>  '1',
        ],
        [
        'name' =>  'Unreal Tournament 2004',
        'public' =>  '0',
        ],
        [
        'name' =>  'Wolfenstein: Enemy Territory',
        'public' =>  '0',
        ],
         ]);
    }
}
