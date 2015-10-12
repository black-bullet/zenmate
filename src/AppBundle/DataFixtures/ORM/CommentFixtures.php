<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Comment;

class CommentFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $comment = new Comment();
        $comment->setUser('symfony');
        $comment->setComment('Чудова стаття');
        $comment->setBlog($manager->merge($this->getReference('blog-1')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('David');
        $comment->setComment('Пишіть і надалі');
        $comment->setBlog($manager->merge($this->getReference('blog-1')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Dade');
        $comment->setComment('Круто');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Kate');
        $comment->setComment('Не погано');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Dade');
        $comment->setComment('Чудова стаття');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Kate');
        $comment->setComment('Чудова стаття');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Dade');
        $comment->setComment('Чудова стаття');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Kate');
        $comment->setComment('Чудова стаття');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Dade');
        $comment->setComment('Чудова стаття');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Kate');
        $comment->setComment('Чудова стаття');
        $comment->setBlog($manager->merge($this->getReference('blog-2')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Stanley');
        $comment->setComment('Чудова стаття');
        $comment->setBlog($manager->merge($this->getReference('blog-3')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Gabriel');
        $comment->setComment('Чудова стаття');
        $comment->setBlog($manager->merge($this->getReference('blog-3')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Mile');
        $comment->setComment('Чудова стаття');
        $comment->setBlog($manager->merge($this->getReference('blog-4')));
        $manager->persist($comment);

        $comment = new Comment();
        $comment->setUser('Gary');
        $comment->setComment('Чудова стаття');
        $comment->setBlog($manager->merge($this->getReference('blog-4')));
        $manager->persist($comment);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}