<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accesses')->insert([
            'name' => 'Системный администратор',
            'desc' => 'Уровень доступа - Системный администратор',
            'slug' => 'super-admin'
        ]);
        DB::table('accesses')->insert([
            'name' => 'Администратор',
            'desc' => 'Уровень доступа - Администратор',
            'slug' => 'admin'
        ]);
        DB::table('accesses')->insert([
            'name' => 'Пользователь',
            'desc' => 'Уровень доступа - Пользователь',
            'slug' => 'user'
        ]);
    }
}
