<!-- Kontaktformular -->
<section class="contact-section">
  <h1>Kontaktieren Sie mich</h1>
  <form action="send_contact.php" method="post" enctype="multipart/form-data">
    
    <!-- Eingabefeld für den Namen -->
    <div class="form-group">
      <label for="name">Ihr Name:</label>
      <input
        type="text"
        id="name"
        name="name"
        placeholder="Geben Sie Ihren Namen ein"
        required
      />
    </div>

    <!-- Eingabefeld für die Email-Adresse -->
    <div class="form-group">
      <label for="email">Ihre Email-Adresse:</label>
      <input
        type="email"
        id="email"
        name="email"
        placeholder="Geben Sie Ihre Email ein"
        required
      />
    </div>

    <!-- Eingabefeld für die Nachricht -->
    <div class="form-group">
      <label for="message">Ihre Nachricht:</label>
      <textarea
        id="message"
        name="message"
        rows="5"
        placeholder="Schreiben Sie Ihre Nachricht hier"
        required
      ></textarea>
    </div>

    <!-- Eingabefeld für Datei-Upload -->
    <div class="form-group">
      <label for="file">Datei hochladen:</label>
      <input name="file" type="file" id="file" />
    </div>

    <!-- Radio-Buttons für Geschlecht -->
    <div class="form-group-radio">
      <label for="male">Male</label>
      <input
        type="radio"
        name="gender"
        id="male"
        value="male"
        title="Falls Ihr Geschlecht männlich ist, wählen Sie diesen Knopf"
        required
      />

      <label for="female">Female</label>
      <input
        type="radio"
        name="gender"
        id="female"
        value="female"
        title="Falls Ihr Geschlecht weiblich ist, wählen Sie diesen Knopf"
        required
      />
    </div>

    <!-- Senden-Button -->
    <button type="submit" class="submit-btn">Nachricht senden</button>

    <!-- Zurücksetzen-Button -->
    <button type="reset" class="reset-btn">Zurücksetzen</button>
  </form>
</section>