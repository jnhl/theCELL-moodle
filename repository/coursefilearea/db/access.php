<?php

$capabilities = array(

    'repository/coursefilearea:view' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_MODULE,
        'archetypes' => array(
            'user' => CAP_ALLOW,
            'student' => CAP_ALLOW
        )
    )
);
