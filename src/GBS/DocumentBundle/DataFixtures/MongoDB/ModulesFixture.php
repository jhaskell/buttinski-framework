<?php

namespace GBS\DocumentBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GBS\DocumentBundle\Document\Modules\Silo;
use GBS\DocumentBundle\Document\Modules\Reactor;
use GBS\DocumentBundle\Document\Item;

class ModulesFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $this->loadSimpleReactionTower($manager);
    }

    /**
     * Loads modules for the simple reaction tower.
     *
     * @param ObjectManager $manager The fixture's object manager.
     */
    protected function loadSimpleReactionTower(ObjectManager $manager)
    {
        $inputSilo1 = new Silo();
        $inputSilo2 = new Silo();
        $outputSilo = new Silo();
        $reactor = new Reactor();

        $id = 963852741;
        foreach ([$inputSilo1, $inputSilo2, $outputSilo] as $silo) {
            $silo->setTypeId(14343)
                ->setItemId($id++);
        }

        $reactor->setTypeId(20175)
            ->setItemId($id++);

        $reaction = new Item();
        $reaction->setItemId($id++)
            ->setTypeId(29644)
            ->setTypeName('Unrefined Dysporite Reaction')
            ->setQuantity(1);

        $reactor->setReaction($reaction);

        $cadmium = new Item();
        $cadmium->setItemId($id++)
            ->setTypeId(16643)
            ->setTypeName('Cadmium')
            ->setQuantity(10000);

        $mercury = new Item();
        $mercury->setItemId($id++)
            ->setTypeId(16646)
            ->setTypeName('Mercury')
            ->setQuantity(10000);

        $unrefinedDysporite = new Item();
        $unrefinedDysporite->setItemId($id++)
            ->setTypeId(29660)
            ->setTypeName('Unrefined Dysporite')
            ->setQuantity(100);

        $inputSilo1->setContents($cadmium);
        $inputSilo2->setContents($mercury);
        $outputSilo->setContents($unrefinedDysporite);

        $manager->persist($inputSilo1);
        $manager->persist($inputSilo2);
        $manager->persist($outputSilo);
        $manager->persist($reactor);

        $tower = $this->getReference('tower-reaction_simple');
        $tower->addModule($inputSilo1)
            ->addModule($inputSilo2)
            ->addModule($outputSilo)
            ->addModule($reactor);

        $manager->flush();
    }

    public function getOrder()
    {
        return 20;
    }
}

