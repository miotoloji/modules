<?php

namespace Miotoloji\Modules\Commands;

use Illuminate\Console\Command;
use Miotoloji\Modules\Module;
use Symfony\Component\Console\Input\InputArgument;

class EnableCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'module:enable';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enable the specified module.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        /** @var Module $module */
        $module = $this->laravel['modules']->findOrFail($this->argument('module'));

        if ($module->isDisabled()) {
            $module->enable();

            $this->info("Module [{$module}] enabled successful.");
        } else {
            $this->comment("Module [{$module}] has already enabled.");
        }
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['module', InputArgument::REQUIRED, 'Module name.'],
        ];
    }
}
