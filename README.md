# phpTranslate
**phpTranslate** is a easy and fast way of managing your multilingual interface. Use one template for all languages, no more Ctrl+C & Ctrl+V!

## Installation / usage
1. Add `translator.php` anywhere in your project
2. Create a `lang/` folder on your current directory, containing your JSON files
3. Call it on your code...

  ```php
  require $TRANSLATOR_DIRECTORY . '/translator.php';
  $translator = new Translator('es');
  echo $translator->get('hello_world');
  ```
  ... and *¡Hola, mundo!*
  
## Requirements
Currently tested on PHP 5.5.9; probaby works on versions 5.4 and beyond.

Requires `JSON` extension, that's default since PHP 5.2.0.
