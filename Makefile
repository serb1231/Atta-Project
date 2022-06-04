start_server:
	docker-compose up -d --build
	sudo docker network connect web site_nginx
	sudo docker network connect web site_wp
	sudo docker network connect database site_wp
	sudo docker network connect database site_mysql
stop_server:
	docker-compose down