// ============ ENSSM CHATBOT ============
(function () {
  'use strict';

  // ---- Knowledge Base ----
  const KB = [
    {
      keywords: ['bonjour', 'salut', 'hello', 'hi', 'bonsoir', 'good'],
      response: "👋 Bonjour ! Je suis l'assistant virtuel de l'<strong>ENSSM</strong>. Comment puis-je vous aider aujourd'hui ?",
    },
    {
      keywords: ['enssm', 'école', 'institution', "c'est quoi", 'présente', 'present', 'info'],
      response: "🏫 L'<strong>ENSSM</strong> (École Nationale Supérieure des Sourds-Muets) est basée à Beni Messous, Alger. C'est la seule institution en Algérie dédiée à la formation d'enseignants spécialisés pour les sourds et malentendants.",
    },
    {
      keywords: ['formation', 'programme', 'discipline', 'cycle', 'cursus', 'étude', 'study'],
      response: "📚 L'ENSSM propose <strong>15 disciplines spécialisées</strong> destinées à la formation d'enseignants. Les formations couvrent la pédagogie spécialisée, la langue des signes, la psychologie, et bien plus encore.",
    },
    {
      keywords: ['admission', 'inscri', 'candidat', 'dossier', 'concours', 'entrer'],
      response: "📝 Pour les <strong>admissions</strong>, les candidats doivent généralement passer par un concours national. Contactez-nous via <a href='mailto:contact@enssm.dz'>contact@enssm.dz</a> pour les dates et les conditions d'inscription.",
    },
    {
      keywords: ['contact', 'email', 'téléphone', 'adresse', 'joindre', 'mail'],
      response: "📬 Vous pouvez nous contacter :<br>📧 <strong>contact@enssm.dz</strong><br>📍 <strong>Beni Messous, Alger, Algérie</strong><br>📞 <strong>+213 (0) 23 12 34 56</strong>",
    },
    {
      keywords: ['localisation', 'adresse', 'où', 'ou', 'situé', 'beni messous', 'location', 'maps'],
      response: "📍 L'ENSSM est située à <strong>Beni Messous, Alger</strong>. Vous pouvez voir notre localisation directement sur la carte en bas de la page.",
    },
    {
      keywords: ['langue des signes', 'signe', 'lsf', 'langue', 'sign language'],
      response: "🤟 La <strong>Langue des Signes Algérienne (LSA)</strong> est au cœur de nos formations. Nos enseignants sont formés pour enseigner et utiliser la langue des signes dans des contextes pédagogiques.",
    },
    {
      keywords: ['événement', 'evenement', 'actualité', 'actu', 'agenda', 'calendrier', 'event'],
      response: "🗓️ Des événements importants sont prévus :<br>🎓 <strong>Cérémonie de remise des diplômes</strong> – 15 juillet 2026<br>🏫 <strong>Journée Portes Ouvertes</strong> – 20 août 2026<br>🤟 <strong>Atelier Langue des Signes</strong> – 5-7 septembre 2026",
    },
    {
      keywords: ['merci', 'super', 'parfait', 'excellent', 'bravo', 'thank', 'شكرا'],
      response: "😊 De rien ! N'hésitez pas si vous avez d'autres questions. Je suis là pour vous aider !",
    },
    {
      keywords: ['au revoir', 'bye', 'salut', 'ciao', 'bonne nuit'],
      response: "👋 Au revoir ! Bonne journée et n'hésitez pas à revenir nous voir. À bientôt ! 🌟",
    },
    {
      keywords: ['هل', 'ما', 'من', 'كيف', 'أين', 'مرحبا', 'السلام'],
      response: "مرحبًا! 👋 أنا المساعد الافتراضي لـ <strong>ENSSM</strong>. نعتذر، الخدمة متاحة بالفرنسية والإنجليزية في الوقت الحالي. يسعدنا مساعدتك!",
    },
  ];

  // ---- Default fallback ----
  const FALLBACK = "🤔 Je n'ai pas tout à fait compris. Essayez de me demander :<br>• <i>Qu'est-ce que l'ENSSM ?</i><br>• <i>Quels sont les programmes ?</i><br>• <i>Comment contacter l'école ?</i>";

  // ---- Typing suggestions ----
  const SUGGESTIONS = [
    "Présentez-vous 👋",
    "Quels sont les programmes ? 📚",
    "Comment s'inscrire ? 📝",
    "Nos événements 🗓️",
    "Contact & Adresse 📍",
  ];

  // ---- BOT Logic ----
  function getResponse(msg) {
    const lc = msg.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
    for (const item of KB) {
      if (item.keywords.some(kw => lc.includes(kw))) {
        return item.response;
      }
    }
    return FALLBACK;
  }

  // ---- Render chat widget ----
  function buildWidget() {
    const style = document.createElement('style');
    style.textContent = `
      /* ===== CHATBOT WIDGET ===== */
      #enssm-chat-toggle {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, #64bcf4, #4a90e2);
        box-shadow: 0 8px 30px rgba(100, 188, 244, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border: none;
        z-index: 9999;
        transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.3s ease;
        outline: none;
      }
      #enssm-chat-toggle:hover {
        transform: scale(1.1);
        box-shadow: 0 12px 40px rgba(100, 188, 244, 0.7);
      }
      #enssm-chat-toggle .chat-icon,
      #enssm-chat-toggle .close-icon {
        font-size: 1.5rem;
        color: #fff;
        position: absolute;
        transition: opacity 0.25s ease, transform 0.25s ease;
      }
      #enssm-chat-toggle .close-icon {
        opacity: 0;
        transform: rotate(-90deg) scale(0.5);
      }
      #enssm-chat-toggle.open .chat-icon {
        opacity: 0;
        transform: rotate(90deg) scale(0.5);
      }
      #enssm-chat-toggle.open .close-icon {
        opacity: 1;
        transform: rotate(0deg) scale(1);
      }

      /* Notification dot */
      .chat-notif-dot {
        position: absolute;
        top: 2px;
        right: 2px;
        width: 14px;
        height: 14px;
        background: #e74c3c;
        border-radius: 50%;
        border: 2px solid #fff;
        animation: pulse-dot 2s infinite;
      }
      @keyframes pulse-dot {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.3); }
      }
      #enssm-chat-toggle.open .chat-notif-dot { display: none; }

      /* Chat Window */
      #enssm-chat-window {
        position: fixed;
        bottom: 105px;
        right: 30px;
        width: 380px;
        max-height: 520px;
        background: #0f172a;
        border-radius: 24px;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.4), 0 0 0 1px rgba(255,255,255,0.06);
        display: flex;
        flex-direction: column;
        overflow: hidden;
        z-index: 9998;
        transform: scale(0.9) translateY(20px);
        opacity: 0;
        pointer-events: none;
        transform-origin: bottom right;
        transition: transform 0.35s cubic-bezier(0.175, 0.885, 0.32, 1.275), opacity 0.3s ease;
      }
      #enssm-chat-window.visible {
        transform: scale(1) translateY(0);
        opacity: 1;
        pointer-events: all;
      }

      /* Header */
      .chat-header {
        background: linear-gradient(135deg, #1e3a5f, #162938);
        padding: 18px 20px;
        display: flex;
        align-items: center;
        gap: 12px;
        border-bottom: 1px solid rgba(255,255,255,0.06);
        flex-shrink: 0;
      }
      .chat-avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: linear-gradient(135deg, #64bcf4, #4a90e2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        flex-shrink: 0;
        position: relative;
      }
      .chat-avatar::after {
        content: '';
        position: absolute;
        bottom: 2px;
        right: 2px;
        width: 10px;
        height: 10px;
        background: #2ecc71;
        border-radius: 50%;
        border: 2px solid #1e3a5f;
      }
      .chat-header-info h4 {
        font-family: 'Poppins', sans-serif;
        font-size: 0.95rem;
        font-weight: 700;
        color: #f8fafc;
        margin: 0 0 2px;
      }
      .chat-header-info p {
        font-size: 0.75rem;
        color: #64bcf4;
        margin: 0;
        font-weight: 500;
      }
      .chat-header-actions {
        margin-left: auto;
        display: flex;
        gap: 8px;
      }
      .chat-header-btn {
        width: 30px;
        height: 30px;
        background: rgba(255,255,255,0.05);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 8px;
        color: #cbd5e1;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.75rem;
        cursor: pointer;
        transition: background 0.2s;
      }
      .chat-header-btn:hover { background: rgba(255,255,255,0.1); }

      /* Quick suggestions */
      .chat-suggestions {
        padding: 12px 16px;
        display: flex;
        gap: 8px;
        overflow-x: auto;
        scrollbar-width: none;
        border-bottom: 1px solid rgba(255,255,255,0.05);
        flex-shrink: 0;
      }
      .chat-suggestions::-webkit-scrollbar { display: none; }
      .suggestion-chip {
        background: rgba(100, 188, 244, 0.08);
        border: 1px solid rgba(100, 188, 244, 0.2);
        color: #94a3b8;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.75rem;
        white-space: nowrap;
        cursor: pointer;
        transition: all 0.2s ease;
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
      }
      .suggestion-chip:hover {
        background: rgba(100, 188, 244, 0.15);
        color: #64bcf4;
        border-color: rgba(100, 188, 244, 0.4);
        transform: translateY(-1px);
      }

      /* Messages */
      .chat-messages {
        flex: 1;
        overflow-y: auto;
        padding: 16px;
        display: flex;
        flex-direction: column;
        gap: 14px;
        scroll-behavior: smooth;
      }
      .chat-messages::-webkit-scrollbar { width: 4px; }
      .chat-messages::-webkit-scrollbar-track { background: transparent; }
      .chat-messages::-webkit-scrollbar-thumb {
        background: rgba(255,255,255,0.1);
        border-radius: 4px;
      }

      /* Message Bubbles */
      .msg-row {
        display: flex;
        gap: 10px;
        animation: msg-in 0.3s ease both;
      }
      @keyframes msg-in {
        from { opacity: 0; transform: translateY(10px); }
        to   { opacity: 1; transform: translateY(0); }
      }
      .msg-row.user { flex-direction: row-reverse; }
      .msg-avatar-small {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.85rem;
        flex-shrink: 0;
        align-self: flex-end;
      }
      .msg-avatar-small.bot-av {
        background: linear-gradient(135deg, #64bcf4, #4a90e2);
      }
      .msg-avatar-small.user-av {
        background: linear-gradient(135deg, #667eea, #764ba2);
      }
      .bubble {
        max-width: 75%;
        padding: 10px 16px;
        border-radius: 18px;
        font-size: 0.875rem;
        line-height: 1.55;
        font-family: 'Poppins', sans-serif;
      }
      .bubble.bot {
        background: #1e293b;
        color: #e2e8f0;
        border-radius: 18px 18px 18px 4px;
        border: 1px solid rgba(255,255,255,0.06);
      }
      .bubble.bot a {
        color: #64bcf4;
        text-decoration: underline;
      }
      .bubble.user {
        background: linear-gradient(135deg, #64bcf4, #4a90e2);
        color: #fff;
        border-radius: 18px 18px 4px 18px;
        align-self: flex-end;
      }

      /* Typing indicator */
      .typing-indicator {
        display: flex;
        align-items: center;
        gap: 5px;
        padding: 10px 16px;
      }
      .typing-dot {
        width: 8px;
        height: 8px;
        background: #64bcf4;
        border-radius: 50%;
        animation: typing 1.2s infinite;
        opacity: 0.6;
      }
      .typing-dot:nth-child(2) { animation-delay: 0.2s; }
      .typing-dot:nth-child(3) { animation-delay: 0.4s; }
      @keyframes typing {
        0%, 100% { transform: translateY(0); opacity: 0.4; }
        50%       { transform: translateY(-6px); opacity: 1; }
      }

      /* Input bar */
      .chat-input-bar {
        padding: 14px 16px;
        display: flex;
        align-items: center;
        gap: 10px;
        border-top: 1px solid rgba(255,255,255,0.06);
        background: #0f172a;
        flex-shrink: 0;
      }
      #chat-input {
        flex: 1;
        background: #1e293b;
        border: 1px solid rgba(255,255,255,0.08);
        border-radius: 14px;
        padding: 10px 16px;
        color: #f8fafc;
        font-family: 'Poppins', sans-serif;
        font-size: 0.875rem;
        outline: none;
        transition: border-color 0.2s;
        resize: none;
        min-height: 42px;
        max-height: 100px;
        overflow-y: auto;
      }
      #chat-input::placeholder { color: #475569; }
      #chat-input:focus { border-color: rgba(100, 188, 244, 0.4); }
      #chat-send-btn {
        width: 42px;
        height: 42px;
        background: linear-gradient(135deg, #64bcf4, #4a90e2);
        border: none;
        border-radius: 12px;
        color: #fff;
        font-size: 1rem;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        transition: transform 0.2s, box-shadow 0.2s;
      }
      #chat-send-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(100, 188, 244, 0.4);
      }
      #chat-send-btn:active { transform: scale(0.95); }
      .chat-footer-label {
        text-align: center;
        font-size: 0.65rem;
        color: #334155;
        padding: 0 16px 10px;
        font-family: 'Poppins', sans-serif;
      }

      /* Mobile */
      @media (max-width: 480px) {
        #enssm-chat-window {
          width: calc(100vw - 20px);
          right: 10px;
          bottom: 90px;
        }
        #enssm-chat-toggle {
          right: 20px;
          bottom: 20px;
        }
      }
    `;
    document.head.appendChild(style);

    // --- HTML ---
    const html = `
      <button id="enssm-chat-toggle" aria-label="Ouvrir le chatbot">
        <span class="chat-notif-dot"></span>
        <i class="fas fa-comment-dots chat-icon"></i>
        <i class="fas fa-times close-icon"></i>
      </button>

      <div id="enssm-chat-window" role="dialog" aria-label="Assistant ENSSM">
        <div class="chat-header">
          <div class="chat-avatar">🎓</div>
          <div class="chat-header-info">
            <h4>Assistant ENSSM</h4>
            <p>● En ligne &mdash; Répond instantanément</p>
          </div>
          <div class="chat-header-actions">
            <button class="chat-header-btn" id="chat-clear-btn" title="Effacer la conversation">
              <i class="fas fa-trash-alt"></i>
            </button>
          </div>
        </div>

        <div class="chat-suggestions" id="chat-suggestions"></div>

        <div class="chat-messages" id="chat-messages"></div>

        <div class="chat-input-bar">
          <textarea id="chat-input" placeholder="Posez votre question…" rows="1"></textarea>
          <button id="chat-send-btn" aria-label="Envoyer">
            <i class="fas fa-paper-plane"></i>
          </button>
        </div>
        <p class="chat-footer-label">🔒 Propulsé par ENSSM &bull; Réponses automatiques</p>
      </div>
    `;
    const wrapper = document.createElement('div');
    wrapper.innerHTML = html;
    document.body.appendChild(wrapper);

    // --- References ---
    const toggle      = document.getElementById('enssm-chat-toggle');
    const chatWindow  = document.getElementById('enssm-chat-window');
    const msgContainer= document.getElementById('chat-messages');
    const inputEl     = document.getElementById('chat-input');
    const sendBtn     = document.getElementById('chat-send-btn');
    const clearBtn    = document.getElementById('chat-clear-btn');
    const suggsEl     = document.getElementById('chat-suggestions');

    // --- Populate suggestions ---
    SUGGESTIONS.forEach(s => {
      const chip = document.createElement('button');
      chip.className = 'suggestion-chip';
      chip.textContent = s;
      chip.addEventListener('click', () => sendMessage(s));
      suggsEl.appendChild(chip);
    });

    // --- Helpers ---
    function appendMessage(content, type) {
      const row = document.createElement('div');
      row.className = `msg-row ${type}`;

      const av = document.createElement('div');
      av.className = `msg-avatar-small ${type === 'bot' ? 'bot-av' : 'user-av'}`;
      av.innerHTML = type === 'bot' ? '🎓' : '👤';

      const bubble = document.createElement('div');
      bubble.className = `bubble ${type}`;
      bubble.innerHTML = content;

      row.appendChild(av);
      row.appendChild(bubble);
      msgContainer.appendChild(row);
      msgContainer.scrollTop = msgContainer.scrollHeight;
      return row;
    }

    function showTyping() {
      const row = document.createElement('div');
      row.className = 'msg-row bot';
      row.id = 'typing-row';
      const av = document.createElement('div');
      av.className = 'msg-avatar-small bot-av';
      av.innerHTML = '🎓';
      const indicator = document.createElement('div');
      indicator.className = 'typing-indicator';
      indicator.innerHTML = '<div class="typing-dot"></div><div class="typing-dot"></div><div class="typing-dot"></div>';
      row.appendChild(av);
      row.appendChild(indicator);
      msgContainer.appendChild(row);
      msgContainer.scrollTop = msgContainer.scrollHeight;
    }

    function removeTyping() {
      const existing = document.getElementById('typing-row');
      if (existing) existing.remove();
    }

    function sendMessage(text) {
      const msg = (text || inputEl.value).trim();
      if (!msg) return;
      inputEl.value = '';
      inputEl.style.height = 'auto';

      appendMessage(msg, 'user');

      showTyping();
      setTimeout(() => {
        removeTyping();
        appendMessage(getResponse(msg), 'bot');
      }, 700 + Math.random() * 500);
    }

    // --- Events ---
    toggle.addEventListener('click', () => {
      toggle.classList.toggle('open');
      chatWindow.classList.toggle('visible');
      if (chatWindow.classList.contains('visible')) inputEl.focus();
    });

    sendBtn.addEventListener('click', () => sendMessage());
    inputEl.addEventListener('keydown', e => {
      if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        sendMessage();
      }
    });

    // Auto-resize textarea
    inputEl.addEventListener('input', () => {
      inputEl.style.height = 'auto';
      inputEl.style.height = Math.min(inputEl.scrollHeight, 100) + 'px';
    });

    clearBtn.addEventListener('click', () => {
      msgContainer.innerHTML = '';
      setTimeout(() => greet(), 200);
    });

    // --- Greeting ---
    function greet() {
      setTimeout(() => {
        appendMessage("👋 Bonjour ! Je suis l'<strong>assistant virtuel ENSSM</strong>.<br>Comment puis-je vous aider aujourd'hui ? Vous pouvez me poser des questions sur nos <i>formations</i>, <i>admissions</i>, <i>événements</i> ou <i>contacts</i>.", 'bot');
      }, 400);
    }

    greet();
  }

  // --- Mount after DOM ready ---
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', buildWidget);
  } else {
    buildWidget();
  }
})();
