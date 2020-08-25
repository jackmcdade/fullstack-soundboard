<?php

namespace App\Modifiers;

use Statamic\Modifiers\Modifier;

class Buttonify extends Modifier
{
    /**
     * Modify a value.
     *
     * @param mixed  $value    The value to be modified
     * @param array  $params   Any parameters used in the modifier
     * @param array  $context  Contextual values
     * @return mixed
     */
    public function index($value, $params, $context)
    {
        $arr = explode(' - ', $value);

        return ['name' => $arr[0], 'phrase' => $arr[1]];
    }
}
