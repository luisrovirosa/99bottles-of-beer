# 99 bottles of beer

## Goal
- Implement the song [99 bottles of beer](http://www.99-bottles-of-beer.net/lyrics.html) 

# 1. Build the image
## 1.1. Build the image
    docker build -t my-php .
## 1.2. Install the composer dependencies
    docker run -v YOUR_PROJECT_FULLPATH/:/opt/project my-php composer install
# 2. Run the tests
## 2.1. From command line
    docker run -v YOUR_PROJECT_FULLPATH/:/opt/project my-php ./vendor/bin/phpunit