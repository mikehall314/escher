<?php

/**
 * Feather Framework
 * @package DDL\Feather
 */

namespace DDL\Feather;

/**
 * Feather
 * Set up the Feather environment
 *
 * @author Mike Hall
 * @copyright GG.COM Ltd
 * @license MIT
 */
class Feather
{
    public static function init($rootdir = null)
    {
        define("YES", true);
        define("NO", false);

        if (is_null($rootdir) === NO) {
            define("ROOTDIR", $rootdir);
        }
    }
}
