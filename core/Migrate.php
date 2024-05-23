<?php
class Migrate {
    public static function migrate($direction = 'up') {
        $migrations = glob(__DIR__ . '/../app/migrations/*.php');
        foreach ($migrations as $migration) {
            try {
                require_once $migration;
                $className = self::getClassName($migration);
                if (!class_exists($className)) {
                    throw new Exception("Class $className not found in $migration");
                }
                $migrationInstance = new $className();
                if (!method_exists($migrationInstance, $direction)) {
                    throw new Exception("Method $direction not found in $className");
                }
                $migrationInstance->$direction();
                echo "$className $direction executed successfully." . PHP_EOL;
            } catch (Exception $e) {
                echo "Error during $className $direction: " . $e->getMessage() . PHP_EOL;
                exit(1);
            }
        }
    }

    private static function getClassName($migration) {
        $filename = basename($migration, '.php');
        $parts = explode('_', $filename);
        array_shift($parts);
        $className = '';
        foreach ($parts as $part) {
            $className .= ucfirst($part);
        }
        return $className;
    }
}
