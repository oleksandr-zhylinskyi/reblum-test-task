PHP = docker exec reblum_app php

migrate:
	$(PHP) artisan migrate

rollback:
	$(PHP) artisan migrate:rollback

seed:
	$(PHP) artisan db:seed