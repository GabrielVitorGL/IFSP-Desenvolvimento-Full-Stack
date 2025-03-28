<?php
include('database_helper.php');
class Content
{
    private $db;

    public function __construct($dbConnection)
    {
        $this->db = $dbConnection;
    }

    public function getRecentContent($limit = 5)
    {
        $query = "SELECT * FROM conteudos ORDER BY id DESC LIMIT ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $limit);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}

$database = new Database();
$dbConnection = $database->connect();

$content = new Content($dbConnection);

$recentContent = $content->getRecentContent(8);
