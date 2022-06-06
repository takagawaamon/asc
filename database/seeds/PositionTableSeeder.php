<?php

use Illuminate\Database\Seeder;
use App\Position;

class PositionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $position_names = [
            'FW',
            'MF',
            'DF',
            'GK',
        ];
        
        foreach($position_names as $position_name){
            Position::create([
                'name' => $position_name
             ]);
        }
    }
    
}
