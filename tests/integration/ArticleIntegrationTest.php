<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class ArticleIntegrationTest extends TestCase
{

    use DatabaseTransactions;


    /** @test */
    public function it_verifies_show_all_articles_on_admin_page()
    {
        $article = factory(App\Article::class)->create();

        \Auth::loginUsingId(2);

        $this->visit('admin/articles')
             ->see($article->title);
    }

    /** @test */
    public function it_verifies_show_all_articles_on_main_page()
    {
        $article = factory(App\Article::class)->create();

        $this->visit('/')
             ->see($article->title);
    }
}
