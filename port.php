<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>pixelMahreen.com – Developer Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    html { scroll-behavior: smooth; }
    body { background-color: #0e152e; color: #f5f5f5; font-family: 'Poppins', sans-serif; letter-spacing: .03em; }
    @keyframes slideInFromLeft {
    0% {transform: translateX(-100%);opacity: 0; }
    100% {transform: translateX(0);opacity: 1;} }
    @keyframes slideInFromRight {
    0% { transform: translateX(100%); opacity: 0; }
    100% { transform: translateX(0); opacity: 1; }
     }
    .image-entry {
      animation: slideInFromLeft 1s ease-out forwards;
    }  
    .text-entry {
    animation: slideInFromRight 1s ease-out 0.3s forwards;
    }
    .carousel-container {
            width: 400px; 
            overflow: hidden;
            margin: 20px auto;
            position: relative;
        }
        .carousel-wrapper {
            display: flex;
            transition: transform 0.5s ease;
        }
        .certificate {
            min-width: 500px; 
            height: 400px;
            margin-right: 20px; 
            text-align: center;
            padding: 30px; 
            background-color:#a58bff ;
            border-radius: 10px; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            font-size: 20px; 
        }
        .carousel-buttons {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }
        .carousel-buttons button {
            background-color: #0e152e;
            color: #a58bff;
            border: none;
            padding: 10px;
            cursor: pointer;
            opacity: 1 ;
            font-size: 16px;
            border-radius: 50%;
        }
        .carousel-buttons button:hover {
            background-color: #0e152e;
        }
        .certificate {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .certificate:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(165, 139, 255, 0.3);
            z-index: 10;
        }
        .project-arrow {
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    background: white;
    color: black;
    padding: 8px;
    border-radius: 9999px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    position: absolute;
  }
  #left-arrow {
    left: 200px; 
  }
  #right-arrow {
    right: 200px;
  }
  </style>
