<?php

namespace Uuid\Tests;

use Uuid\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Model;

class PrimaryTest extends Model
{
    use GeneratesUuid;

    public function uuidColumn(): string
    {
        return 'id';
    }

}