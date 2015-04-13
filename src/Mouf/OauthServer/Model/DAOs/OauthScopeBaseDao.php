<?php
/*
* This file has been automatically generated by Mouf/ORM.
* DO NOT edit this file, as it might be overwritten.
* If you need to perform changes, edit the OauthScopeDao class instead!
*/
namespace Mouf\OauthServer\Model\DAOs;

use Mouf\Database\DAOInterface;
use Mouf\Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Mouf\OauthServer\Model\Entities\OauthScope;

/**
* The OauthScopeBaseDao class will maintain the persistance of OauthScope class into the oauth_scopes table.
*
*/
class OauthScopeBaseDao extends EntityRepository implements DAOInterface {

	/**
	 * @param EntityManager $entityManager
	 */
	public function __construct($entityManager){
		parent::__construct($entityManager, $entityManager->getClassMetadata('Mouf\OauthServer\Model\Entities\OauthScope'));
	}


	/**
	 * Get a new bean record
	 * * @return OauthScope the new bean object
	 */
	public function create(){
		return new OauthScope();
	}

	/**
	 * Get a bean by it's Id
	 * @param mixed $id
	 * @return OauthScope the bean object
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
	 * @return array[OauthScope] array of bean objects
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
     * @return OauthScope the bean object
     */
    public function findUniqueBy(array $criteria)
    {
        $result = $this->findBy($criteria);

        if(count($result) == 1){
            return $result[0];
        }elseif(count($result) > 1){
            throw new NonUniqueResultException('More than one OauthScope was found');
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
	 * @return OauthScope[]
	 */
	public function findByDescription($fieldValue, $orderBy = null, $limit = null, $offset = null) {
		return $this->findBy(array('description' => $fieldValue), $orderBy, $limit, $offset);
	}

	/**
	 * Wrapper around the magic __call implementations of the findByOne[Field] function to get autocompletion
	 * @param mixed $fieldValue the value of the filtered field
	 * @param array|null $orderBy the value of the filtered field
	 * @return OauthScope
	 */
	public function findOneByDescription($fieldValue, $orderBy = null) {
		return $this->findOneBy(array('description' => $fieldValue), $orderBy);
	}

	/**
	 * Finds only one entity by Description.
     * Throw an exception if more than one entity was found.
	 * @param mixed $fieldValue the value of the filtered field
	 * @return OauthScope
	 */
	public function findUniqueByDescription($fieldValue) {
		return $this->findUniqueBy(array('description' => $fieldValue));
	}
}