</head>
<body class="min-h-screen flex flex-col">
  <nav id="navbar" class="fixed top-0 inset-x-0 z-50 bg-transparent flex justify-center py-4">
    <div class="backdrop-blur-md bg-white/5 rounded-full flex items-center px-6 space-x-8">
      <a href="#home" class="text-xl font-bold text-[#a58bff] tracking-wider">pixelMahreen.com</a>
      <ul class="hidden md:flex space-x-6 text-sm">
        <li><a href="#home" class="nav-link">Home</a></li>
        <li><a href="#about" class="nav-link">About</a></li>
        <li><a href="#skills" class="nav-link">Skills</a></li>
        <li><a href="#certifications" class="nav-link">Certifications</a></li>
        <li><a href="#projects" class="nav-link">Projects</a></li>
        <li><a href="#resume" class="nav-link">Resume</a></li>
        <li><a href="#contact" class="nav-link">Contact</a></li>
      </ul>
      <button id="themeToggle" aria-label="Toggle Dark Mode" class="ml-4 p-2 rounded-full border border-current hover:bg-white/10">
        <svg id="icon-sun" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364-6.364l-1.414 1.414M6.05 17.95l-1.414 1.414M18.364 18.364l-1.414-1.414M6.05 6.05L4.636 4.636"/></svg>
        <svg id="icon-moon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z"/></svg>
      </button>
    </div>
  </nav>
  <div class="image-entry absolute left-20 md:left-50 top-40 md:top-50 w-64 h-64 rounded-full overflow-hidden ring-4 ring-[#a58bff]/40 shadow-lg">
    <img src="images/My.jpeg" alt="Mahreen profile photo" class="object-cover w-full h-full" />
  </div>
  <section id="home" class="flex flex-1 items-center justify-center pt-32 pb-20">
    <div class="text-entry opacity-10 text-right max-w-xl space-y-6">
      <div class="border-2 border-[#a58bff]/50 rounded-2xl p-6 space-y-4 backdrop-blur-sm bg-white/5 hover:border-[#a58bff]/80 transition-all">
        <h1 class="text-sm text-[#a58bff] uppercase tracking-widest"><center>Hello, I’m</center></h1>
        <h1 class="text-4xl md:text-6xl font-extrabold"><center>Mahreen Begum</center></h1>
        <h2 class="text-lg md:text-2xl font-semibold text-[#a58bff]"><center>Information Technology Student</center></h2>
        <p class="text-base md:text-lg leading-relaxed"><center>A problem‑solver at heart, I thrive on turning complex challenges into elegant solutions. I’m eager to explore Full‑Stack & Mobile App Development, AI/ML, Web‑Dev,and much more in my journey of continuous learning.<center></p>
        </br>
        <a href="https://wa.me/918186910029" target="_blank" class="inline-flex items-center px-6 py-3 bg-purple-500 text-white text-lg font-semibold rounded-full hover:bg-purple-600 transition">
          ➜ Contact Me
        </a>
    </div>
  </section>
  <div class="flex justify-center pb-8 animate-bounce">
    <a href="#about" aria-label="Scroll Down" class="text-[#a58bff]">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7" /></svg>
    </a>
  </div>
  <section id="about" class="min-h-screen flex items-center justify-center px-20 py-4">
    <div class="border-2 border-[#a58bff]/30 rounded-2xl p-6 space-y-4 backdrop-blur-sm bg-white/5 hover:border-[#a58bff]/60 transition-all">
        <h2 class="text-3xl md:text-4xl font-bold text-[#a58bff]"><center>About Me</center></h2>
        <p class="text-lg leading-relaxed">
          Hi! I’m <strong>Mahreen Begum</strong> — an aspiring IT professional with a strong drive to innovate, solve problems, and create meaningful digital experiences. I’m currently pursuing a Bachelor’s in Information Technology at Stanley College of Engineering and Technology for Women, where I've built a strong foundation in computing and engineering principles.
        </p>
        <p class="text-lg leading-relaxed">
          My interests span across Full-Stack Web Development, Mobile App Development, Artificial Intelligence, and Machine Learning. Whether it’s developing sleek UIs or training ML models, I enjoy diving deep into the problem space and crafting creative, efficient solutions. I strongly believe in the power of technology to positively impact lives—and I want to be part of that change.
        </p>
        <p class="text-lg leading-relaxed">
          Outside the classroom, I’m always building—exploring new technologies, contributing to group projects, and continuously upskilling through online certifications. I love collaborating with diverse teams, brainstorming solutions, and adapting quickly to emerging tools and platforms.
        </p>
        <p class="text-lg leading-relaxed">
          I’m currently open to internships, research opportunities, and collaborations where I can apply my skills, gain hands-on experience, and grow as a developer and thinker.
        </p>
        <div class="flex justify-center gap-6 pt-4">
          <a href="mailto:begummahreen597@gmail.com" class="text-[#a58bff] hover:underline">📧 begummahreen597@gmail.com</a>
          <a href="https://www.linkedin.com/in/mahreen-begum-082920283" target="_blank" class="text-[#a58bff] hover:underline">🔗 LinkedIn</a>
        </div>
    </div>
  </section>
  <div class="flex justify-center pb-8 animate-bounce">
    <a href="#skills" aria-label="Scroll Down" class="text-[#a58bff]">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7" /></svg>
    </a>
  </div>
  <section id="skills" class="min-h-screen flex items-center justify-center px-6 py-20 bg-[#0e152e] text-off-white">
    <div class="border-2 border-[#a58bff]/30 rounded-2xl p-6 space-y-4 backdrop-blur-sm bg-white/5 hover:border-[#a58bff]/60 transition-all">
    <div class="max-w-5xl w-full">
      <h2 class="text-3xl md:text-4xl font-bold text-center text-[#a58bff] mb-10"><center>Skills</center></h2>
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 text-center">
        <div class="bg-white/5 rounded-lg py-6 px-4 shadow hover:shadow-lg transition">
          <span class="block text-lg font-semibold text-[#ccc]">🌐 HTML5</span>
        </div>
        <div class="bg-white/5 rounded-lg py-6 px-4 shadow hover:shadow-lg transition">
          <span class="block text-lg font-semibold text-[#ccc]"># CSS3</span>
        </div>
        <div class="bg-white/5 rounded-lg py-6 px-4 shadow hover:shadow-lg transition">
            <i class="devicon-javascript-plain colored"></i>
          <span class="block text-lg font-semibold text-[#ccc]">JS JavaScript</span>
        </div>
        <div class="bg-white/5 rounded-lg py-6 px-4 shadow hover:shadow-lg transition">
          <span class="block text-lg font-semibold text-[#ccc]"><b>J</b> JAVA</span>
        </div>
        <div class="bg-white/5 rounded-lg py-6 px-4 shadow hover:shadow-lg transition">
          <span class="block text-lg font-semibold text-[#ccc]">🐍 Python</span>
        </div>
        <div class="bg-white/5 rounded-lg py-6 px-4 shadow hover:shadow-lg transition">
          <span class="block text-lg font-semibold text-[#ccc]">JS Node.js</span>
        </div>
        <div class="bg-white/5 rounded-lg py-6 px-4 shadow hover:shadow-lg transition">
          <span class="block text-lg font-semibold text-[#ccc]">Mobile App Dev</span>
        </div>
        <div class="bg-white/5 rounded-lg py-6 px-4 shadow hover:shadow-lg transition">
          <span class="block text-lg font-semibold text-[#ccc]">🐬 MySQL</span>
        </div>
        <div class="bg-white/5 rounded-lg py-6 px-4 shadow hover:shadow-lg transition">
          <span class="block text-lg font-semibold text-[#ccc]">🍃 MongoDB</span>
        </div>
        <div class="bg-white/5 rounded-lg py-6 px-4 shadow hover:shadow-lg transition">
          <span class="block text-lg font-semibold text-[#ccc]">Android Development</span>
        </div>
        <div class="bg-white/5 rounded-lg py-6 px-4 shadow hover:shadow-lg transition">
          <span class="block text-lg font-semibold text-[#ccc]">AI/ML</span>
        </div>
        <div class="bg-white/5 rounded-lg py-6 px-4 shadow hover:shadow-lg transition">
          <span class="block text-lg font-semibold text-[#ccc]">⚛️ React.js</span>
        </div>
      </div>
    </div>
    </div>
  </section>  
  <div class="flex justify-center mt-1 pb-2 animate-bounce">
    <a href="#certifications" aria-label="Scroll Down" class="text-[#a58bff]">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7" /> </svg>
    </a>
  </div>  
  <section id="certifications" class="min-h-screen flex items-center justify-center px-6 py-20 bg-[#0e152e] text-off-white">
    <div class="border-2 border-[#a58bff]/30 rounded-2xl p-6 space-y-4 backdrop-blur-sm bg-white/5 hover:border-[#a58bff]/60 transition-all">
      <div class="max-w-5xl w-full">
      <div class="carousel-wrapper flex transition-transform duration-500 ease-in-out" id="carousel-wrapper">
        <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
            <img src="images/AIDays.png" class="mx-auto mb-2 w-30 h-15 object-contain" />
            <h2 class="text-white text-lg">🎯 Participant – AIDays Hackathon 2025  </h2>
          </div>
          <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
            <img src="images/TechMahindra.png" class="mx-auto mb-2 w-30 h-25 object-contain" />
            <h2 class="text-white text-lg">✅ AIDays-Round 2 At Tech Mahindra</h2>
            </div>
        <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
            <img src="images/CProg.png" class="mx-auto mb-2 w-30 h-25 object-contain" />
            <h2 class="text-white text-lg">✅ Completed C Programming Course!! </h2>
            </div>
        <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
          <img src="images/IDEATHON.png" class="mx-auto mb-2 w-30 h-15 object-contain" />
          <h2 class="text-white text-lg">🎯 Participant - IDEATHON 2.0</h2>
        </div>
        <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
          <img src="images/ROBOTICS.png" class="mx-auto mb-2 w-30 h-15 object-contain" />
          <h2 class="text-white text-lg">🏆 Winner – Robotics Competition🤖</h2>
        </div>
        <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
          <img src="images/PWET.png" class="mx-auto mb-2 w-30 h-15 object-contain" />
          <h2 class="text-white text-lg">🎓 Best Student Award🏅</h2>
        </div>
        <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
          <img src="images/PowerBI.png" class="mx-auto mb-2 w-30 h-15 object-contain" />
          <h2 class="text-white text-lg">📊 Power BI Course Completed</h2>
        </div>
        <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
          <img src="images/RBI.png" class="mx-auto mb-2 w-30 h-15 object-contain" />
          <h2 class="text-white text-lg">⚡ Participated in RBI Quiz Competition</h2>
        </div>
        <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
          <img src="images/Byju's.png" class="mx-auto mb-2 w-30 h-15 object-contain" />
          <h2 class="text-white text-lg">📝 Appeared for BYJU'S Competitive Exams</h2>
        </div>
        <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
          <img src="images/Pictionary.png" class="mx-auto mb-2 w-30 h-15 object-contain" />
          <h2 class="text-white text-lg">🥉 3rd Place – Pictionary Competition</h2>
        </div>
        <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
          <img src="images/Intermediate.png" class="mx-auto mb-2 w-30 h-15 object-contain" />
          <h2 class="text-white text-lg">🏅 Secured 466/470 in Intermediate Exams</h2>
        </div>
        <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
          <img src="images/AnnualSports.png" class="mx-auto mb-2 w-30 h-15 object-contain" />
          <h2 class="text-white text-lg">🏅 Winner – Annual Sports Day</h2>
        </div>
        <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
          <img src="images/BioQuiz.png" class="mx-auto mb-2 w-30 h-15 object-contain" />
          <h2 class="text-white text-lg">🧬 Participated in Biology Quiz Competition</h2>
        </div>
        <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
          <img src="images/Essay.png" class="mx-auto mb-2 w-30 h-15 object-contain" />
          <h2 class="text-white text-lg">✍️ Winner – Essay Writing Competition</h2>
        </div>
        <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
          <img src="images/LearningCurve.png" class="mx-auto mb-2 w-30 h-15 object-contain" />
          <h2 class="text-white text-lg">📘 Active Participant – Learning Curve Program</h2>
        </div>
        <div class="certificate transform transition duration-300 hover:scale-105 hover:shadow-xl relative z-0 hover:z-10 text-center p-4 bg-white/10 rounded-xl">
          <img src="images/TechnoKids.png" class="mx-auto mb-2 w-30 h-15 object-contain" />
          <h2 class="text-white text-lg">🎓 G8 Project – TechnoKids Curriculum</h2>
        </div>
        </div>    
        <div class="carousel-buttons">
            <button onclick="moveCarousel(-1)">&#8592;</button>
            <button onclick="moveCarousel(1)">&#8594;</button>
        </div>
    </div>
    </div>
  </section>
  <div class="flex justify-center mt=1 pb-8 animate-bounce">
    <a href="#projects" aria-label="Scroll Down" class="text-[#a58bff]">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7" /></svg>
    </a>
  </div>
  <section id="projects" class="py-20 bg-[#0c1123] text-white">
    <div class="projects-container relative flex items-center">
      <button id="left-arrow" class="project-arrow left absolute left-0 z-10 bg-white text-black p-2 rounded-full shadow-md">&#8592;</button>
      <div class="projects-wrapper overflow-hidden w-full max-w-[900px] mx-auto">
        <div id="projects-scroll" class="flex transition-transform duration-500">

          <div class="flex-shrink-0 w-[420px] bg-[#1a2238] p-6 rounded-2xl shadow-lg mx-2">
            <img src="images/GymFolio.png" alt="GymFolio" class="rounded-xl mb-4">
            <h3 class="text-2xl font-bold mb-2 text-white">GymFolio-Fitness Tracker</h3>
            <p class="text-gray-400">A web app to track workouts, visualize fitness progress, and manage gym routines easily with dynamic forms and dashboards.</p>
          </div>

          <div class="flex-shrink-0 w-[420px] bg-[#1a2238] p-6 rounded-2xl shadow-lg mx-2">
            <img src="images/MoodBooster.png" alt="Mood Booster" class="rounded-xl mb-4">
            <h3 class="text-2xl font-bold mb-2 text-white">Mood Booster Website</h3>
            <p class="text-gray-400">An AI-powered mood detection site providing personalized mental health tips based on real-time emotion recognition.</p>
          </div>

          <div class="flex-shrink-0 w-[420px] bg-[#1a2238] p-6 rounded-2xl shadow-lg mx-2">
            <img src="images/MedIntelAI.png" alt="Health Care" class="rounded-xl mb-4">
            <h3 class="text-2xl font-bold mb-2 text-white">HealthCare Portal</h3>
            <p class="text-gray-400">A responsive healthcare website offering appointment scheduling, doctor consultation, and health tracking with a clean UI.</p>
          </div>

        </div>
      </div>
      <button id="right-arrow" class="project-arrow right absolute right-0 z-10 bg-white text-black p-2 rounded-full shadow-md">&#8594;</button>
    </div>
