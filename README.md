# Firevel – Firestore

A lightweight wrapper around the official [Cloud Firestore PHP client](https://github.com/googleapis/google-cloud-php-firestore) for [Laravel](https://laravel.com) and [Firevel](https://www.firevel.com), compatible with Google App Engine Standard.

## Installation

1. **Create a Firestore project**  
   If you don’t have one yet, follow the [Cloud Firestore quick start](https://firebase.google.com/docs/firestore/quickstart).

2. **Install the package**  
   ```bash
   composer require firevel/firestore
   ```

3. **Enable gRPC extensions**  
   If you’re deploying to Google App Engine Standard, create a `php.ini` next to your `app.yaml` with:
   ```ini
   extension=grpc.so
   extension=protobuf.so
   ```
   Using the library outside of App Engine? See the [gRPC installation guide](https://cloud.google.com/php/grpc) and [Installing the protobuf runtime library](https://cloud.google.com/php/grpc#installing_the_protobuf_runtime_library).

### Tinker / PsySH note

If the `pcntl` extension is enabled, set `usePcntl` to **false** in your `.psysh.php` to avoid gRPC calls hanging in Tinker:

```php
<?php

return [
    'usePcntl' => false,
];
```

## Usage

Use the `Firestore` facade to access the client:

```php
use Firevel\Firestore\Facades\Firestore;

$data = [
    'name'    => 'Los Angeles',
    'state'   => 'CA',
    'country' => 'USA',
];

Firestore::collection('cities')->document('LA')->set($data);
```

## Authentication

On Google App Engine Standard, Firestore works without additional credentials.  
For local development or other environments, follow the official
[Authentication guide](https://github.com/googleapis/google-cloud-php/blob/master/AUTHENTICATION.md)
(e.g., set `GOOGLE_APPLICATION_CREDENTIALS`).

## Resources

- Official Firestore docs: https://cloud.google.com/firestore/docs/
- In-depth PHP samples: https://github.com/GoogleCloudPlatform/php-docs-samples/tree/master/firestore
