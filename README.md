# Firevel - Firestore
[Cloud Firestore](https://github.com/googleapis/google-cloud-php-firestore) library wrapper for [Laravel](https://www.laravel.com) and [Firevel](https://www.firevel.com) compatible with Google App Engine standard environment.

## Installation

1) If you don't have Firestore project set, check [Cloud Firestore quick start](https://firebase.google.com/docs/firestore/quickstart)
2) Install package `composer require firevel/firestore`
3) Create php.ini in your project directory (where `app.yaml` is stored) with content:
```
; enable the gRPC extension
extension=grpc.so
```
If you use library outside Google App Engine please check [gRPC installation guide](https://cloud.google.com/php/grpc).

If the `pcntl` extension is enabled, you must set `usePcntl` to `true` in your `.psysh.php` file to avoid gRPC interactions hanging in Tinker:
```php
<?php

return [
    'usePcntl' => false,
];
```

### Usage
To access FirestoreClient simply use `Firestore` facade for example:
```php
    $data = [
        'name' => 'Los Angeles',
        'state' => 'CA',
        'country' => 'USA'
    ];
    Firestore::collection('cities')->document('LA')->set($data);
```

### Authentication
Inside Google App Engine Firestore should work without authentication. For usage outside App Engine check [Authentication guide](https://github.com/googleapis/google-cloud-php/blob/master/AUTHENTICATION.md).


### More
1. [Firestore official documentation](https://cloud.google.com/firestore/docs/).
2. [in-depth usage samples](https://github.com/GoogleCloudPlatform/php-docs-samples/tree/master/firestore).
