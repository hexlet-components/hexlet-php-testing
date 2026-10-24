install:
	composer install

console:
	composer exec --verbose psysh

lint:
	mago lint
	mago fmt --check

lint-fix:
	mago lint --fix --format-after-fix

test:
	composer exec --verbose phpunit tests

test-coverage:
	composer exec --verbose phpunit tests -- --coverage-clover build/logs/clover.xml
