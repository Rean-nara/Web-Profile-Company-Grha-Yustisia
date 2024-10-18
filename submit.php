<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    // Ganti email penerima dengan alamat email yang sesuai
    $to = "grahayusti@gmail.com";
    $email_subject = "Form Pengaduan: $subject";
    $email_body = "Nama: $name\n\nPengaduan: $subject\n\nIsi Pesan:\n$message";
    $headers = "From: $name\r\nReply-To: $name\r\n";
    mail($to, $email_subject, $email_body, $headers);
    header("Location: contact.html");
    exit();
}
?>