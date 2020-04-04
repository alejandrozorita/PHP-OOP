<?php

namespace Game;

class HtmlLogger implements Logger
{

    public function info($message)
    {
        echo "<p>$message</p>";
    }

}