<?php

namespace GBS\EveAPIBundle\TestUtil;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BaseFunctionalTestCase extends WebTestCase
{
    protected $client;

    protected function resetDatastore()
    {
        $dm = $this->getDocumentManager();
        foreach ($dm->getMetadataFactory()->getAllMetadata() as $classMetadata) {
            $collection = $dm->getDocumentCollection($classMetadata->getName());
            $collection->remove(array());
        }

        $dm->flush();
        $dm->clear();
    }

    protected function getDocumentManager()
    {
        return $this->getContainer()->get('doctrine_mongodb.odm.default_document_manager');
    }

    protected function getContainer()
    {
        return static::createClient()->getContainer();
    }
}
