<?php
/*
* This file has been automatically generated by Mouf/ORM.
* DO NOT edit this file, as it might be overwritten.
* If you need to perform changes, edit the OauthAccessTokenDao class instead!
*/
namespace Mouf\OauthServer\Model\DAOs;

use Mouf\Database\DAOInterface;
use Mouf\Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Mouf\OauthServer\Model\Entities\OauthAccessToken;

/**
* The OauthAccessTokenBaseDao class will maintain the persistance of OauthAccessToken class into the oauth_access_tokens table.
*
*/
class OauthAccessTokenBaseDao extends EntityRepository implements DAOInterface {

	/**
	 * @param EntityManager $entityManager
	 */
	public function __construct($entityManager){
		parent::__construct($entityManager, $entityManager->getClassMetadata('Mouf\OauthServer\Model\Entities\OauthAccessToken'));
	}


	/**
	 * Get a new bean record
	 * * @return OauthAccessToken the new bean object
	 */
	public function create(){
		return new OauthAccessToken();
	}

	/**
	 * Get a bean by it's Id
	 * @param mixed $id
	 * @return OauthAccessToken the bean object
	 */
	public function getById($id){
		return $this->find($id);
	}

	/**
	 *
	 * Peforms saving on a bean object
	 * @param mixed bean object
	 */
	public function save($entity){
		$this->getEntityManager()->persist($entity);
	}

	/**
	 * Returns the lis of beans
	 * @return array[OauthAccessToken] array of bean objects
	 */
	public function getList(){
		return $this->findAll();
	}

	/**
     * Finds only one entity. The criteria must contain all the elements needed to find a unique entity.
     * Throw an exception if more than one entity was found.
     *
     * @param array $criteria
     *
     * @return OauthAccessToken the bean object
     */
    public function findUniqueBy(array $criteria)
    {
        $result = $this->findBy($criteria);

        if(count($result) == 1){
            return $result[0];
        }elseif(count($result) > 1){
            throw new NonUniqueResultException('More than one OauthAccessToken was found');
        }else{
           return null;
        }
    }

	
}