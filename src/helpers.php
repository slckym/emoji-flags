<?php

    use Slckym\Flags\Facade\Flags;

    if (! function_exists('flag')) {
        /**
         * Get the emoji country flag for the given country code.
         *
         * @param  string  $countryCode
         * @return string
         */
        function flag($countryCode)
        {
            return Flags::get($countryCode);
        }
    }
