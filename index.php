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
  .wp-block-html { margin-block-start: 0 !important; margin-block-end: 0 !important; }
  #rr-root h1, #rr-root h2, #rr-root h3, #rr-root h4, #rr-root h5, #rr-root h6 {
    font-family: 'Bebas Neue', cursive !important; font-weight: normal !important; line-height: 1 !important;
    margin: 0 !important; padding: 0 !important; color: #F0EEE8 !important; letter-spacing: .03em !important;
    border: none !important; background: none !important;
  }
  #rr-root p { margin: 0 !important; padding: 0 !important; font-family: 'Plus Jakarta Sans', sans-serif !important; color: #F0EEE8 !important; }
  #rr-root a { text-decoration: none !important; color: inherit !important; border: none !important; }
  #rr-root img { max-width: 100% !important; display: block !important; }
  #rr-root ul, #rr-root ol { list-style: none !important; margin: 0 !important; padding: 0 !important; }
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
  #rr-root .rr-rocket-anim { animation: rocketFloat 3s ease-in-out infinite !important; display: inline-block !important; font-size: 80px !important; }
  #rr-root .rr-orbit  { animation: orbit 12s linear infinite !important; position: absolute !important; width: 10px !important; height: 10px !important; background: #FF2D00 !important; border-radius: 50% !important; opacity: .6 !important; }
  #rr-root .rr-orbit2 { animation: orbit2 8s linear infinite reverse !important; position: absolute !important; width: 6px !important; height: 6px !important; background: #FFB800 !important; border-radius: 50% !important; opacity: .4 !important; }
  #rr-root .rr-shimmer { background: linear-gradient(90deg,#F0EEE8 0%,#FFB800 50%,#F0EEE8 100%) !important; background-size: 200% auto !important; -webkit-background-clip: text !important; -webkit-text-fill-color: transparent !important; background-clip: text !important; animation: shimmer 4s linear infinite !important; display: inline-block !important; will-change: background-position !important; }
  #rr-root .rr-glow { text-shadow: 0 0 60px rgba(255,45,0,.5) !important; }
  #rr-root .rr-grid-bg { background-image: linear-gradient(rgba(255,255,255,.03) 1px,transparent 1px), linear-gradient(90deg,rgba(255,255,255,.03) 1px,transparent 1px) !important; background-size: 60px 60px !important; }
  #rr-noise { position: fixed !important; top: 0 !important; left: 0 !important; width: 100% !important; height: 100% !important; pointer-events: none !important; z-index: 0 !important; opacity: .025 !important; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E") !important; background-size: 150px !important; }
  #rr-header { position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; z-index: 9999 !important; padding: 20px 40px !important; display: flex !important; align-items: center !important; justify-content: space-between !important; transition: all .4s !important; background: transparent !important; }
  #rr-header.solid { background: rgba(8,8,14,.95) !important; backdrop-filter: blur(20px) !important; border-bottom: 1px solid rgba(255,255,255,.05) !important; }
  #rr-root .rr-logo { display: flex !important; align-items: center !important; gap: 10px !important; font-family: 'Bebas Neue', cursive !important; font-size: 22px !important; letter-spacing: .1em !important; color: #F0EEE8 !important; }
  #rr-header .rr-nav { display: flex !important; gap: 32px !important; align-items: center !important; }
  #rr-header .rr-nav a { color: rgba(240,238,232,.6) !important; text-decoration: none !important; font-size: 14px !important; font-weight: 500 !important; transition: color .2s !important; font-family: 'Plus Jakarta Sans', sans-serif !important; }
  #rr-header .rr-nav a:hover { color: #F0EEE8 !important; }
  #rr-root .rr-btn { background: #FF2D00 !important; color: white !important; border: none !important; border-radius: 50px !important; padding: 16px 36px !important; font-family: 'Plus Jakarta Sans', sans-serif !important; font-size: 15px !important; font-weight: 700 !important; cursor: pointer !important; transition: all .3s !important; letter-spacing: .02em !important; display: inline-block !important; line-height: 1 !important; text-decoration: none !important; }
  #rr-root .rr-btn:hover { background: #FF4500 !important; transform: translateY(-2px) !important; box-shadow: 0 10px 40px rgba(255,45,0,.4) !important; }
  #rr-root .rr-btn-sm { padding: 11px 24px !important; font-size: 13px !important; }
  #rr-root .rr-btn-outline { background: transparent !important; color: #F0EEE8 !important; border: 1.5px solid rgba(240,238,232,.3) !important; border-radius: 50px !important; padding: 14px 32px !important; font-family: 'Plus Jakarta Sans', sans-serif !important; font-size: 14px !important; font-weight: 600 !important; cursor: pointer !important; transition: all .3s !important; letter-spacing: .02em !important; line-height: 1 !important; }
  #rr-root .rr-btn-outline:hover { border-color: #FF2D00 !important; color: #FF2D00 !important; }
  #rr-root .rr-badge { display: inline-block !important; background: rgba(255,45,0,.15) !important; border: 1px solid rgba(255,45,0,.4) !important; color: #FF6B35 !important; font-size: 11px !important; font-weight: 700 !important; letter-spacing: .12em !important; padding: 5px 14px !important; border-radius: 50px !important; text-transform: uppercase !important; font-family: 'Plus Jakarta Sans', sans-serif !important; line-height: 1.5 !important; }
  #rr-hero { min-height: 100vh !important; display: flex !important; align-items: center !important; justify-content: center !important; padding: 120px 40px 80px !important; position: relative !important; overflow: hidden !important; }
  #rr-root .rr-hero-orb { position: absolute !important; top: 20% !important; left: 50% !important; transform: translateX(-50%) !important; width: 600px !important; height: 600px !important; border-radius: 50% !important; background: radial-gradient(circle,rgba(255,45,0,.08) 0%,transparent 70%) !important; pointer-events: none !important; }
  #rr-root .rr-orbit-wrap { position: absolute !important; top: 50% !important; left: 50% !important; width: 0 !important; height: 0 !important; }
  #rr-root .rr-hero-inner { max-width: 900px !important; text-align: center !important; position: relative !important; z-index: 2 !important; }
  #rr-root .rr-h1 { font-family: 'Bebas Neue', cursive !important; font-size: clamp(64px,10vw,120px) !important; line-height: .9 !important; letter-spacing: .02em !important; margin-bottom: 8px !important; }
  #rr-root .rr-stats { display: flex !important; gap: 48px !important; justify-content: center !important; margin-top: 72px !important; flex-wrap: wrap !important; }
  #rr-root .rr-stat-val { font-family: 'Bebas Neue', cursive !important; font-size: clamp(36px,5vw,60px) !important; color: #FF2D00 !important; line-height: 1 !important; }
  #rr-root .rr-stat-lbl { font-size: 12px !important; color: rgba(240,238,232,.4) !important; letter-spacing: .08em !important; text-transform: uppercase !important; font-family: 'Plus Jakarta Sans', sans-serif !important; margin-top: 4px !important; }
  #rr-root .rr-scroll-ind { position: absolute !important; bottom: 32px !important; left: 50% !important; transform: translateX(-50%) !important; display: flex !important; flex-direction: column !important; align-items: center !important; gap: 8px !important; color: rgba(240,238,232,.3) !important; font-size: 11px !important; letter-spacing: .1em !important; }
  #rr-root .rr-scroll-line { width: 1px !important; height: 40px !important; background: linear-gradient(to bottom,rgba(255,45,0,.6),transparent) !important; }
  #rr-root .rr-section { padding: 100px 40px !important; display: block !important; }
  #rr-root .rr-section-inner { max-width: 1100px !important; margin: 0 auto !important; display: block !important; }
  #rr-root .rr-section-alt { background: rgba(255,255,255,.015) !important; }
  #rr-root .rr-section-head { text-align: center !important; margin-bottom: 64px !important; }
  #rr-root .rr-h2 { font-family: 'Bebas Neue', cursive !important; font-size: clamp(40px,6vw,72px) !important; letter-spacing: .03em !important; line-height: 1 !important; color: #F0EEE8 !important; }
  #rr-root .rr-pain-grid { display: grid !important; grid-template-columns: repeat(auto-fit,minmax(280px,1fr)) !important; gap: 24px !important; }
  #rr-root .rr-card { background: rgba(255,255,255,.03) !important; border: 1px solid rgba(255,255,255,.08) !important; border-radius: 20px !important; padding: 36px 32px !important; transition: all .3s !important; display: block !important; }
  #rr-root .rr-card:hover { border-color: rgba(255,255,255,.15) !important; background: rgba(255,255,255,.05) !important; }
  #rr-root .rr-solution-banner { margin-top: 56px !important; background: linear-gradient(135deg,rgba(255,45,0,.1),rgba(255,107,53,.05)) !important; border: 1px solid rgba(255,45,0,.25) !important; border-radius: 20px !important; padding: 40px 48px !important; display: flex !important; align-items: center !important; justify-content: space-between !important; flex-wrap: wrap !important; gap: 24px !important; }
  /* Pack switcher */
  #rr-root .rr-pack-switcher { display: grid !important; grid-template-columns: repeat(3,1fr) !important; gap: 16px !important; margin-top: 40px !important; }
  #rr-root .rr-pack-tab { background: rgba(255,255,255,.03) !important; border: 1.5px solid transparent !important; border-radius: 20px !important; padding: 28px 20px !important; cursor: pointer !important; transition: all .3s !important; text-align: center !important; position: relative !important; display: block !important; }
  #rr-root .rr-pack-tab:hover:not(.active) { border-color: transparent !important; background: rgba(255,255,255,.05) !important; }
  #rr-root .rr-pack-tab[data-pack="lancement"].active { box-shadow: 0 0 0 2px #FF6B35 !important; background: rgba(255,107,53,.07) !important; border-color: transparent !important; }
  #rr-root .rr-pack-tab[data-pack="visibilite"].active { box-shadow: 0 0 0 2px #FF2D00 !important; background: rgba(255,45,0,.07) !important; border-color: transparent !important; }
  #rr-root .rr-pack-tab[data-pack="domination"].active { box-shadow: 0 0 0 2px #FFB800 !important; background: rgba(255,184,0,.07) !important; border-color: transparent !important; }
  #rr-root .rr-pack-tab-badge { font-size: 10px !important; font-weight: 700 !important; color: #FFB800 !important; letter-spacing: .1em !important; text-transform: uppercase !important; margin-bottom: 10px !important; font-family: 'Plus Jakarta Sans', sans-serif !important; min-height: 18px !important; }
  #rr-root .rr-pack-tab-name { font-family: 'Bebas Neue', cursive !important; font-size: 26px !important; letter-spacing: .05em !important; line-height: 1 !important; margin-bottom: 10px !important; }
  #rr-root .rr-pack-tab[data-pack="lancement"] .rr-pack-tab-name { color: #FF6B35 !important; }
  #rr-root .rr-pack-tab[data-pack="visibilite"] .rr-pack-tab-name { color: #FF2D00 !important; }
  #rr-root .rr-pack-tab[data-pack="domination"] .rr-pack-tab-name { color: #FFB800 !important; }
  #rr-root .rr-pack-tab-price { font-family: 'Bebas Neue', cursive !important; font-size: 40px !important; color: #F0EEE8 !important; line-height: 1 !important; }
  #rr-root .rr-pack-tab-price em { font-family: 'Plus Jakarta Sans', sans-serif !important; font-size: 13px !important; font-style: normal !important; color: rgba(240,238,232,.4) !important; margin-left: 2px !important; }
  #rr-root .rr-pack-tab-sub { font-size: 11px !important; color: rgba(240,238,232,.4) !important; text-transform: uppercase !important; letter-spacing: .08em !important; margin-top: 8px !important; font-family: 'Plus Jakarta Sans', sans-serif !important; }
  /* Top pack switcher — compact pills */
  #rr-root .rr-pack-switcher-pills { display: flex !important; justify-content: center !important; gap: 12px !important; margin-bottom: 40px !important; flex-wrap: wrap !important; }
  #rr-root .rr-pack-pill { background: rgba(255,255,255,.04) !important; border: 1.5px solid transparent !important; border-radius: 50px !important; padding: 12px 28px !important; cursor: pointer !important; transition: all .3s !important; text-align: center !important; display: inline-flex !important; align-items: center !important; gap: 10px !important; }
  #rr-root .rr-pack-pill:hover:not(.active) { border-color: transparent !important; background: rgba(255,255,255,.07) !important; }
  #rr-root .rr-pack-pill-name { font-family: 'Bebas Neue', cursive !important; font-size: 18px !important; letter-spacing: .05em !important; line-height: 1 !important; }
  #rr-root .rr-pack-pill-price { font-family: 'Plus Jakarta Sans', sans-serif !important; font-size: 12px !important; font-weight: 600 !important; color: rgba(240,238,232,.4) !important; }
  #rr-root .rr-pack-pill[data-pack="lancement"] .rr-pack-pill-name { color: #FF6B35 !important; }
  #rr-root .rr-pack-pill[data-pack="visibilite"] .rr-pack-pill-name { color: #FF2D00 !important; }
  #rr-root .rr-pack-pill[data-pack="domination"] .rr-pack-pill-name { color: #FFB800 !important; }
  #rr-root .rr-pack-pill[data-pack="lancement"].active { box-shadow: 0 0 0 2px #FF6B35 !important; background: rgba(255,107,53,.1) !important; border-color: transparent !important; }
  #rr-root .rr-pack-pill[data-pack="visibilite"].active { box-shadow: 0 0 0 2px #FF2D00 !important; background: rgba(255,45,0,.1) !important; border-color: transparent !important; }
  #rr-root .rr-pack-pill[data-pack="domination"].active { box-shadow: 0 0 0 2px #FFB800 !important; background: rgba(255,184,0,.1) !important; border-color: transparent !important; }
  /* Pack detail cards */
  #rr-root .rr-pack-detail { display: none !important; grid-template-columns: 1fr 1fr !important; gap: 32px !important; border-radius: 24px !important; padding: 48px !important; }
  #rr-root .rr-pack-detail.active { display: grid !important; }
  #rr-root .rr-pack-highlight { background: linear-gradient(135deg,rgba(255,45,0,.1),rgba(255,107,53,.05)) !important; border: 1px solid rgba(255,45,0,.3) !important; }
  #rr-root .rr-pack-normal { background: rgba(255,255,255,.03) !important; border: 1px solid rgba(255,255,255,.08) !important; }
  #rr-root .rr-pack-name { font-family: 'Bebas Neue', cursive !important; font-size: 52px !important; letter-spacing: .05em !important; line-height: 1 !important; margin-bottom: 16px !important; }
  #rr-root .rr-pack-price-big { font-family: 'Bebas Neue', cursive !important; font-size: 72px !important; letter-spacing: .02em !important; line-height: 1 !important; }
  #rr-root .rr-service-check { display: flex !important; align-items: center !important; gap: 10px !important; padding: 8px 0 !important; border-bottom: 1px solid rgba(240,238,232,.06) !important; font-size: 14px !important; color: rgba(240,238,232,.85) !important; font-family: 'Plus Jakarta Sans', sans-serif !important; }
  #rr-root .rr-service-check:last-child { border-bottom: none !important; }
  #rr-root .rr-steps-wrap { max-width: 800px !important; margin: 0 auto !important; }
  #rr-root .rr-step { display: flex !important; gap: 32px !important; margin-bottom: 8px !important; }
  #rr-root .rr-step-num-wrap { display: flex !important; flex-direction: column !important; align-items: center !important; flex-shrink: 0 !important; }
  #rr-root .rr-step-num { width: 56px !important; height: 56px !important; border-radius: 50% !important; border: 1px solid rgba(255,45,0,.4) !important; background: rgba(255,45,0,.08) !important; display: flex !important; align-items: center !important; justify-content: center !important; font-family: 'Bebas Neue', cursive !important; font-size: 20px !important; color: #FF2D00 !important; flex-shrink: 0 !important; }
  #rr-root .rr-step-line { width: 1px !important; height: 60px !important; background: linear-gradient(to bottom,rgba(255,45,0,.6),transparent) !important; margin: 0 auto !important; }
  #rr-root .rr-testi-grid { display: grid !important; grid-template-columns: repeat(auto-fit,minmax(280px,1fr)) !important; gap: 24px !important; }
  #rr-root .rr-stars { display: flex !important; gap: 3px !important; margin-bottom: 16px !important; color: #FFB800 !important; font-size: 16px !important; }
  #rr-root .rr-avatar { width: 40px !important; height: 40px !important; border-radius: 50% !important; background: linear-gradient(135deg,#FF2D00,#FFB800) !important; display: flex !important; align-items: center !important; justify-content: center !important; font-size: 16px !important; font-weight: 700 !important; color: white !important; flex-shrink: 0 !important; }
  #rr-cta { padding: 120px 40px !important; text-align: center !important; position: relative !important; overflow: hidden !important; display: flex !important; flex-direction: column !important; align-items: center !important; justify-content: center !important; }
  #rr-root .rr-cta-orb { position: absolute !important; top: 50% !important; left: 50% !important; transform: translate(-50%,-50%) !important; width: 800px !important; height: 400px !important; background: radial-gradient(ellipse,rgba(255,45,0,.07) 0%,transparent 70%) !important; pointer-events: none !important; }
  #rr-footer { border-top: 1px solid rgba(255,255,255,.06) !important; padding: 48px 40px !important; display: flex !important; justify-content: space-between !important; align-items: center !important; flex-wrap: wrap !important; gap: 24px !important; max-width: 1100px !important; margin: 0 auto !important; }
  #rr-root .rr-footer-social span { color: rgba(240,238,232,.3) !important; font-size: 13px !important; cursor: pointer !important; transition: color .2s !important; font-family: 'Plus Jakarta Sans', sans-serif !important; }
  #rr-root .rr-footer-social span:hover { color: #FF2D00 !important; }
  /* Hamburger button */
  #rr-menu-btn { display: none !important; flex-direction: column !important; justify-content: center !important; gap: 5px !important; width: 44px !important; height: 44px !important; cursor: pointer !important; background: transparent !important; padding: 8px !important; z-index: 10001 !important; }
  #rr-menu-btn span { display: block !important; width: 22px !important; height: 2px !important; background: #F0EEE8 !important; border-radius: 2px !important; transition: all .3s !important; }
  /* Mobile menu overlay */
  #rr-mobile-menu { display: none !important; position: fixed !important; inset: 0 !important; z-index: 10000 !important; background: rgba(8,8,14,.97) !important; backdrop-filter: blur(20px) !important; flex-direction: column !important; align-items: center !important; justify-content: center !important; gap: 32px !important; }
  #rr-mobile-menu.open { display: flex !important; }
  #rr-menu-close { position: absolute !important; top: 24px !important; right: 24px !important; background: transparent !important; color: rgba(240,238,232,.5) !important; font-size: 32px !important; cursor: pointer !important; font-family: 'Plus Jakarta Sans', sans-serif !important; transition: color .2s !important; padding: 8px !important; line-height: 1 !important; }
  #rr-menu-close:hover { color: #F0EEE8 !important; }
  #rr-root .rr-mobile-nav { display: flex !important; flex-direction: column !important; align-items: center !important; gap: 20px !important; }
  #rr-root .rr-mobile-nav a { font-family: 'Bebas Neue', cursive !important; font-size: 44px !important; letter-spacing: .05em !important; color: rgba(240,238,232,.7) !important; text-decoration: none !important; transition: color .2s !important; }
  #rr-root .rr-mobile-nav a:hover { color: #FF2D00 !important; }
  @media (max-width: 768px) {
    #rr-header { padding: 16px 20px !important; }
    #rr-header .rr-nav { display: none !important; }
    #rr-menu-btn { display: flex !important; }
    #rr-hero { padding: 100px 20px 60px !important; }
    #rr-root .rr-section { padding: 70px 20px !important; }
    #rr-root .rr-pack-detail.active { grid-template-columns: 1fr !important; }
    #rr-root .rr-pack-switcher { grid-template-columns: 1fr !important; }
    #rr-root .rr-solution-banner { flex-direction: column !important; padding: 28px 24px !important; }
    #rr-footer { flex-direction: column !important; align-items: center !important; text-align: center !important; padding: 32px 20px !important; }
    #rr-root .rr-stats { gap: 28px !important; }
    #rr-root .rr-h1 { font-size: clamp(52px,14vw,90px) !important; }
    #rr-root .rr-pack-name { font-size: 40px !important; }
    #rr-root .rr-pack-price-big { font-size: 56px !important; }
    #rr-root .rr-pack-detail { padding: 28px !important; }
  }
