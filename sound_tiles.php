<?php
include 'sound_tile_template.php';
  
class SoundTile {

    var $ID = "id";
    var $template = "%ID%";
    var $title = "Unknown";
    var $author = "Unknown";
    var $source = "na";
    var $image = "img/none.png";
    
    public function __construct($template)
    {
        $this->template = $template;
    }
    function setID($ID)
    {
        $this->ID = $ID;
    }
    function setTitle($title)
    {
        $this->title = $title;
    }
    
    function setAuthor($author)
    {
        $this->author = $author;
    }

    function setSource($source)
    {
        $this->source = $source;
    }
    
    function setImage($image)
    {
        $this->image = $image;   
    }
    
    private function generateHTML() 
    {
        $html = $this->template;
        $html = str_replace("%ID%", $this->ID, $html);
        $html = str_replace("%TITLE%", $this->title, $html);
        $html = str_replace("%AUTHOR%", $this->author, $html);
        $html = str_replace("%SOURCE%", $this->source, $html);
        $html = str_replace("%IMAGE%", $this->image, $html);
        return $html;
    }
    public function getHTML()
    {
        $soundTile = $this->generateHTML();
        return $soundTile;
    }
}

$tiles = array('Coffee Shop;Soundrown;http://www.soundrown.com/Audio/Final%20Normalized/mp33/CoffeeShopFinal15.mp3;img/icons/coffee_50.png',
                'Birds;Soundrown;http://www.soundrown.com/Audio/Final%20Normalized/mp33/BirdsFinal15.mp3;img/icons/bird_50.png',
                'Small Creek;Solvis from freesounds;sounds/wav/small_river.wav;img/icons/creek_100.png',
                'Rain & Thunder;Soundrown;http://www.soundrown.com/Audio/Final%20Normalized/mp33/RainFinal15.mp3;https://maxcdn.icons8.com/iOS7/PNG/100/Weather/storm-100.png',
                'Sewer;InspectorJ;sounds/sewer.wav;img/icons/sewer_100.png',
                'Fireplace;Soundrown;http://www.soundrown.com/Audio/Final%20Normalized/mp33/FireFinal15.mp3;img/icons/fire_100.png',
                'Train tracks;Soundrown;http://www.soundrown.com/Audio/Final%20Normalized/mp33/TrainFinal15.mp3;img/icons/train_100.png',
                'Fountain;Soundrown;http://www.soundrown.com/Audio/Final%20Normalized/mp33/FountainFinal15.mp3;https://maxcdn.icons8.com/iOS7/PNG/100/City/fountain-100.png',
                'Shower;ZapSplat;sounds/mp3/shower.mp3;https://maxcdn.icons8.com/iOS7/PNG/100/Household/shower-100.png');
foreach($tiles as $key => $tile){
    $soundTile = new SoundTile($template);
    
    $soundTile->setID("SoundTile".$key);
    $tileData = explode(";", $tile);
    
    $soundTile->setTitle($tileData[0]);
    $soundTile->setAuthor($tileData[1]);
    $soundTile->setSource($tileData[2]);
    if(isset($tileData[3])){$soundTile->setImage($tileData[3]);}
    
    $tileHTML = $soundTile->getHTML();
    
    echo $tileHTML;
}


//http://www.freesound.org/people/InspectorJ/
//InspectorJ