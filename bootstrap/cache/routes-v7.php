<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/docs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'scribe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/docs.postman' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'scribe.postman',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/docs.openapi' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'scribe.openapi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/broadcasting/auth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3VGcviPk9g3dYgfg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'POST' => 1,
            'HEAD' => 2,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/server-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5vX7VYJnlZKk4Yt0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/auth/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6NSrzFY0duU4RDQv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/auth/partner/me' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RNvYijvyMkDj8uvy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/auth/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YQ8E8gUQZS36L1Ty',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/auth/recover-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8FZnvRyPfzwJhDmF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/partner/client/month/fetch-pair' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wt98Ss6ET7S2CBlc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/partner/client/year/fetch-pair' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eAeT9EygctaSG6z8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/partner/client' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'client.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/partner/client/fetch-pair' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.fetchPair',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/partner/client/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/annotation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'annotation.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'annotation.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/annotation/fetch-pair' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'annotation.fetchPair',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/annotation/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'annotation.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/partner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partner.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'partner.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/partner/fetch-pair' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partner.fetchPair',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/partner/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partner.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/user/theme' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ifOH6ldp53Uz3H1P',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/user/password-temporary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ytVqc0Db7Djdnawq',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/user/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OtmOOcIX0FuYoM4e',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OwI2YjYTMFRAZUET',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/user/module/permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HGISEiZ6z2wqrXid',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/user/module-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CnMpVYRfCNMlpoQ6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/user/module-all-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DuKQcfNRA4suzQAg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/user/module-all-menu-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C52I48VPHhoyplQP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'user.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/user/fetch-pair' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.fetchPair',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/user/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/v1/utility/state' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w1hUnMc7gB8DDjrS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/v1/(?|partner/(?|client/(?|convert/([^/]++)/([^/]++)(*:60)|([^/]++)(?|(*:78)|/edit(*:90)|(*:97))|bulk(*:109)|([^/]++)(*:125)|bulk(*:137))|([^/]++)(?|(*:157)|/edit(*:170)|(*:178))|bulk(*:191)|([^/]++)(*:207)|bulk(*:219))|annotation/(?|([^/]++)(?|(*:253)|/edit(*:266)|(*:274))|bulk(*:287)|([^/]++)(*:303)|bulk(*:315))|u(?|ser/(?|login/([^/]++)(*:349)|module/([^/]++)(*:372)|([^/]++)(?|(*:391)|/edit(*:404)|(*:412))|bulk(*:425)|([^/]++)(*:441)|bulk(*:453))|tility/state/city/([^/]++)(*:488))))/?$}sDu',
    ),
    3 => 
    array (
      60 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ML824dUXumFoXPkr',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      78 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.show',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      90 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.edit',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      97 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.update',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      109 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.bulkDelete',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.destroy',
          ),
          1 => 
          array (
            0 => 'client',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'client.bulkUpdate',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partner.show',
          ),
          1 => 
          array (
            0 => 'partner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      170 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partner.edit',
          ),
          1 => 
          array (
            0 => 'partner',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partner.update',
          ),
          1 => 
          array (
            0 => 'partner',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partner.bulkDelete',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      207 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partner.destroy',
          ),
          1 => 
          array (
            0 => 'partner',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      219 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'partner.bulkUpdate',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      253 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'annotation.show',
          ),
          1 => 
          array (
            0 => 'annotation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      266 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'annotation.edit',
          ),
          1 => 
          array (
            0 => 'annotation',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'annotation.update',
          ),
          1 => 
          array (
            0 => 'annotation',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'annotation.bulkDelete',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      303 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'annotation.destroy',
          ),
          1 => 
          array (
            0 => 'annotation',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      315 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'annotation.bulkUpdate',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      349 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XlMlda54E2IoGeD2',
          ),
          1 => 
          array (
            0 => 'login',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      372 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sT74xnzxAZUBisXL',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      391 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      412 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.bulkDelete',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      441 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.destroy',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      453 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.bulkUpdate',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      488 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::blRZOyHIFRxoRQ28',
          ),
          1 => 
          array (
            0 => 'state',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'scribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'docs',
      'action' => 
      array (
        'middleware' => 
        array (
        ),
        'uses' => 'Knuckles\\Scribe\\Http\\Controller@webpage',
        'controller' => 'Knuckles\\Scribe\\Http\\Controller@webpage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'scribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'scribe.postman' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'docs.postman',
      'action' => 
      array (
        'middleware' => 
        array (
        ),
        'uses' => 'Knuckles\\Scribe\\Http\\Controller@postman',
        'controller' => 'Knuckles\\Scribe\\Http\\Controller@postman',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'scribe.postman',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'scribe.openapi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'docs.openapi',
      'action' => 
      array (
        'middleware' => 
        array (
        ),
        'uses' => 'Knuckles\\Scribe\\Http\\Controller@openapi',
        'controller' => 'Knuckles\\Scribe\\Http\\Controller@openapi',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'scribe.openapi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3VGcviPk9g3dYgfg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'POST',
        2 => 'HEAD',
      ),
      'uri' => 'broadcasting/auth',
      'action' => 
      array (
        'middleware' => 'auth',
        'uses' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'controller' => '\\Illuminate\\Broadcasting\\BroadcastController@authenticate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'excluded_middleware' => 
        array (
          0 => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
        ),
        'as' => 'generated::3VGcviPk9g3dYgfg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5vX7VYJnlZKk4Yt0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'server-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:300:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:82:"function() {
    return \\response()->json(\'Sistema Base, is working fine\', 200);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000449b0aa8000000004fc0423d";}";s:4:"hash";s:44:"BuQpeILdKR1TKVqYz4vIZrjmpV5DggSYLRb9m7B5fE4=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5vX7VYJnlZKk4Yt0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/auth/login',
      'action' => 
      array (
        'uses' => 'Modules\\Auth\\Http\\Controllers\\AuthController@login',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\AuthController@login',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'v1/auth/',
        'where' => 
        array (
        ),
        'as' => 'login',
        'middleware' => 
        array (
          0 => 'throttle:10,2',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6NSrzFY0duU4RDQv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/auth/refresh',
      'action' => 
      array (
        'uses' => 'Modules\\Auth\\Http\\Controllers\\AuthController@refresh',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\AuthController@refresh',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'v1/auth/',
        'where' => 
        array (
        ),
        'as' => 'generated::6NSrzFY0duU4RDQv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RNvYijvyMkDj8uvy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/auth/partner/me',
      'action' => 
      array (
        'uses' => 'Modules\\Auth\\Http\\Controllers\\AuthController@me',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\AuthController@me',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'v1/auth/',
        'where' => 
        array (
        ),
        'as' => 'generated::RNvYijvyMkDj8uvy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YQ8E8gUQZS36L1Ty' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/auth/logout',
      'action' => 
      array (
        'uses' => 'Modules\\Auth\\Http\\Controllers\\AuthController@logout',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\AuthController@logout',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'v1/auth/',
        'where' => 
        array (
        ),
        'as' => 'generated::YQ8E8gUQZS36L1Ty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8FZnvRyPfzwJhDmF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/auth/recover-password',
      'action' => 
      array (
        'uses' => 'Modules\\Auth\\Http\\Controllers\\AuthController@recoverPassword',
        'controller' => 'Modules\\Auth\\Http\\Controllers\\AuthController@recoverPassword',
        'namespace' => 'Modules\\Auth\\Http\\Controllers',
        'prefix' => 'v1/auth/',
        'where' => 
        array (
        ),
        'as' => 'generated::8FZnvRyPfzwJhDmF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Wt98Ss6ET7S2CBlc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/partner/client/month/fetch-pair',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
          3 => 'permission:partner',
        ),
        'uses' => 'Modules\\Partner\\Http\\Controllers\\MonthController@fetchPair',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\MonthController@fetchPair',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::Wt98Ss6ET7S2CBlc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eAeT9EygctaSG6z8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/partner/client/year/fetch-pair',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
          3 => 'permission:partner',
        ),
        'uses' => 'Modules\\Partner\\Http\\Controllers\\YearController@fetchPair',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\YearController@fetchPair',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::eAeT9EygctaSG6z8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ML824dUXumFoXPkr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/partner/client/convert/{id}/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
          3 => 'permission:partner',
        ),
        'uses' => 'Modules\\Partner\\Http\\Controllers\\ClientController@convertClient',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\ClientController@convertClient',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::ML824dUXumFoXPkr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/partner/client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'client.index',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\ClientController@index',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\ClientController@index',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/partner',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.fetchPair' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/partner/client/fetch-pair',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'client.fetchPair',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\ClientController@fetchPair',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\ClientController@fetchPair',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/partner',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/partner/client/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'client.create',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\ClientController@create',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\ClientController@create',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/partner',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/partner/client',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'client.store',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\ClientController@store',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\ClientController@store',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/partner',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/partner/client/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'client.show',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\ClientController@show',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\ClientController@show',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/partner',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/partner/client/{client}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'client.edit',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\ClientController@edit',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\ClientController@edit',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/partner',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'v1/partner/client/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'client.update',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\ClientController@update',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\ClientController@update',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/partner',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.bulkDelete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/partner/client/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'client.bulkDelete',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\ClientController@bulkDelete',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\ClientController@bulkDelete',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/partner',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/partner/client/{client}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'client.destroy',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\ClientController@destroy',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\ClientController@destroy',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/partner',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'client.bulkUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/partner/client/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'client.bulkUpdate',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\ClientController@bulkUpdate',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\ClientController@bulkUpdate',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/partner',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'annotation.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/annotation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'annotation.index',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@index',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@index',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'annotation.fetchPair' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/annotation/fetch-pair',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'annotation.fetchPair',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@fetchPair',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@fetchPair',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'annotation.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/annotation/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'annotation.create',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@create',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@create',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'annotation.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/annotation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'annotation.store',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@store',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@store',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'annotation.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/annotation/{annotation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'annotation.show',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@show',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@show',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'annotation.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/annotation/{annotation}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'annotation.edit',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@edit',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@edit',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'annotation.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'v1/annotation/{annotation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'annotation.update',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@update',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@update',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'annotation.bulkDelete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/annotation/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'annotation.bulkDelete',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@bulkDelete',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@bulkDelete',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'annotation.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/annotation/{annotation}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'annotation.destroy',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@destroy',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@destroy',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'annotation.bulkUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/annotation/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'annotation.bulkUpdate',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@bulkUpdate',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\AnnotationController@bulkUpdate',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/partner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'partner.index',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@index',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@index',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.fetchPair' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/partner/fetch-pair',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'partner.fetchPair',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@fetchPair',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@fetchPair',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/partner/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'partner.create',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@create',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@create',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/partner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'partner.store',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@store',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@store',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/partner/{partner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'partner.show',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@show',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@show',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/partner/{partner}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'partner.edit',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@edit',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@edit',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'v1/partner/{partner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'partner.update',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@update',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@update',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.bulkDelete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/partner/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'partner.bulkDelete',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@bulkDelete',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@bulkDelete',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/partner/{partner}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'partner.destroy',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@destroy',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@destroy',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'partner.bulkUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/partner/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'partner.bulkUpdate',
        'uses' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@bulkUpdate',
        'controller' => 'Modules\\Partner\\Http\\Controllers\\PartnerController@bulkUpdate',
        'namespace' => 'Modules\\Partner\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ifOH6ldp53Uz3H1P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/user/theme',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission:user',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@updateTheme',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@updateTheme',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::ifOH6ldp53Uz3H1P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ytVqc0Db7Djdnawq' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'v1/user/password-temporary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@updatePasswordTemporary',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@updatePasswordTemporary',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::ytVqc0Db7Djdnawq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OtmOOcIX0FuYoM4e' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'v1/user/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission:user',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@updatePassword',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@updatePassword',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::OtmOOcIX0FuYoM4e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OwI2YjYTMFRAZUET' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission:user',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@updateProfile',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@updateProfile',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::OwI2YjYTMFRAZUET',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XlMlda54E2IoGeD2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/user/login/{login}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission:user',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@login',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@login',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::XlMlda54E2IoGeD2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HGISEiZ6z2wqrXid' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/user/module/permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission:user',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\ModuleController@getModulesByPermission',
        'controller' => 'Modules\\User\\Http\\Controllers\\ModuleController@getModulesByPermission',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::HGISEiZ6z2wqrXid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sT74xnzxAZUBisXL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/user/module/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission:user',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\ModuleController@getModulesByUser',
        'controller' => 'Modules\\User\\Http\\Controllers\\ModuleController@getModulesByUser',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::sT74xnzxAZUBisXL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CnMpVYRfCNMlpoQ6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/user/module-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission:user',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@createOrUpdateModuleUser',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@createOrUpdateModuleUser',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::CnMpVYRfCNMlpoQ6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DuKQcfNRA4suzQAg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/user/module-all-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission:user',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@allUpdateModuleUser',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@allUpdateModuleUser',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::DuKQcfNRA4suzQAg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C52I48VPHhoyplQP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/user/module-all-menu-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission:user',
        ),
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@allUpdateModuleMenuUser',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@allUpdateModuleMenuUser',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
        'as' => 'generated::C52I48VPHhoyplQP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'user.index',
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@index',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@index',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.fetchPair' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/user/fetch-pair',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'user.fetchPair',
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@fetchPair',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@fetchPair',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/user/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'user.create',
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@create',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@create',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'user.store',
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@store',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@store',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'user.show',
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@show',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@show',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/user/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'user.edit',
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@edit',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@edit',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'v1/user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'user.update',
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@update',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@update',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.bulkDelete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/user/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'user.bulkDelete',
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@bulkDelete',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@bulkDelete',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'v1/user/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'user.destroy',
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@destroy',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@destroy',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.bulkUpdate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'v1/user/bulk',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
          2 => 'permission',
        ),
        'as' => 'user.bulkUpdate',
        'uses' => 'Modules\\User\\Http\\Controllers\\UserController@bulkUpdate',
        'controller' => 'Modules\\User\\Http\\Controllers\\UserController@bulkUpdate',
        'namespace' => 'Modules\\User\\Http\\Controllers',
        'prefix' => 'v1/',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w1hUnMc7gB8DDjrS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/utility/state',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'uses' => 'Modules\\Utility\\Http\\Controllers\\StateController@index',
        'controller' => 'Modules\\Utility\\Http\\Controllers\\StateController@index',
        'namespace' => 'Modules\\Utility\\Http\\Controllers',
        'prefix' => 'v1/utility/',
        'where' => 
        array (
        ),
        'as' => 'generated::w1hUnMc7gB8DDjrS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::blRZOyHIFRxoRQ28' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'v1/utility/state/city/{state}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth',
        ),
        'uses' => 'Modules\\Utility\\Http\\Controllers\\StateController@getCitiesByState',
        'controller' => 'Modules\\Utility\\Http\\Controllers\\StateController@getCitiesByState',
        'namespace' => 'Modules\\Utility\\Http\\Controllers',
        'prefix' => 'v1/utility/',
        'where' => 
        array (
        ),
        'as' => 'generated::blRZOyHIFRxoRQ28',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
