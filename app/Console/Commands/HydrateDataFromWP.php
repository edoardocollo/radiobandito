<?php

namespace App\Console\Commands;

use App\Services\WPDumpService;
use Illuminate\Console\Command;

class HydrateDataFromWP extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hydrate:fromWP';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $WPDumpService = new WPDumpService();
        $WPDumpService->hydrateFromWP();
        return Command::SUCCESS;
    }
}
