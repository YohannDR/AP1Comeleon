# SITE VITRINE COMELEON
### Site réalisé et developpé avec le Framework Symfony

## Fonctionnalités actuelles
- Consultation des différents avis laissés par les utilisateurs (constitués d'un nom, d'un titre et d'un commentaire)
- Ajout d'un avis
- Système de login
- Possibilité de consulter les différentes prestations disponibles
- Possibilité de commander des prestations, elles sont alors ajoutés dans un panier (Nécessite d'être connecté)
- Page de présentation de l'actvité
- Barre de navigation permettant de facilement naviguer sur le site

## Configurer la base de données
- Avoir WAMPServer/MAMPServer/LAMPServer d'installé
- Avoir Symfony d'installé
- Ouvrir une invite de commande dansle dossier ou se trouve le site et éxecuter : `symfony server:start`
- Éxecuter la commande `symfony console doctrine:migrations:migrate` pour remplir la BDD
