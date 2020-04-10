<?php

use ArrayAcces\Str;

class strTest extends PHPUnit\Framework\TestCase
{
    public function test_Str_camel_case()
    {

        $this->assertSame(
          'Name',  Str::camelCase('name'),
          'Llamar a Str::camelCase(\'name\') no retorna Name'
        );
        $this->assertSame(
          'FullName',  Str::camelCase('full_name'),
          'Llamar a Str::camelCase(\'full_name\') no retorna FullName'
        );
    }

}