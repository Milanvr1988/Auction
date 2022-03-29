<?php 

class Posts  
{
    public $postStatus = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function insertPost($table)
    {
        $name = $_POST['insert_name'];
        $description = $_POST['insert_description'];

        $area_image = "pictures/".basename($_FILES['insert_picture']['name']); 
        $tmp = $_FILES['insert_picture']['tmp_name'];

        $price = $_POST['insert_price'];
        $delivery = $_POST['insert_delivery'];
        $owner = $_SESSION['logUser']->id;
        $time = date("Y-m-d");

        move_uploaded_file($tmp, $area_image);

        $sql = "INSERT INTO {$table} VALUES ( NULL, ?,?,?,?,?,?,? )";
        $query = $this->db->prepare($sql);
        $query->execute([$name, $description,$area_image, $price,$delivery,$owner,$time]);

        if ($query) {
            $this->postStatus = true;
        }
    }
    public function selectAllPost($table)
    {
        $sql = "SELECT * FROM {$table}";
        $query = $this->db->prepare($sql);
        $query->execute();
        $allPost = $query->fetchAll(PDO::FETCH_OBJ);
        return $allPost;
    }
    public function deletePost($id)
    {
        $sql = "DELETE FROM posts WHERE id = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);

    }
    public function selectSinglPost($table, $id)
    {
        $sql = "SELECT * FROM {$table} WHERE id = ?";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        $singlPost = $query->fetch(PDO::FETCH_OBJ);
        return $singlPost;
    }
}



?>