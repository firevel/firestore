<?php

namespace Firevel\Firestore\Facades;

use Google\Cloud\Firestore\FirestoreClient;
use Illuminate\Support\Facades\Facade;

class Firestore extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return FirestoreClient::class;
    }
}
