<?php

/**
 * @see       https://github.com/laminas/laminas-console for the canonical source repository
 * @copyright https://github.com/laminas/laminas-console/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-console/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Console\Charset;

/**
 * DEC Special Graphics (VT100 line drawing) character set
 *
 * @link http://vt100.net/docs/vt220-rm/table2-4.html
 */
class DECSG implements CharsetInterface
{
    public const ACTIVATE   = "\x1b(0";
    public const DEACTIVATE = "\x1b(B";

    public const BLOCK        = "\x61";
    public const SHADE_LIGHT  = "\x61";
    public const SHADE_MEDIUM = "\x61";
    public const SHADE_DARK   = "\x61";

    public const LINE_SINGLE_EW    = "\x71";
    public const LINE_SINGLE_NS    = "\x78";
    public const LINE_SINGLE_NW    = "\x6c";
    public const LINE_SINGLE_NE    = "\x6b";
    public const LINE_SINGLE_SE    = "\x6a";
    public const LINE_SINGLE_SW    = "\x6d";
    public const LINE_SINGLE_CROSS = "\x6e";

    public const LINE_DOUBLE_EW    = "\x73";
    public const LINE_DOUBLE_NS    = "\x78";
    public const LINE_DOUBLE_NW    = "\x6c";
    public const LINE_DOUBLE_NE    = "\x5b";
    public const LINE_DOUBLE_SE    = "\x6a";
    public const LINE_DOUBLE_SW    = "\x6d";
    public const LINE_DOUBLE_CROSS = "\x6e";

    public const LINE_BLOCK_EW    = "\x61";
    public const LINE_BLOCK_NS    = "\x61";
    public const LINE_BLOCK_NW    = "\x61";
    public const LINE_BLOCK_NE    = "\x61";
    public const LINE_BLOCK_SE    = "\x61";
    public const LINE_BLOCK_SW    = "\x61";
    public const LINE_BLOCK_CROSS = "\x61";
}
