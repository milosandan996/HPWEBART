<?php
// Povezivanje na bazu podataka
$servername = "localhost";
$username = "hpwebartrs";
$password = "f^BwD2m(3JkW";
$database = "hpwebartrs_forma";

$conn = new mysqli($servername, $username, $password, $database);

// Provjera konekcije
if ($conn->connect_error) {
    die("Konekcija na bazu podataka nije uspjela: " . $conn->connect_error);
}

if (isset($_POST['poruka'])) {
    $telefon = $_POST['telefon'];
    $email = $_POST['email'];
    $poruka = $_POST['poruka'];

    // Prihvaćanje podataka iz forme
    // SQL upit za unos podataka u bazu
    $sql = "INSERT INTO kontakt (telefon, email, poruka) VALUES ('$telefon', '$email', '$poruka')";

    if ($conn->query($sql) === TRUE) {
        echo "USPEŠNO STE POSLALI VAŠE PODATKE";
    } else {
        echo "<h2>Greška pri unosu podataka u bazu:</h2> " . $conn->error;
    }
    $to = "milos.andan996@gmail.com";
    $subject = "Poruka sa web forme";
    $message = "Telefon: $telefon\nEmail: $email\nPoruka: $poruka";

    // Slanje e-maila
    mail($to, $subject, $message);

    // Zatvaranje konekcije na bazu
    $conn->close();
} else {
    
}
?>

<form id="form" method="post" action="">
    <div class="row">
        <div class="col-12 mb-4">
            <label for="email">*EMAIL</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required="">
            <p><span></span></p>
        </div>
        <div class="col-12 mb-4">
            <label for="phone">KONTAKT TELEFON</label>
            <input type="text" class="form-control" name="telefon" id="phone" placeholder="06012345678">
            <p><span></span></p>
        </div>
        <div class="col-12 mb-4">
            <label for="message">*VAŠA PORUKA</label>
            <textarea class="form-control" name="poruka" id="message" placeholder="Poruka" required="" rows="5"></textarea>
        </div>
        <div class="text-center m-4">
            <button class="butt" type="submit"><b>Pošaljite</b></button>
        </div>
    </div>
</form>