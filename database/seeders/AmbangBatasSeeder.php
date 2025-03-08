<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\AmbangBatas;

class AmbangBatasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Schema::hasTable('ambang_batas')) 
        {
            return;
        }

        $data = [
            [
                'ambang_batas' => 50.0
            ],
            [
                'ambang_batas' => 70.0
            ],
        ];

        foreach ($data as $item) 
        {
            AmbangBatas::create($item);
        }
    }
}
