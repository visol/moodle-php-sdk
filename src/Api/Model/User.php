<?php namespace MoodleSDK\Api\Model;

use MoodleSDK\Api\ApiContext;
use MoodleSDK\Api\ModelBase;

class User extends ModelBase {

    private $id;
    private $username;
    private $password;
    private $firstName;
    private $lastName;
    private $fullName;
    private $email;
    private $preferences;

    public function create(ApiContext $apiContext) {
        $json = $this->apiCall($apiContext, 'core_user_create_users', [
            'users' => [
                $this->toArray()
            ]
        ]);

        return $json;
    }
 
    public function update(ApiContext $apiContext) {
        $json = $this->apiCall($apiContext, 'core_user_update_users', $this->toArray());
        return $json;
    }

    public function all(ApiContext $apiContext) {
        $json = $this->apiCall($apiContext, 'core_user_get_users', [
            'criteria' => [
                [
                    'key' => 'string',
                    'value' => 'string'
                ]
            ]
        ]);

        $list = new UserList();
        $list->fromJSON($json);
        return $list;
    }

    public function toArrayExcludedProperties() {
        return ['fullname'];
    }

    // Properties Getters & Setters

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    public function getFullName() {
        return $this->fullName;
    }

    public function setFullName($fullName) {
        $this->fullName = $fullName;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * @return UserPreference[]
     */
    public function getPreferences() {
        return $this->preferences;
    }

    public function setPreferences($preferences) {
        $this->preferences = $preferences;
        return $this;
    }

}