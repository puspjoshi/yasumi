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
namespace Yasumi\Tests\Belgium;

use DateTime;

/**
 * Class containing tests for International Workers' Day (i.e. Labour Day) in Belgium.
 */
class InternationalWorkersDayTest extends BelgiumBaseTestCase
{
    /**
     * The name of the holiday
     */
    const HOLIDAY = 'internationalWorkersDay';

    /**
     * Tests International Workers' Day.
     *
     * @dataProvider InternationalWorkersDayDataProvider
     *
     * @param int      $year     the year for which International Workers' Day needs to be tested
     * @param DateTime $expected the expected date
     */
    public function testInternationalWorkersDay($year, $expected)
    {
        $this->assertHoliday(self::COUNTRY, self::HOLIDAY, $year, $expected);
    }

    /**
     * Returns a list of random test dates used for assertion of International Workers' Day.
     *
     * @return array list of test dates for International Workers' Day
     */
    public function InternationalWorkersDayDataProvider()
    {
        return $this->generateRandomDates(5, 1, self::TIMEZONE);
    }

    /**
     * Tests translated name of International Workers' Day.
     */
    public function testTranslation()
    {
        $this->assertTranslatedHolidayName(self::COUNTRY, self::HOLIDAY, $this->generateRandomYear(),
            ['nl_BE' => 'Dag van de arbeid']);
    }
}
