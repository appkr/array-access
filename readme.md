> **Note**
>
> This project is just for STUDY PURPOSE. In reality, there is no reason or benefit to use this over simple `(array)` casting.

## ArrayAccess Example

`Appkr\ValueArray.php` comes in handy when we want to access property value of DTO(Data Transfer Object) using array syntax. 

For example:

### Our DTO

Say, the following `Data` class is our DTO.

```php
// example/Data.php

class Data
{
    public $a = 'foo';
    public $b = 'bar';
    public $c = 'baz';
}
```

### What We Want To Do With The DTO Is...

Assume that the following is our domain code.

```php
// example/client.php

$dto = new Data;
$arr = new Appkr\ValueArray(new Data);
var_dump($dto->a);
var_dump($arr['a']);
```

### The Execution Result Will Be...

```sh
$ php example/client.php
# example/client.php:8:
# string(3) "foo"
# example/client.php:9:
# string(3) "foo"
```

That's it.

### Install

This component is not listed on the packagist (yet). So we have to add a `repositories` section in `composer.json`.

```javascript
// composer.json

"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/appkr/array-access.git"
  }
],
```

And then,

```sh
$ composer install
```

### LICENSE

MIT
