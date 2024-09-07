<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $address = filter_var(trim($_POST["address"]), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST["message"]), FILTER_SANITIZE_STRING);


    if (strlen($name) > 64 || strlen($message) > 256 || strlen($message) < 3 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Chyba! Prosím vyplňte údaje správne.";
    } else {
       
        $host = 'localhost'; 
        $dbname = 'gymzenit';
        $username = 'root';   
        $password = '';       

        
        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           
            $sql = "INSERT INTO contacts (name, email, address, message) VALUES (:name, :email, :address, :message)";
            $stmt = $pdo->prepare($sql);

            
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':message', $message);

           
            $stmt->execute();
            echo"<style>@import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap');body{text-align:center;font-family: 'Lato';}
            h1{text-align:center;;margin-top:200px;,font-family: 'Lato';}button{padding:10px; font-family: 'Lato';background-color:#0088a9;color:white;border:none;border-radius:5px;}</style>";
            echo "<h1>Správa bola úspešne odoslaná!</h1>
            <button onclick='window.history.back()'>Vraťit sa naspäť</button>";
        } catch (PDOException $e) {
            echo "Chyba pripojenia: " . $e->getMessage();
        }
    }
}
?>
