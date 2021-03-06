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
use DateTimeZone;

/**
 * Class containing tests for Easter in Italy.
 */
class EasterTest extends ItalyBaseTestCase
{
    /**
     * The name of the first holiday of Easter
     */
    const HOLIDAY_FIRST = 'easter';

    /**
     * The name of the second holiday of Easter
     */
    const HOLIDAY_SECOND = 'easterMonday';

    /**
     * Tests Easter.
     */
    public function testEaster()
    {
        $year = 2009;
        $this->assertHoliday(self::COUNTRY, self::HOLIDAY_FIRST, $year,
            new DateTime("$year-4-12", new DateTimeZone(self::TIMEZONE)));
    }

    /**
     * Tests translated name of Easter.
     */
    public function testTranslatedEaster()
    {
        $this->assertTranslatedHolidayName(self::COUNTRY, self::HOLIDAY_FIRST, $this->generateRandomYear(),
            ['it_IT' => 'Pasqua']);
    }

    /**
     * Tests Easter Monday.
     */
    public function testEasterMonday()
    {
        $year = 2009;
        $this->assertHoliday(self::COUNTRY, self::HOLIDAY_SECOND, $year,
            new DateTime("$year-4-13", new DateTimeZone(self::TIMEZONE)));
    }

    /**
     * Tests translated name of Easter Monday.
     */
    public function testTranslatedEasterMonday()
    {
        $this->assertTranslatedHolidayName(self::COUNTRY, self::HOLIDAY_SECOND, $this->generateRandomYear(),
            ['it_IT' => 'Lunedi` dell\'Angelo']);
    }
}
