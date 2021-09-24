<?php

namespace ContainerHywLKmd;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder001fd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2bd09 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb837d = [
        
    ];

    public function getConnection()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'getConnection', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'getMetadataFactory', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'getExpressionBuilder', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'beginTransaction', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'getCache', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'transactional', array('func' => $func), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->transactional($func);
    }

    public function commit()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'commit', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->commit();
    }

    public function rollback()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'rollback', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'getClassMetadata', array('className' => $className), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'createQuery', array('dql' => $dql), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'createNamedQuery', array('name' => $name), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'createQueryBuilder', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'flush', array('entity' => $entity), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'clear', array('entityName' => $entityName), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->clear($entityName);
    }

    public function close()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'close', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->close();
    }

    public function persist($entity)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'persist', array('entity' => $entity), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'remove', array('entity' => $entity), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'refresh', array('entity' => $entity), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'detach', array('entity' => $entity), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'merge', array('entity' => $entity), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'contains', array('entity' => $entity), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'getEventManager', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'getConfiguration', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'isOpen', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'getUnitOfWork', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'getProxyFactory', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'initializeObject', array('obj' => $obj), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'getFilters', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'isFiltersStateClean', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'hasFilters', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return $this->valueHolder001fd->hasFilters();
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

        $instance->initializer2bd09 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder001fd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder001fd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder001fd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, '__get', ['name' => $name], $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        if (isset(self::$publicPropertiesb837d[$name])) {
            return $this->valueHolder001fd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder001fd;

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

        $targetObject = $this->valueHolder001fd;
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
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder001fd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder001fd;
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
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, '__isset', array('name' => $name), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder001fd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder001fd;
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
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, '__unset', array('name' => $name), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder001fd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder001fd;
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
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, '__clone', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        $this->valueHolder001fd = clone $this->valueHolder001fd;
    }

    public function __sleep()
    {
        $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, '__sleep', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;

        return array('valueHolder001fd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2bd09 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2bd09;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2bd09 && ($this->initializer2bd09->__invoke($valueHolder001fd, $this, 'initializeProxy', array(), $this->initializer2bd09) || 1) && $this->valueHolder001fd = $valueHolder001fd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder001fd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder001fd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
