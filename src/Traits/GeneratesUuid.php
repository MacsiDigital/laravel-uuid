<?php

namespace Uuid\Traits;

use Illuminate\Support\Str;

trait GeneratesUuid
{
    public static function bootGeneratesUuid(): void
    {
        static::creating(function ($model) {
            $model->attributes[$model->uuidColumn()] = (string) Str::uuid();
        });
    }

    public function uuidColumn(): string
    {
        return 'uuid';
    }

    public function getIncrementing()
    {
        if ($this->uuidColumn() == $this->getKeyName()) {
            return false;
        }

        return true;
    }
}
