<?php

namespace Jsdecena\Simpletdd\Tests\Unit;

use Illuminate\Foundation\Application;
use Jsdecena\SimpleTdd\TimezoneUtil;
use Orchestra\Testbench\TestCase;

class TimezoneTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Define environment setup.
     *
     * @param  Application $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']
            ->set(
                'simpletdd.timezone',
                'America/Los_Angeles'
            );
    }

    /**
     * @param Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return ['Jsdecena\SimpleTdd\ServiceProvider'];
    }

    /** @test */
    public function it_should_get_the_config_tz()
    {
        $tzNow = TimezoneUtil::getTimezone(config('simpletdd.timezone'));
        $this->assertEquals("America/Los_Angeles", $tzNow->getTimezone()->getName());
    }
}
