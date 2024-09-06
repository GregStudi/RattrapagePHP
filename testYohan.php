<?php

public function search($email)

    {

        return $this->req("SELECT u.id, u.name, u.firstname, u.password, r.role 

                           FROM User u 

                           JOIN Role r ON u.id_role = r.id 

                           WHERE u.email = :email", ["email" => $email]);

    }