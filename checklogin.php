<?php 

require('functions.php');

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

class logincheck{

    protected $db;

    public function __construct(dbcontroller $db)
    {
        if (!isset($db->con)) {

            session_unset();
            session_destroy();
            return null;
            
        }
        
        else {

            $this->db = $db;
        }
    }

    public function fetchDetails()
    {
        $result = $this->db->con->query("SELECT * from customer");
        
            $result_array = array(); 
        
            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $result_array[] = $item;
            }
        
            return $result_array;
    }

}

$login = new logincheck($db);

foreach ($login->fetchDetails() as $credential) {
    
    if (($_POST['email'] == $credential['Email'] || $_POST['email'] == $credential['Phone']) && $_POST['pass'] == $credential['Pass']) {
        $_SESSION['Name'] = $credential['Name'];
        $_SESSION['Id'] = $credential['Cid'];
    }
}

if (!isset($_SESSION['Name'])) {
    session_unset();
    session_destroy();
    header('Location: login.php');
}

else {
    header('Location: index.php?');
}

?>