<?php


class ArrayAccesTest extends PHPUnit\Framework\TestCase
{
    public function test_a_model_has_array_acces()
    {
        $user = new UserTest(
          [
            'name' => 'Alejandro Zorita',
            'email' => 'contacto@alejandrozorita.me',
            'website' => 'alejandrozorita.me'
          ]
        );

        $this->assertSame('Alejandro Zorita', $user['name']);
        $this->assertSame('contacto@alejandrozorita.me', $user['email']);
        $this->assertSame('alejandrozorita.me', $user['website']);
    }

}


class UserTest extends \ArrayAcces1\Model implements ArrayAccess
{

    /**
     * @inheritDoc
     */
    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }


    /**
     * @inheritDoc
     */
    public function offsetGet($offset)
    {
        return $this->getAttribute($offset);
    }


    /**
     * @inheritDoc
     */
    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
    }


    /**
     * @inheritDoc
     */
    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

}