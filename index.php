<?php include('shared/_header.php');?>

  <main>
    <div class="big-wrapper light">
      <img src="./images/shape.png" alt="" class="shape" />

     <?php include('shared/_navbar.php'); ?>
<!-- Section Hero -->
<div class="hero-section">
    <div class="container relative-container mt-5">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 text-content">
                <div class="hero-text-wrapper">
                    <span class="badge-modern">Institution Nationale</span>
                    <h1 class="hero-title">
                        Bienvenue à l'<span class="text-gradient">ENSSM</span>
                        <br>Beni Messous
                    </h1>
                    <p class="hero-description text">
                        Unique école en Algérie formant des enseignants spécialisés pour sourds et malentendants. 
                        Découvrez l'excellence éducative au service de l'inclusion à travers 15 disciplines spécialisées.
                    </p>
                    
                    <div class="hero-buttons">
                        <a href="about-us.php" class="btn btn-modern">Découvrir notre école</a>
                    </div>

                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">15</span>
                            <span class="stat-text">Disciplines</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">Unique</span>
                            <span class="stat-text">en Algérie</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">100%</span>
                            <span class="stat-text">Inclusif</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 image-box-modern">
                <div class="image-wrapper-modern">
                    <!-- Added a decorative blob behind the image -->
                    <div class="blob-bg"></div>
                    <img src="./images/children.png" alt="Étudiants ENSSM" class="hero-image" />
                    
                    <!-- Floating cards -->
                    <div class="floating-card c-1">
                        <i class="fas fa-graduation-cap text-primary"></i>
                        <div>
                            <strong>Formation</strong>
                            <span>D'excellence</span>
                        </div>
                    </div>
                    <div class="floating-card c-2">
                        <i class="fas fa-hands text-success"></i>
                        <div>
                            <strong>Langage</strong>
                            <span>Des Signes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Extra spacing before carousel -->
<div class="section-divider"></div>
      <div class="container mb-5 mt-3 carousel-box pb-4">
    <div id="eventCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#eventCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Event 1"></button>
            <button type="button" data-bs-target="#eventCarousel" data-bs-slide-to="1" aria-label="Event 2"></button>
            <button type="button" data-bs-target="#eventCarousel" data-bs-slide-to="2" aria-label="Event 3"></button>
        </div>

        <!-- Carousel inner -->
        <div class="carousel-inner">
            <!-- Event 1 - Graduation -->
            <div class="carousel-item active">
                <img src="images/carousel1.jpg" class="d-block w-100" alt="Graduation Ceremony">
                <div class="carousel-caption d-none d-md-block">
                    <div class="event-label bg-primary d-inline-block px-3 py-1 rounded-pill mb-2">
                        <i class="fas fa-calendar-alt me-2"></i>Événement à venir
                    </div>
                    <h3 class="text-white fw-bold">🎓 Cérémonie de remise des diplômes 2026</h3>
                    <p class="text-white fs-5 mb-2">
                        <i class="fas fa-map-marker-alt me-2"></i>Auditorium principal
                    </p>
                    <p class="text-white mb-3">
                        <i class="fas fa-clock me-2"></i>15 juillet 2026 - 10h00
                    </p>
                    <!-- Button triggers Modal 1 -->
                    <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#graduationModal">
                    Afficher les détails <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
            </div>

            <!-- Event 2 - Open House -->
            <div class="carousel-item">
                <img src="images/carousel2.jpg" class="d-block w-100" alt="Open House">
                <div class="carousel-caption d-none d-md-block">
                    <div class="event-label bg-success d-inline-block px-3 py-1 rounded-pill mb-2">
                        <i class="fas fa-door-open me-2"></i>Journée portes ouvertes
                    </div>
                    <h3 class="text-white fw-bold">🏫 Journée portes ouvertes</h3>
                    <p class="text-white fs-5 mb-2">
                        <i class="fas fa-map-marker-alt me-2"></i>Campus entier
                    </p>
                    <p class="text-white mb-3">
                        <i class="fas fa-clock me-2"></i>20 août 2026 - De 9h00 à 17h00
                    </p>
                    <!-- Button triggers Modal 2 -->
                    <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#openhouseModal">
                    Afficher les détails <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
            </div>

            <!-- Event 3 - Sign Language Workshop -->
            <div class="carousel-item">
                <img src="images/carousel3.jpg" class="d-block w-100" alt="Workshop">
                <div class="carousel-caption d-none d-md-block">
                    <div class="event-label bg-info d-inline-block px-3 py-1 rounded-pill mb-2">
                        <i class="fas fa-chalkboard-teacher me-2"></i>Atelier
                    </div>
                    <h3 class="text-white fw-bold">🤟 Atelier avancé de langue des signes</h3>
                    <p class="text-white fs-5 mb-2">
                        <i class="fas fa-map-marker-alt me-2"></i>Salle 201, bâtiment principal
                    </p>
                    <p class="text-white mb-3">
                        <i class="fas fa-clock me-2"></i>5-7 septembre 2026
                    </p>
                    <!-- Button triggers Modal 3 -->
                    <button type="button" class="btn btn-info btn-lg text-white" data-bs-toggle="modal" data-bs-target="#workshopModal">
                    Afficher les détails <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#eventCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#eventCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- ============ MODALS ============ -->

