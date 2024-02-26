pipeline {
  agent {
    node {
      label 'jenkins'
    }

  }
  stages {
    stage('Checkout') {
      steps {
          // Checkout source code from repository
          checkout scm
      }
    }
    stage('Install Dependencies') {
      steps {
        // Install Composer dependencies
        sh 'composer install'
        sh 'cp .env.example .env'
      }
    }
    stage('Migration') {
      steps {
        // Install Composer dependencies
        sh 'php artisan migrate --force'
        sh 'php artisan migrate:fresh --seed'
      }
    }
    stage('Test') {
      steps {
        // Run PHPUnit tests
        sh 'php artisan test'
      }
    }



  }
}