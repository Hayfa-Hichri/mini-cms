# Session 08 - Défi

La route posts.tag utilise {tag:slug} : oui / non
oui
La page d'un tag n'affiche ni brouillon ni article d'un autre tag : oui / non
oui
Les tags des cartes sont des liens : oui / non
oui
L'accueil n'affiche que les tags qui ont au moins un article publié : oui / non
oui
Les trois nouveaux tests passent et php artisan test est vert : oui / non
oui

Pourquoi filtrer les tags vides après get() plutôt que d'afficher (0) ?
Un tag sans article publié renverrait le visiteur vers une page vide, donc on préfère ne pas l’afficher du tout. Le filtrage se fait sur la collection, après get(), ce qui évite d’ajouter une condition SQL supplémentaire à la requête.
Combien de requêtes ajoute la liste des tags populaires, et pourquoi pas une par tag ?
Une seule. Avec withCount, la base de données calcule tous les compteurs dans la même requête, grâce à une sous-requête, pour l’ensemble des tags en une fois. Il n’y a donc pas besoin de lancer une requête séparée pour chaque tag.