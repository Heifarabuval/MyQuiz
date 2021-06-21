<?php

namespace ContainerXoxz4RP;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderec4eb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer32a61 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb7d81 = [
        
    ];

    public function getConnection()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'getConnection', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'getMetadataFactory', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'getExpressionBuilder', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'beginTransaction', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'getCache', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->getCache();
    }

    public function transactional($func)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'transactional', array('func' => $func), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->transactional($func);
    }

    public function commit()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'commit', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->commit();
    }

    public function rollback()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'rollback', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'getClassMetadata', array('className' => $className), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'createQuery', array('dql' => $dql), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'createNamedQuery', array('name' => $name), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'createQueryBuilder', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'flush', array('entity' => $entity), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'clear', array('entityName' => $entityName), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->clear($entityName);
    }

    public function close()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'close', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->close();
    }

    public function persist($entity)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'persist', array('entity' => $entity), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'remove', array('entity' => $entity), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'refresh', array('entity' => $entity), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'detach', array('entity' => $entity), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'merge', array('entity' => $entity), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'getRepository', array('entityName' => $entityName), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'contains', array('entity' => $entity), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'getEventManager', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'getConfiguration', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'isOpen', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'getUnitOfWork', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'getProxyFactory', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'initializeObject', array('obj' => $obj), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'getFilters', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'isFiltersStateClean', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'hasFilters', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return $this->valueHolderec4eb->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer32a61 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderec4eb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderec4eb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderec4eb->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, '__get', ['name' => $name], $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        if (isset(self::$publicPropertiesb7d81[$name])) {
            return $this->valueHolderec4eb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4eb;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderec4eb;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4eb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderec4eb;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, '__isset', array('name' => $name), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4eb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderec4eb;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, '__unset', array('name' => $name), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4eb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderec4eb;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, '__clone', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        $this->valueHolderec4eb = clone $this->valueHolderec4eb;
    }

    public function __sleep()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, '__sleep', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return array('valueHolderec4eb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer32a61 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer32a61;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'initializeProxy', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderec4eb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderec4eb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
