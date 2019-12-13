<?php

namespace Uuid\Tests;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
	 public function setUp() : void
    {
    	parent::setUp();

        Schema::create('primary_tests', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->uuid('uuid');  
            $table->string('name');
            $table->timestamps();
        });

    }
}