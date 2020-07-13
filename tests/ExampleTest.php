<?php

namespace Csechrist\LaravelChargebee\Tests;

use Orchestra\Testbench\TestCase;
use Csechrist\LaravelChargebee\LaravelChargebeeServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelChargebeeServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
