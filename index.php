<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
  #rr-root, #rr-root * { all: revert; }
  #rr-root *, #rr-root *::before, #rr-root *::after {
    box-sizing: border-box !important; margin: 0 !important; padding: 0 !important;
    border: 0 !important; outline: 0 !important; font-size: 100% !important; vertical-align: baseline !important;
  }
  body.page #rr-root, body.single #rr-root, .entry-content #rr-root, .wp-block-html #rr-root, #rr-root {
    display: block !important; font-family: 'Plus Jakarta Sans', sans-serif !important;
    background: #08080E !important; color: #F0EEE8 !important; overflow-x: hidden !important;
    width: 100% !important; max-width: 100% !important; margin: 0 !important; padding: 0 !important; line-height: 1.5 !important;
  }
  .entry-content, .post-content, .page-content, .wp-block-html, .wp-block-group, .site-main, article.page, .hentry {
    max-width: 100% !important; padding: 0 !important; margin: 0 !important;
  }
  @keyframes rocketFloat { 0%,100% { transform: translateY(0) rotate(-5deg); } 50% { transform: translateY(-18px) rotate(-5deg); } }
  @keyframes orbit  { from { transform: rotate(0deg) translateX(90px) rotate(0deg); } to { transform: rotate(360deg) translateX(90px) rotate(-360deg); } }
  @keyframes orbit2 { from { transform: rotate(0deg) translateX(140px) rotate(0deg); } to { transform: rotate(360deg) translateX(140px) rotate(-360deg); } }
  @keyframes shimmer { 0% { background-position: -200% center; } 100% { background-position: 200% center; } }
  #rr-root .rr-fade { opacity: 0 !important; transform: translateY(40px) !important; transition: opacity 0.7s ease, transform 0.7s ease !important; }
  #rr-root .rr-fade.visible { opacity: 1 !important; transform: translateY(0) !important; }
  #rr-root .rr-fade.d1 { transition-delay: .1s !important; }
  #rr-root .rr-fade.d2 { transition-delay: .2s !important; }
  #rr-root .rr-fade.d3 { transition-delay: .3s !important; }
  #rr-root .rr-fade.d4 { transition-delay: .4s !important; }
  #rr-root .rr-rocket-anim { animation: rocketFloat 3s ease-in-out infinite !important; display: inline-block !important; }
  #rr-root .rr-orbit  { animation: orbit 12s linear infinite !important; position: absolute !important; width: 10px !important; height: 10px !important; background: #FF2D00 !important; border-radius: 50% !important; opacity: .6 !important; }
  #rr-root .rr-orbit2 { animation: orbit2 8s linear infinite reverse !important; position: absolute !important; width: 6px !important; height: 6px !important; background: #FFB800 !important; border-radius: 50% !important; opacity: .4 !important; }
  #rr-root .rr-shimmer { background: linear-gradient(90deg,#F0EEE8 0%,#FFB800 50%,#F0EEE8 100%) !important; background-size: 200% auto !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; background-clip: text !important; animation: shimmer 4s linear infinite !important; }
  #rr-root .rr-glow { text-shadow: 0 0 60px rgba(255,45,0,.5) !important; }
  #rr-root .rr-grid-bg { background-image: linear-gradient(rgba(255,255,255,.03) 1px,transparent 1px), linear-gradient(90deg,rgba(255,255,255,.03) 1px,transparent 1px) !important; background-size: 60px 60px !important; }
  #rr-noise { position: fixed !important; top: 0 !important; left: 0 !important; width: 100% !important; height: 100% !important; pointer-events: none !important; z-index: 0 !important; opacity: .025 !important; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E") !important; background-size: 150px !important; }
  #rr-header { position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; z-index: 9999 !important; padding: 20px 40px !important; display: flex !important; align-items: center !important; justify-content: space-between !important; transition: all .4s !important; background: transparent !important; }
  #rr-header.solid { background: rgba(8,8,14,.95) !important; backdrop-filter: blur(20px) !important; border-bottom: 1px solid rgba(255,255,255,.05) !important; }
  #rr-root .rr-logo { display: flex !important; align-items: center !important; gap: 10px !important; font-family: 'Bebas Neue', cursive !important; font-size: 22px !important; letter-spacing: .1em !important; color: #F0EEE8 !important; }
  #rr-root .rr-btn { background: #FF2D00 !important; color: white !important; border: none !important; border-radius: 50px !important; padding: 16px 36px !important; font-family: 'Plus Jakarta Sans', sans-serif !important; font-size: 15px !important; font-weight: 700 !important; cursor: pointer !important; transition: all .3s !important; display: inline-block !important; line-height: 1 !important; text-decoration: none !important; }
  #rr-root .rr-btn:hover { background: #FF4500 !important; transform: translateY(-2px) !important; box-shadow: 0 10px 40px rgba(255,45,0,.4) !important; }
  #rr-root .rr-btn-sm { padding: 11px 24px !important; font-size: 13px !important; }
  #rr-root .rr-btn-outline { background: transparent !important; color: #F0EEE8 !important; border: 1.5px solid rgba(240,238,232,.3) !important; border-radius: 50px !important; padding: 14px 32px !important; font-family: 'Plus Jakarta Sans', sans-serif !important; font-size: 14px !important; font-weight: 600 !important; cursor: pointer !important; transition: all .3s !important; line-height: 1 !important; }
  #rr-root .rr-badge { display: inline-block !important; background: rgba(255,45,0,.15) !important; border: 1px solid rgba(255,45,0,.4) !important; color: #FF6B35 !important; font-size: 11px !important; font-weight: 700 !important; letter-spacing: .12em !important; padding: 5px 14px !important; border-radius: 50px !important; text-transform: uppercase !important; font-family: 'Plus Jakarta Sans', sans-serif !important; line-height: 1.5 !important; }
  #rr-hero { min-height: 100vh !important; display: flex !important; align-items: center !important; justify-content: center !important; padding: 120px 40px 80px !important; position: relative !important; overflow: hidden !important; }
  #rr-root .rr-h1 { font-family: 'Bebas Neue', cursive !important; font-size: clamp(64px,10vw,120px) !important; line-height: .9 !important; letter-spacing: .02em !important; }
  #rr-root .rr-stats { display: flex !important; gap: 48px !important; justify-content: center !important; margin-top: 72px !important; flex-wrap: wrap !important; }
  #rr-root .rr-stat-val { font-family: 'Bebas Neue', cursive !important; font-size: clamp(36px,5vw,60px) !important; color: #FF2D00 !important; line-height: 1 !important; }
  #rr-root .rr-stat-lbl { font-size: 12px !important; color: rgba(240,238,232,.4) !important; letter-spacing: .08em !important; text-transform: uppercase !important; }
  #rr-root .rr-section { padding: 100px 40px !important; display: block !important; }
  #rr-root .rr-section-inner { max-width: 1100px !important; margin: 0 auto !important; display: block !important; }
  #rr-root .rr-section-alt { background: rgba(255,255,255,.015) !important; }
  #rr-root .rr-h2 { font-family: 'Bebas Neue', cursive !important; font-size: clamp(40px,6vw,72px) !important; letter-spacing: .03em !important; line-height: 1 !important; color: #F0EEE8 !important; }
  #rr-root .rr-pain-grid { display: grid !important; grid-template-columns: repeat(auto-fit,minmax(280px,1fr)) !important; gap: 24px !important; }
  #rr-root .rr-card { background: rgba(255,255,255,.03) !important; border: 1px solid rgba(255,255,255,.08) !important; border-radius: 20px !important; padding: 36px 32px !important; transition: all .3s !important; display: block !important; }
  #rr-root .rr-tab { background: none !important; border: 1px solid rgba(240,238,232,.15) !important; border-radius: 50px !important; padding: 10px 22px !important; color: rgba(240,238,232,.5) !important; font-family: 'Plus Jakarta Sans', sans-serif !important; font-size: 13px !important; font-weight: 600 !important; cursor: pointer !important; transition: all .3s !important; line-height: 1 !important; }
  #rr-root .rr-tab.active { border-color: #FF2D00 !important; color: #F0EEE8 !important; background: rgba(255,45,0,.12) !important; }
  #rr-root .rr-pack-detail { display: grid !important; grid-template-columns: 1fr 1fr !important; gap: 32px !important; border-radius: 24px !important; padding: 48px !important; }
  #rr-root .rr-pack-highlight { background: linear-gradient(135deg,rgba(255,45,0,.1),rgba(255,107,53,.05)) !important; border: 1px solid rgba(255,45,0,.3) !important; }
  #rr-root .rr-pack-normal { background: rgba(255,255,255,.03) !important; border: 1px solid rgba(255,255,255,.08) !important; }
  #rr-root .rr-pack-name { font-family: 'Bebas Neue', cursive !important; font-size: 52px !important; letter-spacing: .05em !important; line-height: 1 !important; }
  #rr-root .rr-pack-price-big { font-family: 'Bebas Neue', cursive !important; font-size: 72px !important; letter-spacing: .02em !important; line-height: 1 !important; }
  #rr-root .rr-service-check { display: flex !important; align-items: center !important; gap: 10px !important; padding: 8px 0 !important; border-bottom: 1px solid rgba(240,238,232,.06) !important; font-size: 14px !important; color: rgba(240,238,232,.85) !important; }
  #rr-root .rr-mini-cards { display: grid !important; grid-template-columns: repeat(3,1fr) !important; gap: 16px !important; margin-top: 24px !important; }
  #rr-root .rr-mini-card { border-radius: 16px !important; padding: 24px !important; border: 1px solid rgba(255,255,255,.07) !important; background: rgba(255,255,255,.02) !important; cursor: pointer !important; transition: all .3s !important; text-align: center !important; display: block !important; }
  #rr-root .rr-mini-card.active { border-color: #FF2D00 !important; background: rgba(255,45,0,.06) !important; }
  #rr-root .rr-step { display: flex !important; gap: 32px !important; margin-bottom: 8px !important; }
  #rr-root .rr-step-num { width: 56px !important; height: 56px !important; border-radius: 50% !important; border: 1px solid rgba(255,45,0,.4) !important; background: rgba(255,45,0,.08) !important; display: flex !important; align-items: center !important; justify-content: center !important; font-family: 'Bebas Neue', cursive !important; font-size: 20px !important; color: #FF2D00 !important; flex-shrink: 0 !important; }
  #rr-root .rr-step-line { width: 1px !important; height: 60px !important; background: linear-gradient(to bottom,rgba(255,45,0,.6),transparent) !important; margin: 0 auto !important; }
  #rr-root .rr-testi-grid { display: grid !important; grid-template-columns: repeat(auto-fit,minmax(280px,1fr)) !important; gap: 24px !important; }
  #rr-root .rr-stars { display: flex !important; gap: 3px !important; margin-bottom: 16px !important; color: #FFB800 !important; font-size: 16px !important; }
  #rr-root .rr-avatar { width: 40px !important; height: 40px !important; border-radius: 50% !important; background: linear-gradient(135deg,#FF2D00,#FFB800) !important; display: flex !important; align-items: center !important; justify-content: center !important; font-size: 16px !important; font-weight: 700 !important; color: white !important; flex-shrink: 0 !important; }
  #rr-cta { padding: 120px 40px !important; text-align: center !important; position: relative !important; overflow: hidden !important; }
  #rr-footer { border-top: 1px solid rgba(255,255,255,.06) !important; padding: 48px 40px !important; display: flex !important; justify-content: space-between !important; align-items: center !important; flex-wrap: wrap !important; gap: 24px !important; max-width: 1100px !important; margin: 0 auto !important; }
  @media (max-width: 768px) {
    #rr-header { padding: 16px 20px !important; }
    #rr-hero { padding: 100px 20px 60px !important; }
    #rr-root .rr-section { padding: 70px 20px !important; }
    #rr-root .rr-pack-detail { grid-template-columns: 1fr !important; padding: 28px !important; }
  }
