pipeline {
	agent any
	stages{
		stage('Initial setup'){
			steps{
				sh 'echo starting'
			}
		}
		stage('Checking Docker'){
			steps{
				sh 'sudo docker ps'
			}
		stage('Random command'){
			steps{
				sh 'ping google.com'
			}
		}
	}
}
