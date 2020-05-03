<?php

declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

class showsController extends AppController{
    public function mostra(){
        $flowers = TableRegistry::getTableLocator()->get('Flowers');
        $query = $flowers-> find('all',[
            'contain' =>['occasions'],
            
        
        ]);

   foreach($query as $row){
       echo '<li>Nome: ' .  $row->name . '</li>';
       foreach($row->occasions as $occasion){
        echo '<li>Occasione: ' . $occasion->name . '</li>' . '<li> Descrizione ' . $occasion->description . '</li>'  . '<br>';
       }
   }

   //die('testo di prova');
   //debug($row);
    }
}
?>