@extends('master')

@section('content')
<!-- About Me Section -->
<section id="about" class="py-5" style="background-color: #0B131A;">
  <div class="container">
    <div class="row align-items-center justify-content-center gx-5">

      <!-- Profile Image -->
      <div class="col-md-4 text-center mb-4 mb-md-0 d-flex justify-content-center">
        <img class="img-fluid rounded-3 shadow"
          src="{{ asset('images/xiaoying.jpg') }}"
          alt="Profile photo"
          style="max-width: 300px; max-height: 300px;">
      </div>

      <!-- About Me Text -->
      <div class="col-md-8 text-center text-md-start d-flex flex-column justify-content-center">
        <h2 class="fw-bold mb-4 display-5" style="color: #81CBC0;">About Me</h2>
        <h3 class="fw-bold mb-3" style="color: white;">Tai Xiao Ying</h3>

        <p style="color: white; line-height: 1.8; font-size: 1.2rem">
          Hi! I'm an ordinary girl who found her passion in programming and the joy of solving problems.
          That sense of accomplishment is what led me into the fascinating world of 
          <strong>Computer Science.</strong>
          I'm currently pursuing my
          <strong>Bachelor of Computer Science (Graphics & Multimedia Technology)</strong>
          at
          <strong>Universiti Malaysia Pahang Al-Sultan Abdullah (UMPSA)</strong>.
        </p>

        <p style="color: white; line-height: 1.8; font-size: 1.2rem">
          To me, Computer Science is a world of
          <strong>未知与无限可能</strong> — it pushes me to think deeper, explore further,
          and never stop learning. 
        </p>

        <div class="mt-4 d-flex flex-wrap gap-3 justify-content-center justify-content-md-start">
          <a href="https://github.com/winnie-12" target="_blank"
            class="btn fw-bold px-4 py-2 github-btn">
            <i class="bi bi-github me-2"></i> GitHub
          </a>

          <a href="mailto:CD22076@adab.umpsa.edu.my"
            class="btn fw-bold px-4 py-2 email-btn">
            <i class="bi bi-envelope me-2"></i> Email
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Education Section -->
<section id="education" class="py-5" style="background-color: #0B131A;">
  <div class="container text-center">
    <!-- Section Title -->
    <h2 class="fw-bold mb-5 section-title">Education</h2>

    <!-- Timeline -->
    <div class="timeline">
      <!-- Timeline Item 1 -->
      <div class="timeline-item">
        <div class="timeline-left">
          <span class="timeline-year">2022 - Present</span>
        </div>
        <div class="timeline-dot"></div>
        <div class="timeline-right">
          <h4 class="timeline-title">Bachelor of Computer Science (Graphics & Multimedia Technology) with Honours</h4>
          <p class="timeline-text">Universiti Malaysia Pahang Al-Sultan Abdullah (UMPSA)</p>
        </div>
      </div>

      <!-- Timeline Item 2 -->
      <div class="timeline-item">
        <div class="timeline-left">
          <span class="timeline-year">2020 - 2022</span>
        </div>
        <div class="timeline-dot"></div>
        <div class="timeline-right">
          <h4 class="timeline-title">Sijil Tinggi Pelajaran Malaysia (STPM)</h4>
          <p class="timeline-text">Sekolah Menengah Kebangsaan Sultan Yussuf (SYS)</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-5" style="background-color: #0B131A;">
  <div class="container">
    <h2 class="fw-bold mb-5 text-center" style="color: #81CBC0;">Skills</h2>

    <div class="row align-items-start">
      <!-- Left: Tools & Software -->
      <div class="col-md-5 mb-4 mb-md-0 text-center text-md-start">
        <h4 class="mb-4" style="color: white;">Tools & Software</h4>
        <div class="d-flex flex-wrap gap-4 justify-content-center justify-content-md-start">
          <div class="skill-logo">
            <img src="{{ asset('images/xy_unity.png') }}" alt="Unity" title="Unity">
          </div>
          <div class="skill-logo">
            <img src="{{ asset('images/xy_maya.png') }}" alt="Maya" title="Maya">
          </div>
          <div class="skill-logo">
            <img src="{{ asset('images/xy_figma.png') }}" alt="Figma" title="Figma">
          </div>
          <div class="skill-logo">
            <img src="{{ asset('images/xy_canva.png') }}" alt="Canva" title="Canva">
          </div>
          <div class="skill-logo">
            <img src="{{ asset('images/xy_ai.png') }}" alt="Adobe Illustrator" title="Adobe Illustrator">
          </div>
          <div class="skill-logo">
            <img src="{{ asset('images/xy_ps.png') }}" alt="Photoshop" title="Photoshop">
          </div>
          <div class="skill-logo">
            <img src="{{ asset('images/xy_blender.png') }}" alt="Blender" title="Blender">
          </div>
          <div class="skill-logo">
            <img src="{{ asset('images/xy_as.png') }}" alt="Android Studio" title="Android Studio">
          </div>
        </div>
      </div>

      <!-- Right: Programming / Development -->
      <div class="col-md-7 text-center text-md-start">
        <h4 class="mb-4" style="color: white;">Programming & Development</h4>

        <div class="skill-progress mb-3">
          <span class="skill-name">HTML & CSS <span class="skill-percent">90%</span></span>
          <div class="progress">
            <div class="progress-bar" style="width: 90%"></div>
          </div>
        </div>

        <div class="skill-progress mb-3">
          <span class="skill-name">JavaScript <span class="skill-percent">75%</span></span>
          <div class="progress">
            <div class="progress-bar" style="width: 75%"></div>
          </div>
        </div>

        <div class="skill-progress mb-3">
          <span class="skill-name">C# / Unity <span class="skill-percent">80%</span></span>
          <div class="progress">
            <div class="progress-bar" style="width: 80%"></div>
          </div>
        </div>

        <div class="skill-progress mb-3">
          <span class="skill-name">Java / Android Studio <span class="skill-percent">70%</span></span>
          <div class="progress">
            <div class="progress-bar" style="width: 70%"></div>
          </div>
        </div>

        <div class="skill-progress mb-3">
          <span class="skill-name">PHP <span class="skill-percent">65%</span></span>
          <div class="progress">
            <div class="progress-bar" style="width: 65%"></div>
          </div>
        </div>

        <div class="skill-progress mb-3">
          <span class="skill-name">Database / MySQL <span class="skill-percent">65%</span></span>
          <div class="progress">
            <div class="progress-bar" style="width: 65%"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-5" style="background-color: #0B131A;">
  <div class="container">
    <h2 class="fw-bold mb-5 text-center" style="color: #81CBC0;">Projects</h2>

    <div class="row g-4">
      <!-- Project 1 -->
      <div class="col-md-4">
        <div class="project-card p-3">
          <img src="{{ asset('images/xy_yummymatch.png') }}" alt="Yummy Match!" class="img-fluid rounded mb-3">
          <h5 class="text-white fw-bold">Yummy Match!</h5>
          <p class="text-secondary small">An educational game that teaches players about healthy eating and balanced meals through interactive gameplay.</p>
          <p class="small mb-2" style="color: #81CBC0;">Tech: Unity · C# · Canva</p>
          <div class="d-flex gap-2">
            <a href="https://play.unity.com/en/games/fd29f477-96d6-4753-bccb-6f55ace76b26/yummy-match" target="_blank" class="btn btn-sm info-btn">Play Now</a>
          </div>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="col-md-4">
        <div class="project-card p-3">
          <img src="{{ asset('images/xy_rapidprint.png') }}" alt="RapidPrint System" class="img-fluid rounded mb-3">
          <h5 class="text-white fw-bold">RapidPrint System</h5>
          <p class="text-secondary small">A web application for managing printing services, with modules for order, payment, and staff rewards.</p>
          <p class="small mb-2" style="color: #81CBC0;">Tech: HTML · CSS · JavaScript · PHP · MySQL</p>
          <div class="d-flex gap-2">
            <a href="https://github.com/winnie-12/RapidPrint.git" target="_blank" class="btn btn-sm info-btn">Source Code</a>
          </div>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="col-md-4">
        <div class="project-card p-3">
          <img src="{{ asset('images/xy_bettrhelp.png') }}" alt="BettrHelp" class="img-fluid rounded mb-3">
          <h5 class="text-white fw-bold">BettrHelp</h5>
          <p class="text-secondary small">A self-care mobile app for mood tracking, reminders, challenges, and relaxation activities.</p>
          <p class="small mb-2" style="color: #81CBC0;">Tech: Android Studio · Java · Figma · Firebase</p>
          <div class="d-flex gap-2">
            <a href="https://drive.google.com/drive/folders/1C_70xzOBIGzS6SNLSyPk7xK3He5xHoVt" target="_blank" class="btn btn-sm info-btn">Source Code</a>
          </div>
        </div>
      </div>

      <!-- Project 4 -->
      <div class="col-md-4">
        <div class="project-card p-3">
          <img src="{{ asset('images/xy_nightmares.png') }}" alt="The Subconscious Nightmares" class="img-fluid rounded mb-3">
          <h5 class="text-white fw-bold">The Subconscious Nightmares</h5>
          <p class="text-secondary small">A suspenseful horror adventure where players must solve puzzles and outsmart terrifying enemies inside a surreal dreamscape.</p>
          <p class="small mb-2" style="color: #81CBC0;">Tech: Unity · C#</p>
        </div>
      </div>

      <!-- Project 5 -->
      <div class="col-md-4">
        <div class="project-card p-3">
          <img src="{{ asset('images/xy_yueXuan.png') }}" alt="Yue Xuan Game" class="img-fluid rounded mb-3" style="object-fit: cover;">
          <h5 class="text-white fw-bold">Yue Xuan: Wrath of the NianShou</h5>
          <p class="text-secondary small">A myth-inspired 2D action-adventure game where Yue Xuan battles mythical creatures and uncovers ancient secrets.</p>
          <p class="small mb-2" style="color: #81CBC0;">Tech: Unity · C#</p>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- Hobbies Section -->
<section id="hobbies" class="py-5" style="background-color: #0B131A;">
  <div class="container text-center">
    <h2 class="fw-bold mb-5" style="color: #81CBC0;">Hobbies</h2>

    <div class="row justify-content-center g-4">
      <!-- Card 1 -->
      <div class="col-md-3 col-sm-6">
        <div class="card h-100 text-center" style="background-color: #111C24; border: none; border-radius: 15px;">
          <div class="card-body">
            <div class="mb-3">
              <i class="bi bi-controller" style="font-size: 2rem; color: #81CBC0;"></i>
            </div>
            <h5 class="card-title" style="color: white;">Play Mobile Games</h5>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-3 col-sm-6">
        <div class="card h-100 text-center" style="background-color: #111C24; border: none; border-radius: 15px;">
          <div class="card-body">
            <div class="mb-3">
              <i class="bi bi-film" style="font-size: 2rem; color: #81CBC0;"></i>
            </div>
            <h5 class="card-title" style="color: white;">Watch Movies</h5>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-3 col-sm-6">
        <div class="card h-100 text-center" style="background-color: #111C24; border: none; border-radius: 15px;">
          <div class="card-body">
            <div class="mb-3">
              <i class="bi bi-music-note-beamed" style="font-size: 2rem; color: #81CBC0;"></i>
            </div>
            <h5 class="card-title" style="color: white;">Listen to Music</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .card:hover {
    transform: scale(1.05);
    transition: 0.3s ease;
    box-shadow: 0 0 15px rgba(129, 203, 192, 0.3);
  }

  .project-card {
    background-color: #101920;
    border-radius: 15px;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(129, 203, 192, 0.2);
  }

  .info-btn {
    background-color: transparent;
    border: 1px solid #81CBC0;
    color: #81CBC0;
    transition: 0.3s;
  }

  .skill-logo {
    width: 70px;
    height: 70px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .skill-logo img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
    transition: transform 0.3s;
  }

  .skill-logo img:hover {
    transform: scale(1.15);
  }

  .skill-progress {
    width: 100%;
  }

  .skill-name {
    display: flex;
    justify-content: space-between;
    color: white;
    font-weight: 500;
    margin-bottom: 0.25rem;
  }

  .skill-percent {
    margin-left: 0.5rem;
  }

  .progress {
    height: 12px;
    background-color: #333;
    border-radius: 6px;
    overflow: hidden;
  }

  .progress-bar {
    height: 12px;
    background-color: #81CBC0;
    transition: width 0.6s ease;
  }

  @media (max-width: 767px) {
    .skill-logo {
      width: 60px;
      height: 60px;
    }

    .skill-progress {
      margin-bottom: 1.2rem;
    }
  }

  .btn:hover {
    transform: scale(1.05);
  }

  .github-btn {
    background-color: #81CBC0;
    color: #0B131A;
    border-radius: 25px;
    transition: 0.3s;
  }

  .email-btn {
    background-color: transparent;
    border: 2px solid #81CBC0;
    color: #81CBC0;
    border-radius: 25px;
    transition: 0.3s;
  }

  .section-title {
    color: #81CBC0;
    font-size: 1.8rem;
  }

  .timeline {
    position: relative;
    max-width: 700px;
    margin: 0 auto;
  }

  .timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background-color: #81CBC0;
    transform: translateX(-50%);
  }

  .timeline-item {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    position: relative;
    margin-bottom: 3rem;
    flex-wrap: wrap;
  }

  .timeline-left,
  .timeline-right {
    width: 45%;
  }

  .timeline-left {
    text-align: right;
    padding-right: 1rem;
  }

  .timeline-right {
    text-align: left;
    padding-left: 1rem;
  }

  .timeline-year {
    color: #81CBC0;
    font-weight: bold;
    font-size: 1rem;
    display: inline-block;
    margin-bottom: 0.5rem;
  }

  .timeline-title {
    color: white;
    font-size: 1.05rem;
    font-weight: 500;
    margin-bottom: 0.3rem;
  }

  .timeline-text {
    color: #ccc;
    font-size: 0.9rem;
    margin: 0;
  }

  .timeline-dot {
    position: absolute;
    left: 50%;
    top: 0.3rem;
    width: 14px;
    height: 14px;
    background-color: white;
    border: 3px solid #81CBC0;
    border-radius: 50%;
    transform: translateX(-50%);
  }
</style>
@endsection


