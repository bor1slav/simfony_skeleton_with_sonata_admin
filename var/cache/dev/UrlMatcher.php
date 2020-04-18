<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'sonata_admin_redirect', '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction', 'route' => 'sonata_admin_dashboard', 'permanent' => 'true'], null, null, null, true, false, null]],
        '/admin/dashboard' => [[['_route' => 'sonata_admin_dashboard', '_controller' => 'Sonata\\AdminBundle\\Action\\DashboardAction'], null, null, null, false, false, null]],
        '/admin/core/get-form-field-element' => [[['_route' => 'sonata_admin_retrieve_form_element', '_controller' => 'sonata.admin.action.retrieve_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/append-form-field-element' => [[['_route' => 'sonata_admin_append_form_element', '_controller' => 'sonata.admin.action.append_form_field_element'], null, null, null, false, false, null]],
        '/admin/core/set-object-field-value' => [[['_route' => 'sonata_admin_set_object_field_value', '_controller' => 'sonata.admin.action.set_object_field_value'], null, null, null, false, false, null]],
        '/admin/search' => [[['_route' => 'sonata_admin_search', '_controller' => 'Sonata\\AdminBundle\\Action\\SearchAction'], null, null, null, false, false, null]],
        '/admin/core/get-autocomplete-items' => [[['_route' => 'sonata_admin_retrieve_autocomplete_items', '_controller' => 'sonata.admin.action.retrieve_autocomplete_items'], null, null, null, false, false, null]],
        '/admin/app/user/list' => [[['_route' => 'admin_app_user_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_user_list'], null, null, null, false, false, null]],
        '/admin/app/user/create' => [[['_route' => 'admin_app_user_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_user_create'], null, null, null, false, false, null]],
        '/admin/app/user/batch' => [[['_route' => 'admin_app_user_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_user_batch'], null, null, null, false, false, null]],
        '/admin/app/user/export' => [[['_route' => 'admin_app_user_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_user_export'], null, null, null, false, false, null]],
        '/admin/app/group/list' => [[['_route' => 'admin_app_group_list', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_app_group_list'], null, null, null, false, false, null]],
        '/admin/app/group/create' => [[['_route' => 'admin_app_group_create', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_app_group_create'], null, null, null, false, false, null]],
        '/admin/app/group/batch' => [[['_route' => 'admin_app_group_batch', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_app_group_batch'], null, null, null, false, false, null]],
        '/admin/app/group/export' => [[['_route' => 'admin_app_group_export', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_app_group_export'], null, null, null, false, false, null]],
        '/media/gallery' => [[['_route' => 'sonata_media_gallery_index', '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::indexAction'], null, null, null, true, false, null]],
        '/admin/login' => [[['_route' => 'sonata_user_admin_security_login', '_controller' => 'Sonata\\UserBundle\\Action\\LoginAction'], null, null, null, false, false, null]],
        '/admin/login_check' => [[['_route' => 'sonata_user_admin_security_check', '_controller' => 'Sonata\\UserBundle\\Action\\CheckLoginAction'], null, ['POST' => 0], null, false, false, null]],
        '/admin/logout' => [[['_route' => 'sonata_user_admin_security_logout', '_controller' => 'Sonata\\UserBundle\\Action\\LogoutAction'], null, null, null, false, false, null]],
        '/admin/resetting/request' => [[['_route' => 'sonata_user_admin_resetting_request', '_controller' => 'Sonata\\UserBundle\\Action\\RequestAction'], null, ['GET' => 0], null, false, false, null]],
        '/admin/resetting/send-email' => [[['_route' => 'sonata_user_admin_resetting_send_email', '_controller' => 'Sonata\\UserBundle\\Action\\SendEmailAction'], null, ['POST' => 0], null, false, false, null]],
        '/admin/resetting/check-email' => [[['_route' => 'sonata_user_admin_resetting_check_email', '_controller' => 'Sonata\\UserBundle\\Action\\CheckEmailAction'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/admin/(?'
                    .'|core/get\\-short\\-object\\-description(?:\\.(html|json))?(*:106)'
                    .'|app/(?'
                        .'|user/([^/]++)/(?'
                            .'|edit(*:142)'
                            .'|delete(*:156)'
                            .'|show(*:168)'
                        .')'
                        .'|group/([^/]++)/(?'
                            .'|edit(*:199)'
                            .'|delete(*:213)'
                            .'|show(*:225)'
                        .')'
                    .')'
                    .'|resetting/reset/([^/]++)(*:259)'
                    .'|media/pixlr/(?'
                        .'|e(?'
                            .'|dit/([^/]++)/([^/]++)(*:307)'
                            .'|xit/([^/]++)/([^/]++)(*:336)'
                        .')'
                        .'|target/([^/]++)/([^/]++)(*:369)'
                        .'|open/([^/]++)(*:390)'
                    .')'
                .')'
                .'|/media/(?'
                    .'|gallery/view/(.*)(*:427)'
                    .'|view/([^/]++)(?:/([^/]++))?(*:462)'
                    .'|download/(.*)(?:/([^/]++))?(*:497)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        106 => [[['_route' => 'sonata_admin_short_object_information', '_controller' => 'sonata.admin.action.get_short_object_description', '_format' => 'html'], ['_format'], null, null, false, true, null]],
        142 => [[['_route' => 'admin_app_user_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_user_edit'], ['id'], null, null, false, false, null]],
        156 => [[['_route' => 'admin_app_user_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_user_delete'], ['id'], null, null, false, false, null]],
        168 => [[['_route' => 'admin_app_user_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'sonata.user.admin.user', '_sonata_name' => 'admin_app_user_show'], ['id'], null, null, false, false, null]],
        199 => [[['_route' => 'admin_app_group_edit', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_app_group_edit'], ['id'], null, null, false, false, null]],
        213 => [[['_route' => 'admin_app_group_delete', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_app_group_delete'], ['id'], null, null, false, false, null]],
        225 => [[['_route' => 'admin_app_group_show', '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction', '_sonata_admin' => 'sonata.user.admin.group', '_sonata_name' => 'admin_app_group_show'], ['id'], null, null, false, false, null]],
        259 => [[['_route' => 'sonata_user_admin_resetting_reset', '_controller' => 'Sonata\\UserBundle\\Action\\ResetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        307 => [[['_route' => 'sonata_media_pixlr_edit', '_controller' => 'sonata.media.extra.pixlr:editAction'], ['id', 'mode'], null, null, false, true, null]],
        336 => [[['_route' => 'sonata_media_pixlr_exit', '_controller' => 'sonata.media.extra.pixlr:exitAction'], ['hash', 'id'], null, null, false, true, null]],
        369 => [[['_route' => 'sonata_media_pixlr_target', '_controller' => 'sonata.media.extra.pixlr:targetAction'], ['hash', 'id'], null, null, false, true, null]],
        390 => [[['_route' => 'sonata_media_pixlr_open_editor', '_controller' => 'sonata.media.extra.pixlr:openEditorAction'], ['id'], null, null, false, true, null]],
        427 => [[['_route' => 'sonata_media_gallery_view', '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryController::viewAction'], ['id'], null, null, false, true, null]],
        462 => [[['_route' => 'sonata_media_view', '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::viewAction', 'format' => 'reference'], ['id', 'format'], null, null, false, true, null]],
        497 => [
            [['_route' => 'sonata_media_download', '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaController::downloadAction', 'format' => 'reference'], ['id', 'format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
