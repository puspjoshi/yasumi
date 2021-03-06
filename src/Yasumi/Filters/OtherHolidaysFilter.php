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
 * OtherHolidaysFilter is a class for filtering all other type of holidays
 *
 * OtherHolidaysFilter is a class that returns all holidays that are considered an other type of holiday of any given
 * holiday provider.
 *
 * Example usage:
 * $holidays = Yasumi::create('Netherlands', 2015);
 * $other = new OtherHolidaysFilter($holidays->getIterator());
 *
 * @package Yasumi
 */
class OtherHolidaysFilter extends FilterIterator
{
    /**
     * Checks whether the current element of the iterator is an other type of holiday
     *
     * @return bool
     */
    public function accept()
    {
        return ($this->getInnerIterator()->current()->getType() === Holiday::TYPE_OTHER) ? true : false;
    }
}