</section>

<section id="resume" class="min-h-screen flex items-center justify-center bg-[#0e152e] px-4 py-20">
  <div class="max-w-2xl text-center p-8 bg-white/5 rounded-lg backdrop-blur-sm shadow-lg">
    <h2 class="text-4xl font-bold text-[#a58bff] mb-4">Download My Resume</h2>
    <p class="mb-6">Feel free to download my resume and learn more about my skills and experience.</p>
    <a href="MahreenBegum.pdf" download class="px-6 py-3 bg-[#a58bff] text-[#0e152e] font-semibold rounded-full hover:opacity-90 transition">
      Download Resume
    </a>
  </div>
</section>

<section id="contact" class="max-w-6xl mx-auto p-8">
  <h2 class="text-3xl font-semibold mb-8 text-center">Contact Me <span class="text-purple-400">-</span></h2>
  <div class="grid md:grid-cols-2 gap-10">

    <div class="space-y-4">
      <h3 class="text-xl font-semibold">Get In Touch</h3>
      <p class="text-gray-400">Feel free to reach out to me for any questions, project inquiries, or just to say hello. I'll get back to you as soon as possible!</p>
      <div class="space-y-2 text-gray-300">
        <p><strong>Email:</strong> <a href="mailto:begummahreen597@gmail.com" class="text-purple-300">begummahreen597@gmail.com</a></p>
        <p><strong>Phone:</strong> <a href="tel:+918186910029" class="text-purple-300">+91 8186910029</a></p>
        <p><strong>Location:</strong> Hyderabad, Telangana, India</p>
      </div>
      <div class="flex space-x-4 mt-4 text-gray-400">
        <a href="https://www.linkedin.com/in/mahreen-begum-082920283/" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" class="h-6 w-6" alt="LinkedIn" /></a>
        <a href="https://github.com/MahreenBegum2007" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/512/733/733553.png" class="h-6 w-6" alt="GitHub" /></a>
        <a href="https://leetcode.com/u/Mahreen_Begum/" target="_blank">
          <span class="text-lg font-bold">LC</span></a>
        <a href="https://www.hackerrank.com/profile/Mahreen_Begum" target="_blank">
          <span class="text-lg font-bold">HR</span></a>
      </div>
      
    </div>

    <form class="bg-[#1e293b] p-6 rounded-lg shadow-md space-y-4" method="post">
      <input type="text" name="name" placeholder="Your Name" class="w-full p-3 bg-gray-800 text-white rounded outline-none focus:ring-2 focus:ring-purple-400" />
      <input type="email" name="email" placeholder="Your Email" class="w-full p-3 bg-gray-800 text-white rounded outline-none focus:ring-2 focus:ring-purple-400" />
      <textarea rows="5" name="message" placeholder="Message" class="w-full p-3 bg-gray-800 text-white rounded outline-none focus:ring-2 focus:ring-purple-400"></textarea>
      <button type="submit" name="sub" class="w-full bg-purple-500 hover:bg-purple-600 text-white py-3 rounded flex justify-center items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4l16 8-16 8V4z" />
        </svg>
        <span>Send Message</span>
      </button>
    </form>
  </div>
