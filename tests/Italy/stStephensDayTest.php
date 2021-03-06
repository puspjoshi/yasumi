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
 * Class for testing St. Stephen's Day in Italy.
 */
class stStephensDayTest extends ItalyBaseTestCase
{
    /**
     * The name of the holiday
     */
    const HOLIDAY = 'stStephensDay';

    /**
     * Tests the day of St. Stephen's Day.
     *
     * @dataProvider stStephensDayDataProvider
     *
     * @param int      $year     the year for which St. Stephen's Day needs to be tested
     * @param DateTime $expected the expected date
     */
    public function teststStephensDay($year, $expected)
    {
        $this->assertHoliday(self::COUNTRY, self::HOLIDAY, $year, $expected);
    }

    /**
     * Tests translated name of St. Stephen's Day.
     */
    public function testTranslatedstStephensDay()
    {
        $this->assertTranslatedHolidayName(self::COUNTRY, self::HOLIDAY, $this->generateRandomYear(),
            ['it_IT' => 'Santo Stefano']);
    }

    /**
     * Returns a list of random test dates used for assertion of St. Stephen's Day.
     *
     * @return array list of test dates for St. Stephen's Day
     */
    public function stStephensDayDataProvider()
    {
        return $this->generateRandomDates(12, 26, self::TIMEZONE);
    }
}
