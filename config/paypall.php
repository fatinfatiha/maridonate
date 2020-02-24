<?php
return [
    'client_id' => env('ARgqOyyQ791duzKD4MYvmbU61vf2zWYQReafiT9GJWl31nBLa-K7O2EgCs3VczBs0QgBSsVwgG-Baqqp',''),
    'secret' => env('EP9QTMXpf1fQipoXHRrc1i-rn2yitBMFQdzE6lHKVmEEVRuUQ0UgfXfB83huiDtEROllva8fqU4B1wZM',''),
    'settings' => array(
        'mode' => env('sandbox','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];
