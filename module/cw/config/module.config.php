<?php
return [
    'controllers' => [
        'factories' => [
            'cw\\V1\\Rpc\\Ping\\Controller' => \cw\V1\Rpc\Ping\PingControllerFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'cw.rpc.ping' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/ping',
                    'defaults' => [
                        'controller' => 'cw\\V1\\Rpc\\Ping\\Controller',
                        'action' => 'ping',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'cw.rpc.ping',
        ],
    ],
    'zf-rpc' => [
        'cw\\V1\\Rpc\\Ping\\Controller' => [
            'service_name' => 'ping',
            'http_methods' => [
                0 => 'GET',
            ],
            'route_name' => 'cw.rpc.ping',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'cw\\V1\\Rpc\\Ping\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'cw\\V1\\Rpc\\Ping\\Controller' => [
                0 => 'application/vnd.cw.v1+json',
                1 => 'application/json',
                2 => 'application/*+json',
            ],
        ],
        'content_type_whitelist' => [
            'cw\\V1\\Rpc\\Ping\\Controller' => [
                0 => 'application/vnd.cw.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-content-validation' => [
        'cw\\V1\\Rpc\\Ping\\Controller' => [
            'input_filter' => 'cw\\V1\\Rpc\\Ping\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'cw\\V1\\Rpc\\Ping\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'ack',
                'description' => 'Acknowledge the request with a timestamp',
            ],
        ],
    ],
];
