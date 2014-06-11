<?php

namespace Etpa\Infrastructure\Persistence\Dummy;

use Etpa\Domain\StoryRepository;

class EmptyStoryRepository implements StoryRepository
{
    /**
     * {@inheritDoc}
     */
    public function persist($story)
    {
        // TODO: Implement persist() method.
    }

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        return [];
    }

    /**
     * @param int $id
     * @return \Etpa\Domain\Story $story
     */
    public function find($id)
    {
        return null;
    }
}
