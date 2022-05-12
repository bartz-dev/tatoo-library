install:
	docker-compose up --build -d

up:
	docker-compose up -d

watch:
	npm run dev watch
stop:
	docker-compose down -v

