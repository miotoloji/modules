<?php

namespace Miotoloji\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Miotoloji\Modules\Commands\CommandMakeCommand;
use Miotoloji\Modules\Commands\ControllerMakeCommand;
use Miotoloji\Modules\Commands\DisableCommand;
use Miotoloji\Modules\Commands\DumpCommand;
use Miotoloji\Modules\Commands\EnableCommand;
use Miotoloji\Modules\Commands\EventMakeCommand;
use Miotoloji\Modules\Commands\FactoryMakeCommand;
use Miotoloji\Modules\Commands\InstallCommand;
use Miotoloji\Modules\Commands\JobMakeCommand;
use Miotoloji\Modules\Commands\LaravelModulesV6Migrator;
use Miotoloji\Modules\Commands\ListCommand;
use Miotoloji\Modules\Commands\ListenerMakeCommand;
use Miotoloji\Modules\Commands\MailMakeCommand;
use Miotoloji\Modules\Commands\MiddlewareMakeCommand;
use Miotoloji\Modules\Commands\MigrateCommand;
use Miotoloji\Modules\Commands\MigrateRefreshCommand;
use Miotoloji\Modules\Commands\MigrateResetCommand;
use Miotoloji\Modules\Commands\MigrateRollbackCommand;
use Miotoloji\Modules\Commands\MigrateStatusCommand;
use Miotoloji\Modules\Commands\MigrationMakeCommand;
use Miotoloji\Modules\Commands\ModelMakeCommand;
use Miotoloji\Modules\Commands\ModuleDeleteCommand;
use Miotoloji\Modules\Commands\ModuleMakeCommand;
use Miotoloji\Modules\Commands\NotificationMakeCommand;
use Miotoloji\Modules\Commands\PolicyMakeCommand;
use Miotoloji\Modules\Commands\ProviderMakeCommand;
use Miotoloji\Modules\Commands\PublishCommand;
use Miotoloji\Modules\Commands\PublishConfigurationCommand;
use Miotoloji\Modules\Commands\PublishMigrationCommand;
use Miotoloji\Modules\Commands\PublishTranslationCommand;
use Miotoloji\Modules\Commands\RequestMakeCommand;
use Miotoloji\Modules\Commands\ResourceMakeCommand;
use Miotoloji\Modules\Commands\RouteProviderMakeCommand;
use Miotoloji\Modules\Commands\RuleMakeCommand;
use Miotoloji\Modules\Commands\SeedCommand;
use Miotoloji\Modules\Commands\SeedMakeCommand;
use Miotoloji\Modules\Commands\SetupCommand;
use Miotoloji\Modules\Commands\TestMakeCommand;
use Miotoloji\Modules\Commands\UnUseCommand;
use Miotoloji\Modules\Commands\UpdateCommand;
use Miotoloji\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        CommandMakeCommand::class,
        ControllerMakeCommand::class,
        DisableCommand::class,
        DumpCommand::class,
        EnableCommand::class,
        EventMakeCommand::class,
        JobMakeCommand::class,
        ListenerMakeCommand::class,
        MailMakeCommand::class,
        MiddlewareMakeCommand::class,
        NotificationMakeCommand::class,
        ProviderMakeCommand::class,
        RouteProviderMakeCommand::class,
        InstallCommand::class,
        ListCommand::class,
        ModuleDeleteCommand::class,
        ModuleMakeCommand::class,
        FactoryMakeCommand::class,
        PolicyMakeCommand::class,
        RequestMakeCommand::class,
        RuleMakeCommand::class,
        MigrateCommand::class,
        MigrateRefreshCommand::class,
        MigrateResetCommand::class,
        MigrateRollbackCommand::class,
        MigrateStatusCommand::class,
        MigrationMakeCommand::class,
        ModelMakeCommand::class,
        PublishCommand::class,
        PublishConfigurationCommand::class,
        PublishMigrationCommand::class,
        PublishTranslationCommand::class,
        SeedCommand::class,
        SeedMakeCommand::class,
        SetupCommand::class,
        UnUseCommand::class,
        UpdateCommand::class,
        UseCommand::class,
        ResourceMakeCommand::class,
        TestMakeCommand::class,
        LaravelModulesV6Migrator::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
