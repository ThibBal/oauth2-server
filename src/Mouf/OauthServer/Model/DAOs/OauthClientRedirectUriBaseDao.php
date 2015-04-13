<?php
/*
* This file has been automatically generated by Mouf/ORM.
* DO NOT edit this file, as it might be overwritten.
* If you need to perform changes, edit the OauthClientRedirectUriDao class instead!
*/
namespace Mouf\OauthServer\Model\DAOs;

use Mouf\Database\DAOInterface;
use Mouf\Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Mouf\OauthServer\Model\Entities\OauthClientRedirectUri;

/**
* The OauthClientRedirectUriBaseDao class will maintain the persistance of OauthClientRedirectUri class into the oauth_client_redirect_uris table.
*
*/
class OauthClientRedirectUriBaseDao extends EntityRepository implements DAOInterface {

	/**
	 * @param EntityManager $entityManager
	 */
	public function __construct($entityManager){
		parent::__construct($entityManager, $entityManager->getClassMetadata('Mouf\OauthServer\Model\Entities\OauthClientRedirectUri'));
	}


	/**
	 * Get a new bean record
	 * * @return OauthClientRedirectUri the new bean object
	 */
	public function create(){
		return new OauthClientRedirectUri();
	}

	/**
	 * Get a bean by it's Id
	 * @param mixed $id
	 * @return OauthClientRedirectUri the bean object
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
	 * @return array[OauthClientRedirectUri] array of bean objects
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
     * @return OauthClientRedirectUri the bean object
     */
    public function findUniqueBy(array $criteria)
    {
        $result = $this->findBy($criteria);

        if(count($result) == 1){
            return $result[0];
        }elseif(count($result) > 1){
            throw new NonUniqueResultException('More than one OauthClientRedirectUri was found');
        }else{
           return null;
        }
    }

	
	/**
	 * Wrapper around the magic __call implementations of the findBy[Field] function to get autocompletion
	 * @param mixed $fieldValue the value of the filtered field
	 * @param array|null $orderBy the value of the filtered field
	 * @param int|null $limit the max elements to be returned
	 * @param int|null $offset the index of the first element to retrieve
	 * @return OauthClientRedirectUri[]
	 */
	public function findByRedirectUri($fieldValue, $orderBy = null, $limit = null, $offset = null) {
		return $this->findBy(array('redirect_uri' => $fieldValue), $orderBy, $limit, $offset);
	}

	/**
	 * Wrapper around the magic __call implementations of the findByOne[Field] function to get autocompletion
	 * @param mixed $fieldValue the value of the filtered field
	 * @param array|null $orderBy the value of the filtered field
	 * @return OauthClientRedirectUri
	 */
	public function findOneByRedirectUri($fieldValue, $orderBy = null) {
		return $this->findOneBy(array('redirect_uri' => $fieldValue), $orderBy);
	}

	/**
	 * Finds only one entity by RedirectUri.
     * Throw an exception if more than one entity was found.
	 * @param mixed $fieldValue the value of the filtered field
	 * @return OauthClientRedirectUri
	 */
	public function findUniqueByRedirectUri($fieldValue) {
		return $this->findUniqueBy(array('redirect_uri' => $fieldValue));
	}
	/**
	 * Wrapper around the magic __call implementations of the findBy[Field] function to get autocompletion
	 * @param mixed $fieldValue the value of the filtered field
	 * @param array|null $orderBy the value of the filtered field
	 * @param int|null $limit the max elements to be returned
	 * @param int|null $offset the index of the first element to retrieve
	 * @return OauthClientRedirectUri[]
	 */
	public function findByClientId($fieldValue, $orderBy = null, $limit = null, $offset = null) {
		return $this->findBy(array('client_id' => $fieldValue), $orderBy, $limit, $offset);
	}

	/**
	 * Wrapper around the magic __call implementations of the findByOne[Field] function to get autocompletion
	 * @param mixed $fieldValue the value of the filtered field
	 * @param array|null $orderBy the value of the filtered field
	 * @return OauthClientRedirectUri
	 */
	public function findOneByClientId($fieldValue, $orderBy = null) {
		return $this->findOneBy(array('client_id' => $fieldValue), $orderBy);
	}

	/**
	 * Finds only one entity by ClientId.
     * Throw an exception if more than one entity was found.
	 * @param mixed $fieldValue the value of the filtered field
	 * @return OauthClientRedirectUri
	 */
	public function findUniqueByClientId($fieldValue) {
		return $this->findUniqueBy(array('client_id' => $fieldValue));
	}
}