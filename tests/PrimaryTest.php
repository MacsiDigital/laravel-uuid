<?php

namespace Uuid\Tests;

use Illuminate\Database\Eloquent\Model;
use Uuid\Traits\GeneratesUuid;

class PrimaryTest extends Model
{
    use GeneratesUuid;

    public function uuidColumn(): string
    {
        return 'id';
    }
}
