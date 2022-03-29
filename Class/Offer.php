<?php 
class Offer
{

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function insertOffer($table)
    {   
        $price = $_POST['insertOfferPrice'];
        $offer = $_SESSION['logUser']->name;
        $offerTime = date("Y-m-d");
        $offerPostID = $_GET['postId'];

       

        $sql = " INSERT INTO {$table} VALUES (NULL, ?,?,?,?) ";
        $query = $this->db->prepare($sql);
        $query->execute([$price, $offer, $offerTime, $offerPostID]);
    }
    public function selectAllOffer($table,$id)
    {
        $sql = "SELECT * FROM {$table} WHERE offerPostId = $id";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);
        $allOffer = $query->fetchAll(PDO::FETCH_OBJ);
        return $allOffer;
    }
}




?>