<?php

namespace Tests\Feature\View;

use Illuminate\Support\Facades\Vite;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic view test example.
     */
    public function test_it_can_render(): void
    {
        Vite::fake();
        $contents = $this->view('product', [
            //
        ]);

        $contents->assertSee('');
    }
}
