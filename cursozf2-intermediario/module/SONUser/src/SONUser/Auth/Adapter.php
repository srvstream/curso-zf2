<?php
namespace SONUser\Auth;
use Zend\Authentication\Adapter\AdapterInterface,
    Zend\Authentication\Result;
use Doctrine\ORM\EntityManager;
class Adapter implements AdapterInterface
{
    protected $em;
    protected $username;
    protected $password;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    public function getUsername() {
        return $this->username;
    }
    public function getPassword() {
        return $this->password;
    }
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function authenticate()
    {
        $repository = $this->em->getRepository('SONUser\Entity\User');
        $user = $repository->findByEmailAndPassword($this->getUsername(), $this->getPassword());

        if($user){
            return new Result(Result::SUCCESS, array('user'=>$user), array('OK'));
        }

        return new Result(Result::FAILURE_CREDENTIAL_INVALID, null, array());
    }
}