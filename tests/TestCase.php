<?php

namespace Ibnuridho\BangunRuang\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
	protected function getPackageProviders($app)
	{
	    return [\Ibnuridho\BangunRuang\Providers\BangunRuangServiceProvider::class];
	}

	/**
	 * Setup the test environment.
	 */
	protected function setUp(): void
	{
	    parent::setUp();

	    // Your code here
	}
}