<?php
try {
    require_once 'config.php';
    require_once 'core/Database.php';
    require_once 'core/Migrate.php';

    $direction = $argv[1] ?? 'up';

    Migrate::migrate($direction);
} catch (Exception $e) {
    echo "Migration failed: " . $e->getMessage() . PHP_EOL;
    exit(1);
}