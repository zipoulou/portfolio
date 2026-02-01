# Portfolio Nicolas Galzy - Thème WordPress

## 📦 Installation

1. **Télécharger** le dossier `portfolio-nicolas-theme`
2. **Copier** le dossier dans `/wp-content/themes/` de votre installation WordPress
3. **Activer** le thème depuis l'administration WordPress :
   - Aller dans `Apparence > Thèmes`
   - Cliquer sur "Activer" sur le thème "Portfolio Nicolas Galzy"

## ⚙️ Configuration

### Page d'accueil
Pour que la page d'accueil s'affiche correctement :
1. Aller dans `Réglages > Lecture`
2. Sélectionner "Une page statique"
3. Choisir la page souhaitée comme "Page d'accueil"

### CV PDF
Placer votre CV au format PDF dans :
```
/assets/cv_nicolas_galzy.pdf
```

### Photo de profil (optionnel)
Pour remplacer le placeholder "Photo" dans la section hero, modifier le fichier `front-page.php` :
```php
<div class="image-placeholder">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/photo.jpg" alt="Nicolas Galzy">
</div>
```

## 📁 Structure du thème

```
portfolio-nicolas-theme/
├── style.css           # En-tête WordPress + styles de base
├── functions.php       # Configuration et chargement des assets
├── header.php          # En-tête HTML et navigation
├── footer.php          # Pied de page
├── index.php           # Template par défaut
├── front-page.php      # Page d'accueil du portfolio
├── README.md           # Ce fichier
└── assets/
    ├── css/
    │   └── custom.css  # Styles personnalisés du portfolio
    └── js/
        └── script.js   # Interactions JavaScript
```

## 🎨 Personnalisation

### Couleurs
Les variables CSS sont définies dans `assets/css/custom.css` :
```css
:root {
    --primary: #1a365d;       /* Bleu foncé */
    --accent: #38b2ac;        /* Turquoise */
    --background: #f7fafc;    /* Gris clair */
    /* ... */
}
```

### Polices
Le thème utilise Google Fonts :
- **Sora** : Police principale
- **Space Mono** : Pour les éléments monospace

### Contenu
Pour modifier le contenu (textes, compétences, projets), éditez directement le fichier `front-page.php`.

## 🔧 Fonctionnalités

- ✅ Design responsive (mobile-first)
- ✅ Navigation sticky avec effet de blur
- ✅ Animations au scroll (Intersection Observer)
- ✅ Barres de compétences animées
- ✅ Menu mobile hamburger
- ✅ Smooth scroll vers les sections

## 📱 Responsive

Le thème est optimisé pour :
- Desktop (> 968px)
- Tablette (768px - 968px)
- Mobile (< 768px)

## 📄 Licence

GNU General Public License v2 or later

---

Développé avec ❤️ pour Nicolas GALZY
