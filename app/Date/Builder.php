<?php
namespace App\Date;

use Paraman\Types\BaseBuilder;

class Builder extends BaseBuilder
{
    public function buildValue()
    {
        return (string) trim($this->parameter->value);
    }
}