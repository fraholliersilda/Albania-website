<?php
include 'db_config.php'; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $message = $_POST['message'] ?? null;
 
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
    } else {

        try {

            $sql = 'INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);
            echo 'Thank you for your message!';
        } catch (Exception $e) {
            echo 'There was an error processing your request: ' . $e->getMessage();
        }
    }
}
?>
