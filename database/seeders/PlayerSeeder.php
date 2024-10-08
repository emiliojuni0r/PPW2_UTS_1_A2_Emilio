<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Player::create([
            'nama_pemain' => 'Marcus Rashford',
            'no_punggung' => '10',
            'posisi' => 'Striker',],
        );
        Player::create([
            'nama_pemain' => 'Anthony Martial',
            'no_punggung' => '11',
            'posisi' => 'Winger',],
        );
        Player::create([
            'nama_pemain' => 'De Light',
            'no_punggung' => '3',
            'posisi' => 'Center Back',],
        );
        Player::create([
            'nama_pemain' => 'Onana',
            'no_punggung' => '1',
            'posisi' => 'Goal Keeper',],
        );
        Player::create([
            'nama_pemain' => 'Anthony Santos (el-gasing)',
            'no_punggung' => '9',
            'posisi' => 'Right Wing',],
        );
        Player::create([
            'nama_pemain' => 'Lord Lingard',
            'no_punggung' => '23',
            'posisi' => 'Center Attack Midfielnder',],
        );
    }
}
