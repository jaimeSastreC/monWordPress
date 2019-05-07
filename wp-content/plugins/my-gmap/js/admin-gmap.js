jQuery(document).ready(function(){

  jQuery('#bt-map').click(function(){
      var titre =  jQuery('#Mg-title').val().trim();
      var lat = jQuery('#Mg-latitude').val().trim();
      var lon = jQuery('#Mg-longitude').val().trim();
 
      if(titre=='') jQuery('#Mg-title-error').show();
      else jQuery('#Mg-title-error').hide(); 

      if(lat=='') jQuery('#Mg-latitude-error').show();
      else jQuery('#Mg-latitude-error').hide(); 
      
      if(lon=='') jQuery('#Mg-longitude-error').show();
      else jQuery('#Mg-longitude-error').hide();
      
      if((titre!='')&&(lat!='')&&(lon!='')) jQuery('form').submit();
  }); 
   
  jQuery("#codemap").click(function(){
      this.select();
  });
});