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
namespace Yasumi\Filters;

use FilterIterator;
use Yasumi\Holiday;

/**
 * ObservedHolidaysFilter is a class for filtering all observed holidays
 *
 * ObservedHolidaysFilter is a class that returns all holidays that are considered observed of any given holiday
 * provider.
 *
 * Example usage:
 * $holidays = Yasumi::create('Netherlands', 2015);
 * $observed = new ObservedHolidaysFilter($holidays->getIterator());
 *
 * @package Yasumi
 */
class ObservedHolidaysFilter extends FilterIterator
{
    /**
     * Checks whether the current element of the iterator is an observed holiday
     *
     * @return bool
     */
    public function accept()
    {
        return ($this->getInnerIterator()->current()->getType() === Holiday::TYPE_OBSERVANCE) ? true : false;
    }
}