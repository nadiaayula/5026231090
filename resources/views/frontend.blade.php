<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Ayula's Web Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    body {
      background: #f6f3ff;
      margin: 0;
      padding: 2rem;
      color: #333;
    }
    .container {
      max-width: 1000px;
      margin: auto;
      background: white;
      border-radius: 15px;
      padding: 2rem;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }
    h1 {
      font-size: 2.2rem;
      color: #7a4bc2;
      margin-bottom: 1.5rem;
      display: flex;
      align-items: center;
      gap: 10px;
    }


    .profile {
      background: #e4dafc;
      border-radius: 12px;
      display: grid;
      grid-template-columns: 160px 1fr;
      gap: 1.5rem;
      padding: 1.5rem;
      margin-bottom: 2rem;
    }

    .avatar {
      width: 100%;
      max-width: 250px;
      aspect-ratio: 1 / 1;
      object-fit: contain;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }

    .details {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .identity p {
      margin: 0.3rem 0;
    }

    .button {
      display: inline-block;
      margin-top: 1rem;
      padding: 0.5rem 1rem;
      background-color: #7a4bc2;
      color: white;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 600;
      width: fit-content;
    }

    .button:hover {
      background-color: #5c3aa4;
    }

    .grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 kolom tetap */
    gap: 1rem;
    }

    @media (max-width: 768px) {
    .grid {
        grid-template-columns: repeat(2, 1fr); /* di tablet, 2 kolom */
    }
    }

    @media (max-width: 500px) {
    .grid {
        grid-template-columns: 1fr; /* di HP, 1 kolom */
    }
    }

    .card {
      background: #f4f0ff;
      padding: 1.2rem 1rem;
      border-radius: 12px;
      text-align: center;
      transition: 0.3s;
      border: 1px solid #ddd;
    }

    .card:hover {
      background: #d9cefd;
      transform: translateY(-4px);
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .card a {
      text-decoration: none;
      font-weight: 600;
      color: #5a3fb2;
      font-size: 1.1rem;
      display: block;
      margin-bottom: 0.4rem;
    }

    .card p {
      font-size: 0.9rem;
      color: #555;
      margin: 0;
    }

    @media (max-width: 600px) {
      .profile {
        grid-template-columns: 1fr;
        text-align: center;
      }

      .avatar {
        margin: auto;
      }

      .details {
        align-items: center;
      }

      .button {
        margin: 1rem auto 0;
      }

      .identity {
        text-align: left;
        width: 100%;
      }
    }

    .sub-navbar {
    background-color: #e4dafc; /* ungu muda */
    padding: 10px 20px;
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    border-radius: 8px;
    margin-top: -1rem;
    margin-bottom: 2rem;
    }

    .sub-navbar a {
    text-decoration: none;
    color: #5a3fb2; /* ungu tua */
    font-weight: 500;
    transition: color 0.2s ease;
    }

    .sub-navbar a:hover,
    .sub-navbar a:focus,
    .sub-navbar a:active {
    color: #7a4bc2;
    font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>📚 Nadia Ayula's Web Dev Portfolio</h1>

    <div class="sub-navbar">
    <a href="/publish">All Front End</a>
    <a href="/pegawai">Pegawai</a>
    <a href="/makanan">Tugas CRUD</a>
    <a href="/eas">EAS</a>
    <a href="/latihan1">Latihan 1</a>
    <a href="/latihan23">Latihan 2</a>
    <a href="/latihan23">Latihan 3</a>
    </div>

    <div class="profile">
      <img src="img/profile-anime.jpg" alt="Avatar" class="avatar" />
      <div class="details">
        <div class="identity">
          <p><strong>Nama:</strong> Nadia Ayula 💐</p>
          <p><strong>NRP:</strong> 5026231090</p>
          <p><strong>Kelas:</strong> PWEB B</p>
          <p><strong>Status:</strong> Pertemuan 11 Laravel! 💻</p>
        </div>
        <a class="button" href="https://github.com/nadiaayula" target="_blank">🌐 my GitHub!</a>
      </div>
    </div>

    <div class="grid">
      <div class="card">
        <a href="/pertama" target="_blank">Pertemuan 1</a>
        <p>Intro HTML Mentoring</p>
      </div>
      <div class="card">
        <a href="/cssposition" target="_blank">Pertemuan 2.1</a>
        <p>CSS Position</p>
      </div>
            <div class="card">
        <a href="/cssproperty" target="_blank">Pertemuan 2.2</a>
        <p>CSS Property</p>
      </div>
      <div class="card">
        <a href="/bootgrid" target="_blank">Pertemuan 3</a>
        <p>Bootstrap Grid & Layout</p>
      </div>
      <div class="card">
        <a href="/boottemplate" target="_blank">Pertemuan 4</a>
        <p>Bootstrap Template</p>
      </div>
      <div class="card">
        <a href="/linktree" target="_blank">Pertemuan 5</a>
        <p>Linktree Clone Project</p>
      </div>
      <div class="card">
        <a href="/validation" target="_blank">Pertemuan 7.1</a>
        <p>Form Validation</p>
      </div>
      <div class="card">
        <a href="/calculator" target="_blank">Pertemuan 7.2</a>
        <p>Calculator</p>
      </div>
      <div class="card">
        <a href="/uts" target="_blank">UTS</a>
        <p>Landing Page Project</p>
      </div>
    </div>
  </div>
</body>
</html>
