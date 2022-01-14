<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SeedTestData extends Command
{
    protected $signature = 'easybuy:seed';

    protected $description = 'Seeds test data to the database';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        \App\Models\Product::factory(40)->create();
        return 0;
    }
}
