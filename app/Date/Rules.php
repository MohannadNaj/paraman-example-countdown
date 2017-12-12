<?php
namespace App\Date;

use Paraman\Types\BaseRules;

class Rules extends BaseRules
{
    /**
     * @return array
     */
    public function newRules()
    {
        return ['value'=>'date|date_format:d-m-Y'];
    }

    public function updateRules()
    {
        return ['value'=>'date|date_format:d-m-Y'];
    }
}