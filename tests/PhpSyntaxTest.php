<?php

use PHPUnit\Framework\TestCase;

class PhpSyntaxTest extends TestCase {

    /**
     * @dataProvider languageFileProvider
     */
    public function testFilesResolve(string $path) {

        $data = require($path);
        $this->assertInternalType('array', $data);

    }

    /**
     * @dataProvider languageFileProvider
     */
    public function testNoHtmlInTranslations(string $path) {

        $values = new RecursiveIteratorIterator(new RecursiveArrayIterator(require($path)));
        foreach ($values as $value)
            $this->assertTrue(strip_tags($value) === $value, "'$value' contains html");

    }

    public static function languageFileProvider() {

        $iterator = new RecursiveDirectoryIterator("./src/");
        foreach(new RecursiveIteratorIterator($iterator) as $file)
        {
            if (preg_match('/\.php$/', $file) === 1)
                yield [$file->getPathname()];
        }

    }

}