<?php

namespace App\Traits;

trait IrunaDatabaseTrait
{
    public static function getUpdateStatusItem(){
        return [['Antidote', 'Status', 'Cures poison.'], 
        ['Chana Masala', 'Status', 'Cures poison and recovers 500 HP.'], 
        ['Coagulant', 'Status', 'Cures bleed.'], 
        ['Cure Paralysis', 'Status', 'Cures paralysis.'], 
        ['Energy Herb', 'Status', 'Cures lethargy.'], 
        ['Eye Drops', 'Status', 'Cures blind.'], 
        ['Mapo Dofu', 'Status', 'Cures poison and burn at a fixed interval for 10min.'], 
        ['Merry Sweets', 'Status', '\nMelee&Magic+5% to Boss for 1min.\nAdd Melee&Magic+5% to Boss during\nXmas event.'], 
        ['Mikan Daifuku', 'Status', 'Recovers 1800MP. High chance to remove paralysis.'], 
        ['Moist Dirt   ', 'Status', '\nYou may be able to extinguish\nsmall fire with it.'], 
        ['Moss Manju', 'Status', 'Recovers 1800HP. Removes poison.'], 
        ['Sirok', 'Status', 'About 10 minutes, it will release the firing at regular intervals'], 
        ['Soybean Paste Soup', 'Status', '\nCures poison and freeze at regular\nintervals for 10min.'], 
        ['Spice', 'Status', 'Cures poison and recovers 50 MP.'], 
        ['Spinnen Vaccine', 'Status', 'Cures any status ailment at a fixed\ninterval for 1 min but MP becomes 0.'], 
        ['Stimulant', 'Status', 'Cures dizzy.'], ['Super Vaccine', 'Status', '\nCures poison and recovers HP\nfor 5min.'], 
        ['Tandoori Chicken', 'Status', 'Cures paralysis and burn at regular intervals for 10min.'], 
        ['Tear of the Moon', 'Status', '\nCures poison, paralysis, blind,\nburn and freeze.'], 
        ['Tranquilizer', 'Status', 'Recovers from horrified.'], 
        ['Trial Vaccine', 'Status', '\nCures paralysis at short\nregular intervals for 5min.'], 
        ['Tvorog', 'Status', 'The HP and MP by 250 recovery, and release the firing state'], 
        ['Unread Fortune', 'Status', '\nOpen to read your fortune. Effect\nis lost when a new day arrives'], 
        ['Vaccine (Bleed)', 'Status', 'Cures bleed at regular\n\tintervals for 5min.'], 
        ['Vaccine (Blind)', 'Status', '\nCures blind at regular\nintervals for 5min.'], 
        ['Vaccine (Dizzy)', 'Status', 'Cures dizzy at regular\n\tintervals for 5min.'], 
        ['Vaccine (Fear)', 'Status', 'Cures fear at regular\n\tintervals for 5min.'], 
        ['Vaccine (Freeze)', 'Status', '\nCures freeze at regular intervals\nfor 5min.'], 
        ['Vaccine (Lethargy)', 'Status', 'Cures lethargy at regular\n\tintervals for 5min.'], 
        ['Vaccine (Paral.)', 'Status', '\nCures paralysis at regular intervals\nfor 5min.'], 
        ['Vaccine (Poison)', 'Status', '\nCures poison at regular intervals\nfor 5min.']];
    }

    public static function getUpdateChestsItem()
    {
        
    }
}

?>