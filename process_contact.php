<?php
// Menyertakan file PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Memuat autoloader Composer
// Sesuaikan path jika Anda tidak menggunakan Composer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Menangani pengiriman formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan data dari formulir
    $subject = htmlspecialchars(trim($_POST['subject']));
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validasi data
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Pastikan email valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

            // Membuat instance PHPMailer
            $mail = new PHPMailer(true);

            try {
                // Mengonfigurasi PHPMailer untuk menggunakan SMTP
                $mail->isSMTP();  // Menggunakan SMTP
                $mail->Host = 'smtp.gmail.com';  // Ganti dengan SMTP server Anda
                $mail->SMTPAuth = true;
                $mail->Username = 'akang.tarna01@gmail.com';  // Ganti dengan alamat email Anda
                $mail->Password = 'ucck brro wutq xtqq';  // Ganti dengan password email Anda atau App Password
                $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                $mail->Port = 587;

                // Pengaturan pengirim dan penerima
                $mail->setFrom($email, $name);  // Email pengirim
                $mail->addAddress('riayantori@gmail.com');  // Ganti dengan alamat email tujuan

                // Subjek dan konten email
                $mail->Subject = $subject; //subyek email
                $mail->isHTML(true);  // Mengatur email untuk format HTML
                $mail->Body = "
                 <!doctype html>
            <html>
            <head>
            <meta name='viewport' content='width=device-width'>
            <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
            <title>'$subject'</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            color: #333;
                            line-height: 1.6;
                        }
                        .email-container {
                            width: 100%;
                            max-width: 600px;
                            margin: 0 auto;
                            background-color: #f4f4f4;
                            padding: 20px;
                            border-radius: 8px;
                        }
                        .header {
                            background-color: #4CAF50;
                            color: white;
                            padding: 10px;
                            text-align: center;
                            border-radius: 5px;
                        }
                        .content {
                            background-color: #fff;
                            padding: 20px;
                            border-radius: 5px;
                            margin-top: 20px;
                            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                        }
                        .footer {
                            text-align: center;
                            font-size: 0.8rem;
                            color: #777;
                            margin-top: 20px;
                        }
                        .footer a {
                            color: #4CAF50;
                            text-decoration: none;
                        }
                    </style>
                </head>
                <body>
                    <div class='email-container'>
                        <div class='header'>
                            <h2>Pesan Baru dari $name</h2>
                        </div>
                        <div class='content'>
                            <p><b>Name</b> :  $name</p>
                            <p><b>Email</b> :  $email</p>
                             --------------------------------------\n
                            <p>$message</p>
                             --------------------------------------\n
                        </div>
                        <div class='footer'>
                        <p>Copyright &copy; <?php echo date('Y'); ?> AkangWeb</p>
                            <p>Terima kasih telah menghubungi kami!</p>
                            <p><a href='mailto:akang.tarna@gmail.com'>Balas Pesan</a></p>
                        </div>
                    </div>
                </body>
                </html>";

                // Mengirim email
                if ($mail->send()) {
                    // Arahkan ke halaman sukses
                    header("Location: success.php");
                    exit(); // Hentikan script setelah mengarahkan
                } else {
                    echo "<script>alert('Pesan gagal dikirim.');window.location='index.html';</script>";
                }
            } catch (Exception $e) {
                echo "<script>alert('Pesan gagal dikirim. Error');window.location='index.html';</script>: {$mail->ErrorInfo}";
            }
        } else {
            echo "<script>alert('Email yang Anda masukkan tidak valid.');window.location='index.html';</script>";
        }
    } else {
        echo "<script>alert('Semua kolom harus diisi.');window.location='index.html';</script>";
    }
} else {
    echo "<script>alert('Metode pengiriman salah.');window.location='index.html';</script>";
}
?>
