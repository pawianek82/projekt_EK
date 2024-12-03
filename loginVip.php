<!-- VIP Login-Bereich -->
<section class="login-vip-section">
  <h1>Login VIP</h1> <!-- Überschrift für den VIP Login -->

  <!-- Formular für Benutzername und Passwort -->
  <form>
    <div class="form-group">
      <label for="username">Benutzername:</label> <!-- Eingabefeld für Benutzername -->
      <input 
        type="text" 
        class="form-control" 
        id="username" 
        placeholder="Enter username" 
        required 
      />
    </div>

    <div class="form-group">
      <label for="password">Passwort:</label> <!-- Eingabefeld für Passwort -->
      <input 
        type="password" 
        class="form-control" 
        id="password" 
        placeholder="Enter password" 
        required 
      />
    </div>

    <!-- Button zum Einloggen -->
    <button type="submit" class="btn btn-primary">Einloggen</button>
  </form>
</section>