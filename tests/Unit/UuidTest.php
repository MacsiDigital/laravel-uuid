<?php

namespace Uuid\Tests\Unit;

use Uuid\Tests\Test;
use Uuid\Tests\TestCase;
use Uuid\Tests\PrimaryTest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UuidTest extends TestCase
{
    /** @test */
    public function a_model_can_create_with_a_primary_uuid_key()
    {
        $test = new PrimaryTest;
        $test->name = 'Primary Unit Test';
        $test->save();

        $this->assertDatabaseHas('primary_tests', $test->toArray());

        $retreived_test = PrimaryTest::whereName('Primary Unit Test')->first();
        
        $this->assertTrue($retreived_test->id != '');
    }

    /** @test */
    public function a_model_can_create_a_uuid_on_save()
    {
        $test = new Test;
        $test->name = 'Unit Test';
        $test->save();

        $this->assertDatabaseHas('tests', $test->toArray());

        $retreived_test = Test::whereName('Unit Test')->first();
        
        $this->assertTrue($retreived_test->uuid != '');
    }
}
