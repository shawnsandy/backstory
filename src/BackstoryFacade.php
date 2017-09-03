<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 2/22/2017
     * Time: 10:15 PM
     */

    namespace ShawnSandy\Backstory;




    use Illuminate\Support\Facades\Facade;

    class BackstoryFacade extends Facade
    {

        /**
         *
         */
        protected static function  getFacadeAccessor() {
            return "Backstory";
        }

    }
