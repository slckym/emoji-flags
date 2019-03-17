<?php

    namespace Slckym\Flags\Facade;

    use Illuminate\Support\Facades\Facade;

    /**
     * Class Flags
     * @package Slckym\Flags\Facade
     */
    class Flags extends Facade
    {

        /**
         * Get the registered name of the component.
         *
         * @return string
         */
        protected static function getFacadeAccessor()
        {
            return 'flags';
        }
    }
