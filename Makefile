
build:
	browserify assets/js/front.js -o assets-out/js/front.js

watch-js:
	watchify assets/js/front.js -o assets-out/js/front.js -d

server:
	php -S localhost:8000
