<?php include('shared/_header.php'); ?>

<body>
<main>
<div class="big-wrapper light">
<img src="./images/shape.png" alt="" class="shape" />
<?php include('shared/_navbar.php'); ?>

<style>
/* ===== INCUBATOR PAGE — ACCENT: AMBER/ORANGE ===== */
:root { --inc: #f59e0b; --inc2: #d97706; --inc-rgb: 245,158,11; }

.inc-hero {
  padding: 160px 0 100px;
  position: relative; overflow: hidden;
}
.inc-hero::before {
  content: '';
  position: absolute; inset: 0;
  background: linear-gradient(135deg, rgba(245,158,11,0.1) 0%, rgba(217,119,6,0.06) 50%, transparent 100%);
}
.inc-hero .container { position: relative; z-index: 2; }
.eyebrow-inc {
  display: inline-flex; align-items: center; gap: 8px;
  background: rgba(245,158,11,0.1);
  border: 1px solid rgba(245,158,11,0.25);
  color: var(--inc); padding: 6px 16px; border-radius: 50px;
  font-size: 0.8rem; font-weight: 600;
  text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 1.5rem;
}
.inc-hero h1 {
  font-size: clamp(2.5rem, 5vw, 3.8rem);
  font-weight: 900; line-height: 1.1; letter-spacing: -2px;
  color: var(--darkOne); margin-bottom: 1.5rem;
}
.inc-hero h1 .hl-inc {
  background: linear-gradient(135deg, #f59e0b, #d97706);
  -webkit-background-clip: text; background-clip: text;
  -webkit-text-fill-color: transparent;
}
.inc-hero p.lead-inc {
  font-size: 1.1rem; color: var(--lightOne); line-height: 1.8;
  max-width: 520px; margin-bottom: 2.5rem;
}
.btn-inc {
  display: inline-flex; align-items: center; gap: 10px;
  padding: 14px 30px; background: linear-gradient(135deg, #f59e0b, #d97706);
  color: #fff !important; border-radius: 50px; font-weight: 600;
  font-size: 0.95rem; text-decoration: none; transition: all 0.3s ease;
  box-shadow: 0 10px 30px rgba(245,158,11,0.35); border: none;
}
.btn-inc:hover { transform: translateY(-3px); box-shadow: 0 15px 40px rgba(245,158,11,0.5); }
.btn-inc-ghost {
  display: inline-flex; align-items: center; gap: 10px;
  padding: 13px 28px; background: transparent;
  color: var(--darkTwo) !important;
  border: 2px solid rgba(245,158,11,0.3); border-radius: 50px;
  font-weight: 600; text-decoration: none; transition: all 0.3s ease; font-size: 0.95rem;
}
.btn-inc-ghost:hover { border-color: var(--inc); color: var(--inc) !important; }

.inc-hero-img {
  position: relative; display: flex; align-items: center; justify-content: center;
}
.inc-hero-img::before {
  content: ''; position: absolute; width: 380px; height: 380px;
  border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
  background: linear-gradient(135deg, rgba(245,158,11,0.2), rgba(217,119,6,0.12));
  animation: morphInc 8s ease-in-out infinite alternate;
  filter: blur(30px); z-index: 0;
}
@keyframes morphInc { 0% { border-radius:40%60%60%40%/60%30%70%40%; } 100% { border-radius:40%60%; } }
.inc-hero-img img {
  position: relative; z-index: 1; width: 100%; max-width: 420px;
  border-radius: 30px; box-shadow: 0 30px 60px rgba(245,158,11,0.2);
  animation: floatInc 6s ease-in-out infinite;
}
@keyframes floatInc { 0%,100% { transform:translateY(0); } 50% { transform:translateY(-18px); } }

/* SECTION HEAD */
.section-head-inc { text-align: center; margin-bottom: 4rem; }
.section-head-inc .ol-inc {
  font-size: 0.75rem; font-weight: 700; text-transform: uppercase;
  letter-spacing: 2.5px; color: var(--inc); margin-bottom: 0.75rem; display: block;
}
.section-head-inc h2 {
  font-size: clamp(2rem, 4vw, 2.8rem); font-weight: 800;
  color: var(--darkOne); letter-spacing: -1px; margin-bottom: 1rem;
}
.section-head-inc p {
  color: var(--lightOne); max-width: 560px;
  margin: 0 auto; font-size: 1.05rem; line-height: 1.7;
}

/* PHASE CARDS (horizontal timeline style) */
.phases-section { padding: 100px 0; }
.phase-card {
  border-radius: 24px;
  background: var(--backgroundColor);
  padding: 40px 32px;
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 4px 24px rgba(0,0,0,0.06);
  transition: all 0.4s ease; height: 100%;
  position: relative; overflow: hidden;
}
.dark .phase-card { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.phase-card::before {
  content: ''; position: absolute;
  top: 0; left: 0; width: 100%; height: 5px;
}
.phase-card.p1::before { background: linear-gradient(90deg, #667eea, #764ba2); }
.phase-card.p2::before { background: linear-gradient(90deg, #f59e0b, #d97706); }
.phase-card.p3::before { background: linear-gradient(90deg, #10b981, #059669); }
.phase-card:hover { transform: translateY(-10px); box-shadow: 0 25px 50px rgba(245,158,11,0.15); }
.phase-num {
  display: inline-flex; align-items: center; justify-content: center;
  width: 52px; height: 52px; border-radius: 16px;
  font-size: 1.5rem; font-weight: 900; margin-bottom: 1.5rem;
}
.phase-card.p1 .phase-num { background: rgba(102,126,234,0.1); color: #667eea; }
.phase-card.p2 .phase-num { background: rgba(245,158,11,0.1); color: #f59e0b; }
.phase-card.p3 .phase-num { background: rgba(16,185,129,0.1); color: #10b981; }
.phase-card h3 { font-size: 1.4rem; font-weight: 800; color: var(--darkOne); margin-bottom: 0.75rem; }
.phase-card .phase-badge {
  display: inline-block; padding: 3px 14px;
  border-radius: 20px; font-size: 0.78rem; font-weight: 600;
  margin-bottom: 1rem;
}
.phase-card.p1 .phase-badge { background: rgba(102,126,234,0.1); color: #667eea; }
.phase-card.p2 .phase-badge { background: rgba(245,158,11,0.1); color: #f59e0b; }
.phase-card.p3 .phase-badge { background: rgba(16,185,129,0.1); color: #10b981; }
.phase-card p { color: var(--lightOne); line-height: 1.7; margin-bottom: 1.25rem; }
.phase-check-list { list-style: none; padding: 0; margin: 0; }
.phase-check-list li {
  display: flex; align-items: flex-start; gap: 10px;
  color: var(--lightOne); font-size: 0.9rem; margin-bottom: 8px;
}

/* EVENTS */
.inc-events-section { padding: 100px 0; background: rgba(245,158,11,0.03); }
.dark .inc-events-section { background: rgba(255,255,255,0.02); }
.inc-event-card {
  border-radius: 20px; background: var(--backgroundColor);
  padding: 24px; border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 4px 20px rgba(0,0,0,0.05);
  display: flex; align-items: center; gap: 20px; transition: all 0.3s ease;
}
.dark .inc-event-card { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.inc-event-card:hover { transform: translateY(-4px); box-shadow: 0 15px 40px rgba(245,158,11,0.15); border-color: rgba(245,158,11,0.2); }
.inc-event-date {
  min-width: 72px; text-align: center;
  background: linear-gradient(135deg, #f59e0b, #d97706);
  border-radius: 16px; padding: 12px 8px; color: #fff;
}
.inc-event-date .day { display: block; font-size: 2rem; font-weight: 900; line-height: 1; }
.inc-event-date .month { font-size: 0.75rem; font-weight: 600; text-transform: uppercase; opacity: 0.9; }
.inc-event-info { flex: 1; }
.inc-event-info h5 { font-size: 1rem; font-weight: 700; color: var(--darkOne); margin-bottom: 4px; }
.inc-event-info p { font-size: 0.85rem; color: var(--lightOne); margin: 0; }

/* MENTORS */
.inc-mentors-section { padding: 100px 0; }
.inc-mentor-card {
  border-radius: 24px; background: var(--backgroundColor);
  padding: 32px 20px; text-align: center;
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 4px 20px rgba(0,0,0,0.06);
  transition: all 0.3s ease; height: 100%;
}
.dark .inc-mentor-card { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.inc-mentor-card:hover { transform: translateY(-8px); box-shadow: 0 15px 40px rgba(245,158,11,0.2); }
.inc-mentor-avatar {
  width: 90px; height: 90px; border-radius: 50%;
  object-fit: cover; margin: 0 auto 1rem;
  border: 4px solid rgba(245,158,11,0.2); display: block; transition: border-color 0.3s;
}
.inc-mentor-card:hover .inc-mentor-avatar { border-color: var(--inc); }
.inc-mentor-card h5 { font-size: 1rem; font-weight: 700; color: var(--darkOne); margin-bottom: 4px; }
.inc-mentor-card .role-i { font-size: 0.82rem; color: var(--lightOne); margin-bottom: 1rem; }
.inc-mentor-social a {
  width: 32px; height: 32px; background: rgba(245,158,11,0.1);
  border-radius: 8px; display: inline-flex; align-items: center;
  justify-content: center; color: var(--inc); transition: all 0.3s;
}
.inc-mentor-social a:hover { background: var(--inc); color: #fff; transform: translateY(-3px); }

/* CTA BANNER (amber) */
.inc-cta-banner {
  padding: 100px 0;
  background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
  position: relative; overflow: hidden;
}
.inc-cta-banner::before {
  content: ''; position: absolute; top: -60%; right: -5%;
  width: 500px; height: 500px; border-radius: 50%;
  background: rgba(255,255,255,0.06);
}
.inc-cta-banner h2 { font-size: clamp(2rem,4vw,3rem); font-weight: 800; color: #fff; margin-bottom: 1rem; }
.inc-cta-banner p { color: rgba(255,255,255,0.85); font-size: 1.1rem; margin-bottom: 2rem; }
.btn-inc-white {
  display: inline-flex; align-items: center; gap: 10px;
  padding: 16px 36px; background: #fff; color: #d97706 !important;
  border-radius: 50px; font-weight: 700; text-decoration: none;
  transition: all 0.3s ease; font-size: 1rem;
  box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}
.btn-inc-white:hover { transform: translateY(-3px); box-shadow: 0 15px 40px rgba(0,0,0,0.3); }

/* CONTACT */
.inc-contact { padding: 100px 0; }
.inc-contact-card {
  background: var(--backgroundColor); border-radius: 32px;
  padding: 60px 50px; box-shadow: 0 20px 60px rgba(0,0,0,0.08);
  border: 1px solid rgba(245,158,11,0.1);
}
.dark .inc-contact-card { background: rgba(255,255,255,0.03); }
.inc-contact-item {
  display: flex; align-items: center; gap: 20px; padding: 20px 24px;
  border-radius: 18px; background: rgba(245,158,11,0.05);
  border: 1px solid rgba(245,158,11,0.1);
  transition: all 0.3s ease; text-decoration: none;
}
.inc-contact-item:hover {
  background: rgba(245,158,11,0.1); transform: translateY(-4px);
  box-shadow: 0 10px 30px rgba(245,158,11,0.15);
}
.inc-contact-icon {
  width: 52px; height: 52px;
  background: linear-gradient(135deg, #f59e0b, #d97706);
  border-radius: 14px; display: flex; align-items: center;
  justify-content: center; color: #fff; font-size: 1.2rem; flex-shrink: 0;
}
.inc-contact-text .lbl { font-size: 0.8rem; color: var(--lightOne); font-weight: 500; margin-bottom: 2px; text-transform: uppercase; letter-spacing: 1px; }
.inc-contact-text .val { font-size: 0.95rem; font-weight: 600; color: var(--darkOne); }
</style>

<!-- HERO -->
<section class="inc-hero">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <div class="eyebrow-inc"><i class="fas fa-seedling"></i> Innovation & Startup</div>
        <h1>Incubateur <span class="hl-inc">ENSSM</span></h1>
        <p class="lead-inc">
          Soutenir et accompagner les entrepreneurs dans la création de projets innovants.
          Obtenez un certificat d'une institution économique reconnue.
        </p>
        <div class="d-flex gap-3 flex-wrap">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="inc-hero-img">
          <img src="images/inc.png" alt="Incubateur ENSSM">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PHASES -->
<section id="incubator-programs" class="phases-section">
  <div class="container">
    <div class="section-head-inc">
      <span class="ol-inc">Du Concept au Marché</span>
      <h2>Nos Programmes d'Accompagnement</h2>
      <p>Un parcours structuré en 3 phases pour transformer votre idée en entreprise durable.</p>
    </div>
    <div class="row g-4">
      <!-- Phase 1 -->
      <div class="col-md-4">
        <div class="phase-card p1">
          <div class="phase-num">01</div>
          <span class="phase-badge">Pré-incubation</span>
          <h3>Idéation & Prototypage</h3>
          <p>Transformez votre idée en concept validé, de l'idéation jusqu'au prototype fonctionnel.</p>
          <ul class="phase-check-list">
            <li><i class="fas fa-check-circle" style="color:#667eea;margin-top:3px;"></i>Ateliers de créativité</li>
            <li><i class="fas fa-check-circle" style="color:#667eea;margin-top:3px;"></i>Étude de marché</li>
            <li><i class="fas fa-check-circle" style="color:#667eea;margin-top:3px;"></i>Prototypage rapide</li>
            <li><i class="fas fa-check-circle" style="color:#667eea;margin-top:3px;"></i>Mentorat individuel</li>
          </ul>
        </div>
      </div>
      <!-- Phase 2 -->
      <div class="col-md-4">
        <div class="phase-card p2">
          <div class="phase-num">02</div>
          <span class="phase-badge">Incubation</span>
          <h3>Lancement & Croissance</h3>
          <p>Accompagnement intensif pour le lancement et le développement accéléré de votre startup.</p>
          <ul class="phase-check-list">
            <li><i class="fas fa-check-circle" style="color:#f59e0b;margin-top:3px;"></i>Espace de travail dédié</li>
            <li><i class="fas fa-check-circle" style="color:#f59e0b;margin-top:3px;"></i>Coaching personnalisé</li>
            <li><i class="fas fa-check-circle" style="color:#f59e0b;margin-top:3px;"></i>Accès au financement</li>
            <li><i class="fas fa-check-circle" style="color:#f59e0b;margin-top:3px;"></i>Réseau de partenaires</li>
          </ul>
        </div>
      </div>
      <!-- Phase 3 -->
      <div class="col-md-4">
        <div class="phase-card p3">
          <div class="phase-num">03</div>
          <span class="phase-badge">Post-incubation</span>
          <h3>Consolidation & Expansion</h3>
          <p>Suivi post-lancement pour assurer la croissance durable et la pérennité de votre entreprise.</p>
          <ul class="phase-check-list">
            <li><i class="fas fa-check-circle" style="color:#10b981;margin-top:3px;"></i>Stratégie de croissance</li>
            <li><i class="fas fa-check-circle" style="color:#10b981;margin-top:3px;"></i>Mise en relation</li>
            <li><i class="fas fa-check-circle" style="color:#10b981;margin-top:3px;"></i>Accès aux marchés</li>
            <li><i class="fas fa-check-circle" style="color:#10b981;margin-top:3px;"></i>Suivi personnalisé</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- EVENTS -->
<section id="incubator-events" class="inc-events-section">
  <div class="container">
    <div class="section-head-inc">
      <span class="ol-inc">Agenda</span>
      <h2>Événements à Venir</h2>
      <p>Participez à nos ateliers et journées portes ouvertes pour découvrir l'incubateur.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="inc-event-card">
          <div class="inc-event-date">
            <span class="day">15</span>
            <span class="month">MARS</span>
          </div>
          <div class="inc-event-info">
            <h5>Atelier de Lancement</h5>
            <p><i class="far fa-clock me-1"></i>10h00 – 13h00 &nbsp;|&nbsp; <i class="fas fa-map-marker-alt me-1"></i>Salle 105</p>
          </div>
          <a href="https://www.facebook.com/profile.php?id=61583597491341" target="_blank" class="btn-inc" style="white-space:nowrap; padding:10px 18px; font-size:0.82rem;">Voir <i class="fas fa-arrow-right ms-1"></i></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="inc-event-card">
          <div class="inc-event-date">
            <span class="day">22</span>
            <span class="month">MARS</span>
          </div>
          <div class="inc-event-info">
            <h5>Journée Portes Ouvertes</h5>
            <p><i class="far fa-clock me-1"></i>9h00 – 16h00 &nbsp;|&nbsp; <i class="fas fa-map-marker-alt me-1"></i>Incubateur</p>
          </div>
          <a href="https://www.facebook.com/profile.php?id=61583597491341" target="_blank" class="btn-inc" style="white-space:nowrap; padding:10px 18px; font-size:0.82rem;">Voir <i class="fas fa-arrow-right ms-1"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MENTORS -->
<section class="inc-mentors-section">
  <div class="container">
    <div class="section-head-inc">
      <span class="ol-inc">Expertise</span>
      <h2>Nos Mentors</h2>
      <p>Des experts bienveillants pour vous guider à chaque étape.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-3 col-6">
        <div class="inc-mentor-card">
          <img src="images/user.png" class="inc-mentor-avatar" alt="Dr. Sifaoui">
          <h5>Dr. Sifaoui Fadda</h5>
          <p class="role-i">Directrice</p>
          <div class="inc-mentor-social"><a href="#"><i class="fab fa-linkedin-in"></i></a></div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="inc-mentor-card">
          <img src="images/user.png" class="inc-mentor-avatar" alt="Expert Innovation">
          <h5>Dr. Expert</h5>
          <p class="role-i">Expert en Innovation</p>
          <div class="inc-mentor-social"><a href="#"><i class="fab fa-linkedin-in"></i></a></div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="inc-mentor-card">
          <img src="images/user.png" class="inc-mentor-avatar" alt="Coach Entrepreneuriat">
          <h5>Mme. Coach</h5>
          <p class="role-i">Coach en Entrepreneuriat</p>
          <div class="inc-mentor-social"><a href="#"><i class="fab fa-linkedin-in"></i></a></div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="inc-mentor-card">
          <img src="images/user.png" class="inc-mentor-avatar" alt="Investisseur">
          <h5>Dr. Expert</h5>
          <p class="role-i">Investisseur</p>
          <div class="inc-mentor-social"><a href="#"><i class="fab fa-linkedin-in"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<section id="incubator-cta" class="inc-cta-banner" style="background: url('images/inc.jpg') center/cover fixed no-repeat;">
  <div class="container text-center position-relative" style="z-index:2;">
    <h2 style="color: #f59e0b;">Prêt à Lancer Votre Projet ?</h2>
    <p style="color: #f59e0b;">Inscrivez-vous à un projet de thèse de fin d'études pour une institution économique</p>
    <a href="https://docs.google.com/forms/d/e/1FAIpQLSc0ldUIxS7w49Kh_pgduINtCPVf34lYfhtq9uiVXJvwK4CpNg/viewform" target="_blank" class="btn-inc-white">
      <i class="fas fa-seedling"></i> Postuler à l'Incubation
    </a>
  </div>
</section>

<!-- CONTACT -->
<section id="incubator-contact" class="inc-contact">
  <div class="container">
    <div class="section-head-inc">
      <span class="ol-inc">Parlons de Votre Projet</span>
      <h2>Contactez Nous</h2>
      <p>Vous avez un projet innovant ? Nos experts sont prêts à vous écouter !</p>
    </div>
    <div class="inc-contact-card">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="inc-contact-item">
            <div class="inc-contact-icon"><i class="fas fa-envelope"></i></div>
            <div class="inc-contact-text">
              <div class="lbl">Email</div>
              <div class="val">enssmincubator@gmail.com</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="inc-contact-item">
            <div class="inc-contact-icon"><i class="fas fa-globe"></i></div>
            <div class="inc-contact-text">
              <div class="lbl">Site Web</div>
              <div class="val">aunei.mesrs.dz/incubators</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="inc-contact-item">
            <div class="inc-contact-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div class="inc-contact-text">
              <div class="lbl">Localisation</div>
              <div class="val">Bâtiment B, 1er étage</div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-5">
        <a href="https://www.facebook.com/profile.php?id=61583597491341" target="_blank" class="btn-inc">
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