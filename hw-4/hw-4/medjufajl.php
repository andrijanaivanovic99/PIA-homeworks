<?php
if(isset($_POST["submit"])){

    $ime = $_POST["first-name"];
    $prezime = $_POST["last-name"];
    $email = $_POST["email"];
    $korisnicko = $_POST["username"];
    $lozinka = $_POST["password"];
    $tipKorisnika = "regular";

    require_once "povezivanje.php";

    function emptySingupInput($ime, $prezime, $email, $korisnicko, $lozinka){
        if(empty($ime) || empty($prezime) || empty($email) || empty($korisnicko) || empty($lozinka)){
            return true;
        }
            else {
                return false;
            }
        }

        function dodajKorisnika($pov, $ime, $prezime, $email, $korisnicko, $lozinka, $tipKorisnika ){
            $data = "INSERT INTO korisnici (korisniciIme, korisniciPrezime, korisniciEmail, korisniciKorisnickoIme, korisniciLozinka, korisniciKo ) VALUES ('$ime' , '$prezime' , '$email' , '$korisnicko' , '$lozinka' , '$tipKorisnika')";
            
            mysqli_query($pov, $data);
        }


        if(emptySingupInput($ime, $prezime, $email, $korisnicko, $lozinka) == true ){
            header("Location: registracija.php");
            exit();
        }
        else{
            dodajKorisnika($pov, $ime, $prezime, $email, $korisnicko, $lozinka, $tipKorisnika );
            header("Location: filmovi.php");
            exit();
        }
    }

    else{
        header("Location: registracija.php");
    }