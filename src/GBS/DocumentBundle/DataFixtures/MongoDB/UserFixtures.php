<?php

namespace GBS\DocumentBundle\DataFixtures\MongoDB;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GBS\DocumentBundle\Document\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class UserFixtures extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    protected $container;

    public function load(ObjectManager $manager)
    {
        $userManager = $this->container->get('fos_user.user_manager');
        $user = $userManager->createUser();
        $user->setUsername('demo')
            ->setUsernameCanonical('Demo User')
            ->setEmail('demo@example.com')
            ->setEmailCanonical('demo@example.com')
            ->setEnabled(true)
            ->setPlainPassword('demo')
            ->setLastLogin(new \DateTime())
            ->setLocked(false)
            ->setExpired(false);

        $userManager->updateUser($user);
        $manager->flush();

        $this->addReference('user', $user);
    }

    public function getOrder()
    {
        return 30;
    }

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}

