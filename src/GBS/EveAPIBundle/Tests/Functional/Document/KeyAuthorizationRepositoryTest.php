<?php

namespace GBS\EveAPIBundle\Tests\Functional\Document;

use GBS\EveAPIBundle\TestUtil\BaseFunctionalTestCase;
use GBS\EveAPIBundle\Document\ApiKey;
use GBS\EveAPIBundle\Document\KeyAuthorization;
use GBS\DocumentBundle\Document\User;

class KeyAuthorizationRepositoryTest extends BaseFunctionalTestCase
{
    /**
     * @var GBS\EveAPIBundle\Document\KeyAuthorization
     */
    protected $auth;

    /**
     * @var GBS\DocumentBundle\Document\User
     */
    protected $user;

    /**
     * @var GBS\EveAPIBundle\Document\ApiKey
     */
    protected $apiKey;

    protected $dm;
    protected $repo;

    public function setUp()
    {
        $this->resetDatastore();

        $this->user = new User();
        $this->apiKey = new ApiKey();
        $this->auth = new KeyAuthorization();
        $this->dm = $this->getDocumentManager();
        $this->repo = $this->getRepository();

        $this->auth->setUser($this->user)->setApiKey($this->apiKey);

        $this->dm->persist($this->user);
        $this->dm->persist($this->apiKey);
        $this->dm->persist($this->auth);

        $this->dm->flush();
        $this->dm->clear();
    }

    public function testGetOneByApiKeyAndUser()
    {
        $fetchedAuth = $this->repo->getOneByApiKeyAndUser($this->apiKey, $this->user);

        $this->assertNotNull($fetchedAuth, 'Expected getOneByApiKeyAndUser to return a KeyAuthorization');
        $this->assertEquals($this->auth->getId(), $fetchedAuth->getId(), 'Expected getOneByApiKeyAndUser to return the KeyAuthorization that was recently persisted; different KeyAuthorization found instead');
    }

    public function testGetOneByApiKeyAndUserDoesNotReturnKeyAuthIfAuthorizationIsMissing()
    {
        // Gotta set the username/email or we get duplicate key errors :laffo:
        $user = new User();
        $user->setUsername('gbs');
        $user->setEmail('gbs@example.com');

        $this->dm->persist($user);
        $this->dm->flush();
        $this->dm->clear();

        $fetchedAuth = $this->repo->getOneByApiKeyAndUser($this->apiKey, $user);

        $this->assertNull($fetchedAuth, 'Expected getOneByApiKeyAndUser to not return a key auth for a user without key authorizations');
    }

    protected function getRepository()
    {
        return $this->getContainer()->get('doctrine_mongodb')
            ->getRepository('GBSEveAPIBundle:KeyAuthorization');
    }
}
