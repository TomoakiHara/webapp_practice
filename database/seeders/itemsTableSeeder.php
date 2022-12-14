<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

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
            'todo' => 'anything',
            'tag_id' => 1,
        ];
    Item::create($param);
    }
}