<!-- Modal 1: Graduation Ceremony -->
<div class="modal fade" id="graduationModal" tabindex="-1" aria-labelledby="graduationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="graduationModalLabel">
                    <i class="fas fa-graduation-cap me-2"></i>Cérémonie de remise des diplômes 2026
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/carousel1.jpg" class="img-fluid rounded shadow" alt="Graduation" onerror="this.src='images/attention.jpg'">
                    </div>
                    <div class="col-md-6">
                        <div class="event-details">
                            <div class="detail-item mb-3">
                                <i class="fas fa-calendar-alt text-primary me-2"></i>
                                <strong>Date:</strong>15 juillet 2026
                            </div>
                            <div class="detail-item mb-3">
                                <i class="fas fa-clock text-primary me-2"></i>
                                <strong>Temp:</strong> 10h00 - 14h00
                            </div>
                            <div class="detail-item mb-3">
                                <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                <strong>Location:</strong> Auditorium principal
                            </div>
                            <hr>
                            <h6 class="fw-bold">Calendrier des événements:</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="far fa-clock text-primary me-2"></i>10:00 - Cérémonie d'ouverture</li>
                                <li class="mb-2"><i class="far fa-clock text-primary me-2"></i>11:00 - Distribution des diplômes</li>
                                <li class="mb-2"><i class="far fa-clock text-primary me-2"></i>12:30 - Discours du major de promotion</li>
                                <li class="mb-2"><i class="far fa-clock text-primary me-2"></i>13:00 - Réception & Photos</li>
                            </ul>
                            <hr>
                            <p class="text-muted">
                                <i class="fas fa-info-circle me-2"></i>
                                informations supplémentaires: Tenue de cérémonie requise, invités bienvenus, stationnement disponible sur place.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2: Open House -->
<div class="modal fade" id="openhouseModal" tabindex="-1" aria-labelledby="openhouseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="openhouseModalLabel">
                    <i class="fas fa-door-open me-2"></i>Journée portes ouvertes 2026
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/carousel2.jpg" class="img-fluid rounded shadow" alt="Open House" onerror="this.src='images/attention.jpg'">
                    </div>
                    <div class="col-md-6">
                        <div class="event-details">
                            <div class="detail-item mb-3">
                                <i class="fas fa-calendar-alt text-success me-2"></i>
                                <strong>Date:</strong> 20 août 2026
                            </div>
                            <div class="detail-item mb-3">
                                <i class="fas fa-clock text-success me-2"></i>
                                <strong>Temp:</strong> 9h00 - 17h00
                            </div>
                            <div class="detail-item mb-3">
                                <i class="fas fa-map-marker-alt text-success me-2"></i>
                                <strong>Location:</strong> Campus entier
                            </div>
                            <hr>
                            <h6 class="fw-bold">What to expect:</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Visites du campus</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Rencontrez les professeurs</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Démonstrations en classe</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Conseils d'admission</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Activités étudiantes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3: Workshop -->
<div class="modal fade" id="workshopModal" tabindex="-1" aria-labelledby="workshopModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="workshopModalLabel">
                    <i class="fas fa-hands me-2"></i>Atelier avancé de langue des signes
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/carousel3.jpg" class="img-fluid rounded shadow" alt="Workshop" onerror="this.src='images/attention.jpg'">
                    </div>
                    <div class="col-md-6">
                        <div class="event-details">
                            <div class="detail-item mb-3">
                                <i class="fas fa-calendar-alt text-info me-2"></i>
                                <strong>Dates:</strong> 5-7 septembre 2026
                            </div>
                            <div class="detail-item mb-3">
                                <i class="fas fa-clock text-info me-2"></i>
                                <strong>Temp:</strong> 9h00 - 16h00 tous les jours
                            </div>
                            <div class="detail-item mb-3">
                                <i class="fas fa-map-marker-alt text-info me-2"></i>
                                <strong>Location:</strong> Salle 4, bâtiment principal
                            </div>
                            <hr>
                            <h6 class="fw-bold">Thèmes des ateliers:</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-hand-peace text-info me-2"></i>Vocabulaire avancé</li>
                                <li class="mb-2"><i class="fas fa-hand-peace text-info me-2"></i>Expressions faciales et langage corporel</li>
                                <li class="mb-2"><i class="fas fa-hand-peace text-info me-2"></i>Récits en langue des signes</li>
                                <li class="mb-2"><i class="fas fa-hand-peace text-info me-2"></i>Méthodologies d'enseignement</li>
                            </ul>
                            <p class="text-muted mt-2">
                                <i class="fas fa-users me-2"></i>
                                Places limitées : 25 participants
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
    </div>

