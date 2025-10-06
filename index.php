<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>QR Code Generator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="navbar">
      <div class="menu-icon">&#9776;</div>
      <div class="nav-links">
        <a href="#"><i>🏠</i> Home</a>
        <a href="#"><i>➕</i> Create</a>
        <a href="#"><i>🛠️</i> Tools</a>
        <a href="#"><i>❓</i> Help</a>
      </div>
      <button class="login-btn">Login</button>
    </div>
  </header>

  <main>
    <h2>Create and Customize your QR Code</h2>
    <div class="card-container">

      <div class="card">
        <h3>Enter Wi-Fi Details</h3>
        <form action="generate.php" method="POST">
          <label>Wi-Fi Name (SSID):</label>
          <input type="text" name="ssid" placeholder="Enter Wi-Fi name" required>

          <label>Password:</label>
          <input type="text" name="password" placeholder="Enter Wi-Fi password" required>

          <label>Active Time (minutes):</label>
          <input type="number" name="minutes" placeholder="e.g. 30" required>

          <button type="submit">Generate QR</button>
        </form>
      </div>

      <div class="card">
        <h3>Preview</h3>
        <div class="preview-box">
          <?php if (isset($_GET['file'])): ?>
            <img src="qr/<?php echo htmlspecialchars($_GET['file']); ?>" alt="Generated QR" class="qr-preview">
            <a href="qr/<?php echo htmlspecialchars($_GET['file']); ?>" download class="download-btn">⬇️ Download</a>
          <?php else: ?>
            <p>Your QR will appear here.</p>
          <?php endif; ?>
        </div>
      </div>

      <div class="card">
        <h3>Tips</h3>
        <p>✅ Use your phone camera to scan the QR code.<br>
           ✅ It connects directly to your Wi-Fi network.<br>
           ✅ You can print or share it easily.</p>
      </div>

    </div>
  </main>
</body>
</html>
