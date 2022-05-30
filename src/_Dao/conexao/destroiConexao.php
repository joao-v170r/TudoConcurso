<?php
$pdo = null;
$instance = null;
//SET GLOBAL max_connections = 250;
//show variables like 'max_connections';
if (isset($uses[DatabaseMigrations::class])) {
	$this->beforeApplicationDestroyed(function () {
		$this->app->make('db')->connection('mysql')->disconnect();
	});
}
?>