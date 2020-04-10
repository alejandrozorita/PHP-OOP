<?php


class ModelArrayAccesTest extends PHPUnit\Framework\TestCase
{

    /**
     * @test
     */
    public function offset_get()
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


    /**
     * @test
     */
    public function offset_exists()
    {
        $user = new UserTest(
          [
            'name' => 'Alejandro Zorita'
          ]
        );

        $this->assertTrue(isset($user['name']));
        $this->assertFalse(empty($user['name']));

        $this->assertFalse(isset($user['email']));
        $this->assertTrue(empty($user['email']));
    }

    /**
     * @test
     */
    public function offset_set()
    {
        $user = new UserTest();

        $user['name'] =  'Alejandro Zorita';

        $this->assertSame('Alejandro Zorita', ($user['name']));
    }


    /**
     * @test
     */
    function offset_unset()
    {
        $user = new UserTest();

        $user['name'] =  'Alejandro Zorita';

        $this->assertTrue(isset($user['name']));

        unset($user['name']);

        $this->assertFalse(isset($user['name']));
    }

}


class UserTest extends \ArrayAcces\Model implements ArrayAccess
{

    /**
     * @inheritDoc
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }


    /**
     * @inheritDoc
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }


    /**
     * @inheritDoc
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }


    /**
     * @inheritDoc
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }

}