<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Dashboard - <?= $title ?></title>
</head>

<body>
  <h1>Welcome to the Dashboard</h1>

  <?php if (isset($isAdmin) && $isAdmin): ?>
    <!-- Konten untuk admin -->
    <h2>Admin Dashboard</h2>
    <p><?= $content ?></p>
    <!-- Contoh data untuk admin -->
    <ul>
      <li>User 1</li>
      <li>User 2</li>
      <li>User 3</li>
    </ul>

  <?php else: ?>
    <!-- Konten untuk user -->
    <h2>User Dashboard</h2>
    <p><?= $content ?></p>
    <!-- Contoh data untuk user -->
    <ul>
      <li>Item 1</li>
      <li>Item 2</li>
      <li>Item 3</li>
    </ul>

  <?php endif; ?>

</body>

</html>
