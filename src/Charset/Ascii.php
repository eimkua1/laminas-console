<?php

/**
 * @see       https://github.com/laminas/laminas-console for the canonical source repository
 * @copyright https://github.com/laminas/laminas-console/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-console/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Console\Charset;

/**
 * Basic (low) ASCII line drawing characters.
 */
class Ascii implements CharsetInterface
{
    public const ACTIVATE   = "";
    public const DEACTIVATE = "";

    public const BLOCK        = "#";
    public const SHADE_LIGHT  = " ";
    public const SHADE_MEDIUM = "#";
    public const SHADE_DARK   = "#";

    public const LINE_SINGLE_EW    = "-";
    public const LINE_SINGLE_NS    = "|";
    public const LINE_SINGLE_NW    = "+";
    public const LINE_SINGLE_NE    = "+";
    public const LINE_SINGLE_SE    = "+";
    public const LINE_SINGLE_SW    = "+";
    public const LINE_SINGLE_CROSS = "+";

    public const LINE_DOUBLE_EW    = "=";
    public const LINE_DOUBLE_NS    = "|";
    public const LINE_DOUBLE_NW    = "+";
    public const LINE_DOUBLE_NE    = "+";
    public const LINE_DOUBLE_SE    = "+";
    public const LINE_DOUBLE_SW    = "+";
    public const LINE_DOUBLE_CROSS = "+";

    public const LINE_BLOCK_EW    = "=";
    public const LINE_BLOCK_NS    = "#";
    public const LINE_BLOCK_NW    = "+";
    public const LINE_BLOCK_NE    = "+";
    public const LINE_BLOCK_SE    = "+";
    public const LINE_BLOCK_SW    = "+";
    public const LINE_BLOCK_CROSS = "+";
}
