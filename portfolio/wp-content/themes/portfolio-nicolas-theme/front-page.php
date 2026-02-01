<?php
/**
 * Front Page Template (Page d'accueil)
 *
 * @package Portfolio_Nicolas
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<!-- Hero Section -->
<section id="accueil" class="hero">
    <div class="hero-background">
        <div class="gradient-orb orb-1"></div>
        <div class="gradient-orb orb-2"></div>
        <div class="grid-pattern"></div>
    </div>
    <div class="hero-content">
        <div class="hero-text">
            <p class="hero-subtitle">Étudiant en Applications Web</p>
            <h1 class="hero-title">
                Nicolas<br>
                <span class="highlight">GALZY</span>
            </h1>
            <p class="hero-description">
                Passionné par le numérique et le Game Design, je construis mon parcours 
                vers la création d'univers interactifs et immersifs.
            </p>
            <div class="hero-cta">
                <a href="#projets" class="btn btn-primary">Découvrir mes projets</a>
                <a href="#contact" class="btn btn-secondary">Me contacter</a>
            </div>
        </div>
        <div class="hero-image">
            <div class="image-frame">
                <div class="image-placeholder">
                    <img src="https://galzy1.hosting.unilim.fr/portfolio/wp-content/uploads/2026/01/zoom2.png" alt="Nicolas Galzy">
                </div>
                <div class="frame-decoration"></div>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <span>Scroll</span>
        <div class="scroll-line"></div>
    </div>
</section>

<!-- À propos / Parcours -->
<section id="parcours" class="section about">
    <div class="container">
        <div class="section-header">
            <span class="section-number">01</span>
            <h2 class="section-title">Mon Parcours</h2>
        </div>
        <div class="about-grid">
            <div class="about-card">
                <div class="card-icon">🎓</div>
                <h3>Formation</h3>
                <p><strong>LP1 Métiers de l'Informatique - Applications Web</strong></p>
                <p>Université de Limoges (distanciel) — Depuis 2025</p>
                <hr class="card-divider">
                <p><strong>Baccalauréat Général</strong></p>
                <p>Lycée Louis Vicat, Souillac — 2022-2025</p>
                <p class="mention">Mention Assez Bien • NSI, SES, Maths complémentaires</p>
            </div>
            <div class="about-card">
                <div class="card-icon">💼</div>
                <h3>Expériences</h3>
                <p><strong>Studio XP — Option Concepteur</strong></p>
                <p>Stage été 2022 (1 semaine)</p>
                <ul class="experience-list">
                    <li>Élaboration de concepts de gameplay</li>
                    <li>Direction artistique</li>
                    <li>Production d'assets graphiques</li>
                </ul>
                <hr class="card-divider">
                <p><strong>Chocolaterie Morgan Vignon</strong></p>
                <p>Stage de 3ème — 2021</p>
				<ul class="experience-list">
                    <li>Gestion de fonds de caisse</li>
                    <li>Accueil client</li>
                    <li>Bases fabrication de chocolat</li>
                </ul>
            </div>
            <div class="about-card about-card-highlight">
                <div class="card-icon">🎯</div>
                <h3>Objectif</h3>
                <p class="objective-text">
                    Devenir <strong>Game Designer</strong> et concevoir des univers 
                    interactifs qui marquent les joueurs.
                </p>
                <div class="objective-goals">
                    <div class="goal">
                        <span class="goal-label">Court terme</span>
                        <p>Maîtriser les bases du e-commerce et la gestion d'équipe</p>
                    </div>
                    <div class="goal">
                        <span class="goal-label">Long terme</span>
                        <p>Concevoir des univers graphiques et devenir Level/Game Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Compétences -->
<section id="competences" class="section skills">
    <div class="container">
        <div class="section-header">
            <span class="section-number">02</span>
            <h2 class="section-title">Compétences</h2>
        </div>
        <div class="skills-container">
            <div class="skills-category">
                <h3 class="category-title">Développement Web</h3>
                <div class="skill-bars">
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">HTML5 & CSS3</span>
                            <span class="skill-percent">75%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="--progress: 75%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">WordPress & Wix</span>
                            <span class="skill-percent">80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="--progress: 80%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">Python</span>
                            <span class="skill-percent">55%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="--progress: 55%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="skills-category">
                <h3 class="category-title">Outils Créatifs</h3>
                <div class="skill-bars">
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">Visual Studio</span>
                            <span class="skill-percent">90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="--progress: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">Suite Adobe</span>
                            <span class="skill-percent">65%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="--progress: 65%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-header">
                            <span class="skill-name">Suite Office</span>
                            <span class="skill-percent">85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="--progress: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="skills-category skills-soft">
                <h3 class="category-title">Soft Skills</h3>
                <div class="soft-skills-grid">
                    <div class="soft-skill">
                        <div class="soft-skill-icon">🔄</div>
                        <span>Adaptabilité</span>
                        <div class="soft-skill-level" style="--level: 90%"></div>
                    </div>
                    <div class="soft-skill">
                        <div class="soft-skill-icon">📋</div>
                        <span>Organisation</span>
                        <div class="soft-skill-level" style="--level: 70%"></div>
                    </div>
                    <div class="soft-skill">
                        <div class="soft-skill-icon">👥</div>
                        <span>Gestion d'équipe</span>
                        <div class="soft-skill-level" style="--level: 50%"></div>
                    </div>
                    <div class="soft-skill">
                        <div class="soft-skill-icon">💡</div>
                        <span>Créativité</span>
                        <div class="soft-skill-level" style="--level: 85%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projets -->
<section id="projets" class="section projects">
    <div class="container">
        <div class="section-header">
            <span class="section-number">03</span>
            <h2 class="section-title">Mes Projets</h2>
        </div>
        <div class="projects-grid">
            <a href="https://galzy1.hosting.unilim.fr/" target="_blank" rel="noopener noreferrer" class="project-card project-featured">
                <div class="project-image">
                    <div class="project-placeholder">
                        <img src="https://galzy1.hosting.unilim.fr/portfolio/wp-content/uploads/2026/01/Capture-decran-2026-01-31-193827.png" alt="Portfolio WordPress">
                    </div>
                    <div class="project-overlay">
                        <span class="view-project">Voir le projet →</span>
                    </div>
                </div>
                <div class="project-info">
                    <h3 class="project-title">Hub WordPress</h3>
                    <p class="project-description">
                        Mon Hub WordPress créé dans le cadre de ma formation. 
                        Premier pas dans la création de sites dynamiques.
                    </p>
                </div>
            </a>
			<a href="https://galzy1.hosting.unilim.fr/UEL104/minisite104/" target="_blank" rel="noopener noreferrer" class="project-card">
                <div class="project-image">
                    <div class="project-placeholder">
                        <img src="https://galzy1.hosting.unilim.fr/portfolio/wp-content/uploads/2026/01/favicon-96x96-1.png"alt="Mini site personnel">
                    </div>
                    <div class="project-overlay">
                        <span class="view-project">Voir le projet →</span>
                    </div>
                </div>
                <div class="project-info">
                    <h3 class="project-title">Mini-site Personnel</h3>
                    <p class="project-description">
                        Site statique réalisé en UE L104, présentant mon parcours 
                        et mes objectifs professionnels.
                    </p>
                </div>
            </a>
            <div class="project-card project-coming">
                <div class="project-image">
                    <div class="project-placeholder coming-soon">
                        <span>🎮</span>
                    </div>
                </div>
                <div class="project-info">
                    <span class="project-tag">À venir</span>
                    <h3 class="project-title">Projet Game Design</h3>
                    <p class="project-description">
                        Futur projet de conception de jeu vidéo. 
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Centres d'intérêt -->
<section class="section interests">
    <div class="container">
        <div class="section-header">
            <span class="section-number">04</span>
            <h2 class="section-title">Centres d'intérêt</h2>
        </div>
        <div class="interests-grid">
            <div class="interest-card">
                <div class="interest-icon">🎮</div>
                <h3>Jeux Vidéo</h3>
                <p>Survie, Aventure, Énigmes</p>
            </div>
            <div class="interest-card">
                <div class="interest-icon">🤖</div>
                <h3>Veille Tech</h3>
                <p>Recherche des meilleurs outils IA</p>
            </div>
            <div class="interest-card">
                <div class="interest-icon">🎵</div>
                <h3>Musique</h3>
                <p>Électro, Classique, Pop</p>
            </div>
            <div class="interest-card">
                <div class="interest-icon">✈️</div>
                <h3>Voyage</h3>
                <p>Découverte de cultures</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="section contact">
    <div class="container">
        <div class="contact-content">
            <div class="contact-text">
                <span class="section-number">05</span>
                <h2 class="contact-title">Travaillons ensemble</h2>
                <p class="contact-description">
                    Vous avez un projet ou une opportunité de stage ? 
                    N'hésitez pas à me contacter !
                </p>
            </div>
            <div class="contact-info">
                <a href="mailto:nicolas.galzy@etu.unilim.fr" class="contact-link">
                    <span class="contact-icon">✉️</span>
                    <span>nicolas.galzy@etu.unilim.fr</span>
                </a>
                <a href="tel:0766057782" class="contact-link">
                    <span class="contact-icon">📱</span>
                    <span>07 66 05 77 82</span>
                </a>
				<a href="https://www.google.com/maps/search/Gourdon,+Lot,+France" target="_blank" rel="noopener noreferrer" class="contact-link">
					<span class="contact-icon">📍</span>
					<span>Gourdon, Lot (46)</span>
				</a>
            </div>
			<div class="contact-cta">
				<a href="https://galzy1.hosting.unilim.fr/portfolio/wp-content/uploads/2026/01/cv-final.pdf" class="btn btn-primary" download>
					Télécharger mon CV (PDF)
				</a>
				<span class="cta-separator">ou</span>
				<a href="https://galzy1.hosting.unilim.fr/portfolio/wp-content/uploads/2026/01/cv-final.png" class="btn btn-primary" download>
					Télécharger mon CV (Image)
				</a>
			</div>
        </div>
    </div>
</section>

<?php
get_footer();
