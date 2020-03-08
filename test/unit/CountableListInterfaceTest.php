<?php

namespace Dhii\Collection\UnitTest;

use Dhii\Collection\CountableListInterface as TestSubject;
use Xpmock\TestCase;
use Exception as RootException;
use PHPUnit_Framework_MockObject_MockObject as MockObject;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.2
 */
class CountableListInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since 0.2
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Collection\CountableListInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.2
     *
     * @param array $methods The methods to mock.
     *
     * @return TestSubject|MockObject The new instance.
     */
    public function createInstance($methods = array())
    {
        $methods = $this->mergeValues($methods, array());

        $mock = $this->getMockBuilder(static::TEST_SUBJECT_CLASSNAME)
            ->setMethods($methods)
            ->getMock();

        return $mock;
    }

    /**
     * Merges the values of two arrays.
     *
     * The resulting product will be a numeric array where the values of both inputs are present, without duplicates.
     *
     * @since 0.2
     *
     * @param array $destination The base array.
     * @param array $source      The array with more keys.
     *
     * @return array The array which contains unique values
     */
    public function mergeValues($destination, $source)
    {
        return array_keys(array_merge(array_flip($destination), array_flip($source)));
    }

    /**
     * Creates a mock that both extends a class and implements interfaces.
     *
     * This is particularly useful for cases where the mock is based on an
     * internal class, such as in the case with exceptions. Helps to avoid
     * writing hard-coded stubs.
     *
     * @since 0.2
     *
     * @param string $className      Name of the class for the mock to extend.
     * @param array  $interfaceNames Names of the interfaces for the mock to implement.
     *
     * @return object The object that extends and implements the specified class and interfaces.
     */
    public function mockClassAndInterfaces($className, $interfaceNames = array())
    {
        $paddingClassName = uniqid($className);
        $definition = vsprintf('abstract class %1$s extends %2$s implements %3$s {}', array(
            $paddingClassName,
            $className,
            implode(', ', $interfaceNames),
        ));
        eval($definition);

        return $this->getMockForAbstractClass($paddingClassName);
    }

    /**
     * Creates a new exception.
     *
     * @since 0.2
     *
     * @param string $message The exception message.
     *
     * @return RootException|MockObject The new exception.
     */
    public function createException($message = '')
    {
        $mock = $this->getMockBuilder('Exception')
            ->setConstructorArgs(array($message))
            ->getMock();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.2
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'A valid instance of the test subject could not be created.'
        );
        $this->assertInstanceOf(
            'Countable',
            $subject,
            'Test subject does not implement required interface.'
        );
        $this->assertInstanceOf(
            'Traversable',
            $subject,
            'Test subject does not implement required interface.'
        );
    }
}
