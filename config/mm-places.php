<?php

return [

    /*
     * Table names
     */
    'places_table_name' => 'mm_places',

    /**
     * The admin endpoints are being registered under this prefix.
     */
    'admin_prefix' => 'admin',

    /**
     * This middleware stack is being 
     * used for all admin routes.
     */
    'admin_middleware' => ['web', 'auth'],

    /**
     * 
     */
    'admin_as' => 'admin.',

    /**
     * The api endpoints are being registered 
     * under this prefix.
     */
    'api_prefix' => 'api',

    /**
     * This middleware stack is being 
     * used for all api routes.
     */
    'api_middleware' => ['api'],

];
