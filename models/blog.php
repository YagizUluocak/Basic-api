<?php

class Blog
{
    // Db
    private $connect;
    private $table = 'blog';

    //Blog Properties
    public $id;
    public $title;
    public $body;
    public $author;

    // Constructor with DB
    public function __construct($db)
    {
        $this->connect = $db;
    }

    // Get Blogs
    public function getBlogs(){
        $query = "SELECT * FROM ". $this->table;

        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}