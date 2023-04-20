<?php

namespace Inpushz2\MigrationPartition;

use Inpushz2\MigrationPartition\Commands\InitHashPartitionCommand;
use Inpushz2\MigrationPartition\Commands\InitListPartitionCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Inpushz2\MigrationPartition\Commands\InitRangePartitionCommand;
use Inpushz2\MigrationPartition\Commands\ListTablePartitionsCommand;

class MigrationPartitionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('laravel-migration-partition')
            ->hasCommands([
                InitRangePartitionCommand::class,
                InitListPartitionCommand::class,
                InitHashPartitionCommand::class,
                ListTablePartitionsCommand::class
            ]);
    }
}
