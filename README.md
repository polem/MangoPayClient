MangoPay Client
===============

Introduction
------------
MangoPay is the global and leading API solution to accept online payments and manage e-money for marketplaces, crowdfunding and collaborative ...
This non-official client is based on Guzzle

Installation
------------

```
php composer.phar require polem/mango-pay-client
```

Usage
-----


```php
require_once __DIR__ . '/vendor/autoload.php';

use MangoPay\Client;

$client = Client::factory(array(
    'partner_id'              => 'parterId',
    'url'                     => 'http://api-preprod.leetchi.com',
    'version'                 => 'v1',
    'private_key_path'        => 'file://'. __DIR__ . '/pkey.pem',
    'private_key_pass_phrase' => '',
));

$user = array(
    'FirstName'   => 'Doe',
    'LastName'    => 'John',
    'Email'       => 'johndoe@gmail.com',
    'Nationality' => 'FR',
    'Birthday'    => 1300186358,
    'PersonType'  => 'NATURAL_PERSON'
);


$user = $client->CreateAUser($user);
echo $user;
```
