<?php

namespace Dhii\Events\UnitTest;

use Xpmock\TestCase;
use Dhii\Events\TransitionEventInterface as TestSubject;

/**
 * Tests {@see TestSubject}.
 *
 * @since [*next-version*]
 */
class TransitionEventInterfaceTest extends TestCase
{
    /**
     * The class name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\Events\TransitionEventInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return TestSubject
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
	        ->getStateMachine()
            ->getTransition()
            ->abortTransition()
            ->isTransitionAborted()
            // EventInterface
            ->getName()
            ->setName()
            ->getTarget()
            ->setTarget()
            ->getParams()
            ->setParams()
            ->getParam()
            ->setParam()
            ->stopPropagation()
            ->isPropagationStopped();

        return $mock->new();
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
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
            'Dhii\State\TransitionAwareInterface',
            $subject,
            'Test subject does not implement parent interface.'
        );

	    $this->assertInstanceOf(
		    'Dhii\State\StateMachineAwareInterface',
		    $subject,
		    'Test subject does not implement parent interface.'
	    );

        $this->assertInstanceOf(
            'Psr\EventManager\EventInterface',
            $subject,
            'Test subject does not implement parent interface.'
        );
    }
}
