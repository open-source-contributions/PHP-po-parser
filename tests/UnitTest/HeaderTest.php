<?php

namespace Sepia\Test\UnitTest;

use PHPUnit\Framework\TestCase;
use Sepia\PoParser\Parser;

class HeaderTest extends TestCase
{
    public function testGetPluralFormsCount()
    {
        $catalog = $this->parseFile();

        $this->assertEquals(3, $catalog->getHeader()->getPluralFormsCount());
    }


    /**
     * @return \Sepia\PoParser\Catalog
     */
    protected function parseFile()
    {
        return Parser::parseFile(dirname(__DIR__, 2).'/fixtures/basicHeadersMultiline.po');
    }
}
