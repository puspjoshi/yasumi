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
 * Class containing tests for Easter Monday in France.
 */
class EasterMondayTest extends FranceBaseTestCase
{
    /**
     * The name of the holiday
     */
    const HOLIDAY = 'easterMonday';

    /**
     * Tests Easter Monday.
     */
    public function testEasterMonday()
    {
        $year = 2016;
        $this->assertHoliday(self::COUNTRY, self::HOLIDAY, $year,
            new DateTime("$year-3-28", new DateTimeZone(self::TIMEZONE)));
    }

    /**
     * Tests translated name of Easter Monday.
     */
    public function testTranslation()
    {
        $this->assertTranslatedHolidayName(self::COUNTRY, self::HOLIDAY, $this->generateRandomYear(),
            ['fr_FR' => 'Lundi de Pâques']);
    }
}
