<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Laboratory 1</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
  <style>
    nav {
      background: #5daeff;
      padding: 0.5rem 2rem;
      box-shadow: 0 2px 4px rgba(0,0,0,0.03);
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
  </style>
</head>
<body>
  <nav>
    <div class="nav-container">
      <a href="#" class="nav-brand">LABORATORY 1</a>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </nav>

  <div class="container mt-4">

    <?php if (isset($content)) echo $content; ?>
  </div>
</body>
</html>
