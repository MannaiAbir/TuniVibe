# Tunivibe - Plateforme Culturelle Tunisienne

![Symfony](https://img.shields.io/badge/Symfony-6.4-%23000000?logo=symfony)
![PHP](https://img.shields.io/badge/PHP-8.2-%23777BB4?logo=php)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-%237952B3?logo=bootstrap)

## Overview
Tunivibe est une plateforme web innovante développée avec **Symfony 6.4**, dédiée à la promotion du patrimoine culturel tunisien. Ce projet a été réalisé dans le cadre du programme de l'**Esprit School of Engineering**.

## Features
### Modules Culturels
- 🎨 **Workshops** : Ateliers en ligne gratuits (artisanat, cuisine)
- 🎪 **Événements** : Organisation de festivals avec système de dons
- 🏠 **Hébergements** : Séjours chez l'habitant rémunérés
- 📚 **Bibliothèque** : Partage collaboratif de livres
- 🎥 **Espace Vlog** : Témoignages vidéo

### Fonctionnalités Techniques
- 🔐 Authentification sécurisée
- 💳 Système de paiement intégré
- 📊 Tableau de bord administrateur
- 📱 Design responsive (Bootstrap 5)

## Tech Stack
### Backend
- Symfony 6.4
- PHP 8.2
- Doctrine ORM
- MySQL 8.0

### Frontend
- Twig (templates)
- Bootstrap 5
- JavaScript/ES6
- Webpack Encore

### Outils
- Visual Studio Code
- Composer
- GitHub

## Installation
```bash
# 1. Cloner le dépôt
git clone https://github.com/MannaiAbir/TuniVibe.git
cd tunivibe-symfony

# 2. Installer les dépendances
composer install
npm install

# 3. Configurer la base de données
# Créer un fichier .env.local et configurer DATABASE_URL

# 4. Lancer le projet
symfony serve -d
npm run watch
