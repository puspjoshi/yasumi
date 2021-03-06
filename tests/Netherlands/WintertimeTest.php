<?php
/*
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <stelgenhof@gmail.com>
 */
namespace Yasumi\Tests\Netherlands;

use DateTime;
use DateTimeZone;

/**
 * Class for testing Wintertime in the Netherlands.
 */
class WinterTimeTest extends NetherlandsBaseTestCase
{
    /**
     * Tests Wintertime.
     */
    public function testWintertime()
    {
        $year = $this->generateRandomYear();
        $this->assertHoliday(self::COUNTRY, 'winterTime', $year,
            new DateTime("last sunday of october $year", new DateTimeZone(self::TIMEZONE)));
    }
}
