<?php

use ShawnSandy\Backstory\Backstory;

if(! function_exists('backstory')) {

    function backstory()
    {
        return app(Backstory::class);
    }

}
