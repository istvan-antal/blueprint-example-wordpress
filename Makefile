init-dev:
	rm -fr dev/blueprint
	git clone git@github.com:istvan-antal/blueprint.git dev/blueprint
	
infrastructure:
	cd dev; ./launch.py