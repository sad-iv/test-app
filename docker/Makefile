##################
# Docker compose
##################

dc_build:
	docker compose build

dc_up:
	docker compose up -d --remove-orphans

dc_build-up:
	docker compose up --build -d

dc_ps:
	docker compose ps

dc_down:
	docker compose down -v --rmi=all --remove-orphans


##################
# App
##################

app_bash:
	docker exec -it test-app-php-fpm bash