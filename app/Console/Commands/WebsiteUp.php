<?php

namespace App\Console\Commands;

use App\Website;
use Illuminate\Console\Command;

class WebsiteUp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'website:up';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Removes coming soon page';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $website = Website::find(1);

        $website->status = true;

        $website->update();

        $this->info('Coming soon page deactivated');
    }
}
