<?php

return [

  'paths' => ['*'],
  'allowed_methods' => ['*'], //buildで環境変数が読み込まれない、キャッシュクリアしてもだめ、一時しのぎで本番用のデフォルト値を設定しておく
  'allowed_origins' => [env('SESSION_PROTOCOL') . env('SANCTUM_STATEFUL_DOMAINS') || 'https://takuma432.shop'],
  'allowed_origins_patterns' => [],
  'allowed_headers' => ['*'],
  'exposed_headers' => ['*'],
  'max_age' => 0,
  'supports_credentials' => true,

];
