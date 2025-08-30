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
    background-color: #ffffff;
    padding: 20px;
    border-radius: 30px;
    box-shadow: 0 12px 24px rgba(5, 5, 5, 0.685);
    width: 60%;
    text-align: center;
    padding-top: 80px;
}
h1{
    color: rgb(21, 77, 182);
    font-weight: bold;
    
}
label {
    font-weight: bold 
}
select{
    border-radius: 25px;
    padding: 4px;
    border: 2px solid #000000;
    width: 60%;
    text-align: center;
    background-color: #ffffff;
    cursor: pointer;
}
input[type="text"],
input[type="password"] {
    padding: 6px;
    border-radius: 8px;
    background-color: #ffffffff;
    border: 1px solid black;
    width: 40%;
    cursor: pointer;
  
}
button{
    border-radius: 8px;
    background-color: aqua;
    padding: 12px;
    border: none;
    font-weight: bold;
    cursor: pointer;;
    width: 40%;
}
button:hover{
    background-color: aquamarine;
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
