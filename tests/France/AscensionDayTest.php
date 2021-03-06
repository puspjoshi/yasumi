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
namespace Yasumi\Tests\France;

use DateTime;
use DateTimeZone;

/**
 * Class for testing Ascension Day in France.
 */
class AscensionDayTest extends FranceBaseTestCase
{
    /**
     * The name of the holiday
     */
    const HOLIDAY = 'ascensionDay';

    /**
     * Tests Ascension Day.
     */
    public function testAscensionDay()
    {
        $year = 1901;
        $this->assertHoliday(self::COUNTRY, self::HOLIDAY, $year,
            new DateTime("$year-5-16", new DateTimeZone(self::TIMEZONE)));
    }

    /**
     * Tests translated name of Ascension Day.
     */
    public function testTranslation()
    {
        $this->assertTranslatedHolidayName(self::COUNTRY, self::HOLIDAY, $this->generateRandomYear(),
            ['fr_FR' => 'Ascension']);
    }
}
