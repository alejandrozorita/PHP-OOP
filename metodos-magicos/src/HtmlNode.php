<?php

namespace MetodosMagicos;

class HtmlNode
{
    protected $tag;
    protected $attributes;
    protected $content;


    public function __construct($tag, $content = null, array $attributes = [])
    {
        $this->tag = $tag;
        $this->attributes = $attributes;
        $this->content = $content;
    }

    public function __toString()
    {
        return $this->render();
    }


    public static function __callStatic($method, array $args = [])
    {
        $content = isset($args[0]) ? $args[0] : null ;
        $attributes = isset($args[1]) ? $args[1] : [] ;
        return new HtmlNode($method, $content ,$attributes);
    }


    public function __call($method, array $args = [])
    {
        if ( ! isset($args[ 0 ])) {
            throw new \Exception("Olvidaste pasar el atributo para el método $method");
        }
        $this->attributes[ $method ] = $args[ 0 ];
        return $this;
    }


    public function render()
    {
        $result = "<$this->tag {$this->renderAttributes()}>";
        if ($this->content != null) {
            $result .= $this->content;
            $result .= "</{$this->tag}>";
        }
        return $result;
    }


    protected function renderAttributes()
    {
        $result = "";
        foreach ($this->attributes as $name => $value) {

            $result .= sprintf(' %s="%s"', $name, $value);
        }
        return $result;
    }

}