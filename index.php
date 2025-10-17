<?php
session_start();
$_SESSION['authenticated'] = false; // change true to simulate login
include __DIR__ . '/layout/header.php';
?>
<link rel="stylesheet" href="css/style.css">

<!-- Hero Section -->
<div class="container my-5">
  <div class="row align-items-center">
    <div class="col-md-6">
      <h1>Learn Anytime, Anywhere</h1>
      <p>Top courses from industry experts to boost your career.</p>
      <a href="#" class="btn btn-primary btn-lg">Explore Courses</a>
    </div>
    <div class="col-md-6">
      <img src="360_F_727272961_CK1r3YSfOwxIHctzKOi10C2TuKtZaVNF.jpg" class="img-fluid rounded" alt="Learning Image">
    </div>
  </div>
</div>

<!-- Courses Section -->
<div class="container my-5">
  <h2 class="mb-4">Popular Courses</h2>
  <div class="row">
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="aiii.jpg" class="card-img-top" alt="Course 1">
        <div class="card-body">
          <h5 class="card-title">Gen AI</h5>
          <p class="card-text">Generative AI, Responsible AI, ChatGPT.</p>
          <a href="#" class="btn btn-primary">Enroll Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="Data-science.jpg" class="card-img-top" alt="Course 2">
        <div class="card-body">
          <h5 class="card-title">Data Science & Machine Learning</h5>
          <p class="card-text">Python, SQL, AI & analytics.</p>
          <a href="#" class="btn btn-primary">Enroll Now</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 mb-3">
      <div class="card">
        <img src="ai.jpg" class="card-img-top" alt="Course 3">
        <div class="card-body">
          <h5 class="card-title">AI</h5>
          <p class="card-text">Artificial Intelligence, Data Science, Development.</p>
          <a href="#" class="btn btn-primary">Enroll Now</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include __DIR__ . '/layout/footer.php'; ?>
