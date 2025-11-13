@extends('master')
@section('content')
<style>
  :root {
    --bg-dark: #0B131A;
    --accent: #81CBC0;
    --text-light: #F5F7FA;
    --card-bg: #101A22;
  }

  body {
    background: var(--bg-dark);
    color: var(--text-light);
    font-family: 'Poppins', sans-serif;
    overflow-x: hidden;
  }

  /* Section Container */
  section {
    padding: 80px 0;
    position: relative;
  }

  /* Animated Gradient Heading */
  .section-title {
    font-size: 2rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    background: linear-gradient(90deg, var(--accent), #B6F0E8, var(--accent));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-align: center;
    margin-bottom: 60px;
    animation: shimmer 4s infinite linear;
  }

  @keyframes shimmer {
    0% { background-position: -200% center; }
    100% { background-position: 200% center; }
  }

  /* Profile Section */
  .profile-img {
    width: 180px;
    height: 180px;
    border-radius: 50%;
    border: 4px solid var(--accent);
    object-fit: cover;
    box-shadow: 0 0 25px rgba(129,203,192,0.4);
    transition: transform 0.4s ease;
  }

  .profile-img:hover {
    transform: scale(1.05);
  }

  .intro-text h2 {
    color: var(--accent);
    font-weight: 600;
    margin-top: 25px;
  }

  .intro-text p {
    font-size: 1.1rem;
    max-width: 700px;
    margin: 0 auto;
    color: #d2d7db;
  }

  /* Info Card */
  .info-card {
    background: linear-gradient(145deg, #0E181F, #131F27);
    border-radius: 18px;
    border: 1px solid #1E2C35;
    padding: 30px;
    transition: all 0.4s ease;
    box-shadow: 0 8px 25px rgba(0,0,0,0.4);
  }

  .info-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 10px 40px rgba(129,203,192,0.2);
  }

  /* Skill Progress */
  .progress {
    background-color: #1C2A33;
    border-radius: 8px;
    height: 10px;
    overflow: hidden;
  }

  .progress-bar {
    background-color: var(--accent);
    border-radius: 8px;
    box-shadow: 0 0 12px rgba(129,203,192,0.8);
  }

  /* Timeline */
  .timeline {
    position: relative;
    padding: 30px 0;
  }

  .timeline::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #1F2D35;
    transform: translateX(-50%);
  }

  .timeline-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 3rem;
  }

  .timeline-box {
    background: var(--card-bg);
    border-left: 4px solid var(--accent);
    padding: 25px;
    width: 46%;
    border-radius: 10px;
    transition: transform 0.3s ease;
  }

  .timeline-box:hover {
    transform: translateY(-6px);
  }

  .timeline-item:nth-child(even) .timeline-box {
    margin-left: auto;
    border-left: none;
    border-right: 4px solid var(--accent);
  }

  /* Floating Glow */
  .glow-hover:hover {
    text-shadow: 0 0 15px var(--accent);
  }

  /* Hobbies Grid */
  .hobby-card {
    background: var(--card-bg);
    border: 1px solid #1E2C35;
    border-radius: 15px;
    padding: 25px;
    text-align: center;
    transition: all 0.4s ease;
  }

  .hobby-card:hover {
    transform: translateY(-8px);
    background: linear-gradient(145deg, #102028, #13272F);
    box-shadow: 0 10px 30px rgba(129,203,192,0.15);
  }

  /* Parallax Overlay */
  .parallax {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.04;
    background: url('{{ asset('images/grid-pattern.png') }}') repeat;
    background-size: contain;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .timeline::before { left: 10px; }
    .timeline-box {
      width: 100%;
      border-right: none !important;
      border-left: 4px solid var(--accent);
      margin-left: 0 !important;
    }
  }
</style>

<!-- ABOUT -->
<section id="about">
  <div class="parallax"></div>
  <div class="container text-center position-relative">
    <img src="{{ asset('images/victor.jpg') }}" alt="Profile Image" class="profile-img mb-4">
    <div class="intro-text">
      <h2>Hello, I'm Victor 👋</h2>
      <p class="mt-3">
        I’m a passionate <span class="glow-hover">Mobile App Developer</span> focused on crafting engaging user experiences.
        I love turning complex problems into simple, beautiful, and intuitive solutions — blending design and logic seamlessly.
      </p>
    </div>
  </div>
</section>

<!-- SKILLS -->
<section id="skills">
  <div class="parallax"></div>
  <div class="container">
    <h2 class="section-title">Technical Expertise</h2>
    <div class="row g-4">
      @foreach (['Flutter' => 92, 'Laravel' => 87, 'JavaScript' => 78, 'Python' => 83, 'MySQL' => 74] as $skill => $percent)
      <div class="col-md-6">
        <div class="info-card">
          <h5 class="mb-3">{{ $skill }}</h5>
          <div class="progress mb-2">
            <div class="progress-bar" style="width: {{ $percent }}%"></div>
          </div>
          <small>{{ $percent }}%</small>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- EDUCATION -->
<section id="education">
  <div class="container">
    <h2 class="section-title">Education Journey</h2>
    <div class="timeline">
      <div class="timeline-item">
        <div class="timeline-box">
          <h5>Universiti Malaysia Pahang (UMP)</h5>
          <small>2022 – Present</small>
          <p>Bachelor in Computer Science (Software Engineering)</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="timeline-box">
          <h5>SMK Seri Tualang</h5>
          <small>2017 – 2021</small>
          <p>Science Stream Student</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- HOBBIES -->
<section id="hobbies">
  <div class="parallax"></div>
  <div class="container">
    <h2 class="section-title">What I Love</h2>
    <div class="row g-4 text-center">
      @foreach (['UI/UX Design', 'App Development', 'Machine Learning', 'Gaming', 'Photography'] as $hobby)
      <div class="col-md-4">
        <div class="hobby-card h-100">
          <h5 class="mb-2 glow-hover">{{ $hobby }}</h5>
          <p>Exploring how technology and creativity shape the future of innovation.</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection
