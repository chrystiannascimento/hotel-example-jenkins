pipeline {
  agent {
    node {
      label 'ubuntu'
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
      }
    }
    stage('Migration') {
      steps {
        // Install Composer dependencies
        sh 'php artisan migrate --force'
        sh 'php artisan migrate:fresh --seed'
      }
    }



  }
}