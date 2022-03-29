<?php 
class Users  
{
    public $regAlert = Null;
    public $wrongEmail = Null;
    public $confirmPassword = Null;
    public $wrongLogPassword = null;

    public function __construct($db)
    {
        $this->db = $db;
    }
    public function registerUser()
    {
        $name = $_POST['reg_name'];
        $username = $_POST['reg_username'];
        $email = $_POST['reg_email'];
        $password = md5($_POST['reg_password']);
        $cpassword = md5($_POST['reg_cpassword']);

        if ( $password == $cpassword ) {
            $sqlChack = " SELECT * FROM users where email = ? ";
            $queryCheck = $this->db->prepare($sqlChack);
            $queryCheck->execute([$email]);
            $queryRow = $queryCheck->rowCount();

            if ( !$queryRow > 0) 
            {
                $sql = "INSERT INTO users VALUES(NULL,?,?,?,?)";
                $query = $this->db->prepare($sql);
                $query->execute([$name, $username, $email, $password]);
                if ($query) {
                    $this->regAlert = true;
                }
            }else 
            {
                $this->wrongEmail = true;
            }

            }else
            {
                $this->confirmPassword = true;
            }
    }

    public function loginUser()
    {
        $log_email = $_POST['log_email'];
        $log_password = md5($_POST['log_password']);
    
        $sql = "SELECT * FROM users WHERE email = ? AND password = ?  ";
        $query = $this->db->prepare($sql);
        $query->execute([$log_email,$log_password]);
        $logUser = $query->fetch(PDO::FETCH_OBJ);
        
        if ($logUser) {
            $_SESSION['logUser'] = $logUser;
        }else {
            $this->wrongLogPassword = true;
        }
        
        if ($logUser) {
            header('location:index.php');
        }
    }

    public function getOwnerPost($id)
    {
        $sql = " SELECT * FROM users WHERE id = ? ";
        $query = $this->db->prepare($sql);
        $query->execute([$id]);

        $postOwner = $query->fetch(PDO::FETCH_OBJ);
        return $postOwner;
    }
}






?>