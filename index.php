<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annahl Narendra Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <section class="contact">
        <div class="content">
            <h2>Universitas Brawijaya Center</h2>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fas fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Alamat</h3>
                        <p>Jalan Veteran Malang</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>rendratampan123@gmail.com</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fas fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>No HP</h3>
                        <p>05535677788</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="proses.php" method="post">
                    <h2>Masukan</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Nama Lengkap</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea name="message" required="required"></textarea>
                        <span>Masukan Pesan Anda ....</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" value="send">
                    </div>
                </form>
                <?php if (isset($_GET['notif'])) : ?>
                    <?php if ($_GET['notif'] == 'kirimberhasil') : ?>
                        <div class="alert">Pesan Berhasil Dikirim</div>
                    <?php endif ?>
                    <?php if ($_GET['notif'] == 'kirimgagal') : ?>
                        <div class="alert">Pesan Gagal Dikirim</div>
                    <?php endif ?> 
                <?php endif ?>
            </div>
        </div>
    </section>
</body>
</html>
