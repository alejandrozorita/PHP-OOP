<?php


namespace Game;


class HtmlLogger
{
    public function info($message)
    {
        echo "<p>$message</p>";
    }
}