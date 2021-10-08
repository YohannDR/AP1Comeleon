<?php

namespace Container5vTIVua;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere34f6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2aa74 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6a218 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'getConnection', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'getMetadataFactory', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'getExpressionBuilder', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'beginTransaction', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'getCache', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'transactional', array('func' => $func), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->transactional($func);
    }

    public function commit()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'commit', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->commit();
    }

    public function rollback()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'rollback', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'getClassMetadata', array('className' => $className), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'createQuery', array('dql' => $dql), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'createNamedQuery', array('name' => $name), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'createQueryBuilder', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'flush', array('entity' => $entity), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'clear', array('entityName' => $entityName), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->clear($entityName);
    }

    public function close()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'close', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->close();
    }

    public function persist($entity)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'persist', array('entity' => $entity), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'remove', array('entity' => $entity), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'refresh', array('entity' => $entity), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'detach', array('entity' => $entity), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'merge', array('entity' => $entity), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'contains', array('entity' => $entity), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'getEventManager', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'getConfiguration', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'isOpen', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'getUnitOfWork', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'getProxyFactory', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'initializeObject', array('obj' => $obj), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'getFilters', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'isFiltersStateClean', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'hasFilters', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return $this->valueHoldere34f6->hasFilters();
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

        $instance->initializer2aa74 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere34f6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere34f6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere34f6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, '__get', ['name' => $name], $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        if (isset(self::$publicProperties6a218[$name])) {
            return $this->valueHoldere34f6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere34f6;

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

        $targetObject = $this->valueHoldere34f6;
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
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere34f6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere34f6;
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
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, '__isset', array('name' => $name), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere34f6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere34f6;
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
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, '__unset', array('name' => $name), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere34f6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere34f6;
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
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, '__clone', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        $this->valueHoldere34f6 = clone $this->valueHoldere34f6;
    }

    public function __sleep()
    {
        $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, '__sleep', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;

        return array('valueHoldere34f6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2aa74 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2aa74;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2aa74 && ($this->initializer2aa74->__invoke($valueHoldere34f6, $this, 'initializeProxy', array(), $this->initializer2aa74) || 1) && $this->valueHoldere34f6 = $valueHoldere34f6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere34f6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere34f6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
