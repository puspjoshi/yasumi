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
namespace Yasumi\Tests\Italy;

use DateTime;

/**
 * Class for testing Christmas in Italy.
 */
class ChristmasTest extends ItalyBaseTestCase
{
    /**
     * The name of the holiday
     */
    const HOLIDAY = 'christmasDay';

    /**
     * Tests Christmas Day.
     *
     * @dataProvider ChristmasDayDataProvider
     *
     * @param int      $year     the year for which Christmas Day needs to be tested
     * @param DateTime $expected the expected date
     */
    public function testChristmasDay($year, $expected)
    {
        $this->assertHoliday(self::COUNTRY, self::HOLIDAY, $year, $expected);
    }

    /**
     * Tests translated name of Christmas Day.
     */
    public function testTranslatedChristmasDay()
    {
        $this->assertTranslatedHolidayName(self::COUNTRY, self::HOLIDAY, $this->generateRandomYear(),
            ['it_IT' => 'Natale']);
    }

    /**
     * Returns a list of random test dates used for assertion of Christmas Day.
     *
     * @return array list of test dates for Christmas Day
     */
    public function ChristmasDayDataProvider()
    {
        return $this->generateRandomDates(12, 25, self::TIMEZONE);
    }
}
