# Movie Library Web Application

A sleek, modern movie catalog system that organizes films by category with a Netflix-inspired design.

## Features

- **Category Browsing**: Filter movies by genre (Action, Comedy, Horror, Drama, Sci-Fi)
- **Responsive Design**: Works on all devices with a dark theme
- **Movie Cards**: Visual display with titles, ratings, and descriptions
- **Database Integration**: MySQL backend for movie data storage
- **Cinematic UI**: Themed background images and accent colors

## Technologies Used

- **Frontend**: HTML5, CSS3 (with custom styling)
- **Backend**: PHP with MySQL database
- **Fonts**: Google Fonts (Poppins)

## File Structure

- `index.php` - Homepage with category selection form
- `category.php` - Displays movies by selected category
- `db.php` - Database connection configuration
- Movie poster images (JPG files)

## How It Works

1. Users select a movie category from the homepage
2. The application queries the database for matching movies
3. Results are displayed as styled cards with movie details
4. Users can return to the category selection

## Setup

1. Create a MySQL database named `movie_library`
2. Configure database credentials in `db.php`
3. Upload to a PHP/MySQL enabled server
