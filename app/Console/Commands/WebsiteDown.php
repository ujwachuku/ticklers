<?php

namespace App\Console\Commands;

use App\Website;
use Illuminate\Console\Command;

class WebsiteDown extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'website:down';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Launches coming soon page';

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

        $website->status = false;

        $website->update();

        $this->info('Coming soon page activated');
    }
}
