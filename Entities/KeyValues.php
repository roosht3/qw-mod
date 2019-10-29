<?php
/**
 *
 * KeyValues.php
 *
 * @project     qore.works-core
 * @copyright   DQ
 * @author      Rooshan Akthar <rooshan@dolphiq.nl>
 */

namespace Modules\Settings\Entities;


interface KeyValues
{
    public const LANGUAGE_EN = 'en';
    public const LANGUAGE_NL = 'nl';

    public const TIMEZONE_COLOMBO = 'Asia/Colombo';
    public const TIMEZONE_AMSTERDAM = 'Europe/Amsterdam';

    public const THEME_DEFAULT  = '1';
    public const THEME_BLACK_ONIX = '2';

    public const ENABLE_REGISTRATION = '1';
    public const DISABLE_REGISTRATION = '0';

    public const ENABLE_FORGET_PASSWORD = '1';
    public const DISABLE_FORGET_PASSWORD = '0';
}
