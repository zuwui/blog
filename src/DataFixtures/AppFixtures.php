<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $contact = new Contact();
        $contact->setNom('Callewaert');
        $contact->setPrenom('Romain');
        $contact->setSujet('dis jamy');
        $contact->setEmail('callewaertromain@gmail.com');
        $contact->setMessage('Jaj');
        $contact->setNewsletter('New');

        $manager->persist($contact);
        $manager->flush();
    }
}
