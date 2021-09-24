<?php

namespace ContainerLQTnoDt;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdb550 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4399e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7b951 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'getConnection', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'getMetadataFactory', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'getExpressionBuilder', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'beginTransaction', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'getCache', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'transactional', array('func' => $func), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->transactional($func);
    }

    public function commit()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'commit', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->commit();
    }

    public function rollback()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'rollback', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'getClassMetadata', array('className' => $className), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'createQuery', array('dql' => $dql), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'createNamedQuery', array('name' => $name), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'createQueryBuilder', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'flush', array('entity' => $entity), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'clear', array('entityName' => $entityName), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->clear($entityName);
    }

    public function close()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'close', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->close();
    }

    public function persist($entity)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'persist', array('entity' => $entity), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'remove', array('entity' => $entity), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'refresh', array('entity' => $entity), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'detach', array('entity' => $entity), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'merge', array('entity' => $entity), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'contains', array('entity' => $entity), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'getEventManager', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'getConfiguration', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'isOpen', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'getUnitOfWork', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'getProxyFactory', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'initializeObject', array('obj' => $obj), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'getFilters', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'isFiltersStateClean', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'hasFilters', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return $this->valueHolderdb550->hasFilters();
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

        $instance->initializer4399e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdb550) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdb550 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdb550->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, '__get', ['name' => $name], $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        if (isset(self::$publicProperties7b951[$name])) {
            return $this->valueHolderdb550->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdb550;

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

        $targetObject = $this->valueHolderdb550;
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
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdb550;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdb550;
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
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, '__isset', array('name' => $name), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdb550;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdb550;
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
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, '__unset', array('name' => $name), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdb550;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdb550;
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
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, '__clone', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        $this->valueHolderdb550 = clone $this->valueHolderdb550;
    }

    public function __sleep()
    {
        $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, '__sleep', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;

        return array('valueHolderdb550');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4399e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4399e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4399e && ($this->initializer4399e->__invoke($valueHolderdb550, $this, 'initializeProxy', array(), $this->initializer4399e) || 1) && $this->valueHolderdb550 = $valueHolderdb550;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdb550;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdb550;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
