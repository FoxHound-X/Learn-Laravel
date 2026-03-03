<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile Page</title>
</head>
<body>
  <main class="container">
    <section class="card" aria-label="Profil Siswa">
      <header class="header">
        <div class="avatar" aria-hidden="true">SD</div>
        <div class="title">
          <h1>Profil Siswa</h1>
          <p>Halaman profil sederhana (responsive)</p>
        </div>
      </header>
        
        <div class="content">
        <div class="grid">
            <div class="field">
            <div class="label">Nama</div>
            <div class="value">{{ $dataku->nama }}</div>
            </div>

            <div class="field">
            <div class="label">Kelas</div>
            <div class="value">{{ $dataku->kelas }}</div>
            </div>

            <div class="field full">
            <div class="label">Alamat</div>
            <div class="value">{{ $dataku->alamat }}</div>
            </div>
        </div>
        </div>

        <footer class="footer">
        <span>© 2026</span>
        <span>{{ $dataku->updated_at }}</span>
        </footer>
    </section>
  </main>
</body>
  <style>
    :root{
      --bg: #f6f7fb;
      --card: #ffffff;
      --text: #1f2937;
      --muted: #6b7280;
      --line: #e5e7eb;
      --accent: #2563eb;
    }

    *{ box-sizing: border-box; }
    body{
      margin: 0;
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      background: var(--bg);
      color: var(--text);
      line-height: 1.5;
    }

    .container{
      min-height: 100vh;
      display: grid;
      place-items: center;
      padding: 24px;
    }

    .card{
      width: 100%;
      max-width: 720px;
      background: var(--card);
      border: 1px solid var(--line);
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0,0,0,.06);
    }

    .header{
      padding: 20px 22px;
      background: linear-gradient(135deg, rgba(37,99,235,.14), rgba(37,99,235,.04));
      border-bottom: 1px solid var(--line);
      display: flex;
      gap: 16px;
      align-items: center;
    }

    .avatar{
      width: 56px;
      height: 56px;
      border-radius: 50%;
      background: rgba(37,99,235,.18);
      display: grid;
      place-items: center;
      font-weight: 700;
      color: var(--accent);
      flex: 0 0 auto;
    }

    .title h1{
      margin: 0;
      font-size: 20px;
    }
    .title p{
      margin: 4px 0 0;
      color: var(--muted);
      font-size: 14px;
    }

    .content{
      padding: 18px 22px 22px;
    }

    .grid{
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
    }

    .field{
      border: 1px solid var(--line);
      border-radius: 12px;
      padding: 12px 14px;
      background: #fff;
    }
    .field .label{
      font-size: 12px;
      color: var(--muted);
      margin-bottom: 6px;
    }
    .field .value{
      font-size: 15px;
      font-weight: 600;
      word-wrap: break-word;
    }

    .field.full{
      grid-column: 1 / -1;
    }

    .footer{
      padding: 14px 22px;
      border-top: 1px solid var(--line);
      display: flex;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
      color: var(--muted);
      font-size: 13px;
    }

    /* Responsive: kalau layar kecil, jadi 1 kolom */
    @media (max-width: 560px){
      .grid{ grid-template-columns: 1fr; }
      .header{ align-items: flex-start; }
      .avatar{ width: 52px; height: 52px; }
      .title h1{ font-size: 18px; }
    }
  </style>
</html>