<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Carbon\Carbon;

use App\Post;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test fetch post archives
     *
     * @return void
     */
    public function testArchives () {
        // Given two posts, created a month apart
        $first = factory(Post::class)->create();

        $second = factory(Post::class)->create([
            'created_at' => Carbon::now()->subMonth(),
        ]);

        // When I fetch the post archives
        $posts = Post::archives()->toArray();

        // It should return the following to items
        $this->assertEquals([
            [
                'year' => $first->created_at->format('Y'),
                'month' => $first->created_at->format('F'),
                'published' => 1,
            ],
            [
                'year' => $second->created_at->format('Y'),
                'month' => $second->created_at->format('F'),
                'published' => 1,
            ],
        ], $posts);
    }
}
