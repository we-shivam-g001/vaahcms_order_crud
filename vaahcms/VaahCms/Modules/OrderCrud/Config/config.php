<?php

return [
    "name"=> "OrderCrud",
    "title"=> "OrderCrud For Admin",
    "slug"=> "ordercrud",
    "thumbnail"=> "https://img.site/p/300/160",
    "is_dev" => env('MODULE_ORDERCRUD_ENV')?true:false,
    "excerpt"=> "OrderCrud For Backend",
    "description"=> "OrderCrud For Backend",
    "download_link"=> "",
    "author_name"=> "vaah",
    "author_website"=> "https://vaah.dev",
    "version"=> "0.0.1",
    "is_migratable"=> true,
    "is_sample_data_available"=> false,
    "db_table_prefix"=> "vh_ordercrud_",
    "providers"=> [
        "\\VaahCms\\Modules\\OrderCrud\\Providers\\OrderCrudServiceProvider"
    ],
    "aside-menu-order"=> null
];
