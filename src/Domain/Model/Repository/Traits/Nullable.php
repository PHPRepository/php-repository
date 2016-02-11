<?php

namespace NilPortugues\Foundation\Domain\Model\Repository\Traits;

use ReflectionClass;

trait Nullable
{
    /**
     * Creates a null Value Object.
     *
     * @return self
     */
    public static function null()
    {
        return (new ReflectionClass(get_called_class()))->newInstanceWithoutConstructor();
    }

    /**
     * @return bool
     */
    public function isNull()
    {
        return empty(array_filter(get_object_vars($this)));
    }
}
