<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio Afriza Fazl Shifa Naula</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      scroll-behavior: smooth;
    }
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #0f172a;
      color: #f1f5f9;
      font-size: 18px;
    }
    header {
      text-align: center;
      padding: 80px 20px 40px;
    }
    header img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 50%;
      border: 4px solid #1abc9c;
      margin-bottom: 20px;
    }
    header h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }
    header h2 {
      font-size: 22px;
      font-weight: 300;
      color: #94a3b8;
    }
    nav {
      background: #1e293b;
      padding: 10px 30px;
      position: sticky;
      top: 0;
      z-index: 999;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }
    nav ul {
      display: flex;
      list-style: none;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
      transition: 0.4s ease;
    }
    nav ul li a {
      text-decoration: none;
      color: #f1f5f9;
      padding: 8px 15px;
      border-radius: 5px;
      transition: background 0.3s;
    }
    nav ul li a:hover {
      background-color: #1abc9c;
      color: #0f172a;
    }
    .menu-toggle {
      display: none;
      flex-direction: column;
      cursor: pointer;
      gap: 5px;
    }
    .menu-toggle span {
      width: 25px;
      height: 3px;
      background-color: #f1f5f9;
      display: block;
      transition: 0.3s;
    }
    section {
      padding: 60px 20px;
      max-width: 800px;
      margin: auto;
      text-align: center;
    }
    section h2 {
      font-size: 28px;
      margin-bottom: 20px;
      color: #1abc9c;
    }
    section p, li {
      margin-bottom: 15px;
      line-height: 1.6;
    }
    ul {
      padding-left: 20px;
      text-align: left;
    }
    article {
      margin-bottom: 20px;
    }
    footer {
      text-align: center;
      padding: 20px;
      background-color: #1e293b;
      color: #94a3b8;
      margin-top: 40px;
    }
    #contact form {
      display: flex;
      flex-direction: column;
      gap: 15px;
      margin-top: 20px;
    }
    #contact input, #contact textarea {
      padding: 12px;
      border: 1px solid #334155;
      background-color: #1e293b;
      color: #f1f5f9;
      border-radius: 5px;
      font-size: 16px;
    }
    #contact button {
      padding: 12px;
      background-color: #1abc9c;
      color: #0f172a;
      border: none;
      border-radius: 5px;
      font-size: 18px;
      cursor: pointer;
      transition: background 0.3s;
    }
    #contact button:hover {
      background-color: #16a085;
    }

    @media (max-width: 768px) {
      .menu-toggle {
        display: flex;
      }
      nav {
        justify-content: space-between;
      }
      nav ul {
        position: absolute;
        top: 65px;
        left: 50%;
        transform: translateX(-50%) translateY(-20px);
        flex-direction: column;
        background: #1e293b;
        width: 80%;
        padding: 20px;
        border-radius: 10px;
        opacity: 0;
        pointer-events: none;
      }
      nav ul.active {
        transform: translateX(-50%) translateY(0);
        opacity: 1;
        pointer-events: auto;
      }
    }
  </style>
</head>
<body>
  <header>
    <img src="Gambar WhatsApp 2025-04-26 pukul 13.28.31_d958375f.jpg" alt="Foto Profil Afriza">
    <h1>Afriza Fazl Shifa Naula</h1>
    <h2>Teknik Informatika | AI Enthusiast | Game Developer</h2>
  </header>

  <nav>
    <div class="menu-toggle" id="menu-toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <ul id="nav-links">
      <li><a href="#tentang">Tentang</a></li>
      <li><a href="#pendidikan">Pendidikan</a></li>
      <li><a href="#keahlian">Keahlian</a></li>
      <li><a href="#proyek">Proyek</a></li>
      <li><a href="#sertifikat">Sertifikat</a></li>
      <li><a href="#tujuan">Tujuan</a></li>
      <li><a href="#contact">Kontak</a></li>
    </ul>
  </nav>

  <section id="tentang">
    <h2>👤 Tentang Saya</h2>
    <p>Mahasiswa yang antusias terhadap teknologi, khususnya Artificial Intelligence dan pengembangan game. Saya senang menggabungkan logika dan kreativitas untuk menciptakan solusi inovatif.</p>
    <p>Saya percaya bahwa teknologi dapat menjadi jembatan untuk menjawab tantangan zaman.</p>
  </section>

  <section id="pendidikan">
    <h2>🎓 Pendidikan</h2>
    <p><strong>Universitas:</strong> Universitas Budi Luhur</p>
    <p><strong>Program Studi:</strong> Teknik Informatika</p>
    <p><strong>Tahun Masuk:</strong> 2023 – 2025</p>
  </section>

  <section id="keahlian">
    <h2>💡 Keahlian</h2>
    <ul>
      <li>HTML5 dan CSS3</li>
      <li>Python, JavaScript, C++</li>
      <li>Dasar Machine Learning dan Data Processing</li>
      <li>Desain UI/UX</li>
      <li>Microsoft Office & Google Workspace</li>
    </ul>
  </section>

  <section id="proyek">
    <h2>🛠️ Proyek</h2>
    <article>
      <h3>Proposal Game AI Anti E-Commerce</h3>
      <p>Mengembangkan ide game berbasis AI dengan interaksi cerdas dan sistem rekomendasi adaptif.</p>
    </article>
  </section>

  <section id="sertifikat">
    <h2>🏆 Sertifikat</h2>
    <ul>
      <li>Sertifikat Machine Learning Dasar – Dicoding, 2024</li>
    </ul>
  </section>

  <section id="tujuan">
    <h2>🎯 Tujuan & Harapan</h2>
    <p>Terus berkembang di bidang teknologi dan berkontribusi menciptakan inovasi bermanfaat melalui AI dan pengembangan web.</p>
  </section>

  <section id="contact">
  @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif
    <h2>📬 Kontak Saya</h2>
    <form method="POST" action="/pesan">
    @csrf
    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>

<input type="email" name="email" placeholder="Alamat Email" required>

<input type="text" name="nomor_telepon" placeholder="Nomor Telepon" required
       pattern="[0-9]+"
       oninvalid="this.setCustomValidity('Mohon isi menggunakan angka')"
       oninput="this.setCustomValidity('')">

<textarea name="pesan" placeholder="Pesan" rows="5" required></textarea>

<button type="submit">Kirim Pesan</button>

    </form>
  </section>

  <footer>
    <p>&copy; 2025 Afriza Fazl Shifa Naula</p>
  </footer>

  <script>
    const toggle = document.getElementById('menu-toggle');
    const navLinks = document.getElementById('nav-links');
    toggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
    });
  </script>
</body>
</html>