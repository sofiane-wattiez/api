<?php

namespace Container8qeeQtT;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf859b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializere0dba = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8181e = [
        
    ];

    public function getConnection()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'getConnection', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'getMetadataFactory', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'getExpressionBuilder', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'beginTransaction', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'getCache', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->getCache();
    }

    public function transactional($func)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'transactional', array('func' => $func), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'wrapInTransaction', array('func' => $func), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'commit', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->commit();
    }

    public function rollback()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'rollback', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'getClassMetadata', array('className' => $className), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'createQuery', array('dql' => $dql), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'createNamedQuery', array('name' => $name), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'createQueryBuilder', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'flush', array('entity' => $entity), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'clear', array('entityName' => $entityName), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->clear($entityName);
    }

    public function close()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'close', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->close();
    }

    public function persist($entity)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'persist', array('entity' => $entity), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'remove', array('entity' => $entity), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'refresh', array('entity' => $entity), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'detach', array('entity' => $entity), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'merge', array('entity' => $entity), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'getRepository', array('entityName' => $entityName), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'contains', array('entity' => $entity), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'getEventManager', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'getConfiguration', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'isOpen', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'getUnitOfWork', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'getProxyFactory', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'initializeObject', array('obj' => $obj), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'getFilters', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'isFiltersStateClean', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'hasFilters', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return $this->valueHolderf859b->hasFilters();
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

        $instance->initializere0dba = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf859b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf859b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf859b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, '__get', ['name' => $name], $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        if (isset(self::$publicProperties8181e[$name])) {
            return $this->valueHolderf859b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf859b;

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

        $targetObject = $this->valueHolderf859b;
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
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf859b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf859b;
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
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, '__isset', array('name' => $name), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf859b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf859b;
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
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, '__unset', array('name' => $name), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf859b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf859b;
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
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, '__clone', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        $this->valueHolderf859b = clone $this->valueHolderf859b;
    }

    public function __sleep()
    {
        $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, '__sleep', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;

        return array('valueHolderf859b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializere0dba = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializere0dba;
    }

    public function initializeProxy() : bool
    {
        return $this->initializere0dba && ($this->initializere0dba->__invoke($valueHolderf859b, $this, 'initializeProxy', array(), $this->initializere0dba) || 1) && $this->valueHolderf859b = $valueHolderf859b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf859b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf859b;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
