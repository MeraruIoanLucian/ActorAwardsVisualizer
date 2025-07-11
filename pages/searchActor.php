<?php
$search = isset($_GET['name']) ? trim($_GET['name']) : '';
if ($search !== '') {
    $search_url = "actor_profile.php?name=" . urlencode($search);
    header("Location: $search_url");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actor Awards Visualizer - Search</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/searchActor.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>
<body>
    <?php include '../includes/navbar.php'; ?>

    <div class="container">
        <h1>Search Actor Profile</h1>
        <form method="get" action="searchActor.php" class="search-form">
            <input type="text" name="name" placeholder="Enter actor's full name" required>
            <button type="submit">Search</button>
        </form>
    </div>

    <?php include '../includes/footer.php'; ?>
</body>
</html>