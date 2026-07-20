<!DOCTYPE html>
<html lang="id">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Portfolio Ahmad Dzaki Zayyan - Web Developer & IT Student">

        <title>Ahmad Dzaki - Portfolio | Web Developer</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            * {
                font-family: 'Poppins', sans-serif;
            }

            .nav-link {
                transition: all 0.3s ease;
                position: relative;
            }

            .nav-link::after {
                content: '';
                position: absolute;
                bottom: -2px;
                left: 0;
                width: 0;
                height: 2px;
                background: #3b82f6;
                transition: width 0.3s ease;
            }

            .nav-link:hover::after {
                width: 100%;
            }

            .hero-title {
                animation: fadeInDown 0.8s ease forwards;
            }

            .hero-text {
                animation: fadeInUp 0.8s ease 0.2s forwards;
                opacity: 0;
            }

            .project-card {
                transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .project-card:hover {
                transform: translateY(-8px);
                box-shadow: 0 20px 40px rgba(59, 130, 246, 0.2);
            }

            .skill-badge {
                display: inline-block;
                animation: slideIn 0.5s ease forwards;
                opacity: 0;
            }

            @keyframes fadeInDown {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes slideIn {
                from {
                    opacity: 0;
                    transform: translateX(-10px);
                }

                to {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            .btn-primary {
                transition: all 0.3s ease;
            }

            .btn-primary:hover {
                transform: translateY(-2px);
                box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
            }

            .section-title {
                position: relative;
                display: inline-block;
            }

            .section-title::after {
                content: '';
                position: absolute;
                bottom: -5px;
                left: 0;
                width: 100%;
                height: 3px;
                background: linear-gradient(90deg, #3b82f6, transparent);
            }
        </style>
    </head>

    <body class="bg-slate-950 text-white">
        <!-- Navigation -->
        <nav
            class="w-full bg-slate-950 text-white px-4 md:px-12 py-4 sticky top-0 z-50 backdrop-blur-md bg-slate-950/80 border-b border-slate-800">
            <div class="max-w-6xl mx-auto flex items-center justify-between md:grid md:grid-cols-3">
                <a href="#home" class="text-xl md:text-2xl font-bold text-blue-400 hover:text-blue-300 transition">
                    Ahmad Dzaki Zayyan S.
                </a>

                <div class="hidden md:flex gap-8 justify-center">
                    <a href="#about" class="nav-link text-lg hover:text-blue-400">About</a>
                    <a href="#skills" class="nav-link text-lg hover:text-blue-400">Skills</a>
                    <a href="#projects" class="nav-link text-lg hover:text-blue-400">Projects</a>
                    <a href="#contact" class="nav-link text-lg hover:text-blue-400">Contact</a>
                </div>

                <div class="flex gap-4 justify-end">
                    <a href="https://github.com/A-Dzaki" target="_blank"
                        class="text-slate-400 hover:text-blue-400 transition text-lg">
                        GitHub
                    </a>
                    <a href="https://www.linkedin.com/in/ahmad-dzaki-zayyan-sugianto-74869a295" target="_blank"
                        class="text-slate-400 hover:text-blue-400 transition text-lg">
                        LinkedIn
                    </a>
                </div>
            </div>
        </nav>
        <!-- Hero Section -->
        <section
            class="w-full min-h-screen bg-gradient-to-b from-slate-900 to-slate-950 text-white flex items-center px-4 md:px-16 py-20"
            id="home">
            <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center w-full">
                <div>
                    <h1 class="hero-title text-5xl md:text-7xl font-bold mb-6">
                        Halo! Saya <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Dzaki</span>
                    </h1>
                    <p class="hero-text text-slate-300 leading-relaxed text-lg md:text-xl mb-6">
                        Mahasiswa IT di <span class="text-blue-300 font-semibold">Telkom University Surabaya</span>
                        <br>
                        Passionate tentang <span class="text-blue-300 font-semibold">Web Development</span>

                    </p>
                    <p class="hero-text text-slate-400 leading-relaxed text-base md:text-lg mb-8">
                        Saya adalah mahasiswa semester 6 yang memiliki ketertarikan pada bidang web development.Saya
                        fokus
                        mengembangkan kemampuan di frontend dan backend development dengan teknologi modern
                        seperti Laravel, React, dan Tailwind CSS.
                    </p>
                    <div class="hero-text flex gap-4 flex-wrap">
                        <a href="#projects"
                            class="btn-primary px-8 py-3 bg-blue-600 rounded-lg hover:bg-blue-500 font-semibold">
                            Lihat Projects →
                        </a>
                        <a href="#contact"
                            class="btn-primary px-8 py-3 border-2 border-blue-400 rounded-lg hover:bg-blue-400/10 font-semibold">
                            Hubungi Saya
                        </a>
                    </div>
                </div>

                <div class="flex items-center justify-center">
                    <div class="relative">
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-cyan-600 rounded-3xl blur opacity-75">
                        </div>
                        <img src="{{ asset('assets/personal_gambar.jpg') }}" alt="Ahmad Dzaki"
                            class="relative w-full max-w-sm rounded-3xl shadow-2xl">
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="w-full min-h-screen bg-slate-900 text-white px-4 md:px-16 py-20" id="about">
            <div class="max-w-6xl mx-auto">
                <h2 class="section-title text-4xl md:text-5xl font-bold mb-16 text-start">Tentang Saya</h2>

                <p class="text-slate-300 leading-relaxed text-lg md:text-xl mb-8 text-justify">
                    Saya adalah mahasiswa semester 6 yang memiliki ketertarikan pada bidang web development, khususnya
                    dalam
                    pembuatan tampilan website, pengelolaan database dasar, serta pengembangan fitur sederhana sesuai
                    kebutuhan sistem. Saat ini saya masih terus belajar dan terus mencoba mengembangkan kemampuan saya
                    melalui berbagai tugas kuliah maupun proyek sederhana yang pernah saya kerjakan. Melalui pengalaman
                    akademik dan proyek yangpernah saya kerjakan, saya terus berusaha memahami proses pengembangan
                    sistem
                    secara lebih nyata. Saya
                    juga terbuka untuk belajar dari lingkungan kerja profesional agar dapat meningkatkan kemampuan
                    teknis,
                    tanggung jawab, serta kemampuan bekerja sama dalam tim.
                </p>
            </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section class="w-full min-h-screen bg-slate-950 text-white px-4 md:px-16 py-20" id="skills">
            <div class="max-w-6xl mx-auto">
                <h2 class="section-title text-4xl md:text-5xl font-bold mb-16 text-center">Skills & Technologies</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <!-- Frontend -->
                    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold mb-6 text-blue-400">Frontend</h3>
                        <div class="flex flex-wrap gap-3">
                            <span
                                class="skill-badge px-4 py-2 bg-blue-500/20 text-blue-300 rounded-full text-sm font-semibold">HTML5</span>
                            <span
                                class="skill-badge px-4 py-2 bg-blue-500/20 text-blue-300 rounded-full text-sm font-semibold"
                                style="animation-delay: 0.05s">CSS3</span>
                            <span
                                class="skill-badge px-4 py-2 bg-blue-500/20 text-blue-300 rounded-full text-sm font-semibold"
                                style="animation-delay: 0.1s">JavaScript</span>

                            <span
                                class="skill-badge px-4 py-2 bg-blue-500/20 text-blue-300 rounded-full text-sm font-semibold"
                                style="animation-delay: 0.2s">Tailwind CSS</span>
                            <span
                                class="skill-badge px-4 py-2 bg-blue-500/20 text-blue-300 rounded-full text-sm font-semibold"
                                style="animation-delay: 0.25s">Vite</span>
                            <span
                                class="skill-badge px-4 py-2 bg-blue-500/20 text-blue-300 rounded-full text-sm font-semibold"
                                style="animation-delay: 0.25s">Bootstrap</span>
                        </div>
                    </div>

                    <!-- Backend -->
                    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold mb-6 text-cyan-400">Backend</h3>
                        <div class="flex flex-wrap gap-3">
                            <span
                                class="skill-badge px-4 py-2 bg-cyan-500/20 text-cyan-300 rounded-full text-sm font-semibold">PHP</span>
                            <span
                                class="skill-badge px-4 py-2 bg-cyan-500/20 text-cyan-300 rounded-full text-sm font-semibold"
                                style="animation-delay: 0.05s">Laravel</span>
                            <span
                                class="skill-badge px-4 py-2 bg-cyan-500/20 text-cyan-300 rounded-full text-sm font-semibold"
                                style="animation-delay: 0.1s">MySQL</span>

                            <span
                                class="skill-badge px-4 py-2 bg-cyan-500/20 text-cyan-300 rounded-full text-sm font-semibold"
                                style="animation-delay: 0.2s">Java</span>
                        </div>
                    </div>

                    <!-- Tools -->
                    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold mb-6 text-purple-400">Tools & Version Control</h3>
                        <div class="flex flex-wrap gap-3">
                            <span
                                class="skill-badge px-4 py-2 bg-purple-500/20 text-purple-300 rounded-full text-sm font-semibold">Git</span>
                            <span
                                class="skill-badge px-4 py-2 bg-purple-500/20 text-purple-300 rounded-full text-sm font-semibold"
                                style="animation-delay: 0.05s">GitHub</span>
                            <span
                                class="skill-badge px-4 py-2 bg-purple-500/20 text-purple-300 rounded-full text-sm font-semibold"
                                style="animation-delay: 0.1s">VS Code</span>
                            <span
                                class="skill-badge px-4 py-2 bg-purple-500/20 text-purple-300 rounded-full text-sm font-semibold"
                                style="animation-delay: 0.15s">Figma</span>

                        </div>
                    </div>

                    <!-- Soft Skills -->
                    <div class="bg-slate-900 border border-slate-800 rounded-2xl p-8">
                        <h3 class="text-2xl font-bold mb-6 text-pink-400">Soft Skills</h3>
                        <div class="flex flex-wrap gap-3">
                            <span
                                class="skill-badge px-4 py-2 bg-pink-500/20 text-pink-300 rounded-full text-sm font-semibold">Problem
                                Solving</span>
                            <span
                                class="skill-badge px-4 py-2 bg-pink-500/20 text-pink-300 rounded-full text-sm font-semibold"
                                style="animation-delay: 0.05s">Team Work</span>
                            <span
                                class="skill-badge px-4 py-2 bg-pink-500/20 text-pink-300 rounded-full text-sm font-semibold"
                                style="animation-delay: 0.1s">Communication</span>
                            <span
                                class="skill-badge px-4 py-2 bg-pink-500/20 text-pink-300 rounded-full text-sm font-semibold"
                                style="animation-delay: 0.15s">Time Management</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects Section -->
        <section class="w-full min-h-screen bg-slate-900 text-white px-4 md:px-16 py-20" id="projects">
            <div class="max-w-6xl mx-auto">
                <h2 class="section-title text-4xl md:text-5xl font-bold mb-16 text-center">Featured Projects</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Project 1 -->
                    <div
                        class="project-card bg-slate-800 rounded-2xl overflow-hidden border border-slate-700 hover:border-blue-500">
                        <div
                            class="relative h-48 bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center">
                            <img src="{{ asset('assets/Travel.png') }}" alt="TravelJi"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-2 text-blue-400">TravelJi Landing Page</h3>
                            <p class="text-slate-400 text-sm mb-4">Website landing page agen pariwisata menampilkan
                                paket
                                tour dan layanan travel.</p>

                            <div class="flex flex-wrap gap-2 mb-6">
                                <span
                                    class="px-3 py-1 text-xs rounded-full bg-blue-500/20 text-blue-300 font-medium">HTML</span>
                                <span
                                    class="px-3 py-1 text-xs rounded-full bg-blue-500/20 text-blue-300 font-medium">CSS</span>
                                <span
                                    class="px-3 py-1 text-xs rounded-full bg-blue-500/20 text-blue-300 font-medium">JavaScript</span>
                            </div>

                            <a href="https://revou-fundamental-course.github.io/22-jul-24-A-Dzaki/" target="_blank"
                                class="w-full inline-block text-center px-4 py-2 bg-blue-600 rounded-lg hover:bg-blue-500 transition font-semibold text-sm">
                                Kunjungi Project ↗
                            </a>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div
                        class="project-card bg-slate-800 rounded-2xl overflow-hidden border border-slate-700 hover:border-blue-500">
                        <div
                            class="relative h-48 bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center">
                            <img src="{{ asset('assets/webgiki.png') }}" alt="WebGiki"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-2 text-cyan-400">Web Absensi Smp 2 Giki Surabaya</h3>
                            <p class="text-slate-400 text-sm mb-4">Platform absensi siswa untuk SMP 2 Giki Surabaya.
                            </p>

                            <div class="flex flex-wrap gap-2 mb-6">
                                <span
                                    class="px-3 py-1 text-xs rounded-full bg-cyan-500/20 text-cyan-300 font-medium">Laravel</span>
                                <span
                                    class="px-3 py-1 text-xs rounded-full bg-cyan-500/20 text-cyan-300 font-medium">Bootstrap</span>
                                <span
                                    class="px-3 py-1 text-xs rounded-full bg-cyan-500/20 text-cyan-300 font-medium">MySQL</span>
                            </div>

                            <a href="https://demo-web-absensi-giki.vercel.app" target="_blank"
                                class="w-full inline-block text-center px-4 py-2 bg-blue-600 rounded-lg hover:bg-blue-500 transition font-semibold text-sm">
                                Kunjungi Project ↗
                            </a>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div
                        class="project-card bg-slate-800 rounded-2xl overflow-hidden border border-slate-700 hover:border-blue-500">
                        <div
                            class="relative h-48 bg-gradient-to-br from-blue-600 to-blue-800 flex items-center justify-center">
                            <img src="{{ asset('assets/CoomingSoon.png') }}" alt="ComingSoon"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-2xl font-bold mb-2 text-purple-400">Coming Soon</h3>
                            <p class="text-slate-400 text-sm mb-4">Project ini sedang dalam pengembangan.</p>
                            <a href="#"
                                class="w-full inline-block text-center px-4 py-2 bg-slate-700 rounded-lg hover:bg-slate-600 transition font-semibold text-sm text-slate-300 cursor-not-allowed">
                                Coming Soon 🚀
                            </a>
                        </div>
                    </div>




                </div>

                <div class="text-center mt-16">
                    <a href="https://github.com/A-Dzaki" target="_blank"
                        class="btn-primary inline-block px-8 py-3 bg-blue-600 rounded-lg hover:bg-blue-500 font-semibold">
                        Kunjungi GitHub
                    </a>
                </div>
            </div>
        </section>
        <!-- Contact Section -->
        <section class="w-full min-h-screen bg-slate-950 text-white px-4 md:px-16 py-20" id="contact">
            <div class="max-w-6xl mx-auto">
                <h2 class="section-title text-4xl md:text-5xl font-bold mb-4 text-center">Mari Terhubung</h2>
                <p class="text-slate-400 text-center mb-16 text-lg">
                    Saya selalu terbuka untuk peluang baru, kolaborasi, dan percakapan menarik tentang teknologi!
                </p>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center">
                    <!-- GitHub Card -->
                    <a href="https://github.com/A-Dzaki" target="_blank"
                        class="group bg-slate-900 border border-slate-800 rounded-2xl p-8 hover:border-blue-500 transition hover:shadow-lg hover:shadow-blue-500/20">
                        <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center shadow-lg">
                            <img src="{{ asset('assets/github.png') }}" alt="GitHub Icon"
                                class="w-10 h-10 object-contain">
                        </div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-blue-400 transition">GitHub</h3>
                        <p class="text-slate-400 text-sm mb-4">Lihat repository dan project code saya</p>
                        <span class="text-blue-400 text-sm font-semibold">View Repository </span>
                    </a>

                    <!-- LinkedIn Card -->
                    <a href="www.linkedin.com/in/ahmad-dzaki-zayyan-sugianto-74869a295" target="_blank"
                        class="group bg-slate-900 border border-slate-800 rounded-2xl p-8 hover:border-cyan-500 transition hover:shadow-lg hover:shadow-cyan-500/20">
                        <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center shadow-lg">
                            <img src="{{ asset('assets/linkedin.png') }}" alt="LinkedIn Icon"
                                class="w-10 h-10 object-contain">
                        </div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-cyan-400 transition">LinkedIn</h3>
                        <p class="text-slate-400 text-sm mb-4">Terhubung di LinkedIn untuk updates karir</p>
                        <span class="text-cyan-400 text-sm font-semibold">View Profile </span>
                    </a>

                    <!-- Email Card -->
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=dzakiahmad005@gmail.com" target="_blank"
                        rel="noopener noreferrer"
                        class="group min-h-[260px] bg-slate-900 border border-slate-800 rounded-2xl p-8 hover:border-cyan-500 transition hover:shadow-lg hover:shadow-cyan-500/20">
                        <div class="w-20 h-20 bg-white rounded-2xl flex items-center justify-center shadow-lg">
                            <img src="{{ asset('assets/gmail.png') }}" alt="Email Icon"
                                class="w-10 h-10 object-contain">
                        </div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-purple-400 transition">Email</h3>
                        <p class="text-slate-400 text-sm mb-4">Kirim email langsung ke saya</p>
                        <span class="text-purple-400 text-sm font-semibold">Hubungi </span>
                    </a>

                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="w-full bg-slate-900 border-t border-slate-800 text-slate-400 px-4 md:px-16 py-12">
            <div class="max-w-6xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                    <div>
                        <h4 class="text-white font-bold mb-4">Portfolio</h4>
                        <p class="text-sm">Ahmad Dzaki - Web Developer & IT Student</p>
                    </div>
                    <div>
                        <h4 class="text-white font-bold mb-4">Navigasi</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="#about" class="hover:text-blue-400 transition">Tentang</a></li>
                            <li><a href="#skills" class="hover:text-blue-400 transition">Skills</a></li>
                            <li><a href="#projects" class="hover:text-blue-400 transition">Projects</a></li>
                            <li><a href="#contact" class="hover:text-blue-400 transition">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-bold mb-4">Social</h4>
                        <ul class="space-y-2 text-sm">
                            <li><a href="https://github.com/A-Dzaki" target="_blank"
                                    class="hover:text-blue-400 transition">GitHub</a></li>
                            <li><a href="https://www.linkedin.com/in/ahmad-dzaki-zayyan-sugianto-74869a295"
                                    target="_blank" class="hover:text-blue-400 transition">LinkedIn</a></li>

                        </ul>
                    </div>
                    <div>
                        <h4 class="text-white font-bold mb-4">Tech Stack</h4>
                        <p class="text-sm">Laravel,Tailwind CSS,Bootstrap dan teknologi web lainnya.</p>
                    </div>
                </div>

                <div class="border-t border-slate-800 pt-8 text-center text-sm">
                    <p>&copy; 2026 Ahmad Dzaki Zayyan S. </p>
                </div>
            </div>
        </footer>
