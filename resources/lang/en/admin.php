<?php

return [
    'user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => "ID",
            'email' => "Email",
            'password' => "Password",
            'password_repeat' => "Password Confirmation",
            'first_name' => "First name",
            'last_name' => "Last name",
            'activated' => "Activated",
            'forbidden' => "Forbidden",
            'language' => "Language",
                
            //Belongs to many relations
            'roles' => "Roles",
                
        ],
    ],

    'service' => [
        'title' => 'Services',

        'actions' => [
            'index' => 'Services',
            'create' => 'New Service',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'name' => "Name",
            'description' => "Description",
            'image' => "Image",
            'slug' => "Slug",
            'meta_description' => "Meta description",
            
        ],
    ],

    'work' => [
        'title' => 'Works',

        'actions' => [
            'index' => 'Works',
            'create' => 'New Work',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => "ID",
            'service_id' => "Service id",
            'name' => "Name",
            'description' => "Description",
            'slug' => "Slug",
            'meta_description' => "Meta description",
            'image' => "Image",
            'featured' => "Featured",
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];