<?php

namespace Dhii\Events;

use Dhii\State\StateAwareInterface;
use Dhii\State\StateMachineInterface;
use Dhii\State\TransitionAwareInterface;
use Dhii\Util\String\StringableInterface as Stringable;
use Psr\EventManager\EventInterface;

/**
 * An event that is associated with a state machine transition.
 *
 * @since [*next-version*]
 */
interface TransitionEventInterface extends
    EventInterface,
    TransitionAwareInterface,
    StateAwareInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return StateMachineInterface The state machine.
     */
    public function getTarget();

    /**
     * Retrieves the new state after (and if) the transition is applied.
     *
     * @since [*next-version*]
     *
     * @return string|Stringable The new state.
     */
    public function getNewState();

    /**
     * Indicates whether or not the transition associated with this event should be aborted.
     *
     * @since [*next-version*]
     *
     * @param bool $flag True to abort the transition, false otherwise.
     */
    public function abortTransition($flag);

    /**
     * Checks if the transition associated with this event instance has been aborted.
     *
     * @since [*next-version*]
     *
     * @return bool True if the transition is aborted, false if not.
     */
    public function isTransitionAborted();
}
