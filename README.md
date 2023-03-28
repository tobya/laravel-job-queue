Introduction: 
    This project is a Laravel job/queue example that demonstrates how to use Laravel's job and queue system to execute tasks asynchronously.

Installation:
    To install this project, clone the repository and run composer install to install the required dependencies.

Configuration:
    To configure this project, create a .env file based on the .env.example file and set the necessary environment variables.
    Set QUEUE_CONNECTION=database in .env file.
    For Mail Configuration you can use "mailtrap.io" for testing purpose
        MAIL_MAILER=smtp
        MAIL_HOST=sandbox.smtp.mailtrap.io
        MAIL_PORT=2525
        MAIL_USERNAME={your_username_from_mailtrap.io}
        MAIL_PASSWORD={your_password_from_mailtrap.io}
        MAIL_ENCRYPTION=tls

Usage:
    To use this project, run "php artisan queue:work" to start the queue worker. Then, use the provided routes to create and dispatch jobs.

Troubleshooting:
    If you encounter any problems while using this project, please consult the Laravel documentation or create an issue in the GitHub repository.

Credits
    This project was created by Ajaz Memon and inspired by the OTF Coder Team.