<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'inicio';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>FamilyHub</title>

  <style>
    body {
      display: flex;
      font-family: Arial;
      background: #f5f7fb;
    }

    /* SIDEBAR */
    .sidebar {
      width: 220px;
      height: 100vh;
      background: linear-gradient(180deg, #5a6cff, #7b5cff);
      padding: 20px;
      color: white;
    }

    .sidebar a {
      display: block;
      margin: 15px 0;
      color: white;
      text-decoration: none;
    }

    /* CONTEÚDO */
    .content {
      flex: 1;
      padding: 30px;
    }

    /* AGENDA */
    .agenda-box {
      background: #fff;
      padding: 20px;
      border-radius: 20px;
      margin-top: 20px;
    }

    .agenda-header {
      display: flex;
      justify-content: space-between;
      margin-bottom: 15px;
      color: #555;
    }

    .agenda-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin: 15px 0;
    }

    .agenda-item div {
      flex: 1;
      margin-left: 10px;
    }

    .dot {
      width: 10px;
      height: 10px;
      border-radius: 50%;
    }

    .blue {
      background: #5a6cff;
    }

    .green {
      background: #3ac47d;
    }

    .orange {
      background: #f7b84b;
    }
  </style>
</head>

<body>

  <div class="sidebar">
    <h2>🏠 FamilyHub</h2>

    <a href="?page=inicio">🏠 Início</a>
    <a href="?page=agenda">📅 Agenda</a>
    <a href="?page=compras">🛒 Compras</a>
  </div>

  <div class="content">

    <?php
    if ($page == 'inicio') {
      echo "<h1>Bem-vindo!</h1>";
    } elseif ($page == 'agenda') {
    ?>
      <h1>Agenda</h1>

      <div class="agenda-box">
        <div class="agenda-header">
          <span>Agenda de Hoje</span>
          <span>16 de Abril</span>
        </div>

        <div class="agenda-item">
          <div class="dot blue"></div>
          <div>
            <strong>Consulta médica</strong>
            <p>Mãe - Hospital São Lucas</p>
          </div>
          <span>10:00</span>
        </div>

        <div class="agenda-item">
          <div class="dot green"></div>
          <div>
            <strong>Treino de futebol</strong>
            <p>Kai - Quadra Municipal</p>
          </div>
          <span>16:30</span>
        </div>

        <div class="agenda-item">
          <div class="dot orange"></div>
          <div>
            <strong>Jantar em família</strong>
            <p>Todos - Em casa</p>
          </div>
          <span>19:00</span>
        </div>
      </div>

    <?php
    } elseif ($page == 'compras') {
      echo "<h1>Compras</h1><p>Lista de compras aqui...</p>";
    }
    ?>

  </div>

</body>

</html>