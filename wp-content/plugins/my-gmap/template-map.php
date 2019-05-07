<div class="wrap">   
    <h2>My Gmap</h2>
</div>
    
    <div id="menumap">
      <ul>
      <li><a href="?page=my-gmap/my-gmap.php">créer une carte</a></li>
      <?php
      
      $maplist=$this->getmaplist(); 
            foreach($maplist as $getmap){
            if($_GET['id']==$getmap->id) $active=" id=\"active\" ";
            else $active="";
             
            echo "<li ".$active."><a href=\"?page=my-gmap/my-gmap.php&p=map&id=".$getmap->id."\">".$getmap->titre."</a></li>";
            }      
      ?>
      </ul>
    </div><!--fin #menumap-->
    
    <div id="contentmap2">
    
    <?php $maplist=$this->getmap($_GET['id']); ?>

    <h2  class="title" >Carte : <?php echo $maplist[0]->titre; ?></h2>
    
      <div id="placecode">
          Copiez (ctrl+c) le code et collez-le (ctrl+v) dans la page ou l'article où vous voulez voir apparaître votre carte : 
          <input id="codemap" type="texte" value="[mygmap id=&quot;<?php echo $maplist[0]->id ?>&quot; ]" readonly="readonly" />
      </div>
      
    <div class="left">
      <h3  class="title" >paramètres :</h3>
         <form action="?page=my-gmap/my-gmap.php&action=updatemap" method="post">        
              <p id="Mg-title-error" style="color:red;display:none;">Entrez un titre, svp</p> 
              <p>Titre* :<br /><input type="text" id="Mg-title" name="Mg-title" value="<?php echo $maplist[0]->titre; ?>" /></p>
           
              <p id="Mg-latitude-error" style="color:red;display:none;">Entrez une latitude, svp</p>    
              <p>Latitude* :<br /><input type="text" id="Mg-latitude" name="Mg-latitude" value="<?php echo $maplist[0]->latitude ?>" /></p>
              
              <p id="Mg-longitude-error" style="color:red;display:none;">Entrez une longitude, svp</p>     
              <p>Longitude* :<br /><input type="text" id="Mg-longitude" name="Mg-longitude" value="<?php echo $maplist[0]->longitude ?>" /></p>
                            
              <input type="hidden" name="Mg-id" value="<?php echo $maplist[0]->id ?>" /></p>
                 
              <p><input type="button" class="button button-primary" id="bt-map" value="mettre à jour" /></p>             
              <small>* champs obligatoires</small>    
         </form>
        
         <form action="?page=my-gmap/my-gmap.php&action=deletemap" method="post">
               <input type="hidden" name="Mg-id" value="<?php echo $maplist[0]->id ?>" /></p>
               <p><input type="submit" class="button button-primary" id="bt-map" value="supprimer la carte" /></p>  
         </form>         
    </div><!--fin .left-->
    
    <div class="left">        
      <h3  class="title" >Aperçu :</h3>
      <div id="map" style="width:400px;height:400px"></div> 
      <script type="text/javascript">
            var coord=new google.maps.LatLng('<?php echo $maplist[0]->latitude ?>', '<?php echo $maplist[0]->longitude ?>');
            var options = {
            center: coord,
            zoom: 10,
            mapTypeId: google.maps.MapTypeId.ROADMAP
            };
          var map=new google.maps.Map(document.getElementById("map"),options);            
      </script>    
    </div><!--fin .left-->
    
    </div><!--fin #contentmap2-->   