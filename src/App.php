<?php
/**
 * User: Dmitry Demianchuk
 * Date: 09.12.14
 * Time: 17:18
 */

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class App
 */
class App
{
    const TEST_DB_SERVICE_NAME = 'pdo_test_db_';

    /**
     * @var App
     */
    private static $instance;

    /**
     * @var ContainerBuilder
     */
    private $container;

    /**
     * @return mixed
     */
    private function __construct()
    {
        $this->container = new ContainerBuilder();
        $this->container->setDefinition('guzzle', new Definition('GuzzleHttp\Client'));
        $this->container->setDefinition('twig_loader', new Definition('Twig_Loader_Filesystem', [TEMPLATES_DIR]));
        $this->container->setDefinition('twig', new Definition('Twig_Environment', [new Reference('twig_loader')]));
        $this->container->setDefinition(
            'pdo', new Definition('PDO', ['mysql:dbname=' . DB_NAME . ';host=' . DB_HOST, DB_USER, DB_PASSWORD])
        );

    }

    /**
     * @return void
     */
    private function __clone() {}

    /**
     * @return App
     */
    public static function get()
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    /**
     * @return ContainerBuilder
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param array $testDbs
     */
    public function registerTestDbConnections($testDbs)
    {
        foreach ($testDbs as $i => $testDb) {
            $this->container->setDefinition(
                self::TEST_DB_SERVICE_NAME . $i,
                new Symfony\Component\DependencyInjection\Definition(
                    'PDO', ['mysql:dbname=' . $testDb['db'] . ';host=' . $testDb['host'], $testDb['user'], $testDb['pass']]
                )
            );
        }
    }

    /**
     * @param integer $num
     *
     * @return PDO
     */
    public function getTestDb($num)
    {
        return $this->container->get(self::TEST_DB_SERVICE_NAME. $num);
    }
}