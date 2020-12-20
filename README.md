# Teaching
Just a teaching example

# Dependency Instalation
```sh
composer require --dev php-parallel-lint/php-parallel-lint
vendor/bin/parallel-lint --exclude vendor .

composer global require "squizlabs/php_codesniffer=*"
composer require "squizlabs/php_codesniffer=*"
vendor/bin/phpcs --colors --standard=PSR12 src
```

## php cs fixer
```sh
composer require friendsofphp/php-cs-fixer
vendor/bin/php-cs-fixer fix src
```

## Next steps
```sh
composer require phploc/phploc
vendor/bin/phploc src --count-tests --exclude vendor

composer require sebastian/phpcpd
vendor/bin/phpcpd --exclude vendor .

composer require phpmd/phpmd
vendor/bin/phpmd src text codesize,unusedcode,naming --exclude vendor/

composer require pdepend/pdepend
vendor/bin/pdepend --summary-xml=/tmp/summary.xml --jdepend-chart=/tmp/jdepend.svg --overview-pyramid=/tmp/pyramid --ignore=vendor .

composer require --dev theseer/phpdox 
vendor/bin/phpdox -f build/phpdox.xml
```

# PIPELINE EXAMPLE
```sh
pipeline {
    agent any
    stages {
        stage('checkout from gitlab') {
            steps {
                git branch: 'master',
		        credentialsId: 'gitab-darboleda',
		        url: 'https://gitlab.com/darboleda_public/teaching/tdd-ci.git'
            }
        }
        
        stage('Prepare') {
            steps {
                sh 'composer install'
                sh 'rm -rf xml-coverage'
            }
        }
        
        stage('Error Syntax check') { steps { sh 'vendor/bin/parallel-lint --exclude vendor/ .' } }
        
        stage('PSR check') { steps { sh 'vendor/bin/phpcs src --colors --standard=PSR12 || exit 0' } }
        
        stage('Lines of code') { steps { sh 'vendor/bin/phploc src --count-tests --exclude vendor'} }
        
        stage('Copy paste detection') { steps { sh 'vendor/bin/phpcpd --exclude vendor . || exit 0'} }
        
	stage('Mess detection'){
            steps {
                sh 'vendor/bin/phpmd src text codesize,unusedcode,naming --exclude vendor/ || exit 0'
            }
        }

stage('Metrics'){
    steps {
sh 'vendor/bin/pdepend --summary-xml=/tmp/summary.xml --jdepend-chart=/tmp/jdepend.svg --overview-pyramid=/tmp/pyramid --ignore=vendor .'
    }
}

        stage('Unit Test'){
            steps {
                sh 'vendor/phpunit/phpunit/phpunit tests/ || exit 0'
            }
        }
    }
}
```