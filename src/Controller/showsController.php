<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class ShowsController extends AppController{
    public function mostra(){
        
        $occasions = TableRegistry::getTableLocator()->get('occasions');
        $query = $occasions->find('all', [
            'contain' => ['flowers']
        ]);

        foreach($query as $row){
            echo '<li>Occasione: '.  $row->name . '</li>' .'<li>Descrizione occasione: ' . $row->description . '</li>';
            foreach($row->flowers as $flower){
                echo '<li>Fiori per occasione: ' . $flower->name .  '</li><br>' ;
            }
        }
       
   

   //die('testo di prova');
   //debug($row);
    }
}
?>