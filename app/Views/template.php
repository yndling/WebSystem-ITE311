<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $title ?? 'Learning Hub' ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
  
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #b9d6f3ff;
    }
    nav {
      background: #5daeff;
      padding: 0.5rem 2rem;
      box-shadow: 0 2px 4px rgba(0,0,0,0.03);
      border-radius: 30px;
      margin: 1rem auto;
      max-width: 95%;
    }
    nav ul {
      list-style: none;
      display: flex;
      gap: 1.5rem;
      margin: 0;
      padding: 0;
    }
    nav ul li a {
      text-decoration: none;
      color: #333;
      font-weight: 500;
      transition: color 0.2s;
    }
    nav ul li a:hover {
      color: #007bff;
    }
    .nav-brand {
      font-weight: bold;
      font-size: 1.2rem;
      margin-right: 2rem;
      color: #000000;
      text-decoration: none;
    }
    .nav-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      max-width: 900px;
      margin: 0 auto;
}
.container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;              
    justify-content: center;     
}
.login {
    text-align: center;
}
h1{
    color: rgb(21, 77, 182);
    font-weight: bold;
}

  </style>
</head>
<body>
  <nav>
    <div class="nav-container">
      <a href="/" class="nav-brand">Learning Hub</a>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="<?= base_url('about') ?>">About</a></li>
        <li><a href="<?= base_url('contact') ?>">Contact</a></li>
      </ul>
    </div>
  </nav>
  <div class="container mt-4">
    <?= $content ?? '' ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
