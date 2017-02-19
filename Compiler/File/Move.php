<?php

namespace  Mods\Theme\Compiler\File;

use Mods\Theme\Compiler\Base\Move as BaseMove;

class Move extends BaseMove
{
    /**
     * Hold the type of asset need to be moved.
     *
     * @var string
     */
    protected $type = 'img';
}