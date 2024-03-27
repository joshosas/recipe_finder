# Recipe Finder Laravel Application

This Laravel application, known as Recipe Finder, allows users to search for various recipes based on different criteria. Users can search for recipes by entering keywords, ingredients, or specific dietary preferences. The application utilizes the Spoonacular API to fetch a wide range of recipes and their details.

In addition to searching for recipes, the application also incorporates a touch of humor by integrating the Humor API. Users can access a collection of jokes to lighten their mood while browsing through recipes.

## Features

-   **Recipe Search**: Users can search for recipes by entering keywords, ingredients, or dietary preferences.
-   **Recipe Details**: Detailed information about each recipe, including title, image.
-   **Pagination**: Recipes are paginated for ease of browsing.
-   **Integration with Spoonacular API**: The application interacts with the Spoonacular API to fetch recipe data.
-   **Humor API Integration**: Users can access a collection of jokes to add a touch of humor to their experience.

## Installation

To run the Recipe Finder Laravel Application locally, follow these steps:

1. Clone the repository to your local machine:

    ```
    git clone https:github.com/joshosas/recipe_finder.git
    ```

2. Install composer dependencies:

    ```
    composer install
    ```

3. Copy the `.env.example` file to `.env` and configure your database settings, as well as any other necessary environment variables:

    ```
    cp .env.example .env
    ```

4. Generate an application key:

    ```
    php artisan key:generate
    ```

5. Run database migrations:

    ```
    php artisan migrate
    ```

6. Optionally, seed the database with sample data:

    ```
    php artisan db:seed
    ```

7. Start the Laravel development server:

    ```
    php artisan serve
    ```

8. Access the application in your web browser at `http://localhost:8000`.

## Usage

1. Visit the homepage of the Recipe Finder application.
2. View details, including title, image.
3. Enjoy a collection of jokes by clicking on the "Jokes" section to lighten your mood.

## Contributors

-   [Joshua Aigbiremhon](https://github.com/joshosas)

---

For any questions or feedback, please contact [joshuaosaro20@gmail.com](mailto:joshuaosaro20@gmail.com).

**Enjoy cooking and have a laugh with Recipe Finder!**

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

Laravel is accessible, powerful, and provides tools required for large, robust applications.
