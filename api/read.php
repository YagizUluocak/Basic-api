<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

include_once '../config/database.php';
include_once '../models/blog.php';

$database = new Database();
$db = $database->connect();

$blog = new Blog($db);

$result = $blog->getBlogs();

if(!empty($result))
{
    echo json_encode($result);
}
else
{
    echo json_encode(
        array('message' => 'No blogs found.')
    );
}

