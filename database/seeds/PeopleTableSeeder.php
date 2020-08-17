<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'name'=>'taro',
          'mail'=>'taro@yamada.jp',
          'age'=>'12',
        ];
        DB:table('people')->insert($param);

        $param = [
          'name'=>'karo',
          'mail'=>'karo@yamada.jp',
          'age'=>'82',
        ];
        DB:table('people')->insert($param);

        $param = [
          'name'=>'jiro',
          'mail'=>'jiro@yamada.jp',
          'age'=>'56',
        ];
        DB:table('people')->insert($param);

        $param = [
          'name'=>'taro',
          'mail'=>'taro@yamada.jp',
          'age'=>'12',
        ];
        DB:table('people')->insert($param);

        $param = [
          'name'=>'tanaka',
          'mail'=>'yamada@yamada.jp',
          'age'=>'18',
        ];
        DB:table('people')->insert($param);

        $param = [
          'name'=>'ryoko',
          'mail'=>'ryoko@yamada.jp',
          'age'=>'26',
        ];
        DB:table('people')->insert($param);
    }
}
