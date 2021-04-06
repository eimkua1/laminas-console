<?php

/**
 * @see       https://github.com/laminas/laminas-console for the canonical source repository
 * @copyright https://github.com/laminas/laminas-console/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-console/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Console;

use Laminas\Console\AbstractConsole;
use Laminas\Console\Adapter\AdapterInterface;
use Laminas\Console\Adapter\Posix;
use Laminas\Console\Adapter\Windows;
use Laminas\Console\Exception\RuntimeException;
use PHPUnit\Framework\TestCase;

/**
 * @group      Laminas_Console
 */
class ConsoleTest extends TestCase
{
    public function setUp(): void
    {
        AbstractConsole::overrideIsConsole(null);
        AbstractConsole::resetInstance();
    }

    public function testCanTestIsConsole()
    {
        $this->assertTrue(AbstractConsole::isConsole());
        $className = AbstractConsole::detectBestAdapter();
        $adpater   = new $className();
        $this->assertInstanceOf(AdapterInterface::class, $adpater);

        AbstractConsole::overrideIsConsole(false);

        $this->assertFalse(AbstractConsole::isConsole());
        $this->assertEquals(null, AbstractConsole::detectBestAdapter());
    }

    public function testCanOverrideIsConsole()
    {
        $this->assertEquals(true, AbstractConsole::isConsole());

        AbstractConsole::overrideIsConsole(true);
        $this->assertEquals(true, AbstractConsole::isConsole());

        AbstractConsole::overrideIsConsole(false);
        $this->assertEquals(false, AbstractConsole::isConsole());

        AbstractConsole::overrideIsConsole(1);
        $this->assertEquals(true, AbstractConsole::isConsole());

        AbstractConsole::overrideIsConsole('false');
        $this->assertEquals(true, AbstractConsole::isConsole());
    }

    public function testCanGetInstance()
    {
        $console = AbstractConsole::getInstance();
        $this->assertInstanceOf(AdapterInterface::class, $console);
    }

    public function testCanNotGetInstanceInNoConsoleMode()
    {
        AbstractConsole::overrideIsConsole(false);
        $this->expectException(RuntimeException::class);
        AbstractConsole::getInstance();
    }

    public function testCanForceInstance()
    {
        $console = AbstractConsole::getInstance('Posix');
        $this->assertInstanceOf(AdapterInterface::class, $console);
        $this->assertInstanceOf(Posix::class, $console);

        AbstractConsole::overrideIsConsole(null);
        AbstractConsole::resetInstance();

        $console = AbstractConsole::getInstance('Windows');
        $this->assertInstanceOf(AdapterInterface::class, $console);
        $this->assertInstanceOf(Windows::class, $console);
    }
}
