<?php
require 'db.php';
$message = '';
if (isset ($_POST['namee'])  && isset($_POST['emaill']) && isset($_POST['query']) ) {
  $name = $_POST['namee'];
  $email = $_POST['emaill'];
  $subject = $_POST['subject'];
  $query = $_POST['query'];
  
  $sql = 'INSERT INTO subjectt (name, email, subject, query ) VALUES(:namee, :emaill, :subject, :query)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':namee' => $name, ':emaill' => $email, ':subject' => $subject, 'query' => $query])) {
    $message = 'data inserted successfully';
  }



}



$messagee = '';
if (isset($_POST['submite']) ) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $emotion = $_POST['emotion'];
  $feedback = $_POST['feeback'];
  
  $sql = 'INSERT INTO feedback (fullname, email, gender, feeback, emotion ) VALUES(:name, :email, :gender, :feeback, :emotion)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':email' => $email, ':gender' => $gender, ':feeback' => $feedback, ':emotion' => $emotion])) {
    $messagee = 'data inserted successfully';
  }
}

$messagee = '';
if (isset($_POST['submiit']) ) {
  
  $email = $_POST['newslatter'];
  
  
  $sql = 'INSERT INTO newslatter (email ) VALUES(:newslatter)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([ ':newslatter' => $email])) {
    $messagee = 'data inserted successfully';
  }
}
$sql = 'SELECT * FROM feedback';
$statement = $connection->prepare($sql);
$statement->execute();
$feed = $statement->fetchAll(PDO::FETCH_OBJ);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GDG-Medea DevUp</title>
    <link rel="icon" type="image/x-icon" href="./assets/code.svg">
    <i class="bi bi-code" type="image/x-icon"></i>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" />
    <style>
        section {
            padding: 60px 0;
        }
    </style>
</head>

