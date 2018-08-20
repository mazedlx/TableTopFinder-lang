# TableTopFinder Lang Files
This repository contains the translation files for [tabletopfinder.eu](https://www.tabletopfinder.eu/).

Consider adding your own language to the repository to browse the website in your own language and help us to expand the website.

> :bangbang: These are the translation files for the new [TableTopFinder website](https://www.tabletopfinder.eu/) that will hopefully be live Q4 2018

## How can I help?
The [`src`](src/) folder contains all translations, separated by language. The name of the folder is the [ISO 639-1](https://en.wikipedia.org/wiki/ISO_639-1) language code.

Each folder contains a number of `php` files that return an array with key-value pairs. The key is the same for each language, the value is the translated string.

For example:

``` php
<?php

// src/nl/common.php

return [
  'key' => 'value'
  'one' => 'een',
  'two' => 'twee'
];
```

The [English language](src/en/) is the template for other languages, new keys are added to these files first.

## TODO
This is the current list of languages we would like to support:

- [x] English (en)
- [x] Dutch (nl)
- [ ] French (fr)
- [ ] German (de)
- [ ] Spanish (es)
- [ ] Italian (it)

## Contributors
We are very grateful for anyone who wants to help us to translate the website, so as a token of appreciation we will list contributors here and/or on the website if you want.
Feel free to mention this in your pull-request.