<?php

use Illuminate\Database\Seeder;

class ListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lists')->insert([
            [
                'list_id' => '1',
                'json' => '[{"listId": 1,"listTitle": "リスト1","cardData": [{"cardId": 11,"cardTitle": "カードタイトル11"},{"cardId": 12,"cardTitle": "カードタイトル12"},{"cardId": 13,"cardTitle": "カードタイトル13"}]},{"listId": 2,"listTitle": "リスト2","cardData": [{"cardId": 21,"cardTitle": "カードタイトル21"},{"cardId": 22,"cardTitle": "カードタイトル22"},{"cardId": 23,"cardTitle": "カードタイトル23"}]},{"listId": 3,"listTitle": "リスト3","cardData": [{"cardId": 3,"cardTitle": "カードタイトル31"},{"cardId": 32,"cardTitle": "カードタイトル32"},{"cardId": 33,"cardTitle": "カードタイトル33"}]},{"listId": 4,"listTitle": "リスト4","cardData": [{"cardId": 4,"cardTitle": "カードタイトル41"},{"cardId": 42,"cardTitle": "カードタイトル42"},{"cardId": 43,"cardTitle": "カードタイトル43"}]},{"listId": 5,"listTitle": "リスト5","cardData": [{"cardId": 51,"cardTitle": "カードタイトル51"},{"cardId": 52,"cardTitle": "カードタイトル52"},{"cardId": 53,"cardTitle": "カードタイトル53"}]}]'
            ]
        ]);
    }
}
