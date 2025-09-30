<?php
session_start();

if (empty($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit();
}

// Resume Data
$name = "Russell B. Marcelo";
$title = "Bacherlor of Science in Computer Science";

$contact = [
    "email" => "20-08330@g.batstate-u.edu.ph",
    "phone" => "+63 9616303646",
    "location" => "Kumintang Ibaba Batanhas",
    "status" => "Single",
    "github"=> "https://github.com/CrumblinChipp",
];
$images = [
  "background"=> "image/background.jpg",
  "music"=> "image/music.png",
  "books"=> "image/books.png",
  "shows"=> "image/shows.png",
  "theater"=> "image/theatre.png"
  ];

$summary = "Motivated Computer Science student with a solid foundation in programming and web development. 
Skilled in creating structured and responsive designs using HTML and CSS, with beginner-level experience in 
Java and Python for problem-solving and application development. Demonstrates a strong willingness to learn new technologies,
 adapt to challenges, and collaborate effectively in team environments. Known for attention to detail, persistence in tackling technical problems, 
 and a growing passion for building practical and innovative digital solutions.";


$education = [
    ["level" => "Elementary Graduate", "school" => "Batangas City South Elemetary School", "year" => "2014"],
    ["level" => "Junior High School Graduate", "school" => "Batangas National High School", "year" => "2018"],
    ["level" => "Senior High School Graduate", "school" => "STI College Batangas", "year" => "2020"],
    ["level" => "Bachelor of Science in Computer Science", "school" => "Batangas State University - TNEU", "year" => "2020 — Present"]
];

$basic_know = ['HTML', 'CSS', 'Java', 'Pyhton'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo $name; ?> - Resume</title>
  <style>
    .container_resume {
    max-width: 800px;
    margin: 50px auto;
    padding: 30px;
    background-color: rgba(20, 20, 20, 0.8);
    border: 2px solid rgba(255, 255, 255, 0.2);
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.7);
    color: white;
    }
    .container h1,
    .container h2,
    .container h3 {
        color: #67ff25dc;
        margin-bottom: 15px;
    }

    h1 {
        display: flex;
        margin-bottom: 0;
        line-height: 38px;

        font-size: 270%;
        font-family: Arial
    }

    h2 {
        color: #007404ff;
        margin-top: 30px;
        margin-bottom: 1px;
    }

    .top-header {
        display: flex;
        justify-content:space-between;
        align-items:flex-start;
        gap: 30px;
    }
    .header{ flex: 1;}

    .contact { font-size: 13px; margin-bottom: 20px; }
    .summary { flex: 1;}
    .top-section {
        display: flex;
        justify-content:space-between;
        align-items: flex-start;
        gap: 30px;
    }

    .icons-container {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }
    .icon {
        width: 60px;
        height: 60px;
        background-color: #90ee90;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        box-shadow: 0 2px 6px rgba(0,0,0,0.3);
    }

    .icon img {
        max-width: 80%;
        max-height: 80%;
    }

    .section { flex: 1;}
    .section ul { padding-left: 20px; }
    .education-item { margin-bottom: 15px; }
    .label { font-weight: bold; }
    strong { color: #90ee90;}
  </style>
</head>
<body>
  <div class="container_resume">
    <div class="top-header">
      <div class="header">
        <h1><?php echo $name; ?></h1>
        <p style="color: green;"><em><?php echo $title; ?></em></p>

        <div class="contact">
          <p>
            <strong>Email:</strong> <?php echo $contact['email']; ?> <br>
            <strong>Phone:</strong> <?php echo $contact['phone']; ?> <br>
            <strong>Location:</strong> <?php echo $contact['location']; ?> <br>
            <strong>Civil Status:</strong> <?php echo $contact['status']; ?> <br>
            <strong>Github:</strong> <a href="<?php echo $contact['github']; ?>"><?php echo $contact['github']; ?></a>
          </p>
        </div>
      </div>

      <div class="summary">
        <h2>Professional Summary</h2>
        <p style="margin-top: 1px;"><?php echo $summary; ?></p>
      </div>
    </div>

    <div class="top-header">
      <div class="section">
        <h2>Education</h2>
        <?php foreach ($education as $edu): ?>
          <div class="education-item">
            <p>
              <strong><?php echo $edu['level']; ?></strong><br>
              <?php echo $edu['school']; ?> • <?php echo $edu['year']; ?>
            </p>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="section">
        <h2>Basic Knowledge</h2>
        <?php foreach ($basic_know as $basic): ?>
          <ul><li><?php echo $basic ?> </li></ul>
        <?php endforeach; ?>

        <h2>Interest</h2>
        <div class="icons-container">
          <div class="icon">
            <img src="<?php echo $images["music"]; ?>" alt="music icon">
          </div>
          <div class="icon">
            <img src="<?php echo $images["books"]; ?>" alt="books icon">
          </div>
          <div class="icon">
            <img src="<?php echo $images["shows"]; ?>" alt="shows icon">
          </div>
          <div class="icon">
            <img src="<?php echo $images["theater"]; ?>" alt="theater icon">
          </div>
        </div>
      </div>

    </div>
  </div>
</body>
</html>
