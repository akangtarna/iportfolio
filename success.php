<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Berhasil Terkirim</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome -->
</head>
<body>
    <style>
/* Reset default browser styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Body */
body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f4f7f6;
  color: #343a40;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  font-size: 16px;
  overflow: hidden;
}

/* Styling untuk Pesan Sukses */
.success-message {
  background-color: #ffffff;
  color: #28a745;
  padding: 40px;
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  max-width: 600px;
  width: 90%;
  text-align: center;
  font-size: 18px;
  font-weight: 500;
  animation: fadeIn 0.6s ease-out;
  position: relative;
  border-left: 10px solid #28a745;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

.success-message h1 {
  font-size: 2.5em;
  margin-bottom: 20px;
  color: #28a745;
}

.success-message h1 font {
  font-weight: bold;
  color: #ff6700;
}

.success-message p {
  font-size: 16px;
  color: #6c757d;
  margin-bottom: 30px;
  line-height: 1.6;
}

/* Styling untuk Gambar Ikon */
.success-message .icon {
  width: 80%; /* Ukuran gambar pada PC */
  height: auto; /* Menjaga proporsi gambar */
  margin-bottom: 30px;
  object-fit: contain; /* Menjaga proporsi gambar agar tidak terdistorsi */
}

/* Tombol untuk kembali ke beranda */
.success-message .btn {
  background-color: #28a745;
  color: white;
  padding: 14px 30px;
  font-size: 20px;
  text-decoration: none;
  border-radius: 30px;
  display: inline-block;
  transition: background-color 0.3s ease, transform 0.3s ease;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}

.success-message .btn:hover {
  background-color: #218838;
  transform: translateY(-5px);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

/* Animasi untuk gambar ikon */
@keyframes bounce {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(-15px);
  }
}

/* Animasi untuk munculnya pesan */
@keyframes fadeIn {
  0% {
    opacity: 0;
    transform: translateY(50px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Responsif untuk layar kecil (ponsel) */
@media screen and (max-width: 768px) {
  .success-message {
    padding: 20px;
    font-size: 16px;
  }

  .success-message .btn {
    padding: 12px 25px;
    font-size: 18px;
  }

  .success-message h1 {
    font-size: 2em;
  }

  /* Ukuran gambar untuk perangkat kecil */
  .success-message .icon {
    width: 90%; /* Lebar gambar pada ponsel lebih besar */
    height: auto; /* Menjaga proporsi gambar */
  }
}

/* Responsif untuk layar lebih kecil lagi (misalnya ponsel dengan layar lebih kecil) */
@media screen and (max-width: 480px) {
  .success-message {
    padding: 15px;
  }

  .success-message .btn {
    padding: 10px 20px;
    font-size: 16px;
  }

  .success-message h1 {
    font-size: 1.8em;
  }

  .success-message .icon {
    width: 100%; /* Mengisi seluruh lebar pada ponsel kecil */
    height: auto;
  }
}
</style>

<div class="success-message">
    <!-- Menambahkan gambar pesan berhasil terkirim -->
    <img src="images/sent.webp" alt="Pesan Berhasil Terkirim" class="icon"> <!-- Gambar pesan -->
    <h1><font color="#ff6700">Pesan</font> Berhasil <font color="0000ff">Terkirim!</font></h1>
    <p>Terima kasih telah menghubungi kami. Kami akan segera merespon pesan Anda.</p>
    <a href="index.html" class="btn">Kembali ke Beranda</a>
</div>
</body>
</html>
