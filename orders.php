<?php 

require('functions.php');

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$_SESSION['oid'] = '#'.date('ymdhis').rand(0,99);

class orders{

    protected $db = null;

    public function __construct(dbcontroller $db)
    {
        if (!isset($db->con)) {
            return null;
        }

        else {
            $this->db = $db;
        }
    }

    public function order($oid,$pid,$cid,$quantity)
    {
        $this->db->con->query("INSERT INTO orders VALUES('$oid', '$cid', '$pid','$quantity')");
    }
    
}

$order = new orders($db);
$order->order($_SESSION['oid'],$_SESSION['pid'],$_SESSION['Id'],$_POST['quantity']);

$_SESSION['oid'] = null;

header('Location: orderconfirmation.php');

?>
