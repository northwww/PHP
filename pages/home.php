<!DOCTYPE html>
<html lang="uk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Продукти інтел">
  <meta name="keywords" content="Intel, процесори Intel, Intel Core, Intel i7, Intel i9, технології Intel, чіпи Intel, Intel Xeon, продуктивність Intel, комп’ютерні процесори, Intel CPU, Intel Inside, інновації Intel">
  <meta name="author" content="Intel Ukraine Team">
  <title><?= $title ?></title>
  <link rel="icon" href="images/Daco_1302675.png">
  <link rel="stylesheet" href="style/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body, h1, h2, h3, p, ul, li {
      flex-wrap: wrap;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
      line-height: 1.6;
      background-color: #f5f7fa;
      color: #333;
    }

    header {
      background-color: #0071c5;
      padding: 1rem 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    header nav ul {
      list-style: none;
      display: flex;
      gap: 2rem;
    }

    header nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    .logo img {
      height: 40px;
    }

    .hero {
      position: relative;
      background-image: url('images/intelbackground.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      color: white;
      text-align: center;
      padding: 150px 20px;
      z-index: 1;
    }
    .hero h1, .hero p {
      position: relative;
      z-index: 1;
    }

    .hero h1 {
      font-size: 3rem;
      margin-bottom: 1rem;
    }

    .hero p {
      font-size: 1.5rem;
    }

    .products, .news {
      padding: 4rem 2rem;
      background-color: #fff;
    }

    .products h2, .news h2 {
      text-align: center;
      margin-bottom: 2rem;
    }

    .product-grid, .news-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 2rem;
    }

    .product-card, .news-item {
      background: #f0f0f0;
      border-radius: 10px;
      overflow: hidden;
      text-align: center;
      padding: 1rem;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.3s ease;
    }

    .product-card:hover, .news-item:hover {
      transform: scale(1.02);
    }

    .product-card img, .news-item img {
      width: 100%;
      object-fit: cover;
      border-radius: 10px;
    }

    .product-card h3, .news-item h3 {
      margin-top: 1rem;
      font-size: 1.2rem;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 1rem;
      margin-top: 4rem;
    }
  </style>
</head>
<body>
  <header>
    <nav>
      <div class="logo">
        <img src="images/Daco_1302675.png" alt="Логотип Intel">
      </div>
      <ul id="nav-menu">
        <li><a href="#">Продукти</a></li>
        <li><a href="#">Рішення</a></li>
        <li><a href="#">Інновації</a></li>
        <li><a href="#">Підтримка</a></li>
        <li><a href="login.html">Логін</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section class="hero">
      <h1>Нова ера інновацій</h1>
      <p>Досліджуйте новітні технології з Intel</p>
    </section>

    <section class="products">
      <h2>Топ найпотужніших процесорів</h2>
      <div class="product-grid">
        <div class="product-card">
          <img src="images/IntelCorei914900KS.jpg" alt="Intel Core i9-14900KS — потужний процесор для ПК">
          <h3>Процесор Intel Core i9-14900KS</h3>
          <p>Core i9-14900KS — це 24-ядерний процесор для платформи LGA1700. Він має 8 продуктивних ядер (P-Core) та 16 ефективних ядер (E-Core). Суфікс KS означає Special Edition, що в цьому випадку говорить про вищі тактові частоти та збільшене енергоспоживання.</p>
        </div>
        <div class="product-card">
          <img src="images/IntelCorei914900K" alt="Intel Core i9-14900K — висока продуктивність">
          <h3>Intel Core i9-14900K</h3>
          <p> Intel Core i9-14900K – найпотужніший процесор LGA 1700 й одночасно найпотужніший десктопний процесор сучасності. Протестуємо новинку в робочих та ігрових сценаріях, порівняємо його з попередниками, а також спробуємо визначити, чи справді останній флагман LGA 1700 заслуговує звання найкращого CPU 2023 року.</p>
        </div>
      </div>
    </section>

    <section class="news">
      <h2>Останні новини</h2>
      <div class="news-grid">
        <article class="news-item">
          <img src="images/processor.jpeg" alt="Intel представляє нову технологію">
          <h3>Процесори Intel Core Ultra уповільнюють швидкісні SSD, — дослідження причин</h3>
          <p>Затримки, пов’язані з процесорами Intel Core 200S,уповільнюють порти M.2 на материнських платах, зокрема Z890, та заважають SSD досягати високої швидкості передавання даних.</p>
        </article>
        <article class="news-item">
          <img src="images/gpuintel.png" alt="Конференція розробників 2025">
          <h3>Intel представила відеокарти Arc Pro B50 і B60 для професіоналів: до 24 ГБ пам’яті, акцент на ШІ та ціна від $299</h3>
          <p>Як і очікувалося, на виставці Computex 2025 компанія Intel зробила гучну заяву в царині професійної графіки та ШІ. Чипмейкер представив нову лінійку відеокарт Arc Pro B-серії, націлену на робочі станції для графіки, рендерингу, машинного навчання та проєктування. Головний акцент — не лише на продуктивності, а й на великому обсязі памʼяті та підтримці сучасних форматів роботи зі штучним інтелектом. І найприємніше — стартова ціна лише $299.</p>
        </article>
      </div>
    </section>
  </main>
  <footer>
    <p>© 2025 Intel Corporation</p>
  </footer>
  <script src="scripts/script.js"></script>
</body>
</html>