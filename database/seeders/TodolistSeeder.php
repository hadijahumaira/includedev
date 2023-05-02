<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodolistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listifies')->insert([
            'judul' => 'WEBSITE RPL',
            'jenis' => 'Done',
            'noprioritas' => 1,
        ]);
    }
}
