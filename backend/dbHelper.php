<?php

include("connect.php");

class dbHelper {

    private $_conn;

    function __construct($conn) {
        $this->_conn = $conn;
    }

    function get_all_projects() {
        $query = "SELECT * FROM projects";
        $stmt = $this->_conn->query($query);
        $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
        print_r($projects);
    }
    function add_project($title,$desc,$lang,$imp,$fun) {
        $query = "INSERT INTO projects (project_name, decription, lang, improvement, funfact) VALUES ('$title','$desc','$lang','$imp','$fun');";
        $this->_conn->query($query);
    }
    function edit_home($new_description,$object) {
        $query = "UPDATE random_objects SET decription='$new_description' WHERE object = '$object'";
        $this->_conn->query($query);
    }
    function get_description($object)
    {
        $query = "SELECT decription FROM random_objects WHERE object = '$object'";
        $stmt = $this->_conn->query($query);
        $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // print_r($projects);
        return $projects;
    }
};

$db = new dbHelper($conn);

