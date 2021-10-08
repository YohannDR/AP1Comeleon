<?php

namespace ContainerAXJxOJI;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder21296 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera0eab = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf797c = [
        
    ];

    public function getConnection()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'getConnection', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'getMetadataFactory', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'getExpressionBuilder', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'beginTransaction', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'getCache', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->getCache();
    }

    public function transactional($func)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'transactional', array('func' => $func), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->transactional($func);
    }

    public function commit()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'commit', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->commit();
    }

    public function rollback()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'rollback', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'getClassMetadata', array('className' => $className), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'createQuery', array('dql' => $dql), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'createNamedQuery', array('name' => $name), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'createQueryBuilder', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'flush', array('entity' => $entity), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'clear', array('entityName' => $entityName), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->clear($entityName);
    }

    public function close()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'close', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->close();
    }

    public function persist($entity)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'persist', array('entity' => $entity), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'remove', array('entity' => $entity), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'refresh', array('entity' => $entity), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'detach', array('entity' => $entity), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'merge', array('entity' => $entity), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'getRepository', array('entityName' => $entityName), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'contains', array('entity' => $entity), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'getEventManager', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'getConfiguration', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'isOpen', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'getUnitOfWork', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'getProxyFactory', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'initializeObject', array('obj' => $obj), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'getFilters', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'isFiltersStateClean', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'hasFilters', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return $this->valueHolder21296->hasFilters();
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

        $instance->initializera0eab = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder21296) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder21296 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder21296->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, '__get', ['name' => $name], $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        if (isset(self::$publicPropertiesf797c[$name])) {
            return $this->valueHolder21296->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21296;

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

        $targetObject = $this->valueHolder21296;
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
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21296;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder21296;
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
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, '__isset', array('name' => $name), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21296;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder21296;
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
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, '__unset', array('name' => $name), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21296;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder21296;
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
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, '__clone', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        $this->valueHolder21296 = clone $this->valueHolder21296;
    }

    public function __sleep()
    {
        $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, '__sleep', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;

        return array('valueHolder21296');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera0eab = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera0eab;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera0eab && ($this->initializera0eab->__invoke($valueHolder21296, $this, 'initializeProxy', array(), $this->initializera0eab) || 1) && $this->valueHolder21296 = $valueHolder21296;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder21296;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder21296;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
