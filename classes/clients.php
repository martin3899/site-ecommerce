<?php


class Client{

    public string $firstName;
    public string $lastName;
    public string $address;
    public function __construct($firstName,$lastName,$address){
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->address=$address;
    }

    public function displayClient(){
        ?>
        <tr>
            <td><?= $this->firstName ?></td>
            <td><?= $this->lastName ?></td>
            <td><?= $this->address ?></td>
        </tr>
    <?php
    }
}

class ClientsList{
    public array $customer;

    public function __construct(array $customer){
        $this->customer=$customer;
    }

    public function displayClientList($clients){
        ?>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Adresse</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($clients as $client):
            $cli = new Client($client['first_name'],$client['last_name'],$client['address']);
            $cli->displayClient();
        endforeach;
        ?>
        </tbody>
    </table>

<?php

    }
}


