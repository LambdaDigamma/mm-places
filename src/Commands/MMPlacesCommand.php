<?php

namespace LambdaDigamma\MMPlaces\Commands;

use Illuminate\Console\Command;

class MMPlacesCommand extends Command
{
    public $signature = 'mm-places';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
