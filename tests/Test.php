<?php

namespace Uuid\Tests;

use Illuminate\Database\Eloquent\Model;
use Uuid\Traits\GeneratesUuid;

class Test extends Model
{
    use GeneratesUuid;
}
