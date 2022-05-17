<?php

namespace Tests\Feature;

use App\Services\CategoryService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryServiceTest extends TestCase
{
    private CategoryService $categoryService;

    public function setUp() :void
    {
        parent::setUp();

        $this->categoryService = $this->app->make(CategoryService::class);
    }

    public function testSample()
    {
        $this->assertTrue(true);
    }
}
