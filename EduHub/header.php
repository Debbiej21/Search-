<html>
    <head>
        <?php
        $page_title = "Header";
        ?>
        <meta charset="UTF-8">
        <title><?php echo $page_title ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://bootswatch.com/5/united/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <header>
        <?php
        session_start();
        if (isset($_SESSION['UserEmail'])) {
            echo'<div class= "navbar">';
            echo'<nav class = "navbar navbar-expand-lg navbar-dark" style = "background-color: #FFFFFF; position: sticky; width: 100%; top: 0; z-index: 1;">';
            echo'<div class = "container-fluid">';
            echo'<a href = "menu.php"><img src = "eduhub.png" class = "navbar-brand" style = "width:auto; height:auto;"></a>';
            echo'<button class = "navbar-toggler" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navbarColor01" aria-controls = "navbarColor01" aria-expanded = "true" aria-label = "Toggle navigation">';
            echo'<span class = "navbar-toggler-icon"></span>';
            echo'</button>';
            echo'<div class = "navbar-collapse collapse show" id = "navbarColor01">';
            echo'<ul class = "navbar-nav me-auto">';
            echo '</ul>';

            echo '<ul class = "nav navbar-nav">';
            echo '<li class = "nav-item" style="padding-right: 20px;">';
            echo '<a class = "nav-link" href = "library.php" style = "color: black;">Library</a>';
            echo '</li>';

            echo '<li class = "nav-item"  style="padding-right: 20px;">';
            echo '<a class = "nav-link" href = "quiz.php" style = "color: black;">Quiz</a>';
            echo '</li>';

            echo '<li class = "nav-item"  style="padding-right: 20px;">';
            echo '<a class = "nav-link" href = "video.php" style = "color: black;">Video</a>';
            echo '</li>';

            echo '<li class = "nav-item"  style="padding-right: 20px;">';
            echo '<a class = "nav-link" href = "profile.php" style = "color: black;">Profile</a>';
            echo '</li>';

            echo '<li class = "nav-item"  style="padding-right: 20px;">';
            echo '<a class = "nav-link" href = "logout.php" style = "color: black;">Log Out</a>';
            echo '</li>';

            echo '</ul>';
            echo '</div>';
            echo '</nav>';
            echo '</div>';

            echo'<div class= "navbar">';
            echo'<nav class = "navbar navbar-expand-lg navbar-dark" style = "background-color: #E52B69; position: sticky; width: 100%; height:90px; top: 0; z-index: 1;">';
            echo'<div class = "container-fluid">';
            echo'<div class = "navbar-collapse collapse show" id = "navbarColor01">';
            echo'<ul class = "navbar-nav me-auto">';
            echo '</ul>';
            echo '<ul class = "nav navbar-nav">';
            echo '<li class = "nav-item" style="padding-right: 50px;">';
            echo '<a class = "nav-link" href = "donation.php" style = "color: white;">Donation</a>';
            echo '</li>';
            echo '</ul>';
            echo '<ul class = "navbar-nav">';
            echo '<li class = "nav-item dropdown" style="padding-right: 95px;">';
            echo '<a class = "nav-link dropdown-toggle" data-bs-toggle = "dropdown" href = "subject.php" role = "button" aria-haspopup = "true" aria-expanded = "false" style="color: white;">Subject</a>';
            echo '<div class = "dropdown-menu">';
            echo '<a class = "dropdown-item" href = "#">Mathematics</a>';
            echo '<a class = "dropdown-item" href = "#">Arts</a>';
            echo '<a class = "dropdown-item" href = "#">Science</a>';
            echo '<a class = "dropdown-item" href = "#">History</a>';
            echo '<a class = "dropdown-item" href = "#">Geography</a>';
            echo '<div class = "dropdown-divider"></div>';
            echo '<a class = "dropdown-item" href = "#">English</a>';
            echo '<a class = "dropdown-item" href = "#">French</a>';
            echo '<a class = "dropdown-item" href = "#">Chinese</a>';
            echo '</div>';
            echo '</li>';
            echo '</ul>';
            echo '</div>';
            echo '</nav>';
            echo '</div>';
        } else {
            echo'<div class= "navbar">';
            echo'<nav class = "navbar navbar-expand-lg navbar-dark" style = "background-color: #FFFFFF; position: sticky; width: 100%; top: 0; z-index: 1;">';
            echo'<div class = "container-fluid">';
            echo'<a href = "menu.php"><img src = "eduhub.png" class = "navbar-brand" style = "width:auto; height:90px;"></a>';
            echo'<button class = "navbar-toggler" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navbarColor01" aria-controls = "navbarColor01" aria-expanded = "true" aria-label = "Toggle navigation">';
            echo'<span class = "navbar-toggler-icon"></span>';
            echo'</button>';
            echo'<div class = "navbar-collapse collapse show" id = "navbarColor01">';
            echo'<ul class = "navbar-nav me-auto">';
            echo '</ul>';

            echo '<ul class = "nav navbar-nav">';
            echo '<li class = "nav-item" style="padding-right: 20px;">';
            echo '<a class = "nav-link" href = "library.php" style = "color: black;">Library</a>';
            echo '</li>';

            echo '<li class = "nav-item"  style="padding-right: 20px;">';
            echo '<a class = "nav-link" href = "quiz.php" style = "color: black;">Quiz</a>';
            echo '</li>';

            echo '<li class = "nav-item"  style="padding-right: 20px;">';
            echo '<a class = "nav-link" href = "video.php" style = "color: black;">Video</a>';
            echo '</li>';

            echo '<li class = "nav-item"  style="padding-right: 20px;">';
            echo '<a class = "nav-link" href = "signup.php" style = "color: black;">Sign Up</a>';
            echo '</li>';

            echo '<li class = "nav-item"  style="padding-right: 20px;">';
            echo '<a class = "nav-link" href = "login.php" style = "color: black;">Login</a>';
            echo '</li>';

            echo '</ul>';
            echo '</div>';
            echo '</nav>';
            echo '</div>';

            echo'<div class= "navbar">';
            echo'<nav class = "navbar navbar-expand-lg navbar-dark" style = "background-color: #E52B69; position: sticky; width: 100%; height:90px; top: 0; z-index: 1;">';
            echo'<div class = "container-fluid">';
            echo'<div class = "navbar-collapse collapse show" id = "navbarColor01">';
            echo'<ul class = "navbar-nav me-auto">';
            echo '</ul>';
            echo '<ul class = "nav navbar-nav">';
            echo '<li class = "nav-item" style="padding-right: 50px;">';
            echo '<a class = "nav-link" href = "donation.php" style = "color: white;">Donation</a>';
            echo '</li>';
            echo '</ul>';
            echo '<ul class = "navbar-nav">';
            echo '<li class = "nav-item dropdown" style="padding-right: 95px;">';
            echo '<a class = "nav-link dropdown-toggle" data-bs-toggle = "dropdown" href = "subject.php" role = "button" aria-haspopup = "true" aria-expanded = "false" style="color: white;">Subject</a>';
            echo '<div class = "dropdown-menu">';
            echo '<a class = "dropdown-item" href = "#">Mathematics</a>';
            echo '<a class = "dropdown-item" href = "#">Arts</a>';
            echo '<a class = "dropdown-item" href = "#">Science</a>';
            echo '<a class = "dropdown-item" href = "#">History</a>';
            echo '<a class = "dropdown-item" href = "#">Geography</a>';
            echo '<div class = "dropdown-divider"></div>';
            echo '<a class = "dropdown-item" href = "#">English</a>';
            echo '<a class = "dropdown-item" href = "#">French</a>';
            echo '<a class = "dropdown-item" href = "#">Chinese</a>';
            echo '</div>';
            echo '</li>';
            echo '</ul>';
            echo '</div>';
            echo '</nav>';
            echo '</div>';
        }
        ?>

    </header>
</html>

<!-- 
unused or to be used code here....
for quizzes:
$sql2 = "SELECT Event_Name AS Name, PageLink AS Link from event";
        $result2 = $conn->query($sql2);
        $c3 = 'Name';
        $c4 = 'Link';
        while ($row = $result2->fetch_assoc()) {
            echo "<a class = 'dropdown-item' href = '$row[$c4]'>" . $row[$c3] . '</a>';
        }

-->