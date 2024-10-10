#!/usr/bin/make

ifeq ($(OS), Windows_NT)
	PLATFORM = windows
else
	UNAME_S = $(shell uname -s)
	ifeq ($(UNAME_S), Linux)
		PLATFORM = unix
	else ifeq ($(UNAME_S), Darwin)
		PLATFORM = unix
	endif
endif

ifeq ($(PLATFORM), windows)
	HELP_SUPPORTED = no
else
	HELP_SUPPORTED = yes
endif

.PHONY: help
help: ## Show this help
ifeq ($(HELP_SUPPORTED), yes)
	@printf "\033[33m%s:\033[0m\n" 'Available commands'
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z0-9_-]+:.*?## / {printf "  \033[32m%-19s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)
else
	@echo Add "printf" and "awk" to PATH to display help
endif

.PHONY: build
build: ## Build containers
	docker run -v .:/var/www --name duyler-builder -w /var/www duyler/php-zts composer install
	docker rm --force --volumes duyler-builder

.PHONY: rebuild
rebuild: down up ## Recreate all containers

.PHONY: down
down: ## Destroy all containers
	docker compose down --rmi all --volumes --remove-orphans

.PHONY: up
up: ## Start all containers
	docker compose up -d --build --force-recreate
	docker compose up --detach --remove-orphans

.PHONY: stop
stop: ## Stop all containers
	docker compose stop

.PHONY: restart
restart: ## Restart all containers
	docker compose stop
	docker compose up -d
