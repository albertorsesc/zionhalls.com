<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeploymentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zion:deploy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to deploy the application';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Deploying application...');

        $this->call('down');

        if (! app()->environment('production')) {
            $this->call('migrate:fresh', ['--seed' => true]);
        } else {
            $this->call('migrate', ['--force' => true]);
        }

        if (! app()->isProduction()) {
            $this->call('storage:link');
        }

        // Composer
        $this->info('Composer...');

        if (! app()->isProduction()) {
            exec('composer install', $output);
            exec('composer update', $output);
            exec('composer dump-autoload', $output);
        }

        // NPM

        if (! app()->isProduction()) {
            exec('npm install', $output);
            exec('npm update', $output);
            exec('npm run dev', $output);
        } else {
            exec('npm install --omit=dev', $output);
            exec('npm run build', $output);
        }

        $this->call('optimize:clear');
        $this->call('optimize');

        $this->call('up');

        $this->info('Application deployed!');
    }
}
