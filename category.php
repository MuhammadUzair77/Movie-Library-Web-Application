<?php
require_once 'config/db.php';

$category = $_GET['category'] ?? '';
if (!$category) {
    echo "Category not selected!";
    exit;
}

$sql = "SELECT * FROM movies WHERE category = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $category);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($category) ?> Movies</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #1A1A1A;
            --accent: #E50914;
            --bg: #121212;
            --text: #FFFFFF;
            --card-bg: #1E1E1E;
            --shadow: rgba(0, 0, 0, 0.3);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('https://images.unsplash.com/photo-1536440136628-849c177e76a1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 40px 20px;
            color: var(--text);
            text-align: center;
            min-height: 100vh;
        }

        h2 {
            color: var(--accent);
            font-size: 2.5rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        a {
            display: inline-block;
            margin-bottom: 30px;
            color: var(--accent);
            text-decoration: none;
            font-weight: bold;
            border: 1px solid var(--accent);
            padding: 10px 20px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        a:hover {
            background-color: var(--accent);
            color: white;
            text-decoration: none;
        }

        .movies-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .movie-card {
            border-radius: 8px;
            background-color: var(--card-bg);
            width: 180px;
            box-shadow: 0 4px 12px var(--shadow);
            transition: all 0.3s ease;
            overflow: hidden;
            text-align: center;
            position: relative;
        }

        .movie-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
        }

        .movie-card img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            border-bottom: 1px solid #333;
        }

        .movie-card h3 {
            font-size: 16px;
            margin: 12px 0 6px;
            color: var(--accent);
            padding: 0 8px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .movie-card p {
            font-size: 13px;
            padding: 0 8px 12px;
            color: #AAAAAA;
            margin: 4px 0;
        }

        .movie-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--accent);
        }
    </style>
</head>
<body>
    <h2><?= htmlspecialchars($category) ?> Movies</h2>
    <a href="index.php">⬅ Back to Homepage</a>

    <div class="movies-container">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="movie-card">
                <img src="<?= $row['image'] ?>" alt="<?= $row['name'] ?>">
                <h3><?= $row['name'] ?></h3>
                <p><strong>Rating:</strong> <?= $row['rating'] ?></p>
                <p><?= $row['description'] ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>