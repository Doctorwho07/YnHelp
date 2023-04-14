<?php

class User
{
    private int $id;
    private string $username;
    private string $email;


    /**
     * @return int
     */

     public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return User
     */


     public function setId(int $id): User
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */

     public function getUsername(): string
     {
         return $this->username;
     }
 
     /**
      * @param string $username
      * @return User
      */
 
 
      public function setUsername(string $username): User
     {
         $this->username = $username;
         return $this;
     }
 
     /**
      * @return string
      */

      public function getEmail(): string
      {
          return $this->email;
      }
  
      /**
       * @param string $email
       * @return User
       */
  
  
       public function setEmail(string $email): User
      {
          $this->email = $email;
          return $this;
      }
  
      /**
       * @return string
       */

}