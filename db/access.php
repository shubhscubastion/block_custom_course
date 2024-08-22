<?php
$capabilities = array(
    'block/my_custom_courses:myaddinstance' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
            'coursecreator' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'teacher' => CAP_ALLOW,
            'student' => CAP_PREVENT,
            'guest' => CAP_PREVENT
        ),
    ),
    'block/my_custom_courses:myviewinstance' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'manager' => CAP_ALLOW,
            'coursecreator' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'teacher' => CAP_ALLOW,
            'student' => CAP_ALLOW,
            'guest' => CAP_PREVENT
        ),
    ),
);
