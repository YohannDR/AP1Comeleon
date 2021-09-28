<?php

namespace ContainerZFBXu7R;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder41b83 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3dfc9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5cbaa = [
        
    ];

    public function getConnection()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'getConnection', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'getMetadataFactory', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'getExpressionBuilder', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'beginTransaction', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'getCache', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'transactional', array('func' => $func), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->transactional($func);
    }

    public function commit()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'commit', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->commit();
    }

    public function rollback()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'rollback', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'getClassMetadata', array('className' => $className), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'createQuery', array('dql' => $dql), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'createNamedQuery', array('name' => $name), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'createQueryBuilder', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'flush', array('entity' => $entity), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'clear', array('entityName' => $entityName), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->clear($entityName);
    }

    public function close()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'close', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->close();
    }

    public function persist($entity)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'persist', array('entity' => $entity), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'remove', array('entity' => $entity), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'refresh', array('entity' => $entity), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'detach', array('entity' => $entity), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'merge', array('entity' => $entity), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'contains', array('entity' => $entity), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'getEventManager', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'getConfiguration', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'isOpen', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'getUnitOfWork', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'getProxyFactory', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'initializeObject', array('obj' => $obj), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'getFilters', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'isFiltersStateClean', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'hasFilters', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return $this->valueHolder41b83->hasFilters();
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

        $instance->initializer3dfc9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder41b83) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder41b83 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder41b83->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, '__get', ['name' => $name], $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        if (isset(self::$publicProperties5cbaa[$name])) {
            return $this->valueHolder41b83->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41b83;

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

        $targetObject = $this->valueHolder41b83;
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
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41b83;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder41b83;
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
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, '__isset', array('name' => $name), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41b83;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder41b83;
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
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, '__unset', array('name' => $name), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder41b83;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder41b83;
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
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, '__clone', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        $this->valueHolder41b83 = clone $this->valueHolder41b83;
    }

    public function __sleep()
    {
        $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, '__sleep', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;

        return array('valueHolder41b83');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3dfc9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3dfc9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3dfc9 && ($this->initializer3dfc9->__invoke($valueHolder41b83, $this, 'initializeProxy', array(), $this->initializer3dfc9) || 1) && $this->valueHolder41b83 = $valueHolder41b83;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder41b83;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder41b83;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
