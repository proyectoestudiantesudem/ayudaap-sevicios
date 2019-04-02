<?php

$app->get('/contact', "ContactController:all");
$app->get('/contact/{id}', "ContactController:find");