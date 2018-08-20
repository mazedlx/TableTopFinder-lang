# TableTopFinder Lang Files
Contains the translation files for [tabletopfinder.eu](https://www.tabletopfinder.eu/).

Consider adding your own language to the repository to browse the website in your own language and help us to expand the website.

## How can I help?
The [`src`](src/) folder contains all translations, separated by language. The name of the folder is the [ISO 639-1](https://en.wikipedia.org/wiki/ISO_639-1) language code.

Each folder contains a number of `php` files with an array that contains key-value pairs. The key is the same for each language, the value is the translated string. All keys have an English value.

For example:

``` php
<?php

// nl/common.php

return [
  'key' => 'value'
  'one' => 'een',
  'two' => 'twee'
];
