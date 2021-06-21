<?php

namespace ContainerXoxz4RP;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolderec4eb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer32a61 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb7d81 = [
        
    ];

    public function paginate($target, int $page = 1, ?int $limit = null, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        if ($this->valueHolderec4eb === $returnValue = $this->valueHolderec4eb->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer32a61 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderec4eb) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderec4eb = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, '__get', ['name' => $name], $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        if (isset(self::$publicPropertiesb7d81[$name])) {
            return $this->valueHolderec4eb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4eb;

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

        $targetObject = $this->valueHolderec4eb;
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
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4eb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderec4eb;
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
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, '__isset', array('name' => $name), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4eb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderec4eb;
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
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, '__unset', array('name' => $name), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec4eb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderec4eb;
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
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, '__clone', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        $this->valueHolderec4eb = clone $this->valueHolderec4eb;
    }

    public function __sleep()
    {
        $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, '__sleep', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;

        return array('valueHolderec4eb');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer32a61 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer32a61;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer32a61 && ($this->initializer32a61->__invoke($valueHolderec4eb, $this, 'initializeProxy', array(), $this->initializer32a61) || 1) && $this->valueHolderec4eb = $valueHolderec4eb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderec4eb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderec4eb;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
