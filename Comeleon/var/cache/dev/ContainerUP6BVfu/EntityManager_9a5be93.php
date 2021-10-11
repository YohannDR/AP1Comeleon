<?php

namespace ContainerUP6BVfu;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd8005 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfc5bc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1e9d5 = [
        
    ];

    public function getConnection()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'getConnection', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'getMetadataFactory', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'getExpressionBuilder', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'beginTransaction', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'getCache', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'transactional', array('func' => $func), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->transactional($func);
    }

    public function commit()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'commit', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->commit();
    }

    public function rollback()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'rollback', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'getClassMetadata', array('className' => $className), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'createQuery', array('dql' => $dql), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'createNamedQuery', array('name' => $name), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'createQueryBuilder', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'flush', array('entity' => $entity), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'clear', array('entityName' => $entityName), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->clear($entityName);
    }

    public function close()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'close', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->close();
    }

    public function persist($entity)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'persist', array('entity' => $entity), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'remove', array('entity' => $entity), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'refresh', array('entity' => $entity), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'detach', array('entity' => $entity), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'merge', array('entity' => $entity), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'contains', array('entity' => $entity), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'getEventManager', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'getConfiguration', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'isOpen', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'getUnitOfWork', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'getProxyFactory', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'initializeObject', array('obj' => $obj), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'getFilters', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'isFiltersStateClean', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'hasFilters', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return $this->valueHolderd8005->hasFilters();
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

        $instance->initializerfc5bc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd8005) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd8005 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd8005->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, '__get', ['name' => $name], $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        if (isset(self::$publicProperties1e9d5[$name])) {
            return $this->valueHolderd8005->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8005;

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

        $targetObject = $this->valueHolderd8005;
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
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8005;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd8005;
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
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, '__isset', array('name' => $name), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8005;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd8005;
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
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, '__unset', array('name' => $name), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd8005;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd8005;
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
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, '__clone', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        $this->valueHolderd8005 = clone $this->valueHolderd8005;
    }

    public function __sleep()
    {
        $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, '__sleep', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;

        return array('valueHolderd8005');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfc5bc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfc5bc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfc5bc && ($this->initializerfc5bc->__invoke($valueHolderd8005, $this, 'initializeProxy', array(), $this->initializerfc5bc) || 1) && $this->valueHolderd8005 = $valueHolderd8005;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd8005;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd8005;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
