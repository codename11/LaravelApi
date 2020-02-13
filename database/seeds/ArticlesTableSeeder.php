<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Kreira 30 unosa. U ArticleFactory.php se navode parametri tipa, 
        koliko ce biti duzina nekog polja unosa i sl.. 
        U DatabaseSeeder.php se vrsi pozivanje ovog seeder-a.*/
        factory(App\Article::class, 30)->create();
    }
}
