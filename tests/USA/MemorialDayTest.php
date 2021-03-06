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
namespace Yasumi\Tests\USA;

use DateTime;
use DateTimeZone;

/**
 * Class to test Memorial Day.
 */
class MemorialDayTest extends USABaseTestCase
{
    /**
     * The name of the holiday
     */
    const HOLIDAY = 'memorialDay';

    /**
     * The year in which the holiday was first established
     */
    const ESTABLISHMENT_YEAR = 1865;

    /**
     * Tests Memorial Day on or after 1968. Memorial Day was established since 1865 on May 30 and was changed in 1968
     * to the last Monday in May.
     */
    public function testMemorialDayOnAfter1968()
    {
        $year = $this->generateRandomYear(1968);
        $this->assertHoliday(self::COUNTRY, self::HOLIDAY, $year,
            new DateTime("last monday of may $year", new DateTimeZone(self::TIMEZONE)));
    }

    /**
     * Tests Memorial Day between 1865 and 1967. Memorial Day was established since 1865 on May 30 and was changed in
     * 1968 to the last Monday in May.
     */
    public function testMemorialDayBetween1865And1967()
    {
        $year = $this->generateRandomYear(self::ESTABLISHMENT_YEAR, 1967);
        $this->assertHoliday(self::COUNTRY, self::HOLIDAY, $year,
            new DateTime("$year-5-30", new DateTimeZone(self::TIMEZONE)));
    }

    /**
     * Tests Memorial Day before 1865. Memorial Day was established since 1865 on May 30 and was changed in 1968 to the
     * last Monday in May.
     */
    public function testMemorialDayBefore1865()
    {
        $this->assertNotHoliday(self::COUNTRY, self::HOLIDAY,
            $this->generateRandomYear(1000, self::ESTABLISHMENT_YEAR - 1));
    }

    /**
     * Tests translated name of Memorial Day.
     */
    public function testTranslation()
    {
        $this->assertTranslatedHolidayName(self::COUNTRY, self::HOLIDAY,
            $this->generateRandomYear(self::ESTABLISHMENT_YEAR), ['en_US' => 'Memorial Day']);
    }
}
