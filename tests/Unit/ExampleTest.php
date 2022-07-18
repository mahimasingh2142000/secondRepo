<?php
namespace Vendor\MyPackage\Tests;

use Vendor\MyPackage\Models\Role;

use PHPUnit\Framework\TestCase;

//use Orchestra\Testbench\TestCase;


class ExampleTest extends TestCase
{
    /**tests */

    public function it_can_create_role()
    {
        $role = Role::create([

            'name'=>'Mahima Singh',
            'address'=>'Gorakhpur'

        ]);
       

        $this->assertTrue($role->exists);
    }
}

?>