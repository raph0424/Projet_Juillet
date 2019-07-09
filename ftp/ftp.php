<?php
class Ftp{
    public $conn;

    public function __construct($url){
  
        try{
            $this->conn = ftp_connect($url);
            }
            catch(Exception $exp)
            {
                echo "erreur connexion "; 
            }
        }
    
    public function __call($func,$a){
        if(strstr($func,'ftp_') !== false && function_exists($func)){
            array_unshift($a,$this->conn);
            return call_user_func_array($func,$a);
        }else{
            // replace with your own error handler.
            die("$func is not a valid FTP function");
        }
    }
    public function getConn()
    {
        return $this->conn;
    }
    public function login($user,$mdp)
    {
       return ftp_login($this->conn,$user,$mdp);
    }
}
$ftp = new Ftp('172.20.255.1');
$ftp->login('administrateur','CfaINSTA123!');
var_dump(ftp_nlist($ftp->getConn(),".")); 

?>