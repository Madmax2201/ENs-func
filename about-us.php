<?php include('shared/_header.php'); ?>

<body>
<main>
<div class="big-wrapper light">
<img src="./images/shape.png" alt="" class="shape" />
<?php include('shared/_navbar.php'); ?>

<style>
/* ===== ABOUT US PAGE ===== */

/* ── Hero ── */
.about-hero {
  padding: 150px 0 90px;
  position: relative;
  overflow: hidden;
}
.about-hero::before {
  content: '';
  position: absolute; inset: 0;
  background: linear-gradient(135deg, rgba(74,144,226,0.08) 0%, rgba(100,188,244,0.05) 50%, transparent 100%);
}
.about-hero .container { position: relative; z-index: 2; }

.about-eyebrow {
  display: inline-flex; align-items: center; gap: 8px;
  background: rgba(74,144,226,0.1);
  border: 1px solid rgba(74,144,226,0.25);
  color: #4a90e2; padding: 6px 16px; border-radius: 50px;
  font-size: 0.78rem; font-weight: 700;
  text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 1.5rem;
}
.about-hero h1 {
  font-size: clamp(2.6rem, 5vw, 4rem);
  font-weight: 900; line-height: 1.1; letter-spacing: -2px;
  color: var(--darkOne); margin-bottom: 1.5rem;
}
.about-hero h1 .hl {
  background: linear-gradient(135deg, #4a90e2, #64bcf4);
  -webkit-background-clip: text; background-clip: text;
  -webkit-text-fill-color: transparent;
}
.about-hero p.lead-about {
  font-size: 1.1rem; color: var(--lightOne); line-height: 1.8;
  max-width: 580px; margin-bottom: 2.5rem;
}

/* ── Section head ── */
.about-section-head { text-align: center; margin-bottom: 3.5rem; }
.about-section-head .ol {
  font-size: 0.75rem; font-weight: 700; text-transform: uppercase;
  letter-spacing: 2.5px; color: #4a90e2; margin-bottom: 0.75rem; display: block;
}
.about-section-head h2 {
  font-size: clamp(1.8rem, 4vw, 2.6rem); font-weight: 800;
  color: var(--darkOne); letter-spacing: -1px; margin-bottom: 1rem;
}
.about-section-head p {
  color: var(--lightOne); max-width: 560px;
  margin: 0 auto; font-size: 1rem; line-height: 1.7;
}

/* ── Mission card (large intro) ── */
.mission-section { padding: 80px 0; }
.mission-card {
  background: var(--backgroundColor);
  border-radius: 28px;
  padding: 52px 56px;
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 8px 40px rgba(0,0,0,0.07);
  position: relative;
  overflow: hidden;
}
.dark .mission-card { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.mission-card::before {
  content: '';
  position: absolute; top: 0; left: 0; width: 100%; height: 4px;
  background: linear-gradient(90deg, #4a90e2, #64bcf4);
}
.mission-label {
  display: inline-flex; align-items: center; gap: 8px;
  background: rgba(74,144,226,0.08); border: 1px solid rgba(74,144,226,0.18);
  color: #4a90e2; padding: 5px 14px; border-radius: 30px;
  font-size: 0.75rem; font-weight: 700;
  text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 1.5rem;
}
.mission-card h3 {
  font-size: clamp(1.5rem, 3vw, 2rem); font-weight: 800;
  color: var(--darkOne); letter-spacing: -0.5px; margin-bottom: 1.25rem;
}
.mission-card p {
  color: var(--lightOne); font-size: 1.05rem; line-height: 1.85; margin-bottom: 1rem;
}
.mission-card p strong { color: var(--darkOne); }

/* ── Info row (date + location) ── */
.mission-meta {
  display: flex; gap: 20px; flex-wrap: wrap; margin-top: 2rem;
}
.meta-pill {
  display: inline-flex; align-items: center; gap: 10px;
  padding: 10px 18px; border-radius: 14px;
  background: rgba(74,144,226,0.06);
  border: 1px solid rgba(74,144,226,0.12);
  font-size: 0.85rem; color: var(--lightOne);
}
.meta-pill i { color: #4a90e2; font-size: 0.9rem; }
.meta-pill strong { color: var(--darkOne); }

/* ── Departments ── */
.departments-section { padding: 80px 0; background: rgba(74,144,226,0.03); }
.dark .departments-section { background: rgba(255,255,255,0.02); }
.dept-card {
  background: var(--backgroundColor);
  border-radius: 20px;
  padding: 28px 24px;
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 4px 20px rgba(0,0,0,0.05);
  transition: all 0.35s ease;
  height: 100%;
  position: relative;
  overflow: hidden;
}
.dark .dept-card { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.dept-card:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(74,144,226,0.14); border-color: rgba(74,144,226,0.2); }
.dept-icon {
  width: 52px; height: 52px; border-radius: 14px;
  display: flex; align-items: center; justify-content: center;
  font-size: 1.3rem; margin-bottom: 1.25rem;
}
.dept-card h4 {
  font-size: 1rem; font-weight: 700; color: var(--darkOne); margin-bottom: 0.75rem;
}
.dept-subjects {
  display: flex; flex-wrap: wrap; gap: 6px;
}
.subject-tag {
  background: rgba(74,144,226,0.08); border: 1px solid rgba(74,144,226,0.15);
  color: #4a90e2; padding: 3px 10px; border-radius: 20px;
  font-size: 0.72rem; font-weight: 600;
}

/* ── Training section ── */
.training-section { padding: 80px 0; }
.training-grid {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: 20px;
}
@media (max-width: 767px) { .training-grid { grid-template-columns: 1fr; } }
.training-item {
  display: flex; align-items: flex-start; gap: 16px;
  padding: 22px 24px; border-radius: 16px;
  background: var(--backgroundColor);
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 3px 16px rgba(0,0,0,0.05);
  transition: all 0.3s ease;
}
.dark .training-item { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.training-item:hover { transform: translateY(-4px); box-shadow: 0 12px 30px rgba(74,144,226,0.12); }
.t-icon {
  width: 44px; height: 44px; border-radius: 12px; flex-shrink: 0;
  display: flex; align-items: center; justify-content: center; font-size: 1.1rem;
}
.t-text h5 { font-size: 0.95rem; font-weight: 700; color: var(--darkOne); margin-bottom: 4px; }
.t-text p { font-size: 0.83rem; color: var(--lightOne); margin: 0; line-height: 1.5; }

/* ── Organigramme ── */
.org-section { padding: 80px 0; background: rgba(74,144,226,0.03); }
.dark .org-section { background: rgba(255,255,255,0.02); }
.org-frame {
  border-radius: 24px;
  overflow: hidden;
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 10px 40px rgba(0,0,0,0.08);
  background: var(--backgroundColor);
  padding: 32px;
  text-align: center;
}
.dark .org-frame { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.org-frame img { max-width: 100%; height: auto; border-radius: 12px; }

/* ── Alumni ── */
.alumni-section { padding: 80px 0; }
.alumni-card {
  background: var(--backgroundColor);
  border-radius: 20px;
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 4px 20px rgba(0,0,0,0.05);
  overflow: hidden;
  transition: all 0.35s ease; height: 100%;
  display: flex; flex-direction: column;
}
.dark .alumni-card { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.alumni-card:hover { transform: translateY(-6px); box-shadow: 0 16px 40px rgba(74,144,226,0.14); }
.alumni-card-top {
  padding: 24px 24px 20px;
  display: flex; align-items: center; gap: 16px;
  border-bottom: 1px solid rgba(0,0,0,0.05);
}
.dark .alumni-card-top { border-bottom-color: rgba(255,255,255,0.05); }
.alumni-avatar {
  width: 60px; height: 60px; border-radius: 50%;
  object-fit: cover; flex-shrink: 0;
  border: 3px solid rgba(74,144,226,0.2);
}
.alumni-meta h4 { font-size: 1rem; font-weight: 700; color: var(--darkOne); margin-bottom: 2px; }
.alumni-promo {
  font-size: 0.75rem; font-weight: 600; color: #4a90e2;
  display: inline-flex; align-items: center; gap: 5px;
}
.alumni-card-body {
  padding: 18px 24px 22px; flex: 1; display: flex; flex-direction: column;
}
.alumni-card-body .specialty {
  display: inline-flex; align-items: center; gap: 7px;
  font-size: 0.85rem; color: var(--lightOne); margin-bottom: 1.25rem;
}
.alumni-card-body .specialty i { color: #4a90e2; }
.btn-alumni {
  display: inline-flex; align-items: center; gap: 8px;
  margin-top: auto;
  font-size: 0.82rem; font-weight: 600; color: #4a90e2;
  text-decoration: none; background: none; border: none;
  cursor: pointer; padding: 0;
  transition: gap 0.2s ease;
}
.btn-alumni:hover { gap: 12px; }

/* ── FAQ ── */
.faq-section-new { padding: 80px 0; background: rgba(74,144,226,0.03); }
.dark .faq-section-new { background: rgba(255,255,255,0.02); }
.faq-accordion .faq-item {
  background: var(--backgroundColor);
  border-radius: 16px;
  border: 1px solid rgba(0,0,0,0.06);
  margin-bottom: 12px;
  overflow: hidden;
  transition: box-shadow 0.3s ease;
}
.dark .faq-item { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.faq-item:hover { box-shadow: 0 6px 20px rgba(74,144,226,0.1); }

/* ── Modal enhancement ── */
.modal-content { border-radius: 20px; border: none; overflow: hidden; }
.modal-header.about-grad {
  background: linear-gradient(135deg, #4a90e2 0%, #64bcf4 100%); border: none;
}

.hero-img-box {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}

.hero-img-box::before {
  content: '';
  position: absolute;
  width: 380px;
  height: 380px;
  border-radius: 40% 60% 70% 30% / 40% 50% 60% 50%;
  background: linear-gradient(135deg, rgba(74,144,226,0.2), rgba(100,188,244,0.15));
  animation: morphAbout 8s ease-in-out infinite alternate;
  z-index: 0;
  filter: blur(30px);
}

.hero-img-box img {
  position: relative;
  z-index: 1;
  width: 100%;
  max-width: 420px;
  border-radius: 30px;
  box-shadow: 0 30px 60px rgba(74,144,226,0.25);
  animation: floatAbout 6s ease-in-out infinite;
}

@keyframes morphAbout {
  0% { border-radius: 40% 60% 60% 40% / 60% 30% 70% 40%; }
  100% { border-radius: 40% 60%; }
}

@keyframes floatAbout {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-18px); }
}
</style>

<!-- HERO -->
<section class="about-hero">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <div class="about-eyebrow"><i class="fas fa-school"></i> À Propos de Nous</div>
        <h1>L'<span class="hl">ENSSM</span> — Pionnière<br>de l'Éducation Inclusive</h1>
        <p class="lead-about">
          L'École Normale Supérieure des Enseignants des Sourds-Muets forme les leaders
          de demain pour un enseignement spécialisé de haut niveau en Algérie et dans le monde arabe.
        </p>
      </div>
      <div class="col-lg-6">
        <div class="hero-img-box">
          <img src="images/logo.png" alt="Logo ENSSM">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MISSION -->
<section class="mission-section">
  <div class="container">
    <div class="mission-card">
      <div class="mission-label"><i class="fas fa-flag"></i> Ouverture Officielle</div>
      <h3>Une institution née d'une vision nationale ambitieuse</h3>
      <p>
        Monsieur le Professeur <strong>Kamel Baddari</strong>, Ministre de l'Enseignement Supérieur et de la Recherche Scientifique, a présidé le <strong>16 octobre 2022</strong> la cérémonie d'ouverture et le lancement officiel des cours à l'ENSSM à Beni Messous. Cette cérémonie s'est déroulée en présence du Ministre de l'Éducation nationale, de la Ministre de la Solidarité nationale, de la Famille et de la Condition de la Femme, ainsi que du Conseiller du Président de la République chargé des affaires de l'éducation et de l'enseignement.
      </p>
      <p>
        <strong>Objectif de l'école :</strong> Assurer la formation d'enseignants spécialisés dans l'enseignement des sourds-muets au profit du secteur de l'Éducation nationale et des autres secteurs, tout en œuvrant à son développement afin qu'elle devienne une institution à dimension <strong>africaine et arabe</strong>.
      </p>
      <div class="mission-meta">
        <div class="meta-pill"><i class="fas fa-calendar-alt"></i><span><strong>Fondée le</strong> 16 octobre 2022</span></div>
        <div class="meta-pill"><i class="fas fa-map-marker-alt"></i><span><strong>Beni Messous,</strong> Alger</span></div>
        <div class="meta-pill"><i class="fas fa-graduation-cap"></i><span><strong>15 disciplines</strong> spécialisées</span></div>
        <div class="meta-pill"><i class="fas fa-users"></i><span><strong>Formation</strong> d'enseignants inclusifs</span></div>
      </div>
    </div>
  </div>
</section>

<!-- DEPARTMENTS -->
<section id="departments" class="departments-section">
  <div class="container">
    <div class="about-section-head">
      <span class="ol">Organisation Académique</span>
      <h2>Nos 5 Départements</h2>
      <p>L'école est structurée en cinq départements couvrant l'ensemble des disciplines de l'enseignement spécialisé:</p>
    </div>
    <div class="row g-4">
      <div class="col-lg col-md-6">
        <div class="dept-card">
          <div class="dept-icon" style="background:rgba(74,144,226,0.1);">🔬</div>
          <h4>Sciences & Technologie</h4>
          <div class="dept-subjects">
            <span class="subject-tag">Informatique</span>
            <span class="subject-tag">Mathématiques</span>
            <span class="subject-tag">Physique-Chimie</span>
            <span class="subject-tag">Sciences Biologiques</span>
          </div>
        </div>
      </div>
      <div class="col-lg col-md-6">
        <div class="dept-card">
          <div class="dept-icon" style="background:rgba(16,185,129,0.1);">📚</div>
          <h4>Lettres & Langues</h4>
          <div class="dept-subjects">
            <span class="subject-tag" style="background:rgba(16,185,129,0.08);border-color:rgba(16,185,129,0.15);color:#10b981;">Arabe</span>
            <span class="subject-tag" style="background:rgba(16,185,129,0.08);border-color:rgba(16,185,129,0.15);color:#10b981;">Anglais</span>
            <span class="subject-tag" style="background:rgba(16,185,129,0.08);border-color:rgba(16,185,129,0.15);color:#10b981;">Amazigh</span>
            <span class="subject-tag" style="background:rgba(16,185,129,0.08);border-color:rgba(16,185,129,0.15);color:#10b981;">Français</span>
          </div>
        </div>
      </div>
      <div class="col-lg col-md-6">
        <div class="dept-card">
          <div class="dept-icon" style="background:rgba(245,158,11,0.1);">🌍</div>
          <h4>Sciences Humaines & Sociales</h4>
          <div class="dept-subjects">
            <span class="subject-tag" style="background:rgba(245,158,11,0.08);border-color:rgba(245,158,11,0.15);color:#d97706;">Islamiques</span>
            <span class="subject-tag" style="background:rgba(245,158,11,0.08);border-color:rgba(245,158,11,0.15);color:#d97706;">Philosophie</span>
            <span class="subject-tag" style="background:rgba(245,158,11,0.08);border-color:rgba(245,158,11,0.15);color:#d97706;">Histoire-Géo</span>
          </div>
        </div>
      </div>
      <div class="col-lg col-md-6">
        <div class="dept-card">
          <div class="dept-icon" style="background:rgba(139,92,246,0.1);">📈</div>
          <h4>Sciences Économiques & Gestion</h4>
          <div class="dept-subjects">
            <span class="subject-tag" style="background:rgba(139,92,246,0.08);border-color:rgba(139,92,246,0.15);color:#8b5cf6;">Économie</span>
            <span class="subject-tag" style="background:rgba(139,92,246,0.08);border-color:rgba(139,92,246,0.15);color:#8b5cf6;">Gestion</span>
          </div>
        </div>
      </div>
      <div class="col-lg col-md-6">
        <div class="dept-card">
          <div class="dept-icon" style="background:rgba(239,68,68,0.1);">🎨</div>
          <h4>Éducation Physique & Arts</h4>
          <div class="dept-subjects">
            <span class="subject-tag" style="background:rgba(239,68,68,0.08);border-color:rgba(239,68,68,0.15);color:#ef4444;">Sport</span>
            <span class="subject-tag" style="background:rgba(239,68,68,0.08);border-color:rgba(239,68,68,0.15);color:#ef4444;">Arts</span>
            <span class="subject-tag" style="background:rgba(239,68,68,0.08);border-color:rgba(239,68,68,0.15);color:#ef4444;">Musique</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TRAINING -->
<section class="training-section">
  <div class="container">
    <div class="about-section-head">
      <span class="ol">Infrastructure & Méthodes</span>
      <h2>La Formation au Sein de l'École</h2>
      <p>L'établissement adopte un programme spécialisé ainsi que des stages pratiques visant à favoriser l'intégration des élèves sourds et malentendants dans la vie sociale et économique. L'école met également à disposition toutes les ressources, moyens et équipements nécessaires afin d'assurer un enseignement de haute qualité au profit de ses étudiants:</p>
    </div>
    <div class="training-grid">
      <div class="training-item">
        <div class="t-icon" style="background:rgba(74,144,226,0.1);"><i class="fas fa-hands" style="color:#4a90e2;"></i></div>
        <div class="t-text">
          <h5>5 Laboratoires de Langue des Signes</h5>
          <p>Espaces dédiés à la pratique et à la maîtrise de la langue des signes dans tous ses aspects.</p>
        </div>
      </div>
      <div class="training-item">
        <div class="t-icon" style="background:rgba(16,185,129,0.1);"><i class="fas fa-video" style="color:#10b981;"></i></div>
        <div class="t-text">
          <h5>Studio Audiovisuel Professionnel</h5>
          <p>Productions pédagogiques de haute qualité pour un apprentissage visuel et adapté.</p>
        </div>
      </div>
      <div class="training-item">
        <div class="t-icon" style="background:rgba(245,158,11,0.1);"><i class="fas fa-headphones" style="color:#f59e0b;"></i></div>
        <div class="t-text">
          <h5>Appareils Auditifs Spécialisés</h5>
          <p>Équipements modernes pour accompagner les élèves aux différents degrés de surdité.</p>
        </div>
      </div>
      <div class="training-item">
        <div class="t-icon" style="background:rgba(139,92,246,0.1);"><i class="fas fa-chalkboard-teacher" style="color:#8b5cf6;"></i></div>
        <div class="t-text">
          <h5>Programme Spécialisé & Stages Pratiques</h5>
          <p>Curriculum pensé pour favoriser l'intégration sociale et économique des apprenants sourds.</p>
        </div>
      </div>
      <div class="training-item">
        <div class="t-icon" style="background:rgba(239,68,68,0.1);"><i class="fas fa-laptop-code" style="color:#ef4444;"></i></div>
        <div class="t-text">
          <h5>Technologies Pédagogiques Modernes</h5>
          <p>Outils numériques et logiciels adaptés pour un enseignement innovant et accessible.</p>
        </div>
      </div>
      <div class="training-item">
        <div class="t-icon" style="background:rgba(74,144,226,0.1);"><i class="fas fa-globe-africa" style="color:#4a90e2;"></i></div>
        <div class="t-text">
          <h5>Ambition Africaine & Arabe</h5>
          <p>Vocation à devenir un pôle d'excellence régional pour l'éducation inclusive.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ORGANIGRAMME -->
<section class="org-section">
  <div class="container">
    <div class="about-section-head">
      <span class="ol">Structure Administrative</span>
      <h2>Organigramme</h2>
      <p>L'organisation interne de l'ENSSM et la répartition de ses équipes dirigeantes:</p>
    </div>
    <div class="org-frame">
      <img src="./images/org.png" alt="Organigramme ENSSM">
    </div>
  </div>
</section>

<!-- ALUMNI -->
<section id="alumni" class="alumni-section">
  <div class="container">
    <div class="about-section-head">
      <span class="ol">Parcours Inspirants</span>
      <h2>Nos Anciens Élèves</h2>
      <p>Des diplômés qui font rayonner l'ENSSM à travers l'Algérie et au-delà.</p>
    </div>
    <div class="row g-4">

      <!-- Alumni 1 -->
      <div class="col-lg-3 col-md-6">
        <div class="alumni-card">
          <div class="alumni-card-top">
            <img src="images/user.png" class="alumni-avatar" alt="Mohamed Amine">
            <div class="alumni-meta">
              <h4>Mohamed Amine</h4>
              <span class="alumni-promo"><i class="fas fa-circle" style="font-size:0.45rem;"></i> Promotion 2023</span>
            </div>
          </div>
          <div class="alumni-card-body">
            <p class="specialty"><i class="fas fa-chalkboard"></i> Enseignant — Mathématiques</p>
            <button class="btn-alumni" data-bs-toggle="modal" data-bs-target="#alumniModal1">
              Voir le parcours <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Alumni 2 -->
      <div class="col-lg-3 col-md-6">
        <div class="alumni-card">
          <div class="alumni-card-top">
            <img src="images/user.png" class="alumni-avatar" alt="Sarah Benali">
            <div class="alumni-meta">
              <h4>Sarah Benali</h4>
              <span class="alumni-promo"><i class="fas fa-circle" style="font-size:0.45rem;"></i> Promotion 2024</span>
            </div>
          </div>
          <div class="alumni-card-body">
            <p class="specialty"><i class="fas fa-language"></i> Enseignante — Langue Arabe</p>
            <button class="btn-alumni" data-bs-toggle="modal" data-bs-target="#alumniModal2">
              Voir le parcours <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Alumni 3 -->
      <div class="col-lg-3 col-md-6">
        <div class="alumni-card">
          <div class="alumni-card-top">
            <img src="images/user.png" class="alumni-avatar" alt="Karim Mansour">
            <div class="alumni-meta">
              <h4>Karim Mansour</h4>
              <span class="alumni-promo"><i class="fas fa-circle" style="font-size:0.45rem;"></i> Promotion 2023</span>
            </div>
          </div>
          <div class="alumni-card-body">
            <p class="specialty"><i class="fas fa-laptop-code"></i> Enseignant — Informatique</p>
            <button class="btn-alumni" data-bs-toggle="modal" data-bs-target="#alumniModal3">
              Voir le parcours <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Alumni 4 -->
      <div class="col-lg-3 col-md-6">
        <div class="alumni-card">
          <div class="alumni-card-top">
            <img src="images/user.png" class="alumni-avatar" alt="Fatima Zohra">
            <div class="alumni-meta">
              <h4>Fatima Zohra</h4>
              <span class="alumni-promo"><i class="fas fa-circle" style="font-size:0.45rem;"></i> Promotion 2025</span>
            </div>
          </div>
          <div class="alumni-card-body">
            <p class="specialty"><i class="fas fa-palette"></i> Enseignante — Arts</p>
            <button class="btn-alumni" data-bs-toggle="modal" data-bs-target="#alumniModal4">
              Voir le parcours <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

            <!-- FAQ SECTION - HIDDEN BY DEFAULT -->
            <div class="container mt-5 faq-section">
                <div class="faq-header" onclick="toggleFAQ()">
                    <h3 class="big-title cursor-pointer m-0 d-flex align-items-center">
                        <span class="text-primary icon-hover me-2"><i class="fa-solid fa-paperclip"></i></span>    
                        FAQ
                        <span class="toggle-icon ms-auto">
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
                    </h3>
                </div>
                
                <div class="faq-content" id="faqContent">
                    <?php include('shared/feature-cards.php'); ?>
                </div>
            </div>

            <div class="container mt-5">
                <hr class="border-1 opacity-25">
            </div>

        </div>
                <!-- Modal Ancien 1 -->
<div class="modal fade" id="alumniModal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">
                    <i class="fas fa-user-graduate me-2"></i>Mohamed Amine
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/user.png" class="img-fluid rounded shadow" alt="Alumni">
                    </div>
                    <div class="col-md-8">
                        <div class="event-details">
                            <div class="detail-item mb-3">
                                <i class="fas fa-calendar-alt text-primary me-2"></i>
                                <strong>Promotion :</strong> 2023
                            </div>
                            <div class="detail-item mb-3">
                                <i class="fas fa-graduation-cap text-primary me-2"></i>
                                <strong>Spécialité :</strong> Enseignement des mathématiques
                            </div>
                            <hr>
                            <h6 class="fw-bold">Parcours :</h6>
                            <p>Après l'obtention de son diplôme, Mohamed Amine a travaillé comme enseignant spécialisé dans plusieurs écoles à Alger. Il a développé une méthode pédagogique innovante pour l'enseignement des mathématiques aux élèves sourds.</p>
                            <h6 class="fw-bold mt-3">Réalisations :</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Auteur d'un manuel scolaire adapté</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Formateur pour nouveaux enseignants</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Ancien 2 -->
<div class="modal fade" id="alumniModal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title">
                    <i class="fas fa-user-graduate me-2"></i>Sarah Benali
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/user.png" class="img-fluid rounded shadow" alt="Alumni">
                    </div>
                    <div class="col-md-8">
                        <div class="event-details">
                            <div class="detail-item mb-3">
                                <i class="fas fa-calendar-alt text-success me-2"></i>
                                <strong>Promotion :</strong> 2024
                            </div>
                            <div class="detail-item mb-3">
                                <i class="fas fa-graduation-cap text-success me-2"></i>
                                <strong>Spécialité :</strong> Enseignement de l'arabe
                            </div>
                            <hr>
                            <h6 class="fw-bold">Parcours :</h6>
                            <p>Sarah travaille actuellement comme interprète officielle pour plusieurs institutions gouvernementales. Elle a participé à des conférences internationales comme interprète.</p>
                            <h6 class="fw-bold mt-3">Réalisations :</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Création d'une association pour la promotion de la langue des signes</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Formation de 50 nouveaux interprètes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Ancien 3 -->
<div class="modal fade" id="alumniModal3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title">
                    <i class="fas fa-user-graduate me-2"></i>Karim Mansour
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/user.png" class="img-fluid rounded shadow" alt="Alumni">
                    </div>
                    <div class="col-md-8">
                        <div class="event-details">
                            <div class="detail-item mb-3">
                                <i class="fas fa-calendar-alt text-info me-2"></i>
                                <strong>Promotion :</strong> 2023
                            </div>
                            <div class="detail-item mb-3">
                                <i class="fas fa-graduation-cap text-info me-2"></i>
                                <strong>Spécialité :</strong> Enseignement de l'informatique
                            </div>
                            <hr>
                            <h6 class="fw-bold">Parcours :</h6>
                            <p>Karim poursuit actuellement un master en IA à l'étranger. Il travaille sur des projets de reconnaissance automatique de la langue des signes.</p>
                            <h6 class="fw-bold mt-3">Réalisations :</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Publication de 2 articles scientifiques</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Développement d'une application prototype de traduction des signes</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Ancien 4 -->
<div class="modal fade" id="alumniModal4" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title">
                    <i class="fas fa-user-graduate me-2"></i>Fatima Zohra
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/user.png" class="img-fluid rounded shadow" alt="Alumni">
                    </div>
                    <div class="col-md-8">
                        <div class="event-details">
                            <div class="detail-item mb-3">
                                <i class="fas fa-calendar-alt text-warning me-2"></i>
                                <strong>Promotion :</strong> 2025
                            </div>
                            <div class="detail-item mb-3">
                                <i class="fas fa-graduation-cap text-warning me-2"></i>
                                <strong>Spécialité :</strong> Enseignement des arts
                            </div>
                            <hr>
                            <h6 class="fw-bold">Parcours :</h6>
                            <p>Fatima est une artiste reconnue qui expose ses œuvres dans des galeries à travers l'Algérie. Son travail explore la communication visuelle et l'expression artistique des personnes sourdes.</p>
                            <h6 class="fw-bold mt-3">Réalisations :</h6>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>5 expositions individuelles</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Prix de la création artistique 2025</li>
                                <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i>Ateliers d'art pour enfants sourds</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
    </main>

    <?php include('shared/_footer.php'); ?>
    <script>
    // SIMPLE FAQ TOGGLE
    function toggleFAQ() {
        const faqContent = document.getElementById('faqContent');
        const faqHeader = document.querySelector('.faq-header');
        const toggleIcon = document.querySelector('.faq-header .toggle-icon i');

        if (!faqContent || !faqHeader) return;

        // Toggle the show class
        faqContent.classList.toggle('show');
        faqHeader.classList.toggle('active');
        
        // Update icon
        if (toggleIcon) {
            if (faqContent.classList.contains('show')) {
                toggleIcon.className = 'fa-solid fa-chevron-up';
            } else {
                toggleIcon.className = 'fa-solid fa-chevron-down';
            }
        }
    }
    
    // Feature card toggle function
    function toggleFeature(featureId) {
        const featureContent = document.getElementById(featureId);
        const featureHeader = document.querySelector(`[onclick="toggleFeature('${featureId}')"]`);
        const toggleIcon = featureHeader ? featureHeader.querySelector('.toggle-icon i') : null;

        if (!featureContent || !featureHeader) return;

        // If this feature is already open, close it
        if (featureContent.classList.contains('show')) {
            featureContent.classList.remove('show');
            featureHeader.classList.remove('active');
            if (toggleIcon) {
                toggleIcon.className = 'fa-solid fa-chevron-down';
            }
            return;
        }

        // Close all other feature items
        const allFeatureContents = document.querySelectorAll('.feature-content');
        const allFeatureHeaders = document.querySelectorAll('.feature-header');
        
        allFeatureContents.forEach(content => {
            if (content !== featureContent) {
                content.classList.remove('show');
            }
        });
        
        allFeatureHeaders.forEach(header => {
            if (header !== featureHeader) {
                header.classList.remove('active');
                const icon = header.querySelector('.toggle-icon i');
                if (icon) {
                    icon.className = 'fa-solid fa-chevron-down';
                }
            }
        });

        // Open the clicked feature
        featureContent.classList.add('show');
        featureHeader.classList.add('active');
        if (toggleIcon) {
            toggleIcon.className = 'fa-solid fa-chevron-up';
        }
    }
    
    // Initialize page
    document.addEventListener('DOMContentLoaded', function() {
        // Force FAQ to be hidden on page load
        const faqContent = document.getElementById('faqContent');
        const faqHeader = document.querySelector('.faq-header');
        
        if (faqContent) {
            faqContent.classList.remove('show');
        }
        if (faqHeader) {
            faqHeader.classList.remove('active');
        }
        
        // Force all feature items to be collapsed
        const featureContents = document.querySelectorAll('.feature-content');
        const featureHeaders = document.querySelectorAll('.feature-header');
        
        featureContents.forEach(content => {
            content.classList.remove('show');
        });
        
        featureHeaders.forEach(header => {
            header.classList.remove('active');
            const icon = header.querySelector('.toggle-icon i');
            if (icon) {
                icon.className = 'fa-solid fa-chevron-down';
            }
        });
    });
    
    // Re-initialize FAQ state after theme switch
    document.addEventListener('animationend', function(e) {
        if (e.target.classList.contains('copy')) {
            const faqContent = document.getElementById('faqContent');
            const faqHeader = document.querySelector('.faq-header');
            const toggleIcon = document.querySelector('.faq-header .toggle-icon i');

            if (faqHeader && faqHeader.classList.contains('active')) {
                if (faqContent) faqContent.classList.add('show');
                if (toggleIcon) toggleIcon.className = 'fa-solid fa-chevron-up';
            } else {
                if (faqContent) faqContent.classList.remove('show');
                if (toggleIcon) toggleIcon.className = 'fa-solid fa-chevron-down';
            }
        }
    });
    document.addEventListener('hidden.bs.modal', function (event) {
    
    setTimeout(function() {
        document.querySelectorAll('.modal-backdrop').forEach(backdrop => {
            backdrop.remove();
        });
        document.body.classList.remove('modal-open');
        document.body.style.overflow = '';
        document.body.style.paddingRight = '';
    }, 100);
});


document.querySelectorAll('[data-bs-toggle="modal"]').forEach(button => {
    button.addEventListener('click', function() {
        
        document.querySelectorAll('.modal.show').forEach(modal => {
            let modalInstance = bootstrap.Modal.getInstance(modal);
            if (modalInstance) {
                modalInstance.hide();
            }
        });
        
        setTimeout(function() {
            document.querySelectorAll('.modal-backdrop').forEach(backdrop => {
                backdrop.remove();
            });
        }, 200);
    });
});
    </script> 
</main>
</body>
</html>