<?php

namespace ContainerKbI8Dbg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9866d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera272a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties438c3 = [
        
    ];

    public function getConnection()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'getConnection', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'getMetadataFactory', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'getExpressionBuilder', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'beginTransaction', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'getCache', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->getCache();
    }

    public function transactional($func)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'transactional', array('func' => $func), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->transactional($func);
    }

    public function commit()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'commit', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->commit();
    }

    public function rollback()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'rollback', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'getClassMetadata', array('className' => $className), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'createQuery', array('dql' => $dql), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'createNamedQuery', array('name' => $name), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'createQueryBuilder', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'flush', array('entity' => $entity), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'clear', array('entityName' => $entityName), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->clear($entityName);
    }

    public function close()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'close', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->close();
    }

    public function persist($entity)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'persist', array('entity' => $entity), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'remove', array('entity' => $entity), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'refresh', array('entity' => $entity), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'detach', array('entity' => $entity), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'merge', array('entity' => $entity), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'getRepository', array('entityName' => $entityName), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'contains', array('entity' => $entity), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'getEventManager', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'getConfiguration', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'isOpen', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'getUnitOfWork', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'getProxyFactory', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'initializeObject', array('obj' => $obj), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'getFilters', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'isFiltersStateClean', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'hasFilters', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return $this->valueHolder9866d->hasFilters();
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

        $instance->initializera272a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9866d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9866d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9866d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, '__get', ['name' => $name], $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        if (isset(self::$publicProperties438c3[$name])) {
            return $this->valueHolder9866d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9866d;

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

        $targetObject = $this->valueHolder9866d;
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
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9866d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9866d;
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
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, '__isset', array('name' => $name), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9866d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9866d;
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
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, '__unset', array('name' => $name), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9866d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9866d;
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
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, '__clone', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        $this->valueHolder9866d = clone $this->valueHolder9866d;
    }

    public function __sleep()
    {
        $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, '__sleep', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;

        return array('valueHolder9866d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera272a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera272a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera272a && ($this->initializera272a->__invoke($valueHolder9866d, $this, 'initializeProxy', array(), $this->initializera272a) || 1) && $this->valueHolder9866d = $valueHolder9866d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9866d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9866d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
