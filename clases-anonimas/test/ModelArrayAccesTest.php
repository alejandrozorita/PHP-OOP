<?php

use ClasesAnonimas\Model;

class ModelArrayAccesTest extends PHPUnit\Framework\TestCase
{

    protected function newModel(array $attributes = [])
    {
        return new class( $attributes ) extends Model {
        };
    }


    /**
     * @test
     */
    public function offset_get()
    {
        $user = $this->newModel(
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
        $user = $this->newModel(
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
        $user = $this->newModel();

        $user['name'] = 'Alejandro Zorita';

        $this->assertSame('Alejandro Zorita', ( $user['name'] ));
    }


    /**
     * @test
     */
    function offset_unset()
    {
        $user = $this->newModel();

        $user['name'] = 'Alejandro Zorita';

        $this->assertTrue(isset($user['name']));

        unset($user['name']);

        $this->assertFalse(isset($user['name']));
    }

}
