<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Deploy Laravel</title>
    <!-- Intégration de Tailwind CSS via CDN pour la simplicité du lab -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Import d'une belle police (Plus Jakarta Sans) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body
    class="bg-neutral-900 text-neutral-100 min-h-screen flex flex-col justify-between items-center p-6 selection:bg-pink-500 selection:text-white">

    <!-- Header Discret -->
    <header class="w-full max-w-5xl flex justify-between items-center opacity-80">
        <span class="text-xs uppercase tracking-widest font-semibold text-neutral-400">Lab . 01</span>
        <span
            class="text-xs bg-neutral-800 border border-neutral-700/50 px-3 py-1 rounded-full text-neutral-300">v11.x</span>
    </header>

    <!-- Main Content -->
    <main class="text-center my-auto space-y-6">
        <!-- Badge -->
        <div
            class="inline-flex items-center gap-2 bg-gradient-to-r from-pink-500/10 to-violet-500/10 border border-pink-500/20 px-4 py-1.5 rounded-full backdrop-blur-sm">
            <span class="w-2 h-2 rounded-full bg-pink-500 animate-pulse"></span>
            <span class="text-xs font-medium text-pink-400 tracking-wide">Projet Initialisé</span>
        </div>

        <!-- Titre Principal -->
        <h1
            class="text-5xl md:text-7xl font-extrabold tracking-tight bg-gradient-to-b from-white to-neutral-400 bg-clip-text text-transparent">
            Hello World.
        </h1>

        <!-- Sous-titre -->
        <p class="text-neutral-400 text-sm md:text-base max-w-md mx-auto font-normal leading-relaxed">
            Votre laboratoire <span class="text-white font-medium">lab-deploy-laravel</span> est prêt pour le
            déploiement. Configuration propre, architecture minimaliste.
        </p>
    </main>

    <!-- Footer -->
    <footer
        class="w-full max-w-5xl flex justify-center items-center text-xs text-neutral-500 border-t border-neutral-800/60 pt-4">
        <p>© 2026 Studio Lab. Propulsé par Laravel.</p>
    </footer>

</body>

</html>