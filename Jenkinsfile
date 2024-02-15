pipeline {
  agent {
    node {
      label 'ubuntu'
    }

  }
  stages {
    stage('Build') {
      steps {
        sh '''composer install
cp .env.example .env'''
      }
    }

  }
}