<body>

    <!-- carousel -->


    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="bi bi-code"></i> GDG MEDEA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end align-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#events">Our Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feedback">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#getintouche">Get in Touch</a>
                    </li>
                    <li class="nav-item d-md-none">
                        <a class="nav-link" href="#findus">Find us</a>
                    </li>
                    <li class="nav-item ms-2 d-none d-md-inline">
                        <a class="btn btn-secondary" href="#findus">Find us</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>


    <!-- main image & intro text -->
    <section id="intro">
        <div class="container-lg">
            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-md-5 text-center text-md-start">
                    <h1>
                        <div class="display-4">GDG MEDEA</div>
                        <div class="display-5 text-muted">Tech Club</div>
                    </h1>
                    <p class="lead my-4 text-muted">Our mission is to help you enhance you overall tech skills</p>
                    <a href="#pricing" class="btn btn-secondary btn-lg">Join Now!</a>
                    <!-- open sidebar / offcanvas -->
                    <a href="#sidebar" class="d-block mt-3" data-bs-toggle="offcanvas" role="button"
                        aria-controls="sidebar">
                        Explore DevUp
                    </a>
                </div>
                <div class="col-md-5 text-center d-none d-md-block">
                    <!-- tooltip -->
                    <img src="./assets/gdg-medea.jpg" class="img-fluid" alt="GDG-Medea">
                </div>
            </div>
        </div>
    </section>

    <!-- topics at a glance -->
    <section id="events" class="bg-light">
        <div class="container-md">
            <div class="text-center">
                <h2>Our Events</h2>
                <p class="lead text-muted">Quick descriptions of the events we make</p>
            </div>
            <div class="row my-5 g-5 justify-content-around align-items-center">
                <div class="col-6 col-lg-4">
                    <img src="./assets/gdg-event.jpg" class="img-fluid rounded devfest" alt="ebook">
                </div>
                <div class="col-lg-6">

                    <!-- accordion -->
                    <div class="accordion" id="chapters">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#chapter-1" aria-expanded="true" aria-controls="chapter-1">
                                    DevFest - End of the year
                                </button>
                            </h2>
                            <div id="chapter-1" class="accordion-collapse collapse show" aria-labelledby="heading-1"
                                data-bs-parent="#chapters">
                                <div class="accordion-body">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#chapter-2" aria-expanded="false" aria-controls="chapter-2">
                                    Study jams - Anytime of the year
                                </button>
                            </h2>
                            <div id="chapter-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                data-bs-parent="#chapters">
                                <div class="accordion-body">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#chapter-3" aria-expanded="false" aria-controls="chapter-1">
                                    International Women's Day - 8 Mars
                                </button>
                            </h2>
                            <div id="chapter-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                data-bs-parent="#chapters">
                                <div class="accordion-body">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#chapter-4" aria-expanded="false" aria-controls="chapter-4">
                                    Google I/O - Summer
                                </button>
                            </h2>
                            <div id="chapter-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                data-bs-parent="#chapters">
                                <div class="accordion-body">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#chapter-5" aria-expanded="false" aria-controls="chapter-5">
                                    Suggested events - Anytime of the year
                                </button>
                            </h2>
                            <div id="chapter-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                data-bs-parent="#chapters">
                                <div class="accordion-body">
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis assumenda delectus
                                        sapiente quidem consequatur odit adipisci necessitatibus nemo aliquid minus modi
                                        tempore quibusdam quas vitae, animi ipsam nulla sunt alias.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- reviews list -->
    <section id="feedback">
        <div class="container-lg">
            <div class="text-center">
                <h2><i class="bi bi-stars"></i>Feedback</h2>
                <p class="lead">What our participants said about us ...</p>
                <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#reg-modal">
                    Add a feedback
                </button>
            </div>
            
            <div class="row justify-content-center my-5">
            
                <div class="col-lg-8">
                <?php foreach($feed as $feeding): ?> <?php $genree=$feeding->gender; //voila le genre ou tu dois l'utiliser pour changer la couleur ?>

       
                    <div class="list-group">
                        <div id="gender" class="list-group-item py-3 male-box">
                        <script>
                    
 var gender = "";
 gender=<?php echo $genree; ?>;

 if(gender==2){
        document.getElementById('gender').className = "list-group-item py-3 female-box"; }
        </script>
                            <div class="pb-2">
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                            </div>
                            <h5 class="mb-1 male-font"><?= $feeding->emotion; ?></h5>
                            <p class="mb-1"><?= $feeding->feeback;   ?>     </p> 
                            <small><?= $feeding->fullname; ?>   </small>
                        </div>
                        <?php endforeach; ?>
                        <div class="list-group-item py-3 female-box">
                            <div class="pb-2">
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                            </div>
                            <h5 class="mb-1 female-font">An amazing club with a very supportive team</h5>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error
                                veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio
                                commodi labore praesentium voluptate repellat in id quisquam.</p>
                            <small>Review by Mario</small>
                        </div>
                        <div class="list-group-item py-3 male-box">
                            <div class="pb-2">
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-half star"></i>
                            </div>
                            <h5 class="mb-1 male-font">An amazing club with a very supportive team</h5>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error
                                veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio
                                commodi labore praesentium voluptate repellat in id quisquam.</p>
                            <small>Review by Mario</small>
                        </div>
                        <div class="list-group-item py-3 female-box">
                            <div class="pb-2">
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                            </div>
                            <h5 class="mb-1 female-font">An amazing club with a very supportive team</h5>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error
                                veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio
                                commodi labore praesentium voluptate repellat in id quisquam.</p>
                            <small>Review by Mario</small>
                        </div>
                        <div class="list-group-item py-3 male-box">
                            <div class="pb-2">
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-fill star"></i>
                                <i class="bi bi-star-half star"></i>
                            </div>
                            <h5 class="mb-1 male-font">An amazing club with a very supportive team</h5>
                            <p class="mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur error
                                veniam sit expedita est illo maiores neque quos nesciunt, reprehenderit autem odio
                                commodi labore praesentium voluptate repellat in id quisquam.</p>
                            <small>Review by Mario</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact form -->
    <!-- form-control, form-label, form-select, input-group, input-group-text -->
    <section id="getintouche" class="bg-light">
        <div class="container-lg">

            <div class="text-center">
                <h2>Get in Touch</h2>
                <p class="lead">Questions to ask? Fill out the form to contact us directly...</p>
            </div>
            <div class="row justify-content-center my-5">
                <div class="col-lg-6">

                    <form  action="#" method="post">
                        <label for="email" class="form-label">Email address:</label>
                        <div class="input-group mb-4">
                            <span class="input-group-text">
                                <i class="bi bi-envelope-fill text-secondary"></i>
                            </span>
                            <input type="text" name="emaill" id="email" class="form-control" placeholder="e.g. islem@example.com" />
                            <!-- tooltip -->
                            <span class="input-group-text">
                                <span class="tt" data-bs-placement="bottom"
                                    title="Enter an email address we can reply to.">
                                    <i class="bi bi-question-circle text-muted"></i>
                                </span>
                            </span>
                        </div>
                        <label for="name" class="form-label">Name:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill text-secondary"></i>
                            </span>
                            <input type="text" name="namee" id="name" class="form-control" placeholder="e.g. Islem" />
                            <!-- tooltip -->
                            <span class="input-group-text">
                                <span class="tt" data-bs-placement="bottom" title="Pretty self explanatory really...">
                                    <i class="bi bi-question-circle text-muted"></i>
                                </span>
                            </span>
                        </div>
                        <label for="subject" class="form-label">What is your question about?</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-chat-right-dots-fill text-secondary"></i>
                            </span>
                            <select name="subject" class="form-select" id="subject">
                                <option value="next_event" selected>Next event</option>
                                <option value="previous_event">Previous event</option>
                                <option value="participation">How to participate</option>
                                <option value="joining">How to join</option>
                                <option value="other">other</option>
                            </select>
                        </div>
                        <div class="mb-4 mt-5 form-floating">
                            <textarea name="query" class="form-control" id="query" style="height: 140px"
                                placeholder="query"></textarea>
                            <label for="query">Your query...</label>
                        </div>
                        <div class="mb-4 text-center">
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- modal itself -->
    <div class="modal fade" id="reg-modal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">Add your Feedback</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        <label for="email" class="form-label">Email address:</label>
                        <div class="input-group mb-4">
                            <span class="input-group-text">
                                <i class="bi bi-envelope-fill text-secondary"></i>
                            </span>
                            <input type="text" name="email"  id="email" class="form-control" placeholder="e.g. islem@example.com" />
                            <!-- tooltip -->
                            <span class="input-group-text">
                                <span class="tt" data-bs-placement="bottom"
                                    title="Enter an email address we can reply to.">
                                    <i class="bi bi-question-circle text-muted"></i>
                                </span>
                            </span>
                        </div>
                        <label for="name" class="form-label">Full name:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill text-secondary"></i>
                            </span>
                            <input type="text" name="name"  id="name" class="form-control" placeholder="e.g. Islem Amrouche" />
                            <!-- tooltip -->
                            <span class="input-group-text">
                                <span class="tt" data-bs-placement="bottom" title="Pretty self explanatory really...">
                                    <i class="bi bi-question-circle text-muted"></i>
                                </span>
                            </span>
                        </div>
                        <label for="subject" class="form-label">Gender:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-gender-ambiguous text-secondary"></i>
                            </span>
                            <select name="gender" class="form-select" id="subject">
                                <option value="1" selected>Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                        <label for="name" class="form-label">Emotion:</label>
                        <div class="mb-4 input-group">
                            <span class="input-group-text">
                                <i class="bi bi-person-fill text-secondary"></i>
                            </span>
                            <input type="text" name="emotion"  id="name" class="form-control" placeholder="e.g. I am happy!" />
                            <!-- tooltip -->
                            <span class="input-group-text">
                                <span class="tt" data-bs-placement="bottom" title="Pretty self explanatory really...">
                                    <i class="bi bi-question-circle text-muted"></i>
                                </span>
                            </span>
                        </div>
                        <div class="mb-4 mt-5 form-floating">
                            <textarea name="feeback"  class="form-control" id="query" placeholder="query"></textarea>
                            <label for="query">Your feedback...</label>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button type="submit" name="submite" class="btn btn-primary text-center">Submit</button>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container" id="findus">
        <footer class="py-5">
            <div class="row">
                <div class="col-md-4">
                    <h5><i class="bi bi-code"></i> GDG Medea</h5>
                    <p class="text-muted">Google Developers Group Medea is a tech club related to Google where you can
                        find all sorts of tech Events, Trainings, Hackathons... and much more</p>
                </div>

                <div class="col-md-4 mt-4 mt-md-0">
                    <h5>Find us</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2 text-muted"><i class="bi bi-geo-alt-fill"></i> Address: CLS Medea</li>
                        <li class="nav-item mb-2 text-muted"><i class="bi bi-telephone-fill"></i> Phone Number: 05 55 55 55 55</li>
                        <li class="nav-item mb-2 text-muted"><i class="bi bi-envelope-fill"></i> Email: medeamedea350@gmail.com</li>
                    </ul>
                </div>

                <div class="col-md-4 mt-4 mt-md-0">
                    <form method="post">
                        <h5>Subscribe to our newsletter</h5>
                        <p class="text-muted">Monthly digest of whats new and exciting from us.</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" name="newslatter"type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" name="submiit" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container mt-4 w-25">
                <div class="row justify-content-center">
                    <div class="col-3 mx-1"><a class="link-dark" href="https://web.facebook.com/GDG.Medea26"
                            target="_blank"><i class="bi bi-facebook fs-3"></i></a></div>
                    <div class="col-3 mx-1"><a class="link-dark" href="https://www.instagram.com/gdg_medea/"
                            target="_blank"><i class="bi bi-instagram fs-3"></i></a></div>
                    <div class="col-3 mx-1"><a class="link-dark" href="https://github.com/islemamrouche"
                            target="_blank"><i class="bi bi-github fs-3"></i></a></div>
                </div>
            </div>

            <div class="py-4 my-4 border-top text-center">
                <p>&copy; 2022 GDG Medea. All rights reserved.</p>
            </div>
        </footer>
    </div>

    <!-- side panel / offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebar-label">
        <div class="offcanvas-header">
            <h3 class="offcanvas-title" id="sidebar-label">DevUp</h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>DevUp is a free web development training organized by GDG medea</p>
            <h5>What will you learn?</h5>
            <ul>
                <li>Algorithms</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>Bootstrap</li>
                <li>PHP</li>
                <li>JavaScript</li>
            </ul>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
    <script>
        const tooltips = document.querySelectorAll('.tt')
        tooltips.forEach(t => {
            new bootstrap.Tooltip(t)
        })
    </script>
</body>

</html>