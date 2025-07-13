<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movie Library</title>
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
    background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed;
    background-size: cover;
    min-height: 100vh;
    padding: 40px 20px;
}

h2 {
    color: var(--accent);
    font-size: 2.5rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 30px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

select {
    background-color: var(--card-bg);
    color: var(--text);
    border: 1px solid var(--accent);
    width: 250px;
}

button {
    background-color: var(--accent);
    font-weight: bold;
    letter-spacing: 1px;
    padding: 12px 30px;
}

button:hover {
    background-color: #B20710;
    transform: scale(1.05);
    transition: all 0.3s ease;
}

form {
    background-color: rgba(30, 30, 30, 0.8);
    padding: 30px;
    border-radius: 10px;
    display: inline-block;
    box-shadow: 0 10px 20px rgba(0,0,0,0.3);
}
    </style>
</head>
<body>
    <center> <h2>Select a Movie Category</h2>
    <form action="category.php" method="GET">
        <select name="category" required>
            <option value="">-- Choose Category --</option>
            <option value="Action">Action</option>
            <option value="Comedy">Comedy</option>
            <option value="Horror">Horror</option>
            <option value="Drama">Drama</option>
            <option value="Sci-Fi">Sci-Fi</option>
        </select>
        <button type="submit">View Movies</button></center>
    </form>
</body>
</html>
