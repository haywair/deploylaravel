@servers(['web-1' => 'root@178.128.72.1'])

@task('deploy', ['on' => ['web-1'], 'parallel' => true])
    ls -la
@endtask