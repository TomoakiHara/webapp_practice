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
            'todo' => 'anything1',
            'tag_id' => 1,
        ];
    Item::create($param);
        $param = [
            'id' => 2,
            'todo' => 'anything2',
            'tag_id' => 2,
        ];
    Item::create($param);
        $param = [
            'id' => 3,
            'todo' => 'anything3',
            'tag_id' => 3,
        ];
    Item::create($param);
        $param = [
            'id' => 4,
            'todo' => 'anything4',
            'tag_id' => 4,
        ];
    Item::create($param);
        $param = [
            'id' => 5,
            'todo' => 'anything5',
            'tag_id' => 5,
        ];
    Item::create($param);
    }
}