</style>
<?php wp_head(); ?>
</head>
<body>
<div id="rr-root">
  <div id="rr-noise"></div>
  <header id="rr-header">
    <div class="rr-logo">🚀 REACH ROCKET</div>
    <nav class="rr-nav">
      <a href="#rr-systemes">Systèmes</a>
      <a href="#rr-process">Processus</a>
      <a href="#rr-temoignages">Témoignages</a>
      <button class="rr-btn rr-btn-sm" onclick="window.location.href='mailto:ludovic.freelance@gmail.com'">Appel gratuit →</button>
    </nav>
    <button id="rr-menu-btn" onclick="toggleMenu()" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </header>
  <div id="rr-mobile-menu">
    <button id="rr-menu-close" onclick="toggleMenu()">✕</button>
    <div class="rr-mobile-nav">
      <a href="#rr-systemes" onclick="toggleMenu()">Systèmes</a>
      <a href="#rr-process" onclick="toggleMenu()">Processus</a>
      <a href="#rr-temoignages" onclick="toggleMenu()">Témoignages</a>
    </div>
    <button class="rr-btn" style="font-size:16px;padding:18px 40px;margin-top:8px" onclick="window.location.href='mailto:ludovic.freelance@gmail.com';toggleMenu()">Appel gratuit →</button>
  </div>
  <section id="rr-hero" class="rr-grid-bg">
    <div class="rr-hero-orb"></div>
    <div class="rr-orbit-wrap">
      <div class="rr-orbit"></div>
      <div class="rr-orbit2"></div>
    </div>
    <div class="rr-hero-inner">
      <div class="rr-fade"><span class="rr-badge">Agence Marketing Systémique</span></div>
      <div class="rr-fade d1" style="margin:32px 0 24px">
        <div class="rr-rocket-anim" style="font-size:80px;margin-bottom:16px">🚀</div>
        <h1 class="rr-h1">
          <span class="rr-glow" style="color:#FF2D00">Pas</span> <span>un service.</span><br>
          <span class="rr-shimmer">Un système.</span>
        </h1>
      </div>
      <div class="rr-fade d2">
        <p style="font-size:clamp(16px,2vw,20px);color:rgba(240,238,232,.6);line-height:1.7;max-width:640px;margin:0 auto 40px">
          Arrêtez de payer pour des briques qui ne s’assemblent pas.
          On construit votre machine à clients — site, SEO, pubs, réseaux —
          <strong style="color:#F0EEE8">cohérente, connectée, mesurable.</strong>
        </p>
      </div>
      <div class="rr-fade d3" style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
        <button class="rr-btn" style="font-size:16px;padding:18px 40px" onclick="document.getElementById('rr-systemes').scrollIntoView({behavior:'smooth'})">Voir les systèmes →</button>
        <button class="rr-btn-outline" onclick="window.location.href='tel:+33664487401'">📞 Appel découverte gratuit</button>
      </div>
      <div class="rr-stats rr-fade d4">
        <div><div class="rr-stat-val">3 cibles</div><div class="rr-stat-lbl">Artisans, PME, Startups</div></div>
        <div><div class="rr-stat-val">100%</div><div class="rr-stat-lbl">Système intégré</div></div>
        <div><div class="rr-stat-val">dès 149€/mois</div><div class="rr-stat-lbl">Sans engagement</div></div>
      </div>
    </div>
    <div class="rr-scroll-ind">
      <span>SCROLL</span>
      <div class="rr-scroll-line"></div>
    </div>
  </section>
  <section class="rr-section">
    <div class="rr-section-inner">
      <div class="rr-section-head rr-fade">
        <span class="rr-badge" style="margin-bottom:20px;display:inline-block">Le vrai problème</span>
        <h2 class="rr-h2">Pourquoi votre marketing<br><span style="color:#FF2D00">ne fonctionne pas.</span></h2>
      </div>
      <div class="rr-pain-grid">
        <div class="rr-card rr-fade d1">
          <div style="font-size:36px;margin-bottom:20px">⚙️</div>
          <h3 style="font-size:18px;font-weight:700;margin-bottom:12px">Des services qui ne se parlent pas</h3>
          <p style="font-size:14px;color:rgba(240,238,232,.55);line-height:1.7">Un SEO sans site optimisé, c’est un moteur sans carburant. Un site sans trafic, c’est une vitrine dans le désert.</p>
        </div>
        <div class="rr-card rr-fade d2">
          <div style="font-size:36px;margin-bottom:20px">💸</div>
          <h3 style="font-size:18px;font-weight:700;margin-bottom:12px">Plusieurs prestataires = chaos</h3>
          <p style="font-size:14px;color:rgba(240,238,232,.55);line-height:1.7">Freelance pour le site, agence pour les pubs, consultant pour l’Insta… personne ne coordonne. Vous payez tout, vous obtenez rien.</p>
        </div>
        <div class="rr-card rr-fade d3">
          <div style="font-size:36px;margin-bottom:20px">📊</div>
          <h3 style="font-size:18px;font-weight:700;margin-bottom:12px">Pas de résultats mesurables</h3>
          <p style="font-size:14px;color:rgba(240,238,232,.55);line-height:1.7">Des promesses, des rapports incompréhensibles, et toujours la même question : mais est-ce que ça marche vraiment ?</p>
        </div>
      </div>
      <div class="rr-solution-banner rr-fade d4">
        <div>
          <h3 style="font-family:'Bebas Neue',cursive;font-size:32px;letter-spacing:.05em;margin-bottom:8px">La solution : <span style="color:#FF2D00">un seul système, un seul partenaire.</span></h3>
          <p style="color:rgba(240,238,232,.6);font-size:15px">Chaque brique construite pour fonctionner avec les autres. Zéro coordination à votre charge.</p>
        </div>
        <button class="rr-btn" onclick="document.getElementById('rr-systemes').scrollIntoView({behavior:'smooth'})">Voir comment →</button>
      </div>
    </div>
  </section>
  <section id="rr-systemes" class="rr-section rr-section-alt">
    <div class="rr-section-inner">
      <div class="rr-section-head rr-fade">
        <span class="rr-badge" style="margin-bottom:20px;display:inline-block">Nos systèmes</span>
        <h2 class="rr-h2">Choisissez votre<br><span style="color:#FF2D00">niveau de croissance.</span></h2>
        <p style="color:rgba(240,238,232,.5);margin-top:16px;font-size:15px">Sans engagement. Pause ou résiliation quand vous voulez.</p>
      </div>
      <div class="rr-pack-switcher-pills rr-fade d1">
        <div class="rr-pack-pill" data-pack="lancement" onclick="selectPack('lancement')">
          <span class="rr-pack-pill-name">Lancement</span>
          <span class="rr-pack-pill-price">149 €/mois</span>
        </div>
        <div class="rr-pack-pill active" data-pack="visibilite" onclick="selectPack('visibilite')">
          <span class="rr-pack-pill-name">Visibilité</span>
          <span class="rr-pack-pill-price">299 €/mois</span>
        </div>
        <div class="rr-pack-pill" data-pack="domination" onclick="selectPack('domination')">
          <span class="rr-pack-pill-name">Domination</span>
          <span class="rr-pack-pill-price">499 €/mois</span>
        </div>
      </div>
      <div id="pack-lancement" class="rr-pack-detail rr-pack-normal rr-fade d2">
        <div>
          <h3 class="rr-pack-name" style="color:#FF6B35">Système<br>Lancement</h3>
          <p style="color:rgba(240,238,232,.65);font-size:16px;line-height:1.6;margin-bottom:32px">Votre présence pro en ligne, clé en main</p>
          <div style="margin-bottom:16px"><span class="rr-pack-price-big" style="color:#FF6B35">149 €</span><span style="color:rgba(240,238,232,.4);font-size:16px"> / mois HT</span></div>
          <div style="font-size:13px;color:rgba(240,238,232,.4);margin-bottom:32px">💡 Pour : Créateurs, freelances, artisans qui démarrent</div>
          <button class="rr-btn" style="font-size:16px;padding:18px 40px;background:#FF6B35" onclick="window.location.href='mailto:ludovic.freelance@gmail.com'">Lancer mon projet →</button>
        </div>
        <div style="display:flex;flex-direction:column;justify-content:center">
          <p style="font-size:12px;color:rgba(240,238,232,.35);letter-spacing:.1em;text-transform:uppercase;margin-bottom:20px">Ce qui est inclus</p>
          <div class="rr-service-check"><span style="color:#FF6B35;font-size:16px;flex-shrink:0">✓</span><span>Site vitrine professionnel</span></div>
          <div class="rr-service-check"><span style="color:#FF6B35;font-size:16px;flex-shrink:0">✓</span><span>Fiche Google My Business</span></div>
          <div class="rr-service-check"><span style="color:#FF6B35;font-size:16px;flex-shrink:0">✓</span><span>Identité visuelle de base</span></div>
          <div class="rr-service-check"><span style="color:#FF6B35;font-size:16px;flex-shrink:0">✓</span><span>Nom de domaine + hébergement</span></div>
          <div class="rr-service-check"><span style="color:#FF6B35;font-size:16px;flex-shrink:0">✓</span><span>Assistance dédiée 5j/7</span></div>
          <div class="rr-service-check"><span style="color:#FF6B35;font-size:16px;flex-shrink:0">✓</span><span>Rapport mensuel</span></div>
        </div>
      </div>
      <div id="pack-visibilite" class="rr-pack-detail rr-pack-highlight rr-fade d2 active">
        <div>
          <span class="rr-badge" style="margin-bottom:20px;display:inline-block">⭐ Le plus populaire</span>
          <h3 class="rr-pack-name" style="color:#FF2D00">Système<br>Visibilité</h3>
          <p style="color:rgba(240,238,232,.65);font-size:16px;line-height:1.6;margin-bottom:32px">Soyez trouvé avant vos concurrents, partout</p>
          <div style="margin-bottom:16px"><span class="rr-pack-price-big" style="color:#FF2D00">299 €</span><span style="color:rgba(240,238,232,.4);font-size:16px"> / mois HT</span></div>
          <div style="font-size:13px;color:rgba(240,238,232,.4);margin-bottom:32px">💡 Pour : Commerçants, PME, indépendants en croissance</div>
          <button class="rr-btn" style="font-size:16px;padding:18px 40px;background:#FF2D00" onclick="window.location.href='mailto:ludovic.freelance@gmail.com'">Devenir visible →</button>
        </div>
        <div style="display:flex;flex-direction:column;justify-content:center">
          <p style="font-size:12px;color:rgba(240,238,232,.35);letter-spacing:.1em;text-transform:uppercase;margin-bottom:20px">Ce qui est inclus</p>
          <div class="rr-service-check"><span style="color:#FF2D00;font-size:16px;flex-shrink:0">✓</span><span>Tout le Système Lancement +</span></div>
          <div class="rr-service-check"><span style="color:#FF2D00;font-size:16px;flex-shrink:0">✓</span><span>SEO local optimisé</span></div>
          <div class="rr-service-check"><span style="color:#FF2D00;font-size:16px;flex-shrink:0">✓</span><span>Gestion réseaux sociaux (2/sem)</span></div>
          <div class="rr-service-check"><span style="color:#FF2D00;font-size:16px;flex-shrink:0">✓</span><span>Blog & contenu stratégique</span></div>
          <div class="rr-service-check"><span style="color:#FF2D00;font-size:16px;flex-shrink:0">✓</span><span>Audit trimestriel de performance</span></div>
          <div class="rr-service-check"><span style="color:#FF2D00;font-size:16px;flex-shrink:0">✓</span><span>Consultant dédié</span></div>
        </div>
      </div>
      <div id="pack-domination" class="rr-pack-detail rr-pack-normal rr-fade d2">
        <div>
          <h3 class="rr-pack-name" style="color:#FFB800">Système<br>Domination</h3>
          <p style="color:rgba(240,238,232,.65);font-size:16px;line-height:1.6;margin-bottom:32px">Écrasez la concurrence. Dominez votre marché.</p>
          <div style="margin-bottom:16px"><span class="rr-pack-price-big" style="color:#FFB800">499 €</span><span style="color:rgba(240,238,232,.4);font-size:16px"> / mois HT</span></div>
          <div style="font-size:13px;color:rgba(240,238,232,.4);margin-bottom:32px">💡 Pour : Startups, PME ambitieuses, multi-sites</div>
          <button class="rr-btn" style="font-size:16px;padding:18px 40px;background:#FFB800;color:#08080E" onclick="window.location.href='mailto:ludovic.freelance@gmail.com'">Dominer mon marché →</button>
        </div>
        <div style="display:flex;flex-direction:column;justify-content:center">
          <p style="font-size:12px;color:rgba(240,238,232,.35);letter-spacing:.1em;text-transform:uppercase;margin-bottom:20px">Ce qui est inclus</p>
          <div class="rr-service-check"><span style="color:#FFB800;font-size:16px;flex-shrink:0">✓</span><span>Tout le Système Visibilité +</span></div>
          <div class="rr-service-check"><span style="color:#FFB800;font-size:16px;flex-shrink:0">✓</span><span>Campagnes Google Ads gérées</span></div>
          <div class="rr-service-check"><span style="color:#FFB800;font-size:16px;flex-shrink:0">✓</span><span>Publicités Meta (Facebook/Insta)</span></div>
          <div class="rr-service-check"><span style="color:#FFB800;font-size:16px;flex-shrink:0">✓</span><span>Tunnel de conversion optimisé</span></div>
          <div class="rr-service-check"><span style="color:#FFB800;font-size:16px;flex-shrink:0">✓</span><span>Reporting temps réel</span></div>
          <div class="rr-service-check"><span style="color:#FFB800;font-size:16px;flex-shrink:0">✓</span><span>Stratège marketing dédié</span></div>
        </div>
      </div>
      <div class="rr-pack-switcher rr-fade d3">
        <div class="rr-pack-tab" data-pack="lancement" onclick="selectPack('lancement')">
          <div class="rr-pack-tab-badge">&nbsp;</div>
          <div class="rr-pack-tab-name">Lancement</div>
          <div class="rr-pack-tab-price">149 €<em>HT</em></div>
          <div class="rr-pack-tab-sub">/ mois · Pour démarrer</div>
        </div>
        <div class="rr-pack-tab active" data-pack="visibilite" onclick="selectPack('visibilite')">
          <div class="rr-pack-tab-badge">⭐ Le plus populaire</div>
          <div class="rr-pack-tab-name">Visibilité</div>
          <div class="rr-pack-tab-price">299 €<em>HT</em></div>
          <div class="rr-pack-tab-sub">/ mois · Pour croître</div>
        </div>
        <div class="rr-pack-tab" data-pack="domination" onclick="selectPack('domination')">
          <div class="rr-pack-tab-badge">&nbsp;</div>
          <div class="rr-pack-tab-name">Domination</div>
          <div class="rr-pack-tab-price">499 €<em>HT</em></div>
          <div class="rr-pack-tab-sub">/ mois · Croissance max</div>
        </div>
      </div>
    </div>
  </section>
  <section id="rr-process" class="rr-section">
    <div class="rr-steps-wrap">
      <div class="rr-section-head rr-fade">
        <span class="rr-badge" style="margin-bottom:20px;display:inline-block">Processus</span>
        <h2 class="rr-h2">De zéro à votre<br><span style="color:#FF2D00">système opérationnel.</span></h2>
      </div>
      <div class="rr-step rr-fade d1">
        <div class="rr-step-num-wrap"><div class="rr-step-num">01</div><div class="rr-step-line"></div></div>
        <div style="padding-top:12px;padding-bottom:48px"><h3 style="font-size:20px;font-weight:700;margin-bottom:10px">Appel Diagnostic</h3><p style="color:rgba(240,238,232,.55);font-size:15px;line-height:1.7">30 minutes pour comprendre votre business, vos objectifs et les obstacles qui freinent votre croissance.</p></div>
      </div>
      <div class="rr-step rr-fade d2">
        <div class="rr-step-num-wrap"><div class="rr-step-num">02</div><div class="rr-step-line"></div></div>
        <div style="padding-top:12px;padding-bottom:48px"><h3 style="font-size:20px;font-weight:700;margin-bottom:10px">Audit & Stratégie</h3><p style="color:rgba(240,238,232,.55);font-size:15px;line-height:1.7">On analyse votre marché, vos concurrents, et on construit votre feuille de route personnalisée.</p></div>
      </div>
      <div class="rr-step rr-fade d3">
        <div class="rr-step-num-wrap"><div class="rr-step-num">03</div><div class="rr-step-line"></div></div>
        <div style="padding-top:12px;padding-bottom:48px"><h3 style="font-size:20px;font-weight:700;margin-bottom:10px">Déploiement du Système</h3><p style="color:rgba(240,238,232,.55);font-size:15px;line-height:1.7">Notre équipe construit et connecte chaque brique de votre système marketing. Cohérent, intégré, efficace.</p></div>
      </div>
      <div class="rr-step rr-fade d4">
        <div class="rr-step-num-wrap"><div class="rr-step-num">04</div></div>
        <div style="padding-top:12px"><h3 style="font-size:20px;font-weight:700;margin-bottom:10px">Optimisation Continue</h3><p style="color:rgba(240,238,232,.55);font-size:15px;line-height:1.7">Chaque mois, on analyse, on ajuste, on performe. Votre système s’améliore avec le temps.</p></div>
      </div>
    </div>
  </section>
  <section id="rr-temoignages" class="rr-section rr-section-alt">
    <div class="rr-section-inner">
      <div class="rr-section-head rr-fade">
        <span class="rr-badge" style="margin-bottom:20px;display:inline-block">Témoignages</span>
        <h2 class="rr-h2">Ils ont lancé<br><span style="color:#FF2D00">leur système.</span></h2>
      </div>
      <div class="rr-testi-grid">
        <div class="rr-card rr-fade d1">
          <div class="rr-stars">★★★★★</div>
          <p style="color:rgba(240,238,232,.75);font-size:15px;line-height:1.7;margin:20px 0 24px;font-style:italic">"Mon compte a vraiment décollé. Ludovic s’investit à 200%, donne des conseils actionnables et livre ce qu’il promet. Je continue."</p>
          <div style="display:flex;align-items:center;gap:12px"><div class="rr-avatar">Y</div><div><div style="font-weight:700;font-size:14px">YsabelleRose</div><div style="color:rgba(240,238,232,.4);font-size:12px">Coach & Créatrice de contenu</div></div></div>
        </div>
        <div class="rr-card rr-fade d2">
          <div class="rr-stars">★★★★★</div>
          <p style="color:rgba(240,238,232,.75);font-size:15px;line-height:1.7;margin:20px 0 24px;font-style:italic">"Une fois de plus, les conseils sont inestimables et les résultats parlent d’eux-mêmes. On se reverra bientôt."</p>
          <div style="display:flex;align-items:center;gap:12px"><div class="rr-avatar">P</div><div><div style="font-weight:700;font-size:14px">Philippe C.</div><div style="color:rgba(240,238,232,.4);font-size:12px">Entrepreneur</div></div></div>
        </div>
        <div class="rr-card rr-fade d3">
          <div class="rr-stars">★★★★★</div>
          <p style="color:rgba(240,238,232,.75);font-size:15px;line-height:1.7;margin:20px 0 24px;font-style:italic">"Ludovic m’a aidée à identifier mes axes d’amélioration et a proposé un suivi pour évaluer les résultats. Je recommande vivement."</p>
          <div style="display:flex;align-items:center;gap:12px"><div class="rr-avatar">K</div><div><div style="font-weight:700;font-size:14px">KFati B.</div><div style="color:rgba(240,238,232,.4);font-size:12px">Indépendante</div></div></div>
        </div>
      </div>
    </div>
  </section>
  <section id="rr-cta">
    <div class="rr-cta-orb"></div>
    <div style="position:relative;z-index:2;max-width:700px;margin:0 auto" class="rr-fade">
      <div style="font-size:64px;margin-bottom:24px">🚀</div>
      <h2 style="font-family:'Bebas Neue',cursive;font-size:clamp(48px,8vw,96px);letter-spacing:.03em;line-height:.95;margin-bottom:24px">
        Prêt à construire<br><span style="color:#FF2D00">votre système ?</span>
      </h2>
      <p style="color:rgba(240,238,232,.55);font-size:17px;margin-bottom:44px;line-height:1.6">
        Un appel de 30 minutes. On analyse votre situation,<br>
        on vous propose le système adapté. <strong style="color:#F0EEE8">Gratuit, sans engagement.</strong>
      </p>
      <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap">
        <button class="rr-btn" style="font-size:17px;padding:20px 48px" onclick="window.location.href='mailto:ludovic.freelance@gmail.com'">Réserver mon appel gratuit →</button>
        <button class="rr-btn-outline" onclick="window.location.href='tel:+33664487401'">📞 +33 6 64 48 74 01</button>
      </div>
    </div>
  </section>
  <footer id="rr-footer">
    <div class="rr-logo">🚀 REACH ROCKET</div>
    <div style="color:rgba(240,238,232,.3);font-size:13px">© 2026 Reach Rocket — Système Marketing Intégré</div>
    <div class="rr-footer-social" style="display:flex;gap:24px">
      <span onclick="window.open('https://www.facebook.com/reach.rocket')">Facebook</span>
      <span onclick="window.open('https://www.instagram.com/reach.rocket')">Instagram</span>
      <span onclick="window.open('https://www.linkedin.com/company/reach-rocket')">LinkedIn</span>
    </div>
  </footer>
</div>
<script>
function toggleMenu() {
  document.getElementById('rr-mobile-menu').classList.toggle('open');
}
function selectPack(id) {
  const packs = ['lancement','visibilite','domination'];
  packs.forEach(p => {
    document.getElementById('pack-' + p).classList.toggle('active', p === id);
    document.querySelectorAll('.rr-pack-tab[data-pack="' + p + '"]').forEach(el => el.classList.toggle('active', p === id));
    document.querySelectorAll('.rr-pack-pill[data-pack="' + p + '"]').forEach(el => el.classList.toggle('active', p === id));
  });
}
selectPack('visibilite');
window.addEventListener('scroll', () => {
  document.getElementById('rr-header').classList.toggle('solid', window.scrollY > 60);
});
// Hero elements: appear immediately with stagger
document.querySelectorAll('#rr-hero .rr-fade').forEach((el, i) => {
  setTimeout(() => el.classList.add('visible'), 100 + i * 200);
});
// All other sections: observe on scroll
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
}, { threshold: 0.12 });
document.querySelectorAll('.rr-fade').forEach(el => {
  if (!el.closest('#rr-hero')) observer.observe(el);
});
</script>
<?php wp_footer(); ?>
</body>
  </html>
