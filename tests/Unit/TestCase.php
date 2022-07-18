<?php

namespace Vendor\MyPackage\Tests;

use Vendor\MyPackage\MyPackageServiceProvider;

class TestCase extends TestCase//\Orchestra\Testbench\TestCase
{
  public function setUp(): void
  {
    parent::setUp();
    // additional setup
  }

  protected function getPackageProviders($app)
  {
    return [
      MyPackageServiceProvider::class,
    ];
  }

  protected function getEnvironmentSetUp($app)
  {
    // perform environment setup
  }
}