<?php

namespace Laravel;

class HtmlLogger
{

    use Macroable;

    public function hr()
    {
        return "<hr>";
    }

}