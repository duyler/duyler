#!/usr/bin/make

.PHONY: build
build: ## Create containers
	docker compose up -d cli --build --force-recreate
	docker compose run cli composer install
	docker compose down cli --rmi all --volumes --remove-orphans

.PHONY: rebuild ## Recreate containers
rebuild: down build up

.PHONY: down
down: ## Destroy containers
	docker compose down --rmi all --volumes --remove-orphans

.PHONY: up
up: ## Start containers
	docker compose up -d php
	docker compose up --detach --remove-orphans

.PHONY: stop
stop: ## Stop containers
	docker compose stop

.PHONY: restart
restart: stop up ## Restart containers
