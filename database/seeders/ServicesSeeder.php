<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::insert(
            [
                [
                    'title'=> 'общий клининг',
                ],
                [
                    'title'=> 'генеральная уборка',
                ],
                [
                    'title'=> 'послестроительная уборка',
                ],
                [
                    'title'=> 'химчистка ковров и мебели',
                ],
            ]
        );
    }
}
