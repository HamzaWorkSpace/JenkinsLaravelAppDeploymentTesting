pipeline {
    agent { label 'linux-build' }

    stages {
        stage('Deploy Laravel App') {
            steps {
                sh '''
                    cd /var/www/jenkins-laravel-app
                    git pull origin main
                    composer install --no-interaction
                    php artisan optimize:clear
                '''
            }
        }
    }
}
