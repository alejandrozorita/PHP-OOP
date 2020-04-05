<?php


namespace Game;


abstract class Model
{

    public function __get($name)
    {
        return $this->getAttribute($name);
    }

    public function __set($name, $value)
    {
        $this->setAttribute($name, $value);
    }

    public function __isset($name)
    {
        return $this->hasAttribute($name);
    }

    public function __unset($name)
    {
        $this->deleteAttributes($name);
    }

    public function getAttributes()
    {
        return $this->attributes;
    }

    public function deleteAttributes($name)
    {
        unset($this->attributes[ $name ]);
    }

    public function hasAttribute($name)
    {
        return isset($this->attributes[ $name ]);
    }

    public function fill($attributes)
    {
        $this->attributes = $attributes;
    }

    public function getAttribute($name)
    {
        $value = $this->getAttributeValue($name);

        if ($this->hasGetMutator($name)) {
            return $this->mutateAttribute($name, $value);
        }

        return $value;
    }

    protected function hasGetMutator($name)
    {
        $method = $method = $this->getNameMethod($name);
        return method_exists($this, $method);
    }

    protected function mutateAttribute($name, $value)
    {
        $method = $this->getNameMethod($name);
        return $this->$method($value);
    }

    public function getAttributeValue($name)
    {
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[ $name ];
        }
    }

    protected function getNameMethod($name)
    {
        return 'get'.camelCase($name).'Attribute';
    }


    public function setAttribute($name, $value)
    {
        $this->setAttribute[ $name ] = $value;
    }

}