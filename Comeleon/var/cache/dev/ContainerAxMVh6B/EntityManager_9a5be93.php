<?php

namespace ContainerAxMVh6B;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2e26e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer90d83 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc6d85 = [
        
    ];

    public function getConnection()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'getConnection', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'getMetadataFactory', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'getExpressionBuilder', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'beginTransaction', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'getCache', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'transactional', array('func' => $func), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->transactional($func);
    }

    public function commit()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'commit', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->commit();
    }

    public function rollback()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'rollback', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'getClassMetadata', array('className' => $className), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'createQuery', array('dql' => $dql), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'createNamedQuery', array('name' => $name), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'createQueryBuilder', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'flush', array('entity' => $entity), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'clear', array('entityName' => $entityName), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->clear($entityName);
    }

    public function close()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'close', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->close();
    }

    public function persist($entity)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'persist', array('entity' => $entity), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'remove', array('entity' => $entity), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'refresh', array('entity' => $entity), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'detach', array('entity' => $entity), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'merge', array('entity' => $entity), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'contains', array('entity' => $entity), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'getEventManager', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'getConfiguration', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'isOpen', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'getUnitOfWork', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'getProxyFactory', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'initializeObject', array('obj' => $obj), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'getFilters', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'isFiltersStateClean', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'hasFilters', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return $this->valueHolder2e26e->hasFilters();
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

        $instance->initializer90d83 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2e26e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2e26e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2e26e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, '__get', ['name' => $name], $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        if (isset(self::$publicPropertiesc6d85[$name])) {
            return $this->valueHolder2e26e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e26e;

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

        $targetObject = $this->valueHolder2e26e;
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
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e26e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2e26e;
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
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, '__isset', array('name' => $name), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e26e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2e26e;
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
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, '__unset', array('name' => $name), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2e26e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2e26e;
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
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, '__clone', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        $this->valueHolder2e26e = clone $this->valueHolder2e26e;
    }

    public function __sleep()
    {
        $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, '__sleep', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;

        return array('valueHolder2e26e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer90d83 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer90d83;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer90d83 && ($this->initializer90d83->__invoke($valueHolder2e26e, $this, 'initializeProxy', array(), $this->initializer90d83) || 1) && $this->valueHolder2e26e = $valueHolder2e26e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2e26e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2e26e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
