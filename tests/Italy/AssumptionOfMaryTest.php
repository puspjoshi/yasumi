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
 * Class for testing the day of the Assumption of Mary in Italy.
 */
class AssumptionOfMaryTest extends ItalyBaseTestCase
{
    /**
     * The name of the holiday
     */
    const HOLIDAY = 'assumptionOfMary';

    /**
     * Tests the day of the Assumption of Mary.
     *
     * @dataProvider AssumptionOfMaryDataProvider
     *
     * @param int      $year     the year for which the day of the Assumption of Mary needs to be tested
     * @param DateTime $expected the expected date
     */
    public function testAssumptionOfMary($year, $expected)
    {
        $this->assertHoliday(self::COUNTRY, self::HOLIDAY, $year, $expected);
    }

    /**
     * Tests translated name of the Assumption of Mary.
     */
    public function testTranslatedAssumptionOfMary()
    {
        $this->assertTranslatedHolidayName(self::COUNTRY, self::HOLIDAY, $this->generateRandomYear(),
            ['it_IT' => 'Assunzione di Maria Vergine']);
    }

    /**
     * Returns a list of random test dates used for assertion of the day of the Assumption of Mary.
     *
     * @return array list of test dates for the day of the Assumption of Mary
     */
    public function AssumptionOfMaryDataProvider()
    {
        return $this->generateRandomDates(8, 15, self::TIMEZONE);
    }
}
