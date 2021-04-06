<?php

/**
 * @see       https://github.com/laminas/laminas-console for the canonical source repository
 * @copyright https://github.com/laminas/laminas-console/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-console/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Console;

interface ColorInterface
{
    public const NORMAL = 0;
    public const RESET  = 0;

    public const BLACK   = 1;
    public const RED     = 2;
    public const GREEN   = 3;
    public const YELLOW  = 4;
    public const BLUE    = 5;
    public const MAGENTA = 6;
    public const CYAN    = 7;
    public const WHITE   = 8;

    public const GRAY          = 9;
    public const LIGHT_RED     = 10;
    public const LIGHT_GREEN   = 11;
    public const LIGHT_YELLOW  = 12;
    public const LIGHT_BLUE    = 13;
    public const LIGHT_MAGENTA = 14;
    public const LIGHT_CYAN    = 15;
    public const LIGHT_WHITE   = 16;
}
