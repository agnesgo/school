<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UsersFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $pwd
    ){}
   
    public function load(ObjectManager $manager): void
    {
        $User=new Users();
        $User->setEmail('admin@admin.admin');
        $User->setPassword($this->pwd->hashPassword($User,'admin'));
        $User->setIsVerified(true);
        $User->setRoles(["ROLE_USER"]);
        $User->setFirstName('admin');
        $User->setLastName('admin');
        $User->setPhoneNumber('0000000000');
        $User->setPicture('01.jpg');
        $User->setBiography('123');
        $User->setUserName('admin');
        $manager->persist ($User);


        $manager->flush();
    }
}
