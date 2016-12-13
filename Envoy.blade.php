@servers(['web' => 'deploybot@139.162.191.104'])

@macro('deploy', ['on' => 'web'])
	run
@endmacro

@task('run')
	cd /home/hisfa/hisfa
	php artisan down
@endtask


