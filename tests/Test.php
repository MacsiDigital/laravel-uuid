<?php

namespace Uuid\Tests;

use Uuid\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use GeneratesUuid;

}