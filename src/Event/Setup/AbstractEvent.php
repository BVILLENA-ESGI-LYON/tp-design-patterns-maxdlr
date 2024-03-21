<?php

namespace EsgiIw\TpDesignPattern\Event\Setup;

use DateTime;
use EsgiIw\TpDesignPattern\Participation\Participation;
use EsgiIw\TpDesignPattern\User\User;

abstract class AbstractEvent implements EventManagementInterface, EventInterface
{
    protected int $capacity;
    protected User $manager;
    protected DateTime $datetime;
    protected array $participations;

    /**
     * @return int
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @param int $capacity
     * @return AbstractEvent
     */
    public function setCapacity(int $capacity): AbstractEvent
    {
        $this->capacity = $capacity;
        return $this;
    }

    /**
     * @return User
     */
    public function getManager(): User
    {
        return $this->manager;
    }

    /**
     * @param User $manager
     * @return AbstractEvent
     */
    public function setManager(User $manager): AbstractEvent
    {
        $this->manager = $manager;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDatetime(): DateTime
    {
        return $this->datetime;
    }

    /**
     * @param DateTime $datetime
     * @return AbstractEvent
     */
    public function setDatetime(DateTime $datetime): AbstractEvent
    {
        $this->datetime = $datetime;
        return $this;
    }

    /**
     * @return Participation[]
     */
    public function getParticipations(): array
    {
        return $this->participations;
    }

    public function addParticipation(Participation $participation): EventInterface
    {
        $this->participations[] = $participation;
        return $this;
    }

    public function removeParticipation(Participation $participation): EventInterface
    {
        $this->participations = array_diff($this->participations, [$participation]);
        return $this;
    }
}