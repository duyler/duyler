#!/usr/bin/make

.PHONY: rebuild ## Recreate containers
rebuild: down up

.PHONY: down
down: ## Destroy containers
	docker compose down --rmi all --volumes --remove-orphans

.PHONY: up
up: ## Start containers
	docker compose up -d --build --force-recreate
	docker compose up --detach --remove-orphans

.PHONY: stop
stop: ## Stop containers
	docker compose stop

.PHONY: restart
restart: stop up ## Restart containers
