<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jamy | Portfolio Informatique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #FDFBF7; }
        h1, h2, h3 { font-family: 'Playfair Display', serif; }
        .gold-gradient { background: linear-gradient(135deg, #C5A059 0%, #D4AF37 100%); }
        .border-gold { border-color: #C5A059; }
        .text-gold { color: #C5A059; }
    </style>
</head>
<body class="text-gray-800">

<!-- Navigation -->
<nav class="fixed w-full z-50 bg-[#FDFBF7]/80 backdrop-blur-md border-b border-gold/20">
    <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
        <span class="text-xl font-bold tracking-tighter">JAMY<span class="text-gold">.</span></span>
        <div class="hidden md:flex space-x-8 text-sm uppercase tracking-widest font-medium">
            <a href="#about" class="hover:text-gold transition">Identité</a>
            <a href="#competences" class="hover:text-gold transition">Compétences</a>
            <a href="#travaux" class="hover:text-gold transition">Travaux</a>
            <a href="#contact" class="hover:text-gold transition">Contact</a>
        </div>
    </div>
</nav>

<!-- Hero Section (Identité) -->
<header id="about" class="pt-32 pb-20 px-6">
    <div class="max-w-4xl mx-auto text-center">
        <div class="inline-block px-4 py-1 border border-gold text-gold text-xs uppercase tracking-widest mb-6">Étudiant en BUT Informatique - 2ème année</div>
        <h1 class="text-5xl md:text-7xl mb-8">Concevoir des solutions, <br><span class="italic text-gold">optimiser le futur.</span></h1>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
            Passionné par le développement full-stack et l'architecture de données. Actuellement en stage chez <strong>[Nom de l'entreprise/Association]</strong>, j'allie rigueur académique et projets concrets.
        </p>
    </div>
</header>

<!-- Section Compétences BUT -->
<section id="competences" class="py-20 bg-[#F9F6F0]">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl mb-12 border-l-4 border-gold pl-4">Réflexion critique sur mes compétences</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <?php
            $skills = [
                "Réaliser un développement" => "Maîtrise de PHP/JS et frameworks. Capacité à structurer un code maintenable.",
                "Optimiser des solutions" => "Analyse algorithmique et gestion de la complexité (MySQL, Redis).",
                "Administrer des systèmes" => "Configuration réseau (Cisco) et déploiement d'environnements.",
                "Gérer des données" => "Modélisation de bases de données relationnelles et NoSQL.",
                "Conduire un projet" => "Méthodes agiles et gestion de la relation client/utilisateur.",
                "Collaborer en équipe" => "Utilisation avancée de Git et communication inter-pôles."
            ];
            foreach ($skills as $name => $desc): ?>
                <div class="p-8 bg-white border border-gray-100 shadow-sm hover:shadow-md transition">
                    <h3 class="text-gold font-bold mb-3"><?= $name ?></h3>
                    <p class="text-sm text-gray-500 leading-relaxed"><?= $desc ?></p>
                    <div class="mt-4 bg-gray-100 h-1 w-full">
                        <div class="gold-gradient h-1" style="width: 75%"></div> <!-- Ajuste le niveau ici -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Travaux & Preuves -->
<section id="travaux" class="py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl mb-12 text-right border-r-4 border-gold pr-4">Projets & Réalisations</h2>
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Projet 1 -->
            <div class="group">
                <div class="relative overflow-hidden aspect-video bg-gray-200 mb-4">
                    <img src="[Lien_Image_Projet_1]" alt="Aperçu projet" class="object-cover w-full h-full group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gold/10 group-hover:bg-transparent transition"></div>
                </div>
                <h3 class="text-xl font-bold mb-2">Développement d'un démonstrateur Web</h3>
                <p class="text-gray-600 text-sm mb-4">Intégration de l'API Enedis et génération de rapports dynamiques en PHP.</p>
                <a href="#" class="text-xs font-bold uppercase tracking-widest border-b border-gold pb-1">Voir le code (GitHub)</a>
            </div>
            <!-- Projet 2 -->
            <div class="group">
                <div class="relative overflow-hidden aspect-video bg-gray-200 mb-4">
                    <img src="[Lien_Image_Projet_2]" alt="Aperçu projet" class="object-cover w-full h-full group-hover:scale-105 transition duration-500">
                </div>
                <h3 class="text-xl font-bold mb-2">Système de recherche Elasticsearch</h3>
                <p class="text-gray-600 text-sm mb-4">Mise en place d'une recherche floue performante sur une base de données de [X] entrées.</p>
                <a href="#" class="text-xs font-bold uppercase tracking-widest border-b border-gold pb-1">Détails techniques</a>
            </div>
        </div>
    </div>
</section>

<!-- Références -->
<section class="py-20 bg-stone-900 text-[#FDFBF7]">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-3xl mb-10 text-gold italic">Ils m'ont fait confiance</h2>
        <blockquote class="text-xl italic mb-6">
            "Une capacité d'adaptation remarquable sur des technologies backend complexes."
        </blockquote>
        <p class="text-sm uppercase tracking-widest text-gray-400">— [Nom du référent], Maître de stage</p>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="py-20 px-6">
    <div class="max-w-2xl mx-auto bg-white border border-gold/30 p-10 shadow-2xl">
        <h2 class="text-3xl mb-8 text-center">Parlons de votre projet</h2>
        <form action="#" method="POST" class="space-y-6">
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest mb-2">Nom</label>
                <input type="text" name="name" class="w-full border-b border-gray-300 py-2 focus:border-gold outline-none transition">
            </div>
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest mb-2">Email</label>
                <input type="email" name="email" class="w-full border-b border-gray-300 py-2 focus:border-gold outline-none transition">
            </div>
            <div>
                <label class="block text-xs font-bold uppercase tracking-widest mb-2">Message</label>
                <textarea name="message" rows="4" class="w-full border border-gray-200 p-3 focus:border-gold outline-none transition"></textarea>
            </div>
            <button type="submit" class="w-full gold-gradient text-white font-bold py-4 uppercase tracking-widest hover:opacity-90 transition">Envoyer</button>
        </form>
    </div>
</section>

<footer class="py-10 text-center text-gray-400 text-xs uppercase tracking-widest">
    &copy; <?= date('Y') ?> Jamy - Portfolio Professionnel
</footer>

</body>
</html>