<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use app\Models\Desc;
use Illuminate\Database\Seeder;

class desc_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Desc::factory()->count(100)->create();
    }
}
