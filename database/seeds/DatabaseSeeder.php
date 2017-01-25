<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('categories')->truncate();
        DB::table('tags')->truncate();
        DB::table('news')->truncate();
        DB::table('news_tags')->truncate();
        DB::table('comments')->truncate();

        DB::table('categories')->insert([
            'id' => 1,
            'title' => 'Новости',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'title' => 'Анекдоты',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'title' => 'Стихи',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tags')->insert([
            'id' => 1,
            'name' => 'пошлятина',
            'created_at' => Carbon::now(),
        ]);

        DB::table('tags')->insert([
            'id' => 2,
            'name' => 'деньги',
            'created_at' => Carbon::now(),
        ]);

        DB::table('tags')->insert([
            'id' => 3,
            'name' => 'политика',
            'created_at' => Carbon::now(),
        ]);

        DB::table('tags')->insert([
            'id' => 4,
            'name' => 'путлер',
            'created_at' => Carbon::now(),
        ]);

        DB::table('tags')->insert([
            'id' => 5,
            'name' => 'исход',
            'created_at' => Carbon::now(),
        ]);

        DB::table('tags')->insert([
            'id' => 6,
            'name' => 'рашка',
            'created_at' => Carbon::now(),
        ]);

        DB::table('tags')->insert([
            'id' => 7,
            'name' => 'english',
            'created_at' => Carbon::now(),
        ]);
        DB::table('tags')->insert([
            'id' => 8,
            'name' => 'искусство',
            'created_at' => Carbon::now(),
        ]);

        DB::table('news')->insert([
            'id' => 1,
            'title' => 'ВИЛАЯТ ДАГЕСТАН. В Шамилькале обстреляна банда ДПС. Двое муратдов ранены',
            'body' => file_get_contents(dirname(__FILE__).'/data/1.txt'),
            'category_id' => 1,
            'created_at' => '2016-12-25',
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 1,
            'tag_id' => 6,
        ]);
        DB::table('comments')->insert([
            'news_id' => 1,
            'author' => 'Виктор Франкенштейн',
            'body' => 'Неплохо',
            'created_at' => '2016-12-26 11:36:02',
        ]);

        DB::table('news')->insert([
            'id' => 2,
            'title' => 'Путинская болонка пугает третьей мировой войной',
            'body' => file_get_contents(dirname(__FILE__).'/data/2.txt'),
            'category_id' => 1,
            'created_at' => '2016-02-12',
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 2,
            'tag_id' => 6,
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 2,
            'tag_id' => 3,
        ]);

        DB::table('news')->insert([
            'id' => 3,
            'title' => 'ПСИХИАТРИЯ. Путин назвал сбитый русский бомбардировщик СУ 24 «беззащитным»',
            'body' => file_get_contents(dirname(__FILE__).'/data/3.txt'),
            'category_id' => 1,
            'created_at' => '2015-11-30',
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 3,
            'tag_id' => 6,
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 3,
            'tag_id' => 4,
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 3,
            'tag_id' => 3,
        ]);

        DB::table('news')->insert([
            'id' => 4,
            'title' => 'РУССКАЯ ТЕХНИКА. Рухнул очередной летающий гроб',
            'body' => file_get_contents(dirname(__FILE__).'/data/4.txt'),
            'category_id' => 1,
            'created_at' => '2015-11-26',
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 4,
            'tag_id' => 6,
        ]);

        DB::table('news')->insert([
            'id' => 5,
            'title' => 'Диссиденты уже не вернутся на родину ФСБ',
            'body' => file_get_contents(dirname(__FILE__).'/data/5.txt'),
            'category_id' => 1,
            'created_at' => '2015-08-14',
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 5,
            'tag_id' => 6,
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 5,
            'tag_id' => 5,
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 5,
            'tag_id' => 3,
        ]);

        DB::table('news')->insert([
            'id' => 6,
            'title' => 'Миллионы россиян уже обзавелись вторым гражданством',
            'body' => file_get_contents(dirname(__FILE__).'/data/6.txt'),
            'category_id' => 1,
            'created_at' => '2015-08-04',
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 6,
            'tag_id' => 6,
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 6,
            'tag_id' => 5,
        ]);

        DB::table('news')->insert([
            'id' => 7,
            'title' => 'ПУТИНСКАЯ РОДНЯ. В Англии попал на нары пьяный кузен Путина, член русской мафии',
            'body' => file_get_contents(dirname(__FILE__).'/data/7.txt'),
            'category_id' => 1,
            'created_at' => '2014-12-24',
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 7,
            'tag_id' => 4,
        ]);

        DB::table('news')->insert([
            'id' => 8,
            'title' => 'День рождения',
            'body' => file_get_contents(dirname(__FILE__).'/data/a1.txt'),
            'category_id' => 2,
            'created_at' => '2016-06-06',
        ]);
        DB::table('comments')->insert([
            'news_id' => 8,
            'author' => 'Шурик',
            'body' => '=)',
            'created_at' => '2016-06-08 13:42:18',
        ]);
        DB::table('comments')->insert([
            'news_id' => 8,
            'author' => 'Александр Пистолетов',
            'body' => 'Гыгыгы',
            'created_at' => '2016-06-09 18:08:31',
        ]);
        DB::table('comments')->insert([
            'news_id' => 8,
            'author' => 'Антон Стремянкин',
            'body' => 'Не смешно',
            'created_at' => '2016-06-10  23:51:44',
        ]);


        DB::table('news_tags')->insert([
            'news_id' => 8,
            'tag_id' => 2,
        ]);

        DB::table('news')->insert([
            'id' => 9,
            'title' => 'Адам Мицкевич - Посвящение в альбом',
            'body' => file_get_contents(dirname(__FILE__).'/data/p1.txt'),
            'category_id' => 3,
            'created_at' => '2015-12-12',
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 9,
            'tag_id' => 8,
        ]);


        DB::table('news')->insert([
            'id' => 10,
            'title' => 'Poetry',
            'body' => file_get_contents(dirname(__FILE__).'/data/p2.txt'),
            'category_id' => 3,
            'created_at' => '2015-11-28',
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 10,
            'tag_id' => 8,
        ]);

        DB::table('news')->insert([
            'id' => 11,
            'title' => 'Baby sitter',
            'body' => file_get_contents(dirname(__FILE__).'/data/a2.txt'),
            'category_id' => 2,
            'created_at' => '2015-10-28',
        ]);

        DB::table('news_tags')->insert([
            'news_id' => 11,
            'tag_id' => 1,
        ]);

        DB::table('news')->insert([
            'id' => 12,
            'title' => 'Тонкий английский юмор',
            'body' => file_get_contents(dirname(__FILE__).'/data/a3.txt'),
            'category_id' => 2,
            'created_at' => '2015-08-10',
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 12,
            'tag_id' => 7,
        ]);

        DB::table('news')->insert([
            'id' => 13,
            'title' => '$1000 USD',
            'body' => file_get_contents(dirname(__FILE__).'/data/a4.txt'),
            'category_id' => 2,
            'created_at' => '2015-08-09',
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 13,
            'tag_id' => 2,
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 13,
            'tag_id' => 7,
        ]);

        DB::table('news_tags')->insert([
            'news_id' => 13,
            'tag_id' => 1,
        ]);

        DB::table('news')->insert([
            'id' => 14,
            'title' => 'I can see your house from here!',
            'body' => file_get_contents(dirname(__FILE__).'/data/a5.txt'),
            'category_id' => 2,
            'created_at' => '2014-12-13',
        ]);
        DB::table('news_tags')->insert([
            'news_id' => 14,
            'tag_id' => 7,
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
