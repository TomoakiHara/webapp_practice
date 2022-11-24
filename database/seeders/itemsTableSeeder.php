<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\item;

class itemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'id' => 1,
            'todo' => 'anything'
        ];
    item::create($param);
    }
}
