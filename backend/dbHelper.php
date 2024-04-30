<?php
// $con = parse_ini_file("../../config.ini", true);
// $env = $con['ENV'];
// $url = $con[$env]['URL'];
// $app = $con[$env]['APP'];
include($app . "/backend/connect.php");

class dbHelper {

    private $_conn;

    function __construct($conn) {
        $this->_conn = $conn;
    }

    function get_all_projects() {
        $query = "SELECT * FROM projects";
        $stmt = $this->_conn->query($query);
        $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $projects;
    }
    function get_all_feedback() {
        $query = "SELECT * FROM feedback";
        $stmt = $this->_conn->query($query);
        $feedback = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $feedback;
    }
    function get_project($id) {
        $query = "SELECT * FROM projects WHERE ID = $id";
        $stmt = $this->_conn->query($query);
        $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $projects;
    }
    function add_project($title,$sum, $desc,$lang,$imp,$fun,$link) {
        $desc = addslashes($desc);
        $sum = addslashes($sum);
        $imp = addslashes($imp);

        $query = "INSERT INTO projects (title, summary, fullDesc, lang, link, imp, fun, ID) VALUES ('$title','$sum','$desc','$imp','$fun','$imp','$fun','$link');";
        $this->_conn->query($query);
    }
    function update_project($title,$sum, $desc,$lang,$imp,$fun,$link,$id) {
        $desc = addslashes($desc);
        $sum = addslashes($sum);
        $imp = addslashes($imp);
        $query = "UPDATE projects SET title='$title',summary='$sum',fullDesc='$desc',lang='$lang',link='$link',imp='$imp',fun='$fun' WHERE `ID`='$id'";
        $this->_conn->query($query);
    }
    function add_feedback($email, $feedback)
    {
        $email = addslashes($email);
        $feedback = addslashes($feedback);
        $query = "INSERT INTO feedback(user, feedback_given) VALUES ('$email','$feedback');";
        $this->_conn->query($query);
    }
    function delete_project($id)
    {
        $query = "DELETE FROM projects WHERE ID = '$id';";
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
    function pass($hash)
    {
        $query = "INSERT INTO random_objects(object, decription) VALUES ('pass','$hash')";
        $this->_conn->query($query);
    }
};

$db = new dbHelper($conn);


$z = $db->get_all_projects();
$f = $db->get_all_feedback();
