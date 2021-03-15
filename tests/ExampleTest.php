<?php

namespace Officialdigtalgravity\DgPageManager\Tests;

use Orchestra\Testbench\TestCase;
use Officialdigtalgravity\DgPageManager\DgPageManagerServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [DgPageManagerServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
