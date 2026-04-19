<?php include('shared/_header.php'); ?>

<body>
<main>
<div class="big-wrapper light">
<img src="./images/shape.png" alt="" class="shape" />
<?php include('shared/_navbar.php'); ?>

<style>
/* ===== CDE PAGE — ACCENT: EMERALD ===== */
:root { --cde: #10b981; --cde2: #059669; --cde-rgb: 16,185,129; }

.cde-hero {
  padding: 160px 0 100px;
  position: relative;
  overflow: hidden;
}
.cde-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(16,185,129,0.1) 0%, rgba(5,150,105,0.06) 50%, transparent 100%);
}
.cde-hero .container { position: relative; z-index: 2; }
.eyebrow-cde {
  display: inline-flex; align-items: center; gap: 8px;
  background: rgba(16,185,129,0.1);
  border: 1px solid rgba(16,185,129,0.25);
  color: var(--cde);
  padding: 6px 16px; border-radius: 50px;
  font-size: 0.8rem; font-weight: 600;
  text-transform: uppercase; letter-spacing: 1.5px;
  margin-bottom: 1.5rem;
}
.cde-hero h1 {
  font-size: clamp(2.5rem, 5vw, 3.8rem);
  font-weight: 900; line-height: 1.1;
  letter-spacing: -2px; color: var(--darkOne);
  margin-bottom: 1.5rem;
}
.cde-hero h1 .hl {
  background: linear-gradient(135deg, #10b981, #059669);
  -webkit-background-clip: text; background-clip: text;
  -webkit-text-fill-color: transparent;
}
.cde-hero p.lead-cde {
  font-size: 1.1rem; color: var(--lightOne); line-height: 1.8;
  max-width: 520px; margin-bottom: 2.5rem;
}
.btn-cde {
  display: inline-flex; align-items: center; gap: 10px;
  padding: 14px 30px;
  background: linear-gradient(135deg, #10b981, #059669);
  color: #fff !important; border-radius: 50px;
  font-weight: 600; font-size: 0.95rem;
  text-decoration: none; transition: all 0.3s ease;
  box-shadow: 0 10px 30px rgba(16,185,129,0.3); border: none;
}
.btn-cde:hover { transform: translateY(-3px); box-shadow: 0 15px 40px rgba(16,185,129,0.45); }
.btn-cde-ghost {
  display: inline-flex; align-items: center; gap: 10px;
  padding: 13px 28px;
  background: transparent; color: var(--darkTwo) !important;
  border: 2px solid rgba(16,185,129,0.3); border-radius: 50px;
  font-weight: 600; text-decoration: none; transition: all 0.3s ease;
  font-size: 0.95rem;
}
.btn-cde-ghost:hover { border-color: #10b981; color: #10b981 !important; }

.cde-hero-img {
  position: relative; display: flex; align-items: center; justify-content: center;
}
.cde-hero-img::before {
  content: '';
  position: absolute; width: 380px; height: 380px;
  border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
  background: linear-gradient(135deg, rgba(16,185,129,0.18), rgba(5,150,105,0.12));
  animation: morphCde 8s ease-in-out infinite alternate;
  filter: blur(30px); z-index: 0;
}
@keyframes morphCde { 0% { border-radius:60%40%30%70%/60%30%70%40%; } 100% { border-radius:30%70%; } }
.cde-hero-img img {
  position: relative; z-index: 1; width: 100%; max-width: 420px;
  border-radius: 30px; box-shadow: 0 30px 60px rgba(16,185,129,0.2);
  animation: floatCde 6s ease-in-out infinite;
}
@keyframes floatCde { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-18px); } }

/* SECTION HEAD */
.section-head-cde { text-align: center; margin-bottom: 4rem; }
.section-head-cde .ol {
  font-size: 0.75rem; font-weight: 700; text-transform: uppercase;
  letter-spacing: 2.5px; color: var(--cde);
  margin-bottom: 0.75rem; display: block;
}
.section-head-cde h2 {
  font-size: clamp(2rem, 4vw, 2.8rem); font-weight: 800;
  color: var(--darkOne); letter-spacing: -1px; margin-bottom: 1rem;
}
.section-head-cde p {
  color: var(--lightOne); max-width: 560px;
  margin: 0 auto; font-size: 1.05rem; line-height: 1.7;
}

/* FEATURE GRID */
.features-section { padding: 100px 0; }
.feature-card {
  border-radius: 24px;
  background: var(--backgroundColor);
  padding: 36px 28px;
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 4px 24px rgba(0,0,0,0.06);
  transition: all 0.4s ease; height: 100%;
}
.dark .feature-card { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.feature-card:hover { transform: translateY(-8px); box-shadow: 0 20px 50px rgba(16,185,129,0.15); border-color: rgba(16,185,129,0.2); }
.feature-icon-box {
  width: 64px; height: 64px; border-radius: 18px;
  display: flex; align-items: center; justify-content: center;
  font-size: 1.6rem; margin-bottom: 1.5rem;
}
.feature-card h3 {
  font-size: 1.25rem; font-weight: 700; color: var(--darkOne); margin-bottom: 0.75rem;
}
.feature-card p { color: var(--lightOne); line-height: 1.7; margin-bottom: 1.25rem; }
.check-list { list-style: none; padding: 0; margin: 0; }
.check-list li {
  display: flex; align-items: flex-start; gap: 10px;
  color: var(--lightOne); font-size: 0.9rem; margin-bottom: 8px;
}
.check-list li i { color: var(--cde); margin-top: 3px; font-size: 0.8rem; }

/* SUCCESS STORIES */
.success-section { padding: 100px 0; background: rgba(16,185,129,0.03); }
.dark .success-section { background: rgba(255,255,255,0.02); }
.story-card-new {
  border-radius: 24px;
  background: var(--backgroundColor);
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 4px 20px rgba(0,0,0,0.06);
  overflow: hidden;
  transition: all 0.3s ease;
  height: 100%;
}
.dark .story-card-new { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.story-card-new:hover { transform: translateY(-8px); box-shadow: 0 20px 50px rgba(16,185,129,0.15); }
.story-card-top {
  padding: 28px 28px 20px;
  background: linear-gradient(135deg, rgba(16,185,129,0.08), rgba(5,150,105,0.04));
  border-bottom: 1px solid rgba(16,185,129,0.1);
  display: flex; align-items: center; gap: 18px;
}
.story-avatar {
  width: 70px; height: 70px; border-radius: 50%;
  object-fit: cover;
  border: 3px solid rgba(16,185,129,0.3);
}
.story-meta h4 { font-size: 1.1rem; font-weight: 700; color: var(--darkOne); margin-bottom: 2px; }
.story-meta span { font-size: 0.82rem; color: var(--cde); font-weight: 600; }
.story-card-body { padding: 24px 28px; }
.story-card-body p { color: var(--lightOne); line-height: 1.7; margin-bottom: 1rem; }
.story-badge { display: flex; gap: 8px; flex-wrap: wrap; }
.story-badge .sb {
  padding: 4px 14px; border-radius: 20px;
  font-size: 0.78rem; font-weight: 600;
}
.sb-blue { background: rgba(0,123,255,0.1); color: #007bff; }
.sb-green { background: rgba(16,185,129,0.1); color: var(--cde); }

/* EVENTS */
.events-section { padding: 100px 0; }
.event-card-new {
  border-radius: 20px;
  background: var(--backgroundColor);
  padding: 24px;
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 4px 20px rgba(0,0,0,0.05);
  display: flex; align-items: center; gap: 20px;
  transition: all 0.3s ease;
}
.dark .event-card-new { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.event-card-new:hover { transform: translateY(-4px); box-shadow: 0 15px 40px rgba(16,185,129,0.15); border-color: rgba(16,185,129,0.2); }
.event-date-box {
  min-width: 72px; text-align: center;
  background: linear-gradient(135deg, #10b981, #059669);
  border-radius: 16px; padding: 12px 8px; color: #fff;
}
.event-date-box .day { display: block; font-size: 2rem; font-weight: 900; line-height: 1; }
.event-date-box .month { font-size: 0.75rem; font-weight: 600; text-transform: uppercase; opacity: 0.9; }
.event-info { flex: 1; }
.event-info h5 { font-size: 1rem; font-weight: 700; color: var(--darkOne); margin-bottom: 4px; }
.event-info p { font-size: 0.85rem; color: var(--lightOne); margin: 0; }

/* MENTORS */
.mentors-section { padding: 100px 0; background: rgba(16,185,129,0.03); }
.dark .mentors-section { background: rgba(255,255,255,0.02); }
.mentor-card-new {
  border-radius: 24px; background: var(--backgroundColor);
  padding: 32px 20px; text-align: center;
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 4px 20px rgba(0,0,0,0.06);
  transition: all 0.3s ease; height: 100%;
}
.dark .mentor-card-new { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.mentor-card-new:hover { transform: translateY(-8px); box-shadow: 0 15px 40px rgba(16,185,129,0.2); }
.mentor-avatar {
  width: 90px; height: 90px; border-radius: 50%;
  object-fit: cover; margin: 0 auto 1rem;
  border: 4px solid rgba(16,185,129,0.2); display: block;
  transition: border-color 0.3s;
}
.mentor-card-new:hover .mentor-avatar { border-color: var(--cde); }
.mentor-card-new h5 { font-size: 1rem; font-weight: 700; color: var(--darkOne); margin-bottom: 4px; }
.mentor-card-new .role-m { font-size: 0.82rem; color: var(--lightOne); margin-bottom: 1rem; }
.mentor-social a {
  width: 32px; height: 32px; background: rgba(16,185,129,0.1);
  border-radius: 8px; display: inline-flex; align-items: center;
  justify-content: center; color: var(--cde); transition: all 0.3s;
}
.mentor-social a:hover { background: var(--cde); color: #fff; transform: translateY(-3px); }

/* CTA BANNER */
.cta-banner {
  padding: 100px 0;
  background: linear-gradient(135deg, #10b981 0%, #059669 100%);
  position: relative; overflow: hidden;
}
.cta-banner::before {
  content: '';
  position: absolute; top: -50%; right: -10%;
  width: 500px; height: 500px; border-radius: 50%;
  background: rgba(255,255,255,0.05);
}
.cta-banner h2 { font-size: clamp(2rem,4vw,3rem); font-weight: 800; color: #fff; margin-bottom: 1rem; }
.cta-banner p { color: rgba(255,255,255,0.85); font-size: 1.1rem; margin-bottom: 2rem; }
.btn-cta-white {
  display: inline-flex; align-items: center; gap: 10px;
  padding: 16px 36px; background: #fff; color: #059669 !important;
  border-radius: 50px; font-weight: 700; text-decoration: none;
  transition: all 0.3s ease; font-size: 1rem;
  box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}
.btn-cta-white:hover { transform: translateY(-3px); box-shadow: 0 15px 40px rgba(0,0,0,0.3); }

/* CONTACT */
.cde-contact { padding: 100px 0; }
.cde-contact-card {
  background: var(--backgroundColor); border-radius: 32px;
  padding: 60px 50px; box-shadow: 0 20px 60px rgba(0,0,0,0.08);
  border: 1px solid rgba(16,185,129,0.1);
}
.dark .cde-contact-card { background: rgba(255,255,255,0.03); }
.cde-contact-item {
  display: flex; align-items: center; gap: 20px;
  padding: 20px 24px; border-radius: 18px;
  background: rgba(16,185,129,0.05);
  border: 1px solid rgba(16,185,129,0.1);
  transition: all 0.3s ease; text-decoration: none;
}
.cde-contact-item:hover {
  background: rgba(16,185,129,0.1);
  transform: translateY(-4px);
  box-shadow: 0 10px 30px rgba(16,185,129,0.15);
}
.cde-contact-icon {
  width: 52px; height: 52px;
  background: linear-gradient(135deg, #10b981, #059669);
  border-radius: 14px; display: flex; align-items: center;
  justify-content: center; color: #fff; font-size: 1.2rem; flex-shrink: 0;
}
.cde-contact-text .lbl { font-size: 0.8rem; color: var(--lightOne); font-weight: 500; margin-bottom: 2px; text-transform: uppercase; letter-spacing: 1px; }
.cde-contact-text .val { font-size: 0.95rem; font-weight: 600; color: var(--darkOne); }
</style>

<!-- HERO -->
<section class="cde-hero">
  <div class="container" >
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <div class="eyebrow-cde"><i class="fas fa-rocket"></i> Entrepreneuriat</div>
        <h1>Centre de <span class="hl">Développement</span><br>de l'Entrepreneuriat</h1>
        <p class="lead-cde">
          Autonomiser les entrepreneurs sourds et malentendants pour créer des entreprises innovantes
          et contribuer à une économie inclusive.
        </p>
        <div class="d-flex gap-3 flex-wrap">
          <a href="https://www.cde.dz/registration/1" target="_blank" class="btn-cde-ghost"><i class="fas fa-external-link-alt"></i> Postuler</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="cde-hero-img">
          <img src="images/cde.jpg" alt="Centre CDE">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PROGRAMMES -->
<section id="cde-programs" class="features-section">
  <div class="container">
    <div class="section-head-cde">
      <span class="ol">Ce Que Nous Offrons</span>
      <h2>Nos Programmes</h2>
      <p>Des formations complètes pour accompagner chaque entrepreneur à chaque étape de son parcours.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="feature-card">
          <div class="feature-icon-box" style="background:rgba(16,185,129,0.1);"><i class="fas fa-egg" style="color:#10b981;"></i></div>
          <h3>Fondements de l'Entrepreneuriat</h3>
          <p>Bases essentielles pour se lancer dans l'entrepreneuriat avec succès.</p>
          <ul class="check-list">
            <li><i class="fas fa-check-circle"></i>Le concept d'entrepreneuriat</li>
            <li><i class="fas fa-check-circle"></i>Étapes pour commencer</li>
            <li><i class="fas fa-check-circle"></i>Développement du modèle économique</li>
            <li><i class="fas fa-check-circle"></i>Administration des affaires</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="feature-card">
          <div class="feature-icon-box" style="background:rgba(59,130,246,0.1);"><i class="fas fa-rocket" style="color:#3b82f6;"></i></div>
          <h3>Planification Stratégique</h3>
          <p>Processus de planification pour atteindre vos objectifs organisationnels.</p>
          <ul class="check-list">
            <li><i class="fas fa-check-circle"></i>Analyse environnementale</li>
            <li><i class="fas fa-check-circle"></i>Fixation d'objectifs SMART</li>
            <li><i class="fas fa-check-circle"></i>Élaboration de stratégies</li>
            <li><i class="fas fa-check-circle"></i>Mesure du rendement</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="feature-card">
          <div class="feature-icon-box" style="background:rgba(245,158,11,0.1);"><i class="fas fa-cogs" style="color:#f59e0b;"></i></div>
          <h3>Gestion Opérationnelle</h3>
          <p>Gérez efficacement les opérations et optimisez vos ressources.</p>
          <ul class="check-list">
            <li><i class="fas fa-check-circle"></i>Planification des opérations</li>
            <li><i class="fas fa-check-circle"></i>Organisation d'équipe</li>
            <li><i class="fas fa-check-circle"></i>Gestion des ressources</li>
            <li><i class="fas fa-check-circle"></i>Amélioration des processus</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="feature-card">
          <div class="feature-icon-box" style="background:rgba(239,68,68,0.1);"><i class="fas fa-gavel" style="color:#ef4444;"></i></div>
          <h3>Aspects Juridiques</h3>
          <p>Cadre légal essentiel pour créer et sécuriser votre institution.</p>
          <ul class="check-list">
            <li><i class="fas fa-check-circle"></i>Choisir une structure juridique</li>
            <li><i class="fas fa-check-circle"></i>Documents requis</li>
            <li><i class="fas fa-check-circle"></i>Enregistrement officiel</li>
            <li><i class="fas fa-check-circle"></i>Conformité légale</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="feature-card">
          <div class="feature-icon-box" style="background:rgba(16,185,129,0.1);"><i class="fas fa-chart-line" style="color:#10b981;"></i></div>
          <h3>Stratégies de Croissance</h3>
          <p>Croissance durable grâce à l'innovation et à la valeur ajoutée.</p>
          <ul class="check-list">
            <li><i class="fas fa-check-circle"></i>Stratégies de scaling</li>
            <li><i class="fas fa-check-circle"></i>Innovation produit</li>
            <li><i class="fas fa-check-circle"></i>Innovation marketing</li>
            <li><i class="fas fa-check-circle"></i>Création de valeur</li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="feature-card">
          <div class="feature-icon-box" style="background:rgba(139,92,246,0.1);"><i class="fas fa-users" style="color:#8b5cf6;"></i></div>
          <h3>Réseautage & Mentorat</h3>
          <p>Connectez-vous avec des experts et d'autres entrepreneurs de notre réseau.</p>
          <ul class="check-list">
            <li><i class="fas fa-check-circle"></i>Accès au réseau CDE</li>
            <li><i class="fas fa-check-circle"></i>Sessions de mentorat</li>
            <li><i class="fas fa-check-circle"></i>Événements de networking</li>
            <li><i class="fas fa-check-circle"></i>Partenariats stratégiques</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SUCCESS STORIES -->
<section class="success-section">
  <div class="container">
    <div class="section-head-cde">
      <span class="ol">Parcours Inspirants</span>
      <h2>Histoires de Réussite</h2>
      <p>Des entrepreneurs sourds qui ont transformé leurs idées en entreprises flourissantes.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="story-card-new">
          <div class="story-card-top">
            <img src="images/user.png" class="story-avatar" alt="SignConnect">
            <div class="story-meta">
              <h4>SignConnect</h4>
              <span>Fondatrice: Fatima Zahra</span>
            </div>
          </div>
          <div class="story-card-body">
            <p>Plateforme qui connecte les interprètes en langue des signes avec les clients — une révolution pour l'accessibilité.</p>
            <div class="story-badge">
              <span class="sb sb-blue">4+ Interprètes</span>
              <span class="sb sb-green">200+ Clients</span>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="story-card-new">
          <div class="story-card-top">
            <img src="images/user.png" class="story-avatar" alt="DeafEdu">
            <div class="story-meta">
              <h4>DeafEdu</h4>
              <span>Fondateur: Ahmed Benali</span>
            </div>
          </div>
          <div class="story-card-body">
            <p>Jeux éducatifs innovants pour enfants sourds, rendant l'apprentissage ludique et accessible dès le jeune âge.</p>
            <div class="story-badge">
              <span class="sb sb-blue">2 Écoles partenaires</span>
              <span class="sb sb-green">100+ Utilisateurs</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- EVENTS -->
<section id="cde-evenment" class="events-section">
  <div class="container">
    <div class="section-head-cde">
      <span class="ol">Agenda</span>
      <h2>Événements à Venir</h2>
      <p>Ne manquez pas nos prochaines sessions de formation et de networking.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="event-card-new">
          <div class="event-date-box">
            <span class="day">24</span>
            <span class="month">FÉV</span>
          </div>
          <div class="event-info">
            <h5>Cours de Formation</h5>
            <p><i class="far fa-clock me-1"></i>9h00 – 12h00 &nbsp;|&nbsp; <i class="fas fa-map-marker-alt me-1"></i>Salle 5</p>
          </div>
          <a href="https://www.facebook.com/CDE.ENSSM?locale=fr_FR" target="_blank" class="btn-cde" style="white-space:nowrap; padding:10px 18px; font-size:0.82rem;">Voir <i class="fas fa-arrow-right ms-1"></i></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="event-card-new">
          <div class="event-date-box">
            <span class="day">1</span>
            <span class="month">MARS</span>
          </div>
          <div class="event-info">
            <h5>Cours de Formation</h5>
            <p><i class="far fa-clock me-1"></i>9h00 – 12h00 &nbsp;|&nbsp; <i class="fas fa-map-marker-alt me-1"></i>Salle 5</p>
          </div>
          <a href="https://www.facebook.com/CDE.ENSSM?locale=fr_FR" target="_blank" class="btn-cde" style="white-space:nowrap; padding:10px 18px; font-size:0.82rem;">Voir <i class="fas fa-arrow-right ms-1"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MENTORS -->
<section class="mentors-section">
  <div class="container">
    <div class="section-head-cde">
      <span class="ol">Nos Experts</span>
      <h2>Nos Mentors</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-3 col-6">
        <div class="mentor-card-new">
          <img src="images/user.png" class="mentor-avatar" alt="Berezouan Hasiba">
          <h5>Pr. Berezouan Hasiba</h5>
          <p class="role-m">Directrice</p>
          <div class="mentor-social"><a href="#"><i class="fab fa-linkedin-in"></i></a></div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="mentor-card-new">
          <img src="images/user.png" class="mentor-avatar" alt="Mentor Marketing">
          <h5>Dr. Expert</h5>
          <p class="role-m">Expert en Marketing</p>
          <div class="mentor-social"><a href="#"><i class="fab fa-linkedin-in"></i></a></div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="mentor-card-new">
          <img src="images/user.png" class="mentor-avatar" alt="Investisseur">
          <h5>Dr. Expert</h5>
          <p class="role-m">Investisseur</p>
          <div class="mentor-social"><a href="#"><i class="fab fa-linkedin-in"></i></a></div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="mentor-card-new">
          <img src="images/user.png" class="mentor-avatar" alt="Finance">
          <h5>Dr. Expert</h5>
          <p class="role-m">Consultante en Finance</p>
          <div class="mentor-social"><a href="#"><i class="fab fa-linkedin-in"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<section id="cde-inscription" class="cta-banner" style="background: url('images/cde3.jpg') center/cover fixed no-repeat;">
  <div class="container text-center position-relative" style="z-index:2;">
    <h2 style="color: #10b981;">Prêt à Commencer Votre Aventure ?</h2>
    <p style="color: #10b981;">Rejoignez notre programme d'entrepreneuriat et transformez votre idée en réalité</p>
    <a href="https://www.cde.dz/registration/1" target="_blank" class="btn-cta-white">
      <i class="fas fa-rocket"></i> Postuler à CDE
    </a>
  </div>
</section>

<!-- CONTACT -->
<section class="cde-contact">
  <div class="container">
    <div class="section-head-cde">
      <span class="ol">Parlons</span>
      <h2>Contactez Nous</h2>
      <p>L'entrepreneuriat vous intéresse ? Nous sommes là pour vous guider.</p>
    </div>
    <div class="cde-contact-card">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="cde-contact-item">
            <div class="cde-contact-icon"><i class="fas fa-envelope"></i></div>
            <div class="cde-contact-text">
              <div class="lbl">Email</div>
              <div class="val">cde@enssm.dz</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cde-contact-item">
            <div class="cde-contact-icon"><i class="fas fa-globe"></i></div>
            <div class="cde-contact-text">
              <div class="lbl">Sites Web</div>
              <div class="val">www.cde.dz / www.nesda.dz</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="cde-contact-item">
            <div class="cde-contact-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div class="cde-contact-text">
              <div class="lbl">Localisation</div>
              <div class="val">Bâtiment A, 1er étage, Salle CDE</div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-5">
        <a href="https://www.facebook.com/CDE.ENSSM?locale=fr_FR" target="_blank" class="btn-cde">
          <i class="fab fa-facebook"></i> Suivez-nous sur Facebook
        </a>
      </div>
    </div>
  </div>
</section>

<?php include('shared/_footer.php'); ?>
</div>
</main>
</body>
</html>