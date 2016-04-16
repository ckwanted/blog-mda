<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

class ArticleTest extends TestCase
{

	use DatabaseTransactions;


    /** @test */
    public function it_can_added_to_a_comment()
    {
    	$article = factory(App\Article::class)->create();

    	$comment = ['username' => 'Pepe', 'body' => 'Un articulo muy bueno'];

    	$article->assignComment($comment);
        
        $this->assertEquals(1, $article->comments()->count());
    }
}
