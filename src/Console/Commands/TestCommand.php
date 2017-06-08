<?php

namespace Ridrog\Dummy\Console\Commands;

use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dummy:test';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Dummy Test Command description';

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
        $this->info("Done, with doing nothing!");

        return "Done";
    }

}
