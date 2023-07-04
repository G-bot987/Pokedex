# CI Group Tec Test, Pokedex!

## Technologies:

Laravel
PHP
Bootstrap
Heroku
MySQL

## Requested Skills Demonstrated:

-   [x] Registration
-   [x] Import Pokémon data and seed MySQL
-   [x] API integration
-   [x] Front end with:
    -   [x] Secure Pokédex
    -   [x] Pagination
    -   [x] Data filtering
    -   [x] Use of GIF images
    -   [x] Display individual cards
-   [x] Deployed app

## Deployed at

http://alluring-kings-canyon-06696-e97f27ca535a.herokuapp.com/

## Approach:

This was my first PHP and Laravel app, so it was a rewarding but challenging experience! The test was broken into incremental tasks. Initially, the login and user registration functionality was built to provide a proof of concept for the full-stack application. The Pokémon data from the gist (https://gist.github.com/santiagoolivar2017/0591a53c4dd34ecd8488660c7372b0e3) was then converted into seed data and used to populate a Pokémon table for the Laravel API to fetch data from. Once the data was retrieved, a basic rendering of the Pokémon data was created. Individual cards were then added, followed by the pagination functionality, and finally, the filter/search option was implemented.

Next, the application was deployed, which was the most time-consuming part of the task, involving debugging and researching. I searched for a good server, but I couldn't find any reasonable free options. I would be grateful for any input here. Based on my previous experience with Heroku, I chose that platform. Once I got the app building, I had to go through the codebase to make some minor fixes, such as changing "\" to "/" in the views routes, for instance. I also spent a significant amount of time debugging failed connections, but eventually, these issues were resolved.

Finally, I worked on quality control and identified and resolved a few issues, specifically in the production environment, such as problems with IDs and incorrect data, resulting in amendments to the data structure. I tested all major iterations/sprints as I progressed, for instance, testing the login functionality and then the Pokémon data rendering. Given the full-stack nature of this task, a significant amount of time was invested in quality control at the end of the project.

## Improvements:

More filter and search options, favoriting, and note adding to individual Pokémon, as well as information on where they can be found in the first-gen games. Given the time invested in this project to date, I was eager to get a working version that satisfied all the requirements. Ideally, SCSS with BEM would have been used for styling, but due to time constraints and the depth of front-end work in my portfolio (GitHub: https://github.com/G-bot987/adaptable, deployed: https://adaptable-three.vercel.app/), I used Bootstrap instead. I attempted to introduce Tailwind but encountered some issues, so I reverted to Bootstrap. I would be grateful for the opportunity to discuss this further. As this is my first Laravel application, I'm proud of what I've done and have invested a significant amount of time in this test. I have thoroughly enjoyed the challenge, so thank you for the opportunity!

## Added Extras:

Individual Pokémon card, basic Bootstrap UI

## To recreate locally, follow these steps:

### Requirements:

-   PHP
-   Laravel command line
-   Composer
-   XAMPP
-   MySQL

### Local version:

Run the following commands:

-   php artisan migrate
-   php artisan db:seed
-   php artisan serve
