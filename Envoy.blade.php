@servers(['web-1' => 'root@178.128.72.1', 'web-2' => 'root@178.128.76.137'])

@task('deploy', ['on' => ['web-1', 'web-2'], 'parallel' => true])
    ls -la
@endtask