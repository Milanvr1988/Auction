<?php 

class Posts  
{
    public $PostStatus = null;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function InsertPost($table)
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
            $this->PostStatus = true;
        }
    }

    public function SelectAllPost($table)
    {
        $sql = "SELECT * FROM {$table}";
        $query = $this->db->prepare($sql);
        $query->execute();
        $allPost = $query->fetchAll(PDO::FETCH_OBJ);
        return $allPost;
    }

}



?>