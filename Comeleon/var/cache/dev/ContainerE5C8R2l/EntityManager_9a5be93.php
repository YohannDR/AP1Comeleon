<?php

namespace ContainerE5C8R2l;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercc9d6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6aec2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesad5e7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'getConnection', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'getMetadataFactory', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'getExpressionBuilder', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'beginTransaction', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'getCache', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'transactional', array('func' => $func), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->transactional($func);
    }

    public function commit()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'commit', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->commit();
    }

    public function rollback()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'rollback', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'getClassMetadata', array('className' => $className), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'createQuery', array('dql' => $dql), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'createNamedQuery', array('name' => $name), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'createQueryBuilder', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'flush', array('entity' => $entity), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'clear', array('entityName' => $entityName), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->clear($entityName);
    }

    public function close()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'close', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->close();
    }

    public function persist($entity)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'persist', array('entity' => $entity), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'remove', array('entity' => $entity), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'refresh', array('entity' => $entity), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'detach', array('entity' => $entity), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'merge', array('entity' => $entity), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'contains', array('entity' => $entity), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'getEventManager', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'getConfiguration', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'isOpen', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'getUnitOfWork', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'getProxyFactory', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'initializeObject', array('obj' => $obj), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'getFilters', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'isFiltersStateClean', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'hasFilters', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return $this->valueHoldercc9d6->hasFilters();
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

        $instance->initializer6aec2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercc9d6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercc9d6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercc9d6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, '__get', ['name' => $name], $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        if (isset(self::$publicPropertiesad5e7[$name])) {
            return $this->valueHoldercc9d6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc9d6;

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

        $targetObject = $this->valueHoldercc9d6;
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
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc9d6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercc9d6;
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
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, '__isset', array('name' => $name), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc9d6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercc9d6;
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
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, '__unset', array('name' => $name), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercc9d6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercc9d6;
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
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, '__clone', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        $this->valueHoldercc9d6 = clone $this->valueHoldercc9d6;
    }

    public function __sleep()
    {
        $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, '__sleep', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;

        return array('valueHoldercc9d6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6aec2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6aec2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6aec2 && ($this->initializer6aec2->__invoke($valueHoldercc9d6, $this, 'initializeProxy', array(), $this->initializer6aec2) || 1) && $this->valueHoldercc9d6 = $valueHoldercc9d6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercc9d6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercc9d6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
