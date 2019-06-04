<?php

namespace NotificationChannels\Gammu\Test;

use DB;
use FilesystemIterator;

class MigrationTest extends TestBase
{
    /**
     * Test running migration.
     *
     * @test
     */
    public function test_running_migration()
    {
        $migrations = DB::select('SELECT * FROM migrations');

        $fi = new FilesystemIterator(
            $this->getMigrationsPath(), FilesystemIterator::SKIP_DOTS
        );

        $this->assertCount(iterator_count($fi), $migrations);
    }
}
