<?php

if(isset($_POST["submit"])){

    $usr = $_POST["usr"];
    $pass = $_POST["pass"];


    require_once "povezivanje.php";
    function emptyLoginInput($usr, $pass){
        if(empty($usr) || empty($pass)){
            return true;
        }
            else {
                return false;
            }
        }
        function invalidLogin($pov, $usr, $pass){
            $query = mysqli_query($pov, "SELECT * FROM korisnici");
    
            $korisnicka_imena = array();
            $emails = array();
            $lozinke = array();
    
            while($row = mysqli_fetch_array($query)){
                $korisnicka_imena[] = $row['korisniciKorisnickoIme'];
                $emails[] = $row['korisniciEmail'];
                $lozinke[] = $row['korisniciLozinka'];
            }
            
            $res = true;
    
            $i = 0;
            for($i = 0; $i < sizeof($korisnicka_imena); $i++){
                if($korisnicka_imena[$i] === $usr || $emails[$i] === $usr){
                    if($lozinke[$i] === $pass){
                        $res = false;
                        break;
                    }
                }
            }
    
            return $res;
    
        }
        if(emptyLoginInput($usr, $pass) == true){
            header("Location: prijava.php");
        }
        if(invalidLogin($pov, $usr, $pass) == true){
            header("Location: prijava.php");
            exit();
        }
        else{
            header("Location: filmovi.php");
            exit();
        }


}

else{

    header("Location: prijava.php");
    exit();

}