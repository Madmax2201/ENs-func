<?php include('shared/_header.php'); ?>

<body>
<main>
<div class="big-wrapper light">
<img src="./images/shape.png" alt="" class="shape" />
<?php include('shared/_navbar.php'); ?>

<style>
/* ===== AI HOUSE PAGE STYLES ===== */
.page-hero {
  padding: 160px 0 100px;
  position: relative;
  overflow: hidden;
}
.page-hero::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(102,126,234,0.12) 0%, rgba(118,75,162,0.08) 50%, transparent 100%);
  z-index: 0;
}
.page-hero .container { position: relative; z-index: 2; }

.hero-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(102,126,234,0.1);
  border: 1px solid rgba(102,126,234,0.25);
  color: #667eea;
  padding: 6px 16px;
  border-radius: 50px;
  font-size: 0.8rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1.5px;
  margin-bottom: 1.5rem;
}
.page-hero h1 {
  font-size: clamp(2.8rem, 5vw, 4.2rem);
  font-weight: 900;
  line-height: 1.1;
  margin-bottom: 1.5rem;
  letter-spacing: -2px;
  color: var(--darkOne);
}
.page-hero h1 .highlight {
  background: linear-gradient(135deg, #667eea, #764ba2);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
}
.page-hero p.lead-text {
  font-size: 1.15rem;
  color: var(--lightOne);
  line-height: 1.8;
  max-width: 520px;
  margin-bottom: 2.5rem;
}
.hero-cta { display: flex; gap: 15px; flex-wrap: wrap; }
.btn-hero-primary {
  display: inline-flex; align-items: center; gap: 10px;
  padding: 14px 30px;
  background: linear-gradient(135deg, #667eea, #764ba2);
  color: #fff !important;
  border-radius: 50px;
  font-weight: 600;
  font-size: 0.95rem;
  text-decoration: none;
  transition: all 0.3s ease;
  box-shadow: 0 10px 30px rgba(102,126,234,0.35);
  border: none;
  cursor: pointer;
}
.btn-hero-primary:hover { transform: translateY(-3px); box-shadow: 0 15px 40px rgba(102,126,234,0.5); }
.btn-hero-ghost {
  display: inline-flex; align-items: center; gap: 10px;
  padding: 13px 28px;
  background: transparent;
  color: var(--darkTwo) !important;
  border: 2px solid rgba(0,0,0,0.12);
  border-radius: 50px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
  font-size: 0.95rem;
}
.btn-hero-ghost:hover { border-color: #667eea; color: #667eea !important; background: rgba(102,126,234,0.05); }
.dark .btn-hero-ghost { border-color: rgba(255,255,255,0.15); color: var(--darkTwo) !important; }
.dark .btn-hero-ghost:hover { border-color: #667eea; }

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
  background: linear-gradient(135deg, rgba(102,126,234,0.2), rgba(118,75,162,0.15));
  animation: morph 8s ease-in-out infinite alternate;
  z-index: 0;
  filter: blur(30px);
}
.hero-img-box img {
  position: relative;
  z-index: 1;
  width: 100%;
  max-width: 420px;
  border-radius: 30px;
  box-shadow: 0 30px 60px rgba(102,126,234,0.25);
  animation: float 6s ease-in-out infinite;
}
@keyframes morph { 0% { border-radius: 40%60%60%40%/60%30%70%40%; } 100% { border-radius: 40%60%; } }
@keyframes float { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-18px); } }

/* ===== STATS BAR ===== */
.stats-bar {
  padding: 60px 0;
  border-top: 1px solid rgba(0,0,0,0.06);
  border-bottom: 1px solid rgba(0,0,0,0.06);
}
.dark .stats-bar { border-color: rgba(255,255,255,0.06); }
.stat-pill {
  text-align: center;
  padding: 30px 20px;
  border-radius: 20px;
  background: var(--backgroundColor);
  box-shadow: 0 4px 20px rgba(0,0,0,0.06);
  transition: transform 0.3s ease;
  border: 1px solid rgba(0,0,0,0.04);
}
.dark .stat-pill { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.stat-pill:hover { transform: translateY(-5px); }
.stat-pill .num {
  font-size: 3rem;
  font-weight: 900;
  letter-spacing: -2px;
  background: linear-gradient(135deg, #667eea, #764ba2);
  -webkit-background-clip: text;
  background-clip: text;
  -webkit-text-fill-color: transparent;
  line-height: 1;
  margin-bottom: 8px;
}
.stat-pill .lbl {
  font-size: 0.9rem;
  color: var(--lightOne);
  font-weight: 500;
}

/* ===== SECTION HEADING ===== */
.section-head {
  text-align: center;
  margin-bottom: 4rem;
}
.section-head .overline {
  font-size: 0.75rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2.5px;
  color: #667eea;
  margin-bottom: 0.75rem;
  display: block;
}
.section-head h2 {
  font-size: clamp(2rem, 4vw, 2.8rem);
  font-weight: 800;
  color: var(--darkOne);
  letter-spacing: -1px;
  margin-bottom: 1rem;
}
.section-head p {
  color: var(--lightOne);
  max-width: 560px;
  margin: 0 auto;
  font-size: 1.05rem;
  line-height: 1.7;
}

/* ===== PROJECT CARDS ===== */
.projects-section { padding: 100px 0; }
.proj-card {
  border-radius: 24px;
  overflow: hidden;
  background: var(--backgroundColor);
  box-shadow: 0 4px 24px rgba(0,0,0,0.07);
  border: 1px solid rgba(0,0,0,0.06);
  transition: all 0.4s ease;
  height: 100%;
  display: flex;
  flex-direction: column;
}
.dark .proj-card { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.proj-card:hover { transform: translateY(-8px); box-shadow: 0 20px 50px rgba(102,126,234,0.18); }
.proj-card-img {
  height: 220px;
  overflow: hidden;
  position: relative;
}
.proj-card-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}
.proj-card:hover .proj-card-img img { transform: scale(1.08); }
.proj-card-img .proj-status {
  position: absolute;
  top: 16px;
  left: 16px;
  padding: 5px 14px;
  border-radius: 50px;
  font-size: 0.75rem;
  font-weight: 700;
  letter-spacing: 0.5px;
  backdrop-filter: blur(8px);
}
.status-beta { background: rgba(40,167,69,0.85); color: #fff; }
.status-active { background: rgba(0,123,255,0.85); color: #fff; }
.status-research { background: rgba(255,193,7,0.85); color: #212529; }
.proj-card-body {
  padding: 28px;
  flex: 1;
  display: flex;
  flex-direction: column;
}
.proj-card-body h3 {
  font-size: 1.3rem;
  font-weight: 700;
  color: var(--darkOne);
  margin-bottom: 0.75rem;
}
.proj-card-body p {
  color: var(--lightOne);
  font-size: 0.95rem;
  line-height: 1.65;
  flex: 1;
  margin-bottom: 1.25rem;
}
.tech-pills { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 1.5rem; }
.tech-pill {
  background: rgba(102,126,234,0.1);
  color: #667eea;
  border: 1px solid rgba(102,126,234,0.2);
  padding: 3px 12px;
  border-radius: 20px;
  font-size: 0.75rem;
  font-weight: 600;
}
.btn-card-link {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  color: #667eea;
  font-weight: 600;
  font-size: 0.9rem;
  text-decoration: none;
  transition: gap 0.2s ease;
  background: none;
  border: none;
  cursor: pointer;
  padding: 0;
}
.btn-card-link:hover { gap: 14px; }

/* ===== TEAM ===== */
.team-section { padding: 100px 0; background: rgba(102,126,234,0.03); }
.dark .team-section { background: rgba(255,255,255,0.02); }
.team-member-card {
  background: var(--backgroundColor);
  border-radius: 24px;
  padding: 32px 20px;
  text-align: center;
  border: 1px solid rgba(0,0,0,0.06);
  box-shadow: 0 4px 20px rgba(0,0,0,0.06);
  transition: all 0.3s ease;
  height: 100%;
}
.dark .team-member-card { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.team-member-card:hover { transform: translateY(-8px); box-shadow: 0 15px 40px rgba(102,126,234,0.2); }
.member-avatar {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  object-fit: cover;
  margin: 0 auto 1.25rem;
  border: 4px solid rgba(102,126,234,0.2);
  transition: border-color 0.3s ease;
  display: block;
}
.team-member-card:hover .member-avatar { border-color: #667eea; }
.team-member-card h4 {
  font-size: 1rem;
  font-weight: 700;
  color: var(--darkOne);
  margin-bottom: 4px;
}
.team-member-card .role {
  font-size: 0.82rem;
  color: var(--lightOne);
  margin-bottom: 1rem;
}
.member-social a {
  width: 34px;
  height: 34px;
  background: rgba(102,126,234,0.1);
  border-radius: 10px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  color: #667eea;
  transition: all 0.3s ease;
}
.member-social a:hover { background: #667eea; color: #fff; transform: translateY(-3px); }

/* ===== CONTACT SECTION ===== */
.contact-section {
  padding: 100px 0;
  position: relative;
  overflow: hidden;
}
.contact-section::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(102,126,234,0.08), rgba(118,75,162,0.06));
}
.contact-section .container { position: relative; z-index: 2; }
.contact-glass-card {
  background: var(--backgroundColor);
  border-radius: 32px;
  padding: 60px 50px;
  box-shadow: 0 20px 60px rgba(0,0,0,0.08);
  border: 1px solid rgba(102,126,234,0.1);
}
.dark .contact-glass-card { background: rgba(255,255,255,0.03); border-color: rgba(255,255,255,0.07); }
.contact-item {
  display: flex;
  align-items: center;
  gap: 20px;
  padding: 20px 24px;
  border-radius: 18px;
  background: rgba(102,126,234,0.05);
  border: 1px solid rgba(102,126,234,0.1);
  transition: all 0.3s ease;
  text-decoration: none;
}
.contact-item:hover {
  background: rgba(102,126,234,0.12);
  transform: translateY(-4px);
  box-shadow: 0 10px 30px rgba(102,126,234,0.15);
}
.contact-icon {
  width: 52px;
  height: 52px;
  background: linear-gradient(135deg, #667eea, #764ba2);
  border-radius: 14px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 1.2rem;
  flex-shrink: 0;
}
.contact-item-text .label {
  font-size: 0.8rem;
  color: var(--lightOne);
  font-weight: 500;
  margin-bottom: 2px;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.contact-item-text .value {
  font-size: 1rem;
  font-weight: 600;
  color: var(--darkOne);
}

/* ===== MODAL ENHANCEMENTS ===== */
.modal-content { border-radius: 20px; border: none; overflow: hidden; }
.modal-header.grad { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none; }
</style>

<!-- HERO -->
<section class="page-hero">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <div class="hero-eyebrow">
          <i class="fas fa-robot"></i> Intelligence Artificielle
        </div>
        <h1>Centre d'<span class="highlight">Intelligence</span><br>Artificielle</h1>
        <p class="lead-text">
          Pionnier dans les solutions d'IA pour la communauté sourde et malentendante.
          Notre centre combine technologie de pointe et expertise pédagogique.
        </p>
      </div>
      <div class="col-lg-6">
        <div class="hero-img-box">
          <img src="images/ailogo.jpg" alt="Centre IA ENSSM">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="stats-bar">
  <div class="container">
    <div class="row g-4">
      <div class="col-6 col-md-3">
        <div class="stat-pill">
          <div class="num">2+</div>
          <div class="lbl">Projets IA</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-pill">
          <div class="num">10</div>
          <div class="lbl">Chercheurs</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-pill">
          <div class="num">3</div>
          <div class="lbl">Brevets en cours</div>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="stat-pill">
          <div class="num">100+</div>
          <div class="lbl">Étudiants formés</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PROJECTS -->
<section id="ai-projects" class="projects-section">
  <div class="container">
    <div class="section-head">
      <span class="overline">Recherche & Développement</span>
      <h2>Nos Projets IA</h2>
      <p>Des solutions innovantes développées par notre équipe pour révolutionner l'éducation inclusive.</p>
    </div>
    <div class="row g-4">
      <!-- Project 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="proj-card">
          <div class="proj-card-img">
            <img src="images/ai1.jpg" alt="AI pédagogique">
            <span class="proj-status status-beta">Bêta</span>
          </div>
          <div class="proj-card-body">
            <h3>AI Pédagogique</h3>
            <p>Un système intelligent qui suggère des activités pédagogiques adaptées aux apprenants souffrant de déficiences auditives.</p>
            <div class="tech-pills">
              <span class="tech-pill">Python</span>
              <span class="tech-pill">Machine Learning</span>
            </div>
            <button class="btn-card-link" data-bs-toggle="modal" data-bs-target="#projectModal1">
              En savoir plus <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Project 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="proj-card">
          <div class="proj-card-img">
            <img src="images/ai2.jpg" alt="Chatbot">
            <span class="proj-status status-active">Actif</span>
          </div>
          <div class="proj-card-body">
            <h3>Chatbot WhatsApp</h3>
            <p>Confirmation automatisée des commandes WhatsApp utilisant l'IA et n8n pour une gestion commerciale fluide.</p>
            <div class="tech-pills">
              <span class="tech-pill">Python</span>
              <span class="tech-pill">n8n</span>
              <span class="tech-pill">WhatsApp API</span>
            </div>
            <button class="btn-card-link" data-bs-toggle="modal" data-bs-target="#projectModal2">
              En savoir plus <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Project 3 -->
      <div class="col-lg-4 col-md-6 mx-auto">
        <div class="proj-card">
          <div class="proj-card-img">
            <img src="images/ai3.jpg" alt="AI Traduction">
            <span class="proj-status status-research">Recherche</span>
          </div>
          <div class="proj-card-body">
            <h3>AI Traduction</h3>
            <p>Traducteur intelligent en temps réel pour les dialectes de la langue des signes, utilisant la vision par ordinateur.</p>
            <div class="tech-pills">
              <span class="tech-pill">Python</span>
              <span class="tech-pill">C++</span>
              <span class="tech-pill">Flutter</span>
              <span class="tech-pill">Kotlin</span>
            </div>
            <button class="btn-card-link" data-bs-toggle="modal" data-bs-target="#projectModal3">
              En savoir plus <i class="fas fa-arrow-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TEAM -->
<section class="team-section">
  <div class="container">
    <div class="section-head">
      <span class="overline">Les Esprits Derrière l'Innovation</span>
      <h2>Notre Équipe</h2>
      <p>Des chercheurs et étudiants passionnés qui repoussent les frontières de l'IA.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-3 col-6">
        <div class="team-member-card">
          <img src="images/br.png" class="member-avatar" alt="Dr. Benachour">
          <h4>Dr. Benachour Redha</h4>
          <p class="role">Directeur, Recherche IA</p>
          <div class="member-social">
            <a href="https://www.linkedin.com/in/redha-benachour-cbap-mba-phd-433b0a50/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="team-member-card">
          <img src="images/fa.png" class="member-avatar" alt="Filali">
          <h4>Filali Abderrahmane</h4>
          <p class="role">Étudiant</p>
          <div class="member-social">
            <a href="https://www.linkedin.com/in/abderrahmane-filali-7b71872b5/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="team-member-card">
          <img src="images/da.png" class="member-avatar" alt="Djouabi">
          <h4>Djouabi Azzedine</h4>
          <p class="role">Étudiant</p>
          <div class="member-social">
            <a href="https://www.linkedin.com/in/azzedine-djouabi-05ba84339/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-6">
        <div class="team-member-card">
          <img src="images/ha.png" class="member-avatar" alt="Hamici">
          <h4>Hamici Amir</h4>
          <p class="role">Étudiant</p>
          <div class="member-social">
            <a href="https://www.linkedin.com/in/hamici-amir/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="ai-contact" class="contact-section">
  <div class="container">
    <div class="section-head">
      <span class="overline">Travaillons Ensemble</span>
      <h2>Collaborez Avec Nous</h2>
      <p>Intéressé par un partenariat ou pour en savoir plus sur nos initiatives IA ?</p>
    </div>
    <div class="contact-glass-card">
      <div class="row g-4 justify-content-center">
        <div class="col-md-4">
          <a href="mailto:ia-house@enssm.dz" class="contact-item text-decoration-none">
            <div class="contact-icon"><i class="fas fa-envelope"></i></div>
            <div class="contact-item-text">
              <div class="label">Email</div>
              <div class="value">ia-house@enssm.dz</div>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <div class="contact-item">
            <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
            <div class="contact-item-text">
              <div class="label">Téléphone</div>
              <div class="value">+213 0606060606</div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-item">
            <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div class="contact-item-text">
              <div class="label">Localisation</div>
              <div class="value">Bâtiment A, 1er étage, Salle AI</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MODALS -->
<div class="modal fade" id="projectModal1" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header grad">
        <h5 class="modal-title text-white"><i class="fas fa-robot me-2"></i>AI Pédagogique</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row g-4">
          <div class="col-md-5">
            <img src="images/ai1.jpg" class="img-fluid rounded-3 shadow" alt="AI pédagogique">
            <div class="d-flex gap-2 mt-3 flex-wrap">
              <span class="badge bg-success px-3 py-2">Bêta</span>
              <span class="badge bg-light text-dark px-3 py-2">Python</span>
            </div>
          </div>
          <div class="col-md-7">
            <h4 class="fw-bold mb-3">Description détaillée</h4>
            <p style="color:var(--lightOne); line-height:1.8;">Les apprenants malentendants ont souvent besoin d'activités pédagogiques adaptées, favorisant une communication efficace et un apprentissage accessible. Ce projet vise à développer un système intelligent capable de suggérer des activités pédagogiques appropriées aux élèves malentendants.</p>
            <h6 class="fw-bold mt-4 mb-2">📊 Statut actuel</h6>
            <div class="progress mb-1" style="height:8px; border-radius:10px;">
              <div class="progress-bar" style="width:50%; background:linear-gradient(135deg,#667eea,#764ba2);"></div>
            </div>
            <small class="text-muted">50% complété</small>
            <div class="mt-3">
              <p class="mb-1"><strong>Équipe :</strong> 2 étudiants</p>
              <p class="mb-0"><strong>Sortie prévue :</strong> Mai 2026</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer"><button class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Fermer</button></div>
    </div>
  </div>
</div>

<div class="modal fade" id="projectModal2" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header grad">
        <h5 class="modal-title text-white"><i class="fas fa-comment-dots me-2"></i>Chatbot WhatsApp</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row g-4">
          <div class="col-md-5">
            <img src="images/ai2.jpg" class="img-fluid rounded-3 shadow" alt="Chatbot">
            <div class="d-flex gap-2 mt-3 flex-wrap">
              <span class="badge bg-primary px-3 py-2">Actif</span>
              <span class="badge bg-light text-dark px-3 py-2">Python</span>
              <span class="badge bg-light text-dark px-3 py-2">n8n</span>
            </div>
          </div>
          <div class="col-md-7">
            <h4 class="fw-bold mb-3">Description détaillée</h4>
            <p style="color:var(--lightOne); line-height:1.8;">Une plateforme par abonnement permettant aux marchands de créer un compte et de se connecter à leur tableau de bord. Le système gère automatiquement les échanges WhatsApp avec les clients : confirmation des commandes et collecte des informations nécessaires.</p>
            <h6 class="fw-bold mt-4 mb-2">📊 Statut actuel</h6>
            <div class="progress mb-1" style="height:8px; border-radius:10px;">
              <div class="progress-bar" style="width:75%; background:linear-gradient(135deg,#667eea,#764ba2);"></div>
            </div>
            <small class="text-muted">75% complété</small>
            <div class="mt-3">
              <p class="mb-1"><strong>Équipe :</strong> 4 étudiants</p>
              <p class="mb-0"><strong>Sortie prévue :</strong> Mai 2026</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer"><button class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Fermer</button></div>
    </div>
  </div>
</div>

<div class="modal fade" id="projectModal3" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header grad">
        <h5 class="modal-title text-white"><i class="fas fa-language me-2"></i>AI Traduction</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row g-4">
          <div class="col-md-5">
            <img src="images/ai3.jpg" class="img-fluid rounded-3 shadow" alt="AI Traduction">
            <div class="d-flex gap-2 mt-3 flex-wrap">
              <span class="badge" style="background:#ffc107;color:#212529;" class="px-3 py-2">Recherche</span>
              <span class="badge bg-light text-dark px-3 py-2">Python</span>
              <span class="badge bg-light text-dark px-3 py-2">Flutter</span>
            </div>
          </div>
          <div class="col-md-7">
            <h4 class="fw-bold mb-3">Description détaillée</h4>
            <p style="color:var(--lightOne); line-height:1.8;">Ce projet vise à développer un traducteur intelligent en temps réel pour les dialectes de la langue des signes. Le système capture la vidéo en direct du signeur, extrait les points clés du corps et des mains, et utilise un modèle d'apprentissage profond pour reconnaître les signes.</p>
            <h6 class="fw-bold mt-4 mb-2">📊 Statut actuel</h6>
            <div class="progress mb-1" style="height:8px; border-radius:10px;">
              <div class="progress-bar" style="width:15%; background:linear-gradient(135deg,#ffc107,#ff8c00);"></div>
            </div>
            <small class="text-muted">15% complété</small>
            <div class="mt-3">
              <p class="mb-1"><strong>Équipe :</strong> 2 étudiants</p>
              <p class="mb-0"><strong>Sortie prévue :</strong> Avril 2027</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer"><button class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Fermer</button></div>
    </div>
  </div>
</div>

<?php include('shared/_footer.php'); ?>
</div>
</main>
</body>
</html>