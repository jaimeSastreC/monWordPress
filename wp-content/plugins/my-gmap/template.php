<div class="wrap">   
    <h2>My Gmap</h2>
</div>

    <div id="menumap">
      <ul>
      <li id="active">créer une carte</li>
      <?php
      $maplist=$this->getmaplist(); 
            foreach($maplist as $getmap){
            echo "<li><a href=\"?page=my-gmap/my-gmap.php&p=map&id=".$getmap->id."\">".$getmap->titre."</a></li>";
            }      
      ?>
      </ul>
    </div><!--fin #menumap-->
    <div id="contentmap">     
    <h3  class="title" >Créez une carte :</h3> 
      <form action="?page=my-gmap/my-gmap.php&action=createmap" method="post"></p>
      
            <p id="Mg-title-error" style="color:red;display:none;">Entrez un titre, svp</p> 
            <p>Titre* :<br /><input type="text" id="Mg-title" name="Mg-title" /></p>
            
            <p id="Mg-latitude-error" style="color:red;display:none;">Entrez une latitude, svp</p>    
            <p>Latitude* :<br /><input type="text" id="Mg-latitude" name="Mg-latitude" /></p>
            
            <p id="Mg-longitude-error" style="color:red;display:none;">Entrez une longitude, svp</p>     
            <p>Longitude* :<br /><input type="text" id="Mg-longitude" name="Mg-longitude" /></p>
              
            <p><input type="button" class="button button-primary" id="bt-map" value="Enregistrer" /></p> 
            <small>* champs obligatoires</small>    
      </form>
      </div><!--fin #contentmap-->