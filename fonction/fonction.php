<?php
    include "connection.php";
    
    // Methode generalisé
    function getQuery($sql){
        $connection = mysqlConnect();
        
        $result = $connection->query($sql);
        $tab =  $result->fetchAll(PDO::FETCH_ASSOC); // Mi-retourne en tant que tableau associatif
        $result->closeCursor();
        return $tab;
    }
    function insert($data,$table){ // Tableau le data
        $connection = mysqlConnect();
        $result = $connection->query("Show columns FROM ".$table);
        $tab =  $result->fetchAll(PDO::FETCH_ASSOC);
        $attribut="";
        $values="";
        for ($i=0; $i < count($tab); $i++) { 
            if (array_key_exists($tab[$i]["Field"], $data)) {
                $attribut.=$tab[$i]["Field"];
                if (stripos($tab[$i]["Type"],"date")!==false || stripos($tab[$i]["Type"],"varchar")!==false ) {
                    $values.="'". $data[$tab[$i]["Field"]] ."'";                
                }else{
                    $values.=$data[$tab[$i]["Field"]];
                }
                $attribut.=",";
                $values.=",";        
            }
            
        }
        $attribut = substr($attribut,0,strlen($attribut)-1);
        $values = substr($values,0,strlen($values)-1);
        
        $sql = "INSERT INTO " .$table."(".$attribut.")VALUES(".$values.")";   
        
        var_dump($connection->exec($sql));
    }
    //Methode non-generaisé
    
    //Login

    function checkLogin($login,$mdp){
        $sql = "Select idUser from exams3_user where nomUser = '%s' and mdp = '%s'";
        $sql = sprintf($sql,$login,$mdp);
        $tab = getQuery($sql);
        
        return $tab;
    }

    function checkLoginAdmin($login,$mdp){
        $sql = "Select idUser from exams3_user  where nomUser = '%s' and mdp = '%s' and idUser = 1";
        $sql = sprintf($sql,$login,$mdp);
        $tab = getQuery($sql);
        
        return $tab;
    }
    function getLoginDefautUser(){
        return getQuery("Select * from exams3_user where idUser = 2")[0];
    }
    function getLoginDafautAdmin(){
        return getQuery("Select * from exams3_user where idUser = 1")[0];
    }
    //utilitaire
    function getRendementTotal($idParcelle){
        $get1 = "SELECT surface,occupation,rendement from  exams3_v_parcelle_variete where idParcelle = ".$idParcelle;
        $ligne1 = getQuery($get1)[0];
        $m2 = $ligne1["surface"]*10000;
        $nbPied = intval($m2/$ligne1["occupation"]);
        $totalRendement = ($nbPied*$ligne1["rendement"]);
        
        return $totalRendement;
    }
    function getKilosCueilli($idParcelle,$date){
        $get2 = "SELECT idParcelle,sum(poids) as total_poids from  exams3_cueillette where idParcelle = ".$idParcelle." and DATE_FORMAT(dateCueillette, '%Y-%m') =  DATE_FORMAT('".$date."', '%Y-%m') group by idParcelle,DATE_FORMAT(dateCueillette, '%Y-%m')";
        
        $tab2 = getQuery($get2);
        if (count($tab2) != 0) {
            return $tab2[0]["total_poids"];
        }
        return 0;
    }
    //Insertion
    function checkReste($idparcelle,$poids,$date){

        $totalRendement = getRendementTotal($idparcelle);        
        $cueilli = getKilosCueilli($idparcelle,$date); 
        $reste = $totalRendement - $cueilli;
        if ($reste < $poids ) {
            return $reste; 
        }
        else{
            return -1; //Raha OK
        }
         
    }
    //Read 
    function getAllCueilleur(){
        $sql = "Select * from exams3_cueilleur";
        return getQuery($sql);
    }
    function getAllParcelle(){
        $sql = "Select * from exams3_parcelle";
        return getQuery($sql);
    }
    function getAllCategorie(){
        $sql= "SELECT * FROM exams3_categorie_depense";
        return getQuery($sql);
    }

    //Resultat Global
    
    function getKilosCueilliDate($idParcelle,$dateMin,$dateMax){
        $get2 = "SELECT idParcelle,sum(poids) as total_poids from  exams3_cueillette where idParcelle = ". $idParcelle." and DATE_FORMAT(dateCueillette, '%Y-%m') >=  DATE_FORMAT('".$dateMin."', '%Y-%m') and  DATE_FORMAT(dateCueillette, '%Y-%m') <=  DATE_FORMAT('".$dateMax."', '%Y-%m') group by idParcelle,DATE_FORMAT(dateCueillette, '%Y-%m')";
        
        $tab2 = getQuery($get2);
        if (count($tab2) != 0) {
            return $tab2[0]["total_poids"];
        }
        return 0;
    }
    function getResteGlobal($dateMin,$dateMax){
        $sql = "Select idParcelle from exams3_cueillette where dateCueillette >= '".$dateMin."' and dateCueillette<='".$dateMax."'"; 
        
        $tabIdP = getQuery($sql);
        $reste = 0;
        $totalRendement = 0;
        $totalCueilli = 0;
        for ($i=0; $i <count($tabIdP) ; $i++) { 
            $totalRendement+=getRendementTotal($tabIdP[$i]["idParcelle"]);
        }
        for ($i=0; $i < count($tabIdP) ; $i++) { 
            $totalCueilli+=getKilosCueilliDate($tabIdP[$i]["idParcelle"],$dateMin,$dateMax);
        }
        $reste = $totalRendement - $totalCueilli;
        return $reste;    
    }
        
    
    function getStat($dateMin,$dateMax){ 
        $sql1 ="Select sum(poids) as sommeTotal from exams3_cueillette where dateCueillette >= '".$dateMin."' and dateCueillette<='".$dateMax."' limit 1";
        
        $sql3 = "Select sum(montant) as sommeMontant from exams3_depense limit1 ";
        
        $sql4 = "SELECT prix from exams3_salaire";
        
        $stat = array();
        $stat["somme"] = getQuery($sql1)[0]["sommeTotal"];
        $stat["reste"] = getResteGlobal($dateMin,$dateMax) ;
        $coutRevient1 = getQuery($sql1)[0]["sommeTotal"] * getQuery($sql4)[0]["prix"];
        $stat["cout_revient"] = ($coutRevient1 + getQuery($sql3)[0]["sommeMontant"])/getQuery($sql1)[0]["sommeTotal"];
        return $stat;
    }
    
    //admin
    function updateVariete($data,$id)
    {
        $connection = mysqlConnect();
        $sql = "update exams3_variete set nomVariete ='".$data["nomVariete"]."' , occupation =".$data["occupation"]." , rendement =".$data["rendement"]." where idVariete =".$id;
        $connection->exec($sql);
    }

    function updateParcelle($data,$id)
    {
        $connection = mysqlConnect();
        $sql = "update exams3_parcelle set surface =".$data["surface"]." , idVariete =".$data["idVariete"]." where idParcelle =".$id;
        $connection->exec($sql);
    }


    function updateCueilleur($data)
    {
        $connection = mysqlConnect();
        $sql = "update exams3_cueilleur set nomCueilleur ='".$data["nomCueilleur"]."' , genre ='".$data["genre"]."' , dateNaissance ='".$data["dateNaissance"]."' where idCueilleur =".$data["idCueilleur"];
        echo($sql);
        $connection->exec($sql);
    }

?>