</section>

  <script>
    const links = document.querySelectorAll('.nav-link');
    links.forEach(link => link.classList.add('text-gray-300','hover:text-white'));
    const btn = document.getElementById('themeToggle');
    const sun = document.getElementById('icon-sun');
    const moon = document.getElementById('icon-moon');
    btn.addEventListener('click', () => {
      document.documentElement.classList.toggle('dark');
      sun.classList.toggle('hidden');
      moon.classList.toggle('hidden');
    });

    let currentPosition = 0;
    function moveCarousel(direction) {
        const carouselWrapper = document.getElementById('carousel-wrapper');
        const totalItems = document.querySelectorAll('.certificate').length;
        const visibleItems = 2;
        const maxPosition = totalItems - visibleItems;
        currentPosition += direction;
        if (currentPosition < 0) {
            currentPosition = 0;
        } else if (currentPosition > maxPosition) {
            currentPosition = maxPosition;
        }
        const offset = -currentPosition * 500; 
        carouselWrapper.style.transform = `translateX(${offset}px)`;
    }

  const scrollContainer = document.getElementById('projects-scroll');
  const leftArrow = document.getElementById('left-arrow');
  const rightArrow = document.getElementById('right-arrow');
  let currentIndex = 0;
  const cardWidth = 420 + 32; // 420px card + 16px margin left + 16px margin right
  const visibleCards = 1;
  function updateScroll() {
    scrollContainer.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
  }
  rightArrow.addEventListener('click', () => {
    const totalCards = scrollContainer.children.length;
    if (currentIndex < totalCards - visibleCards) {
      currentIndex += visibleCards;
      updateScroll();
    }
  });
  leftArrow.addEventListener('click', () => {
    if (currentIndex > 0) {
      currentIndex -= visibleCards;
      updateScroll();
    }
  });
   </script>
<?php
$con = mysqli_connect('localhost', 'root', 'Memme@2007', 'port');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['sub'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO details(name, email, message) VALUES ('$name', '$email', '$message')";
    $execute = mysqli_query($con, $query);

    if ($execute) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>
</body>
</html>