<!-- ============================================================
     APPOINTMENT BOOKING SECTION
     ============================================================ -->
<section class="appointment-section" id="appointment-section">
  <div class="container">

    <!-- Section Header -->
    <div class="appt-header">
      <span class="badge-modern">Prise de Rendez-vous</span>
      <h2 class="appt-title">
        Rencontrez le Directeur
      </h2>
      <p class="appt-subtitle">
        Remplissez ce formulaire pour soumettre votre demande de rendez-vous.
        Nous vous contacterons dans les plus brefs délais pour confirmer la date.
      </p>
    </div>

    <!-- Two-column layout: illustration + form -->
    <div class="appt-grid">

      <!-- Left : info panel -->
      <div class="appt-info-panel">
        <div class="appt-info-card">
          <div class="appt-info-icon">
            <i class="fas fa-calendar-check"></i>
          </div>
          <h3>Comment ça fonctionne ?</h3>
          <ul class="appt-steps">
            <li>
              <span class="step-number">1</span>
              <div>
                <strong>Remplissez le formulaire</strong>
                <p>Indiquez vos coordonnées et le motif de votre demande.</p>
              </div>
            </li>
            <li>
              <span class="step-number">2</span>
              <div>
                <strong>Traitement de la demande</strong>
                <p>Le directeur examine votre requête et confirme la disponibilité.</p>
              </div>
            </li>
            <li>
              <span class="step-number">3</span>
              <div>
                <strong>Confirmation</strong>
                <p>Vous serez contacté par téléphone ou par e-mail pour finaliser le rendez-vous.</p>
              </div>
            </li>
          </ul>
          <div class="appt-contact-info">
            <div class="contact-item">
              <i class="fas fa-map-marker-alt"></i>
              <span>ENSSM — Beni Messous, Alger</span>
            </div>
            <div class="contact-item">
              <i class="fas fa-clock"></i>
              <span>Lun – Jeu : 08h00 – 16h00</span>
            </div>
            <div class="contact-item">
              <i class="fas fa-envelope"></i>
              <span>direction@enssm.dz</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Right : form -->
      <div class="appt-form-panel">
        <div class="appt-form-card">
          <h3 class="appt-form-title">
            <i class="fas fa-pen-to-square me-2"></i>Demande de Rendez-vous
          </h3>
          <form id="appointmentForm" novalidate>
            <div class="appt-form-row">
              <div class="appt-field">
                <label for="appt_name">Nom complet <span class="required">*</span></label>
                <div class="input-wrapper">
                  <i class="fas fa-user"></i>
                  <input type="text" id="appt_name" name="appt_name" placeholder="Ex: Ahmed Benali" required>
                </div>
              </div>
              <div class="appt-field">
                <label for="appt_email">Adresse e-mail <span class="required">*</span></label>
                <div class="input-wrapper">
                  <i class="fas fa-envelope"></i>
                  <input type="email" id="appt_email" name="appt_email" placeholder="exemple@gmail.com" required>
                </div>
              </div>
            </div>

            <div class="appt-form-row">
              <div class="appt-field">
                <label for="appt_phone">Téléphone <span class="required">*</span></label>
                <div class="input-wrapper">
                  <i class="fas fa-phone"></i>
                  <input type="tel" id="appt_phone" name="appt_phone" placeholder="+213 5XX XXX XXX" required>
                </div>
              </div>
              <div class="appt-field">
                <label for="appt_date">Date souhaitée <span class="required">*</span></label>
                <div class="input-wrapper">
                  <i class="fas fa-calendar-alt"></i>
                  <input type="date" id="appt_date" name="appt_date" required>
                </div>
              </div>
            </div>

            <div class="appt-field full-width">
              <label for="appt_reason">Motif du rendez-vous <span class="required">*</span></label>
              <div class="input-wrapper">
                <i class="fas fa-tag"></i>
                <select id="appt_reason" name="appt_reason" required>
                  <option value="" disabled selected>— Sélectionner un motif —</option>
                  <option value="Inscription">Inscription / Candidature</option>
                  <option value="Admission">Renseignement sur l'admission</option>
                  <option value="Suivi pédagogique">Suivi pédagogique</option>
                  <option value="Questions administratives">Questions administratives</option>
                  <option value="Partenariat">Partenariat / Collaboration</option>
                  <option value="Autre">Autre</option>
                </select>
              </div>
            </div>

            <div class="appt-field full-width">
              <label for="appt_message">Message complémentaire <span class="optional">(optionnel)</span></label>
              <div class="input-wrapper textarea-wrapper">
                <i class="fas fa-comment"></i>
                <textarea id="appt_message" name="appt_message" rows="4" placeholder="Ajoutez des informations supplémentaires que vous souhaitez partager avec le directeur…"></textarea>
              </div>
            </div>

            <div class="appt-privacy">
              <i class="fas fa-shield-halved text-primary"></i>
              Vos informations sont traitées de manière confidentielle et ne seront jamais partagées.
            </div>

            <button type="submit" class="appt-submit-btn" id="apptSubmitBtn">
              <span id="apptBtnText"><i class="fas fa-paper-plane me-2"></i>Envoyer ma demande</span>
              <span id="apptBtnLoader" style="display:none;"><i class="fas fa-spinner fa-spin me-2"></i>Envoi en cours…</span>
            </button>
          </form>
        </div>
      </div>
    </div><!-- end appt-grid -->

  </div><!-- end container -->
