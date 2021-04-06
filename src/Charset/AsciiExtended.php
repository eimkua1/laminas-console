<?php

/**
 * @see       https://github.com/laminas/laminas-console for the canonical source repository
 * @copyright https://github.com/laminas/laminas-console/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-console/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Console\Charset;

/**
 * Extended ASCII character set (positions 127+, MS DOS & Windows compatible)
 *
 * @link http://en.wikipedia.org/wiki/Box-drawing_characters
 */
class AsciiExtended implements CharsetInterface
{
    public const ACTIVATE   = "";
    public const DEACTIVATE = "";

    public const BLOCK        = "\xdb";
    public const SHADE_LIGHT  = "\xb0";
    public const SHADE_MEDIUM = "\xb1";
    public const SHADE_DARK   = "\xb2";

    public const LINE_SINGLE_EW    = "\xc4";
    public const LINE_SINGLE_NS    = "\xb3";
    public const LINE_SINGLE_NW    = "\xda";
    public const LINE_SINGLE_NE    = "\xbf";
    public const LINE_SINGLE_SE    = "\xd9";
    public const LINE_SINGLE_SW    = "\xc0";
    public const LINE_SINGLE_CROSS = "\xc5";

    public const LINE_DOUBLE_EW    = "\xcd";
    public const LINE_DOUBLE_NS    = "\xba";
    public const LINE_DOUBLE_NW    = "\xc9";
    public const LINE_DOUBLE_NE    = "\xbb";
    public const LINE_DOUBLE_SE    = "\xbc";
    public const LINE_DOUBLE_SW    = "\xc8";
    public const LINE_DOUBLE_CROSS = "\xce";

    public const LINE_BLOCK_EW    = "\xdb";
    public const LINE_BLOCK_NS    = "\xdb";
    public const LINE_BLOCK_NW    = "\xdb";
    public const LINE_BLOCK_NE    = "\xdb";
    public const LINE_BLOCK_SE    = "\xdb";
    public const LINE_BLOCK_SW    = "\xdb";
    public const LINE_BLOCK_CROSS = "\xdb";
}
