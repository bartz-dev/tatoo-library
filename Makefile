DOCKER_COMPOSE=eval "docker-compose -f docker-compose.yml"
DOCKER_COMPOSE_TEST=eval "docker-compose -f docker-compose-test.yml -p winwin-test"

install:
	docker-compose up --build -d

up:
	docker-compose up -d

watch:
	npm run dev watch
stop:
	docker-compose down -v

test: ## Run tests
	${DOCKER_COMPOSE_TEST} run --rm -v $${PWD}:/var/www php-fpm test --filter=$(filter) || true
	${DOCKER_COMPOSE_TEST} down -v

install:
	${DOCKER_COMPOSE} run --entrypoint=/usr/bin/composer --rm php-fpm install
	@echo ""
	@echo "------------------------------------------------"
	@echo "Installation is completed."
	@echo "------------------------------------------------"
	@echo ""
	make up