</section>

<!-- ============================================================
     APPOINTMENT SUBMISSION RESULT TOASTS
     ============================================================ -->
<div id="apptToastContainer" style="position:fixed;bottom:2rem;right:2rem;z-index:9999;display:flex;flex-direction:column;gap:0.75rem;"></div>

  </div>


  </main>

<!-- ── Appointment form AJAX ── -->
<script>
(function () {
  // Set minimum date to today
  const dateInput = document.getElementById('appt_date');
  if (dateInput) {
    const today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute('min', today);
  }

  const form       = document.getElementById('appointmentForm');
  const btnText    = document.getElementById('apptBtnText');
  const btnLoader  = document.getElementById('apptBtnLoader');
  const submitBtn  = document.getElementById('apptSubmitBtn');

  if (!form) return;

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    // Basic client-side validation
    const required = ['appt_name', 'appt_email', 'appt_phone', 'appt_date', 'appt_reason'];
    let valid = true;
    required.forEach(id => {
      const el = document.getElementById(id);
      if (!el.value.trim()) {
        el.classList.add('input-error');
        valid = false;
      } else {
        el.classList.remove('input-error');
      }
    });
    if (!valid) {
      showApptToast('Veuillez remplir tous les champs obligatoires.', 'error');
      return;
    }

    // Show loader
    btnText.style.display   = 'none';
    btnLoader.style.display = 'inline';
    submitBtn.disabled      = true;

    const formData = new FormData(form);

    fetch('appointment-handler.php', {
      method: 'POST',
      body:   formData
    })
    .then(r => r.json())
    .then(data => {
      if (data.success) {
        showApptToast(data.message, 'success');
        form.reset();
        // Smooth scroll to top of section
        document.getElementById('appointment-section').scrollIntoView({ behavior: 'smooth' });
      } else {
        showApptToast(data.message, 'error');
      }
    })
    .catch(() => {
      showApptToast('Erreur réseau. Veuillez réessayer.', 'error');
    })
    .finally(() => {
      btnText.style.display   = 'inline';
      btnLoader.style.display = 'none';
      submitBtn.disabled      = false;
    });
  });

  // Remove error class on input
  ['appt_name','appt_email','appt_phone','appt_date','appt_reason'].forEach(id => {
    const el = document.getElementById(id);
    if (el) el.addEventListener('input', () => el.classList.remove('input-error'));
  });

  function showApptToast(msg, type) {
    const container = document.getElementById('apptToastContainer');
    const toast = document.createElement('div');
    toast.className = 'appt-toast appt-toast-' + type;
    toast.innerHTML = `
      <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'}"></i>
      <span>${msg}</span>
      <button onclick="this.parentElement.remove()" class="appt-toast-close">&times;</button>
    `;
    container.appendChild(toast);
    setTimeout(() => { if (toast.parentElement) toast.remove(); }, 6000);
  }
})();
</script>


  <?php include('shared/_footer.php'); ?>
