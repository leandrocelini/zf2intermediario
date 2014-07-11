<?php

namespace SONUser\Fixture;

use Doctrine\Common\DataFixtures\AbstractFixture,
    Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use SONUser\Entity\User;

class LoadUser extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        $user = new User();
        $user->setNome("Leandro")
                ->setEmail("leandrocelini@uol.com.br")
                ->setPassword(123456)
                ->setActive(true);

        $manager->persist($user);

        $user = new User();
        $user->setNome("Celini")
                ->setEmail("lcelini@hotmail.com")
                ->setPassword(123456)
                ->setActive(true);

        $manager->persist($user);

        $manager->flush();
    }

    public function getOrder() {
        return 4;
    }

}
