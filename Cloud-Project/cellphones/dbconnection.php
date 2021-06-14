<?php
class dbConnection
{
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;
    protected static $conn;

    function dbConnection()
    {
        $this->serverName = 'localhost';
        $this->userName = 'root';
        $this->passCode = '';
        $this->dbName = 'cellphones';
        if ($this::$conn == NULL)
            $this::$conn = new mysqli($this->serverName, $this->userName, $this->passCode, $this->dbName);
        if ($this::$conn->connect_error) {
            die("Connection failed: " . $this::$conn->connect_error);
        }
    }



    function addComment($comment, $date)
    {
        $sql = "INSERT INTO comments (comment, date) VALUES ('" . $comment . "', '". $date."');";
        if ($this::$conn->query($sql)) {
            return 1;
        } else {
            echo "ERROR: Could not able to execute Insert";
            return 0;
        }
    }

    function loadComments()
    {
        $comments =array();
            $sql = "SELECT * FROM comments";
            $result = $this::$conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $comment = $row["comment"];
                    array_push($comments, $comment);
                    $comment = $row["date"];
                    array_push($comments, $comment);
                }
            
        }
        return $comments;
    }

}