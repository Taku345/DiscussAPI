<?php

return [

  'paths' => ['*'],
  'allowed_methods' => ['*'],
  'allowed_origins' => [env('SESSION_PROTOCOL') . env('SANCTUM_STATEFUL_DOMAINS')],
  'allowed_origins_patterns' => [],
  'allowed_headers' => ['*'],
  'exposed_headers' => ['*'],
  'max_age' => 0,
  'supports_credentials' => true,

];
