<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Mockery\Matcher\Type;
use illuminate\Support\Str;

class typeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['FrontEnd', 'BackEnd', 'Devops', 'FullStack'];
        foreach ($types as $type) {
            $New_type = new Type();
            $New_type->type = $type;
            $New_type->slug = Str::slug($type);
        }
    }
}
