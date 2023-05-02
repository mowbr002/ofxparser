<?php

namespace OfxParser\Entities\Investment;

use OfxParser\Entities\Investment;

class Security extends Investment
{
    /**
     * @var string
     */
    public $uniqueId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ticker;
}
