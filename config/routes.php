<?php

return [
    'news/post/([0-9]+)' => 'news/post/$1',
    'news/comment' => 'comment/add',
    'news/([a-zA-Z]+)' => 'news/index/$1',
    'news' => 'news/index',
    'about' => 'about/index',
    '[a-zA-Z]+' => 'index/index',
    '' => 'index/index'
];