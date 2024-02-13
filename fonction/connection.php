<?php 
    function mysqlConnect(){ 
        $user='root';
        $pass='';
        $dsn='mysql:host=localhost;dbname=exams3';
        
        // $user='ETU002665';
        // $pass='B6uyCEW0XDka';
        // $dsn='mysql:host=172.10.0.113;dbname=db_p16_ETU002665';
        
        try {
        	$dbh = new PDO($dsn, $user, $pass);
        	
        } catch (PDOException $e) {
            
        	print "Erreur ! : " . $e->getMessage();
        	die();
        }
        return $dbh;
    }
?>
    