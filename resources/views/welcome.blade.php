<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Focuz - Em Breve!</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .avatar-bounce {
            animation: bounce 6s infinite ease-in-out;
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        .floating {
            animation: floating 8s infinite ease-in-out;
        }
        @keyframes floating {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            25% { transform: translateY(-10px) rotate(2deg); }
            50% { transform: translateY(5px) rotate(-2deg); }
            75% { transform: translateY(-5px) rotate(1deg); }
        }
    </style>
</head>
<body class="bg-indigo-50 text-indigo-900">

    <!-- Hero Section -->
    <section class="relative overflow-hidden py-16 md:py-24">
        <div class="absolute top-0 left-0 w-full h-full opacity-10">
            <div class="absolute top-20 left-10 w-40 h-40 rounded-full bg-purple-300 blur-xl"></div>
            <div class="absolute bottom-10 right-20 w-60 h-60 rounded-full bg-amber-200 blur-xl"></div>
        </div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 text-center lg:text-left mb-12 lg:mb-0">
                    <div class="inline-block bg-white/80 text-indigo-600 rounded-full px-6 py-2 mb-6 font-semibold shadow-sm">
                        🚀 Lançamento em 15 dias!
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        Transforme seus hábitos com o <span class="text-purple-600">Desafio Focuz</span>
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 max-w-lg mx-auto lg:mx-0">
                        Corrida, treino e leitura em uma competição divertida que vai turbinar sua produtividade!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <button class="bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-8 rounded-full transition-all transform hover:scale-105 shadow-lg hover:shadow-purple-300">
                            Quero participar!
                        </button>
                        <button class="bg-white hover:bg-gray-100 text-purple-600 font-semibold py-3 px-8 rounded-full transition-all transform hover:scale-105 shadow-md">
                            Saiba mais
                        </button>
                    </div>
                </div>
                
                <div class="lg:w-1/2 relative">
                    <div class="avatar-bounce relative z-10 max-w-md mx-auto">
                        <img src="https://cdn-icons-png.flaticon.com/512/4474/4474083.png" alt="Avatar correndo" class="w-full h-auto">
                    </div>
                    <div class="absolute -bottom-10 -left-10 w-32 h-32 opacity-70 floating">
                        <img src="https://cdn-icons-png.flaticon.com/512/4474/4474156.png" alt="Avatar lendo" class="w-full h-auto">
                    </div>
                    <div class="absolute -top-10 -right-10 w-28 h-28 opacity-70 floating" style="animation-delay: 2s;">
                        <img src="https://cdn-icons-png.flaticon.com/512/4474/4474149.png" alt="Avatar malhando" class="w-full h-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Countdown Section -->
    <section class="py-12 bg-white shadow-inner">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-2xl md:text-3xl font-bold mb-8">Contagem regressiva para o lançamento!</h2>
            
            <div class="max-w-2xl mx-auto bg-gradient-to-r from-purple-500 to-indigo-600 rounded-2xl p-1 shadow-xl">
                <div class="bg-white rounded-xl p-8">
                    <div class="grid grid-cols-4 gap-4">
                        <div class="bg-purple-50 rounded-lg py-4">
                            <div class="text-4xl font-bold text-purple-600" id="countdown-days">15</div>
                            <div class="text-sm font-medium text-purple-800">Dias</div>
                        </div>
                        <div class="bg-purple-50 rounded-lg py-4">
                            <div class="text-4xl font-bold text-purple-600" id="countdown-hours">23</div>
                            <div class="text-sm font-medium text-purple-800">Horas</div>
                        </div>
                        <div class="bg-purple-50 rounded-lg py-4">
                            <div class="text-4xl font-bold text-purple-600" id="countdown-minutes">59</div>
                            <div class="text-sm font-medium text-purple-800">Minutos</div>
                        </div>
                        <div class="bg-purple-50 rounded-lg py-4">
                            <div class="text-4xl font-bold text-purple-600" id="countdown-seconds">59</div>
                            <div class="text-sm font-medium text-purple-800">Segundos</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <p class="mt-8 text-lg max-w-2xl mx-auto">
                Cadastre seu e-mail para receber acesso antecipado e bônus exclusivos!
            </p>
            <div class="mt-6 max-w-md mx-auto flex">
                <input type="email" placeholder="Seu melhor e-mail" class="flex-grow px-4 py-3 rounded-l-lg border border-r-0 border-purple-300 focus:outline-none focus:ring-2 focus:ring-purple-500">
                <button class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-r-lg font-semibold">
                    Me avise!
                </button>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 md:py-24 bg-gradient-to-b from-white to-indigo-50">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">Como o Desafio Focuz funciona</h2>
            <p class="text-xl text-center text-indigo-700 mb-12 max-w-2xl mx-auto">
                Uma jornada divertida para melhorar sua saúde e produtividade
            </p>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-24 h-24 mx-auto mb-6">
                        <img src="https://cdn-icons-png.flaticon.com/512/4474/4474083.png" alt="Corrida" class="w-full h-full object-contain">
                    </div>
                    <h3 class="text-xl font-bold text-center mb-3">Desafios de Corrida</h3>
                    <p class="text-center text-indigo-700">
                        Metas semanais adaptáveis para todos os níveis, desde iniciantes até corredores experientes.
                    </p>
                    <div class="mt-4 text-center">
                        <span class="inline-block bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">
                            +50 pontos por desafio
                        </span>
                    </div>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow transform hover:-translate-y-2">
                    <div class="w-24 h-24 mx-auto mb-6">
                        <img src="https://cdn-icons-png.flaticon.com/512/4474/4474149.png" alt="Treino" class="w-full h-full object-contain">
                    </div>
                    <h3 class="text-xl font-bold text-center mb-3">Treinos Divertidos</h3>
                    <p class="text-center text-indigo-700">
                        Rotinas variadas que mantêm a motivação alta e os resultados consistentes.
                    </p>
                    <div class="mt-4 text-center">
                        <span class="inline-block bg-amber-100 text-amber-800 px-3 py-1 rounded-full text-sm font-medium">
                            +30 pontos por sessão
                        </span>
                    </div>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                    <div class="w-24 h-24 mx-auto mb-6">
                        <img src="https://cdn-icons-png.flaticon.com/512/4474/4474156.png" alt="Leitura" class="w-full h-full object-contain">
                    </div>
                    <h3 class="text-xl font-bold text-center mb-3">Clube de Leitura</h3>
                    <p class="text-center text-indigo-700">
                        Desafios literários para expandir sua mente enquanto cuida do corpo.
                    </p>
                    <div class="mt-4 text-center">
                        <span class="inline-block bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full text-sm font-medium">
                            +20 pontos por capítulo
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-16 bg-purple-600 text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-12">O que os beta testers estão dizendo</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/4333/4333609.png" alt="Ana" class="w-12 h-12 mr-4">
                        <div>
                            <h4 class="font-bold">Ana C.</h4>
                            <div class="flex">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                    <p class="italic">
                        "Nunca me senti tão motivada! Consegui ler 4 livros e correr minha primeira meia maratona com o Desafio Focuz."
                    </p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/4333/4333617.png" alt="Pedro" class="w-12 h-12 mr-4">
                        <div>
                            <h4 class="font-bold">Pedro R.</h4>
                            <div class="flex">
                                ★★★★☆
                            </div>
                        </div>
                    </div>
                    <p class="italic">
                        "A competição saudável com meus amigos me fez superar todos os meus objetivos de treino!"
                    </p>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white/10 p-6 rounded-2xl backdrop-blur-sm">
                    <div class="flex items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/4333/4333631.png" alt="Julia" class="w-12 h-12 mr-4">
                        <div>
                            <h4 class="font-bold">Julia M.</h4>
                            <div class="flex">
                                ★★★★★
                            </div>
                        </div>
                    </div>
                    <p class="italic">
                        "Finalmente encontrei um jeito divertido de equilibrar exercícios e leitura na minha rotina corrida."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-4xl mx-auto bg-gradient-to-r from-purple-100 to-indigo-100 rounded-3xl p-8 md:p-12 shadow-inner">
                <div class="w-24 h-24 mx-auto mb-6">
                    <img src="https://cdn-icons-png.flaticon.com/512/4474/4474168.png" alt="Prêmio" class="w-full h-full object-contain floating">
                </div>
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Garanta seu acesso antecipado!</h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto">
                    Os primeiros 100 inscritos ganham badges exclusivos e um guia de produtividade!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center max-w-md mx-auto">
                    <button class="bg-purple-600 hover:bg-purple-700 text-white font-semibold py-4 px-8 rounded-full transition-all transform hover:scale-105 shadow-lg">
                        Quero me inscrever agora!
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-indigo-900 text-indigo-100 py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8">
                <div class="mb-6 md:mb-0">
                    <h3 class="text-2xl font-bold text-white mb-2">Desafio Focuz</h3>
                    <p class="max-w-xs">Transformando hábitos em conquistas através de desafios divertidos.</p>
                </div>
                
                <div class="flex space-x-6">
                    <a href="#" class="text-indigo-300 hover:text-white text-2xl">
                        <span class="sr-only">Twitter</span>
                        🐦
                    </a>
                    <a href="#" class="text-indigo-300 hover:text-white text-2xl">
                        <span class="sr-only">Instagram</span>
                        📷
                    </a>
                    <a href="#" class="text-indigo-300 hover:text-white text-2xl">
                        <span class="sr-only">TikTok</span>
                        🎵
                    </a>
                </div>
            </div>
            
            <div class="border-t border-indigo-800 pt-8 text-center">
                <p>© 2023 Desafio Focuz. Todos os direitos reservados.</p>
                <p class="mt-2 text-sm text-indigo-400">Ilustrações por <a href="https://www.flaticon.com/" class="underline">Flaticon</a></p>
            </div>
        </div>
    </footer>

    <script>
        // Countdown timer
        const launchDate = new Date();
        launchDate.setDate(launchDate.getDate() + 15); // 15 days from now
        
        function updateCountdown() {
            const now = new Date();
            const diff = launchDate - now;
            
            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);
            
            document.getElementById('countdown-days').textContent = days.toString().padStart(2, '0');
            document.getElementById('countdown-hours').textContent = hours.toString().padStart(2, '0');
            document.getElementById('countdown-minutes').textContent = minutes.toString().padStart(2, '0');
            document.getElementById('countdown-seconds').textContent = seconds.toString().padStart(2, '0');
        }
        
        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>
</body>
</html>