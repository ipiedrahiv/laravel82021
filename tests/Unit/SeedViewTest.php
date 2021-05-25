<?php

namespace Tests\Unit;

use App\Models\Seed;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class SeedViewTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_store_route()
    {
        $response = $this->get('/store');
        $response->assertStatus(200);
    }

    public function test_seed_has_columns()
    {
        $this->assertTrue(
            Schema::hasColumns('seeds', [
              'id', 'name', 'seller', 'price', 'keywords', 'categories', 'stock', 'image',
          ]), 1);
    }

    public function test_seed_has_many_reviews()
    {
        $seed = new Seed;
        $this->assertInstanceOf(Collection::class, $seed->reviews);
    }
}