</style>
</head>
<body>
<div id="rr-root">
  <div id="rr-noise"></div>
  <header id="rr-header">
    <div class="rr-logo">&#128640; REACH ROCKET</div>
    <nav style="display:flex;gap:32px;align-items:center">
      <a href="#rr-systemes" style="color:rgba(240,238,232,.6);font-size:14px;font-weight:500;font-family:'Plus Jakarta Sans',sans-serif">Systemes</a>
      <a href="#rr-process" style="color:rgba(240,238,232,.6);font-size:14px;font-weight:500;font-family:'Plus Jakarta Sans',sans-serif">Processus</a>
      <a href="#rr-temoignages" style="color:rgba(240,238,232,.6);font-size:14px;font-weight:500;font-family:'Plus Jakarta Sans',sans-serif">Temoignages</a>
      <button class="rr-btn rr-btn-sm" onclick="window.location.href='mailto:ludovic.freelance@gmail.com'">Appel gratuit &rarr;</button>
    </nav>
  </header>
  <section id="rr-hero" class="rr-grid-bg">
    <div style="position:absolute;top:20%;left:50%;transform:translateX(-50%);width:600px;height:600px;border-radius:50%;background:radial-gradient(circle,rgba(255,45,0,.08) 0%,transparent 70%);pointer-events:none"></div>
    <div style="max-width:900px;text-align:center;position:relative;z-index:2">
      <div class="rr-fade"><span class="rr-badge">Agence Marketing Systemique</span></div>
      <div class="rr-fade d1" style="margin:32px 0 24px">
        <div class="rr-rocket-anim" style="font-size:80px;margin-bottom:16px">&#128640;</div>
        <h1 class="rr-h1">
          <span class="rr-glow" style="color:#FF2D00">Pas</span> <span>un service.</span><br>
          <span class="rr-shimmer">Un systeme.</span>
        </h1>
      </div>
      <div class="rr-fade d2">
        <p style="font-size:clamp(16px,2vw,20px);color:rgba(240,238,232,.6);line-height:1.7;max-width:640px;margin:0 auto 40px">
          Arretez de payer pour des briques qui ne s'assemblent pas.
          On construit votre machine a clients - site, SEO, pubs, reseaux -
          <strong style="color:#F0EEE8">coherente, connectee, mesurable.</strong>
        </p>
      </div>
      <div class="rr-fade d3" style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
        <button class="rr-btn" style="font-size:16px;padding:18px 40px" onclick="document.getElementById('rr-systemes').scrollIntoView({behavior:'smooth'})">Voir les systemes &rarr;</button>
        <button class="rr-btn-outline" onclick="window.location.href='tel:+33664487401'">&#128222; Appel decouverte gratuit</button>
      </div>
      <div class="rr-stats rr-fade d4">
        <div><div class="rr-stat-val">3 cibles</div><div class="rr-stat-lbl">Artisans, PME, Startups</div></div>
        <div><div class="rr-stat-val">100%</div><div class="rr-stat-lbl">Systeme integre</div></div>
        <div><div class="rr-stat-val">des 149/mois</div><div class="rr-stat-lbl">Sans engagement</div></div>
      </div>
    </div>
  </section>
  <section class="rr-section">
    <div class="rr-section-inner">
      <div style="text-align:center;margin-bottom:64px" class="rr-fade">
        <span class="rr-badge" style="margin-bottom:20px;display:inline-block">Le vrai probleme</span>
        <h2 class="rr-h2">Pourquoi votre marketing<br><span style="color:#FF2D00">ne fonctionne pas.</span></h2>
      </div>
      <div class="rr-pain-grid">
        <div class="rr-card rr-fade d1">
          <div style="font-size:36px;margin-bottom:20px">&#9881;&#65039;</div>
          <h3 style="font-size:18px;font-weight:700;margin-bottom:12px">Des services qui ne se parlent pas</h3>
          <p style="font-size:14px;color:rgba(240,238,232,.55);line-height:1.7">Un SEO sans site optimise, c'est un moteur sans carburant. Un site sans trafic, c'est une vitrine dans le desert.</p>
        </div>
        <div class="rr-card rr-fade d2">
          <div style="font-size:36px;margin-bottom:20px">&#128184;</div>
          <h3 style="font-size:18px;font-weight:700;margin-bottom:12px">Plusieurs prestataires = chaos</h3>
          <p style="font-size:14px;color:rgba(240,238,232,.55);line-height:1.7">Freelance pour le site, agence pour les pubs, consultant pour l'Insta... personne ne coordonne. Vous payez tout, vous obtenez rien.</p>
        </div>
        <div class="rr-card rr-fade d3">
          <div style="font-size:36px;margin-bottom:20px">&#128202;</div>
          <h3 style="font-size:18px;font-weight:700;margin-bottom:12px">Pas de resultats mesurables</h3>
          <p style="font-size:14px;color:rgba(240,238,232,.55);line-height:1.7">Des promesses, des rapports incomprehensibles, et toujours la meme question : mais est-ce que ca marche vraiment ?</p>
        </div>
      </div>
      <div style="margin-top:56px;background:linear-gradient(135deg,rgba(255,45,0,.1),rgba(255,107,53,.05));border:1px solid rgba(255,45,0,.25);border-radius:20px;padding:40px 48px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:24px" class="rr-fade d4">
        <div>
          <h3 style="font-family:'Bebas Neue',cursive;font-size:32px;letter-spacing:.05em;margin-bottom:8px">La solution : <span style="color:#FF2D00">un seul systeme, un seul partenaire.</span></h3>
          <p style="color:rgba(240,238,232,.6);font-size:15px">Chaque brique construite pour fonctionner avec les autres. Zero coordination a votre charge.</p>
        </div>
        <button class="rr-btn" onclick="document.getElementById('rr-systemes').scrollIntoView({behavior:'smooth'})">Voir comment &rarr;</button>
      </div>
    </div>
  </section>
  <section id="rr-systemes" class="rr-section rr-section-alt">
    <div class="rr-section-inner">
      <div style="text-align:center;margin-bottom:64px" class="rr-fade">
        <span class="rr-badge" style="margin-bottom:20px;display:inline-block">Nos systemes</span>
        <h2 class="rr-h2">Choisissez votre<br><span style="color:#FF2D00">niveau de croissance.</span></h2>
        <p style="color:rgba(240,238,232,.5);margin-top:16px;font-size:15px">Sans engagement. Pause ou resiliation quand vous voulez.</p>
      </div>
      <div style="display:flex;justify-content:center;gap:10px;margin-bottom:48px;flex-wrap:wrap" class="rr-fade d1">
        <button class="rr-tab" data-pack="lancement" onclick="selectPack('lancement')">DEMARRER</button>
        <button class="rr-tab active" data-pack="visibilite" onclick="selectPack('visibilite')">LE PLUS POPULAIRE</button>
        <button class="rr-tab" data-pack="domination" onclick="selectPack('domination')">CROISSANCE MAX</button>
      </div>
      <div id="pack-lancement" class="rr-pack-detail rr-pack-normal rr-fade d2" style="display:none">
        <div>
          <h3 class="rr-pack-name" style="color:#FF6B35;margin-bottom:16px">Systeme<br>Lancement</h3>
          <p style="color:rgba(240,238,232,.65);font-size:16px;line-height:1.6;margin-bottom:32px">Votre presence pro en ligne, cle en main</p>
          <div style="margin-bottom:16px"><span class="rr-pack-price-big" style="color:#FF6B35">149</span><span style="color:rgba(240,238,232,.4);font-size:16px"> / mois HT</span></div>
          <div style="font-size:13px;color:rgba(240,238,232,.4);margin-bottom:32px">Pour : Createurs, freelances, artisans qui demarrent</div>
          <button class="rr-btn" style="font-size:16px;padding:18px 40px;background:#FF6B35" onclick="window.location.href='mailto:ludovic.freelance@gmail.com'">Lancer mon projet &rarr;</button>
        </div>
        <div style="display:flex;flex-direction:column;justify-content:center">
          <div class="rr-service-check"><span style="color:#FF6B35;font-size:16px;flex-shrink:0">&#10003;</span><span>Site vitrine professionnel</span></div>
          <div class="rr-service-check"><span style="color:#FF6B35;font-size:16px;flex-shrink:0">&#10003;</span><span>Fiche Google My Business</span></div>
          <div class="rr-service-check"><span style="color:#FF6B35;font-size:16px;flex-shrink:0">&#10003;</span><span>Identite visuelle de base</span></div>
          <div class="rr-service-check"><span style="color:#FF6B35;font-size:16px;flex-shrink:0">&#10003;</span><span>Nom de domaine + hebergement</span></div>
          <div class="rr-service-check"><span style="color:#FF6B35;font-size:16px;flex-shrink:0">&#10003;</span><span>Assistance dediee 5j/7</span></div>
          <div class="rr-service-check" style="border-bottom:none"><span style="color:#FF6B35;font-size:16px;flex-shrink:0">&#10003;</span><span>Rapport mensuel</span></div>
        </div>
      </div>
      <div id="pack-visibilite" class="rr-pack-detail rr-pack-highlight rr-fade d2">
        <div>
          <span class="rr-badge" style="margin-bottom:20px;display:inline-block">&#11088; Le plus populaire</span>
          <h3 class="rr-pack-name" style="color:#FF2D00;margin-bottom:16px">Systeme<br>Visibilite</h3>
          <p style="color:rgba(240,238,232,.65);font-size:16px;line-height:1.6;margin-bottom:32px">Soyez trouve avant vos concurrents, partout</p>
          <div style="margin-bottom:16px"><span class="rr-pack-price-big" style="color:#FF2D00">299</span><span style="color:rgba(240,238,232,.4);font-size:16px"> / mois HT</span></div>
          <div style="font-size:13px;color:rgba(240,238,232,.4);margin-bottom:32px">Pour : Commercants, PME, independants en croissance</div>
          <button class="rr-btn" style="font-size:16px;padding:18px 40px" onclick="window.location.href='mailto:ludovic.freelance@gmail.com'">Devenir visible &rarr;</button>
        </div>
        <div style="display:flex;flex-direction:column;justify-content:center">
          <div class="rr-service-check"><span style="color:#FF2D00;font-size:16px;flex-shrink:0">&#10003;</span><span>Tout le Systeme Lancement +</span></div>
          <div class="rr-service-check"><span style="color:#FF2D00;font-size:16px;flex-shrink:0">&#10003;</span><span>SEO local optimise</span></div>
          <div class="rr-service-check"><span style="color:#FF2D00;font-size:16px;flex-shrink:0">&#10003;</span><span>Gestion reseaux sociaux (2/sem)</span></div>
          <div class="rr-service-check"><span style="color:#FF2D00;font-size:16px;flex-shrink:0">&#10003;</span><span>Blog et contenu strategique</span></div>
          <div class="rr-service-check"><span style="color:#FF2D00;font-size:16px;flex-shrink:0">&#10003;</span><span>Audit trimestriel de performance</span></div>
          <div class="rr-service-check" style="border-bottom:none"><span style="color:#FF2D00;font-size:16px;flex-shrink:0">&#10003;</span><span>Consultant dedie</span></div>
        </div>
      </div>
      <div id="pack-domination" class="rr-pack-detail rr-pack-normal rr-fade d2" style="display:none">
        <div>
          <h3 class="rr-pack-name" style="color:#FFB800;margin-bottom:16px">Systeme<br>Domination</h3>
          <p style="color:rgba(240,238,232,.65);font-size:16px;line-height:1.6;margin-bottom:32px">Ecrasez la concurrence. Dominez votre marche.</p>
          <div style="margin-bottom:16px"><span class="rr-pack-price-big" style="color:#FFB800">499</span><span style="color:rgba(240,238,232,.4);font-size:16px"> / mois HT</span></div>
          <div style="font-size:13px;color:rgba(240,238,232,.4);margin-bottom:32px">Pour : Startups, PME ambitieuses, multi-sites</div>
          <button class="rr-btn" style="font-size:16px;padding:18px 40px;background:#FFB800;color:#08080E" onclick="window.location.href='mailto:ludovic.freelance@gmail.com'">Dominer mon marche &rarr;</button>
        </div>
        <div style="display:flex;flex-direction:column;justify-content:center">
          <div class="rr-service-check"><span style="color:#FFB800;font-size:16px;flex-shrink:0">&#10003;</span><span>Tout le Systeme Visibilite +</span></div>
          <div class="rr-service-check"><span style="color:#FFB800;font-size:16px;flex-shrink:0">&#10003;</span><span>Campagnes Google Ads gerees</span></div>
          <div class="rr-service-check"><span style="color:#FFB800;font-size:16px;flex-shrink:0">&#10003;</span><span>Publicites Meta (Facebook/Insta)</span></div>
          <div class="rr-service-check"><span style="color:#FFB800;font-size:16px;flex-shrink:0">&#10003;</span><span>Tunnel de conversion optimise</span></div>
          <div class="rr-service-check"><span style="color:#FFB800;font-size:16px;flex-shrink:0">&#10003;</span><span>Reporting temps reel</span></div>
          <div class="rr-service-check" style="border-bottom:none"><span style="color:#FFB800;font-size:16px;flex-shrink:0">&#10003;</span><span>Stratege marketing dedie</span></div>
        </div>
      </div>
      <div class="rr-mini-cards rr-fade d3">
        <div class="rr-mini-card" id="mini-lancement" onclick="selectPack('lancement')">
          <div style="font-family:'Bebas Neue',cursive;font-size:28px;color:#FF6B35">149</div>
          <div style="font-size:11px;color:rgba(240,238,232,.4);margin-top:4px">/ mois HT</div>
          <div style="font-size:13px;font-weight:600;margin-top:10px;color:rgba(240,238,232,.6)">Systeme Lancement</div>
        </div>
        <div class="rr-mini-card active" id="mini-visibilite" onclick="selectPack('visibilite')">
          <div style="font-family:'Bebas Neue',cursive;font-size:28px;color:#FF2D00">299</div>
          <div style="font-size:11px;color:rgba(240,238,232,.4);margin-top:4px">/ mois HT</div>
          <div style="font-size:13px;font-weight:600;margin-top:10px;color:#F0EEE8">Systeme Visibilite</div>
        </div>
        <div class="rr-mini-card" id="mini-domination" onclick="selectPack('domination')">
          <div style="font-family:'Bebas Neue',cursive;font-size:28px;color:#FFB800">499</div>
          <div style="font-size:11px;color:rgba(240,238,232,.4);margin-top:4px">/ mois HT</div>
          <div style="font-size:13px;font-weight:600;margin-top:10px;color:rgba(240,238,232,.6)">Systeme Domination</div>
        </div>
      </div>
    </div>
  </section>
  <section id="rr-process" class="rr-section">
    <div style="max-width:800px;margin:0 auto">
      <div style="text-align:center;margin-bottom:64px" class="rr-fade">
        <span class="rr-badge" style="margin-bottom:20px;display:inline-block">Processus</span>
        <h2 class="rr-h2">De zero a votre<br><span style="color:#FF2D00">systeme operationnel.</span></h2>
      </div>
      <div class="rr-step rr-fade d1">
        <div style="display:flex;flex-direction:column;align-items:center;flex-shrink:0"><div class="rr-step-num">01</div><div class="rr-step-line"></div></div>
        <div style="padding-top:12px;padding-bottom:48px"><h3 style="font-size:20px;font-weight:700;margin-bottom:10px">Appel Diagnostic</h3><p style="color:rgba(240,238,232,.55);font-size:15px;line-height:1.7">30 minutes pour comprendre votre business, vos objectifs et les obstacles qui freinent votre croissance.</p></div>
      </div>
      <div class="rr-step rr-fade d2">
        <div style="display:flex;flex-direction:column;align-items:center;flex-shrink:0"><div class="rr-step-num">02</div><div class="rr-step-line"></div></div>
        <div style="padding-top:12px;padding-bottom:48px"><h3 style="font-size:20px;font-weight:700;margin-bottom:10px">Audit et Strategie</h3><p style="color:rgba(240,238,232,.55);font-size:15px;line-height:1.7">On analyse votre marche, vos concurrents, et on construit votre feuille de route personnalisee.</p></div>
      </div>
      <div class="rr-step rr-fade d3">
        <div style="display:flex;flex-direction:column;align-items:center;flex-shrink:0"><div class="rr-step-num">03</div><div class="rr-step-line"></div></div>
        <div style="padding-top:12px;padding-bottom:48px"><h3 style="font-size:20px;font-weight:700;margin-bottom:10px">Deploiement du Systeme</h3><p style="color:rgba(240,238,232,.55);font-size:15px;line-height:1.7">Notre equipe construit et connecte chaque brique de votre systeme marketing. Coherent, integre, efficace.</p></div>
      </div>
      <div class="rr-step rr-fade d4">
        <div style="display:flex;flex-direction:column;align-items:center;flex-shrink:0"><div class="rr-step-num">04</div></div>
        <div style="padding-top:12px"><h3 style="font-size:20px;font-weight:700;margin-bottom:10px">Optimisation Continue</h3><p style="color:rgba(240,238,232,.55);font-size:15px;line-height:1.7">Chaque mois, on analyse, on ajuste, on performe. Votre systeme s'ameliore avec le temps.</p></div>
      </div>
    </div>
  </section>
  <section id="rr-temoignages" class="rr-section rr-section-alt">
    <div class="rr-section-inner">
      <div style="text-align:center;margin-bottom:64px" class="rr-fade">
        <span class="rr-badge" style="margin-bottom:20px;display:inline-block">Temoignages</span>
        <h2 class="rr-h2">Ils ont lance<br><span style="color:#FF2D00">leur systeme.</span></h2>
      </div>
      <div class="rr-testi-grid">
        <div class="rr-card rr-fade d1">
          <div class="rr-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p style="color:rgba(240,238,232,.75);font-size:15px;line-height:1.7;margin:20px 0 24px;font-style:italic">"Mon compte a vraiment decolle. Ludovic s'investit a 200%, donne des conseils actionnables et livre ce qu'il promet. Je continue."</p>
          <div style="display:flex;align-items:center;gap:12px"><div class="rr-avatar">Y</div><div><div style="font-weight:700;font-size:14px">YsabelleRose</div><div style="color:rgba(240,238,232,.4);font-size:12px">Coach et Creatrice de contenu</div></div></div>
        </div>
        <div class="rr-card rr-fade d2">
          <div class="rr-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p style="color:rgba(240,238,232,.75);font-size:15px;line-height:1.7;margin:20px 0 24px;font-style:italic">"Une fois de plus, les conseils sont inestimables et les resultats parlent d'eux-memes. On se reverra bientot."</p>
          <div style="display:flex;align-items:center;gap:12px"><div class="rr-avatar">P</div><div><div style="font-weight:700;font-size:14px">Philippe C.</div><div style="color:rgba(240,238,232,.4);font-size:12px">Entrepreneur</div></div></div>
        </div>
        <div class="rr-card rr-fade d3">
          <div class="rr-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <p style="color:rgba(240,238,232,.75);font-size:15px;line-height:1.7;margin:20px 0 24px;font-style:italic">"Ludovic m'a aidee a identifier mes axes d'amelioration et a propose un suivi pour evaluer les resultats. Je recommande vivement."</p>
          <div style="display:flex;align-items:center;gap:12px"><div class="rr-avatar">K</div><div><div style="font-weight:700;font-size:14px">KFati B.</div><div style="color:rgba(240,238,232,.4);font-size:12px">Independante</div></div></div>
        </div>
      </div>
    </div>
  </section>
  <section id="rr-cta">
    <div style="position:relative;z-index:2;max-width:700px;margin:0 auto;text-align:center" class="rr-fade">
      <div style="font-size:64px;margin-bottom:24px">&#128640;</div>
      <h2 style="font-family:'Bebas Neue',cursive;font-size:clamp(48px,8vw,96px);letter-spacing:.03em;line-height:.95;margin-bottom:24px">
        Pret a construire<br><span style="color:#FF2D00">votre systeme ?</span>
      </h2>
      <p style="color:rgba(240,238,232,.55);font-size:17px;margin-bottom:44px;line-height:1.6">
        Un appel de 30 minutes. On analyse votre situation,<br>
        on vous propose le systeme adapte. <strong style="color:#F0EEE8">Gratuit, sans engagement.</strong>
      </p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
        <button class="rr-btn" style="font-size:17px;padding:20px 48px" onclick="window.location.href='mailto:ludovic.freelance@gmail.com'">Reserver mon appel gratuit &rarr;</button>
        <button class="rr-btn-outline" onclick="window.location.href='tel:+33664487401'">&#128222; +33 6 64 48 74 01</button>
      </div>
    </div>
  </section>
  <footer id="rr-footer">
    <div class="rr-logo">&#128640; REACH ROCKET</div>
    <div style="color:rgba(240,238,232,.3);font-size:13px">2026 Reach Rocket - Systeme Marketing Integre</div>
    <div style="display:flex;gap:24px">
      <span style="color:rgba(240,238,232,.3);font-size:13px;cursor:pointer" onclick="window.open('https://www.facebook.com/reach.rocket')">Facebook</span>
      <span style="color:rgba(240,238,232,.3);font-size:13px;cursor:pointer" onclick="window.open('https://www.instagram.com/reach.rocket')">Instagram</span>
      <span style="color:rgba(240,238,232,.3);font-size:13px;cursor:pointer" onclick="window.open('https://www.linkedin.com/company/reach-rocket')">LinkedIn</span>
    </div>
  </footer>
</div>
<script>
function selectPack(id) {
  const packs = ['lancement','visibilite','domination'];
  packs.forEach(function(p) {
    document.getElementById('pack-' + p).style.display = p === id ? 'grid' : 'none';
    document.querySelector('[data-pack="' + p + '"]').classList.toggle('active', p === id);
    const mini = document.getElementById('mini-' + p);
    mini.classList.toggle('active', p === id);
    mini.querySelector('div:last-child').style.color = p === id ? '#F0EEE8' : 'rgba(240,238,232,.6)';
  });
}
window.addEventListener('scroll', function() {
  document.getElementById('rr-header').classList.toggle('solid', window.scrollY > 60);
});
const observer = new IntersectionObserver(function(entries) {
  entries.forEach(function(e) { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.12 });
document.querySelectorAll('.rr-fade').forEach(function(el) { observer.observe(el); });
</script>
</body>
</html>
