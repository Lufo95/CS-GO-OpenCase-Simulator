<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsPatternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_patterns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
        });

        DB::table('items_patterns')->insert(
            [
                ['title' => 'Abyss'],
                ['title' => 'Aerial'],
                ['title' => 'Afterimage'],
                ['title' => 'Airlock'],
                ['title' => 'Antique'],
                ['title' => 'Aquamarine Revenge'],
                ['title' => 'Aristocrat'],
                ['title' => 'Armor Core'],
                ['title' => 'Asiimov'],
                ['title' => 'Atlas'],
                ['title' => 'Atomic Alloy'],
                ['title' => 'Avalanche'],
                ['title' => 'Azure Zebra'],
                ['title' => 'BOOM'],
                ['title' => 'Basilisk'],
                ['title' => 'The Battlestar'],
                ['title' => 'Bengal Tiger'],
                ['title' => 'Big Iron'],
                ['title' => 'Bioleak'],
                ['title' => 'Black Limba'],
                ['title' => 'Black Tie'],
                ['title' => 'Blind Spot'],
                ['title' => 'Blood Tiger'],
                ['title' => 'Blood in the Water'],
                ['title' => 'Bloodsport'],
                ['title' => 'Bloomstick'],
                ['title' => 'Blue Fissure'],
                ['title' => 'Blue Laminate'],
                ['title' => 'Blue Streak'],
                ['title' => 'Blue Titanium'],
                ['title' => 'Bone Pie'],
                ['title' => 'Bratatat'],
                ['title' => 'Briefing'],
                ['title' => 'Bright Water'],
                ['title' => 'Bronze Deco'],
                ['title' => 'Bullet Rain'],
                ['title' => 'Bunsen Burner'],
                ['title' => 'Caiman'],
                ['title' => 'Cardiac'],
                ['title' => 'Carnivore'],
                ['title' => 'Cartel'],
                ['title' => 'Case Hardened'],
                ['title' => 'Catacombs'],
                ['title' => 'Chameleon'],
                ['title' => 'Chantico\'s Fire'],
                ['title' => 'Chatterbox'],
                ['title' => 'Chopper'],
                ['title' => 'Cobalt Core'],
                ['title' => 'Cobalt Disruption'],
                ['title' => 'Cobalt Halftone'],
                ['title' => 'Cold Blooded'],
                ['title' => 'Copper Galaxy'],
                ['title' => 'Corinthian'],
                ['title' => 'Corporal'],
                ['title' => 'Corticera'],
                ['title' => 'Conspiracy'],
                ['title' => 'Crimson Web'],
                ['title' => 'Curse'],
                ['title' => 'Cyrex'],
                ['title' => 'Dark Water'],
                ['title' => 'Dart'],
                ['title' => 'Dazzle'],
                ['title' => 'Deadly Poison'],
                ['title' => 'Death By Kitty'],
                ['title' => 'Delusion'],
                ['title' => 'Demeter'],
                ['title' => 'Desert Warfare'],
                ['title' => 'Desert-Strike'],
                ['title' => 'Desolate Space'],
                ['title' => 'Directive'],
                ['title' => 'Djinn'],
                ['title' => 'Doomkitty'],
                ['title' => 'Dragon Tattoo'],
                ['title' => 'Dualing Dragons'],
                ['title' => 'Eco'],
                ['title' => 'Electric Hive'],
                ['title' => 'Elite Build'],
                ['title' => 'Emerald Dragon'],
                ['title' => 'Evil Daimyo'],
                ['title' => 'Exo'],
                ['title' => 'Fade'],
                ['title' => 'Faded Zebra'],
                ['title' => 'Fire Elemental'],
                ['title' => 'Fire Serpent'],
                ['title' => 'Firefight'],
                ['title' => 'Firestarter'],
                ['title' => 'Fleet Flock'],
                ['title' => 'Flux'],
                ['title' => 'Fowl Play'],
                ['title' => 'Frontside Misty'],
                ['title' => 'Fubar'],
                ['title' => 'Fuel Injector'],
                ['title' => 'Fuel Rod'],
                ['title' => 'Ghost Camo'],
                ['title' => 'Ghost Crusader'],
                ['title' => 'Golden Coil'],
                ['title' => 'Golden Koi'],
                ['title' => 'Grand Prix'],
                ['title' => 'Graphite'],
                ['title' => 'Graven'],
                ['title' => 'Green Marine'],
                ['title' => 'Griffin'],
                ['title' => 'Grim'],
                ['title' => 'Grinder'],
                ['title' => 'Grotto'],
                ['title' => 'Guardian'],
                ['title' => 'Handgun'],
                ['title' => 'Harvester'],
                ['title' => 'Heat'],
                ['title' => 'Heaven Guard'],
                ['title' => 'Heirloom'],
                ['title' => 'Hemoglobin'],
                ['title' => 'Hexane'],
                ['title' => 'Highwayman'],
                ['title' => 'Hive'],
                ['title' => 'Hyper Beast'],
                ['title' => 'Hypnotic'],
                ['title' => 'Ice Cap'],
                ['title' => 'Imperial'],
                ['title' => 'Imperial Dragon'],
                ['title' => 'Impire'],
                ['title' => 'Imprint'],
                ['title' => 'Iron Clad'],
                ['title' => 'Isaac'],
                ['title' => 'Ivory'],
                ['title' => 'Jaguar'],
                ['title' => 'Jambiya'],
                ['title' => 'Judgement of Anubis'],
                ['title' => 'Kami'],
                ['title' => 'Kill Confirmed'],
                ['title' => 'Koi'],
                ['title' => 'Kumicho Dragon'],
                ['title' => 'Labyrinth'],
                ['title' => 'Lapis Gator'],
                ['title' => 'Lead Conduit'],
                ['title' => 'Lightning Strike'],
                ['title' => 'Limelight'],
                ['title' => 'Loudmouth'],
                ['title' => 'Magma'],
                ['title' => 'Malachite'],
                ['title' => 'Man-o\'-war'],
                ['title' => 'Marina'],
                ['title' => 'Mecha Industries'],
                ['title' => 'Mehndi'],
                ['title' => 'Memento'],
                ['title' => 'Module'],
                ['title' => 'Monkey Business'],
                ['title' => 'Muertos'],
                ['title' => 'Murky'],
                ['title' => 'Naga'],
                ['title' => 'Nebula Crusader'],
                ['title' => 'Necropos'],
                ['title' => 'Nemesis'],
                ['title' => 'Neon Revolution'],
                ['title' => 'Neon Rider'],
                ['title' => 'Neural Net'],
                ['title' => 'Nightshade'],
                ['title' => 'Ocean Foam'],
                ['title' => 'Oceanic'],
                ['title' => 'Orange Crash'],
                ['title' => 'Orange DDPAT'],
                ['title' => 'Origami'],
                ['title' => 'Orion'],
                ['title' => 'Osiris'],
                ['title' => 'Outbreak'],
                ['title' => 'Overgrowth'],
                ['title' => 'Panther'],
                ['title' => 'Petroglyph'],
                ['title' => 'Phobos'],
                ['title' => 'Photic Zone'],
                ['title' => 'Point Disarray'],
                ['title' => 'Poison Dart'],
                ['title' => 'Pole Position'],
                ['title' => 'Power Loader'],
                ['title' => 'Powercore'],
                ['title' => 'Praetorian'],
                ['title' => 'Primal Saber'],
                ['title' => 'Pulse'],
                ['title' => 'Quicksilver'],
                ['title' => 'Rangeen'],
                ['title' => 'Ranger'],
                ['title' => 'Re-Entry'],
                ['title' => 'Reboot'],
                ['title' => 'Red Astor'],
                ['title' => 'Red FragCam'],
                ['title' => 'Red Laminate'],
                ['title' => 'Red Python'],
                ['title' => 'Redline'],
                ['title' => 'Retrobution'],
                ['title' => 'Ricochet'],
                ['title' => 'Riot'],
                ['title' => 'Rising Skull'],
                ['title' => 'Rocket Pop'],
                ['title' => 'Roll Cage'],
                ['title' => 'Rose Iron'],
                ['title' => 'Royal Legion'],
                ['title' => 'Royal Paladin'],
                ['title' => 'Ruby Poison Dart'],
                ['title' => 'Sandstorm'],
                ['title' => 'Scumbria'],
                ['title' => 'Serenity'],
                ['title' => 'Sergeant'],
                ['title' => 'Serum'],
                ['title' => 'Shapewood'],
                ['title' => 'Shattered'],
                ['title' => 'Skulls'],
                ['title' => 'Slashed'],
                ['title' => 'Slipstream'],
                ['title' => 'Special Delivery'],
                ['title' => 'Spectre'],
                ['title' => 'Splash'],
                ['title' => 'Stainless'],
                ['title' => 'Steel Disruption'],
                ['title' => 'Stone Cold'],
                ['title' => 'Supernova'],
                ['title' => 'Survivor Z'],
                ['title' => 'Syd Mead'],
                ['title' => 'System Lock'],
                ['title' => 'Tatter'],
                ['title' => 'Teclu Burner'],
                ['title' => 'Tempest'],
                ['title' => 'Terrain'],
                ['title' => 'The Executioner'],
                ['title' => 'The Fuschia Is Now'],
                ['title' => 'The Kraken'],
                ['title' => 'Tiger Moth'],
                ['title' => 'Tigris'],
                ['title' => 'Titanium Bit'],
                ['title' => 'Torque'],
                ['title' => 'Tranquility'],
                ['title' => 'Tread Plate'],
                ['title' => 'Triarch'],
                ['title' => 'Trigon'],
                ['title' => 'Triumvirate'],
                ['title' => 'Twist'],
                ['title' => 'Ultraviolet'],
                ['title' => 'Undertow'],
                ['title' => 'Urban Hazard'],
                ['title' => 'Urban Shock'],
                ['title' => 'Valence'],
                ['title' => 'Ventilator'],
                ['title' => 'Ventilators'],
                ['title' => 'Victoria'],
                ['title' => 'Violent Daimyo'],
                ['title' => 'Virus'],
                ['title' => 'Vulcan'],
                ['title' => 'Wasteland Rebel'],
                ['title' => 'Water Elemental'],
                ['title' => 'Water Sigil'],
                ['title' => 'Wave Spray'],
                ['title' => 'Weasel'],
                ['title' => 'Wings'],
                ['title' => 'Wingshot'],
                ['title' => 'Worm God'],
                ['title' => 'Wraiths'],
                ['title' => 'X-Ray'],
                ['title' => 'Yellow Jacket'],
                ['title' => 'Yorick'],
                ['title' => 'Zirka'],
                ['title' => '龍王 (Dragon King)'],
                ['title' => 'Vanilla'],
                ['title' => 'Urban Masked'],
                ['title' => 'Stained'],
                ['title' => 'Slaughter'],
                ['title' => 'Scorched'],
                ['title' => 'Safari Mesh'],
                ['title' => 'Night'],
                ['title' => 'Forest DDPAT'],
                ['title' => 'Boreal Forest'],
                ['title' => 'Blue Steel'],
                ['title' => 'Rust Coat'],
                ['title' => 'Tiger Tooth'],
                ['title' => 'Marble Fade'],
                ['title' => 'Doppler'],
                ['title' => 'Damascus Steel'],
//                ['title' => 'Doppler (Ruby)'],
                ['title' => 'Ruby'],
//                ['title' => 'Doppler (Sapphire)'],
                ['title' => 'Sapphire'],
//                ['title' => 'Doppler (Black Pearl)'],
                ['title' => 'Black Pearl'],
                ['title' => 'Freehand'],
                ['title' => 'Autotronic'],
                ['title' => 'Gamma Doppler'],
                ['title' => 'Black Laminate'],
                ['title' => 'Lore'],
                ['title' => 'Arid'],
                ['title' => 'Badlands'],
                ['title' => 'Boom!'],
                ['title' => 'Bronzed'],
                ['title' => 'Charred'],
                ['title' => 'Convoy'],
                ['title' => 'Cool Mint'],
                ['title' => 'Crimson Kimono'],
                ['title' => 'Crimson Weave'],
                ['title' => 'Diamondback'],
                ['title' => 'Eclipse'],
                ['title' => 'Emerald Web'],
                ['title' => 'Foundation'],
                ['title' => 'Guerrilla'],
                ['title' => 'Hedge Maze'],
                ['title' => 'Leather'],
                ['title' => 'Lunar Weave'],
                ['title' => 'Pandora\'s Box'],
                ['title' => 'Snakebite'],
                ['title' => 'Spearmint'],
                ['title' => 'Spruce DDPAT'],
                ['title' => 'Superconductor'],
                ['title' => 'Howl'],
//                ['title' => 'Gamma Doppler (Emerald)'],
                ['title' => 'Emerald'],
                ['title' => 'Turf'],
                ['title' => 'Sonar'],
                ['title' => 'Sand Scale'],
                ['title' => 'Black Sand'],
                ['title' => 'Cirrus'],
                ['title' => 'Ironwork'],
                ['title' => 'Polymer'],
                ['title' => 'Gila'],
                ['title' => 'Flashback'],
                ['title' => 'Stinger'],
                ['title' => 'Royal Consorts'],
                ['title' => 'Wasteland Princess'],
                ['title' => 'Shallow Grave'],
                ['title' => 'Buzz Kill'],
                ['title' => 'Dragonfire'],

                ['title' => 'Jungle DDPAT'],
                ['title' => 'Tornado'],
                ['title' => 'Dry Season'],
                ['title' => 'Anodized Gunmetal'],
                ['title' => 'Jungle'],
                ['title' => 'Groundwater'],
                ['title' => 'Sand Dune'],
                ['title' => 'Mayan Dreams'],
                ['title' => 'Palm'],
                ['title' => 'Mosaico'],
                ['title' => 'Facets'],
                ['title' => 'Hazard'],
                ['title' => 'Anodized Navy'],
                ['title' => 'Spitfire'],
                ['title' => 'Emerald'],
                ['title' => 'Caramel'],
                ['title' => 'Candy Apple'],
                ['title' => 'Hot Rod'],
                ['title' => 'Bulldozer'],
                ['title' => 'Forest Leaves'],
                ['title' => 'Lichen Dashed'],
                ['title' => 'Jungle Spray'],
                ['title' => 'Jungle Tiger'],
                ['title' => 'Ossified'],
                ['title' => 'Green Plaid'],
                ['title' => 'Olive Plaid'],
                ['title' => 'Contractor'],
                ['title' => 'Traveler'],
                ['title' => 'Coach Class'],
                ['title' => 'Commuter'],
                ['title' => 'Red Leather'],
                ['title' => 'Business Class'],
                ['title' => 'First Class'],
                ['title' => 'Pilot'],
                ['title' => 'Jet Set'],
                ['title' => 'Urban DDPAT'],
                ['title' => 'Army Sheen'],
                ['title' => 'Bone Mask'],
                ['title' => 'Carbon Fiber'],
                ['title' => 'Caged Steel'],
                ['title' => 'Silver'],
                ['title' => 'Death Rattle'],
                ['title' => 'Green Apple'],
                ['title' => 'Tuxedo'],
                ['title' => 'Meteorite'],
                ['title' => 'Emerald Pinstripe'],
                ['title' => 'Franklin'],
                ['title' => 'Fallout Warning'],
                ['title' => 'Hot Shot'],
                ['title' => 'Contamination'],
                ['title' => 'Nuclear Waste'],
                ['title' => 'Chemical Green'],
                ['title' => 'Radiation Hazard'],
                ['title' => 'Setting Sun'],
                ['title' => 'Nuclear Garden'],
                ['title' => 'Bone Machine'],
                ['title' => 'Reactor'],
                ['title' => 'Toxic'],
                ['title' => 'Styx'],
                ['title' => 'Cerberus'],
                ['title' => 'Seabird'],
                ['title' => 'Impact Drill'],
                ['title' => 'Para Green'],
                ['title' => 'Urban Rubble'],
                ['title' => 'Nitro'],
                ['title' => 'Full Stop'],
                ['title' => 'Whiteout'],
                ['title' => 'Duelist'],
                ['title' => 'Twilight Galaxy'],
                ['title' => 'Briar'],
                ['title' => 'Storm'],
                ['title' => 'Indigo'],
                ['title' => 'Royal Blue'],
                ['title' => 'Chainmail'],
                ['title' => 'Dark Age'],
                ['title' => 'Chalice'],
                ['title' => 'Hand Cannon'],
                ['title' => 'Knight'],
                ['title' => 'Dragon Lore'],
                ['title' => 'Desert Storm'],
                ['title' => 'Predator'],
                ['title' => 'Snake Camo'],
                ['title' => 'Copperhead'],
                ['title' => 'Copper'],
                ['title' => 'Blaze'],
                ['title' => 'Scorpion'],
                ['title' => 'Brass'],
                ['title' => 'Sand Dashed'],
                ['title' => 'Sand Spray'],
                ['title' => 'Sand Mesh'],
                ['title' => 'VariCamo'],
                ['title' => 'Orange Peel'],
                ['title' => 'Amber Fade'],
                ['title' => 'Moon in Libra'],
                ['title' => 'Daedalus'],
                ['title' => 'Asterion'],
                ['title' => 'Shipping Forecast'],
                ['title' => 'Sun in Leo'],
                ['title' => 'Pathfinder'],
                ['title' => 'Hades'],
                ['title' => 'Minotaur\'s Labyrinth'],
                ['title' => 'Icarus Fell'],
                ['title' => 'Chronos'],
                ['title' => 'Poseidon'],
                ['title' => 'Medusa'],
                ['title' => 'Walnut'],
                ['title' => 'Gunsmoke'],
                ['title' => 'Colony'],
                ['title' => 'Granite Marbleized'],
                ['title' => 'CaliCamo'],
                ['title' => 'Pit Viper'],
                ['title' => 'Jungle Dashed'],
                ['title' => 'Waves Perforated'],
                ['title' => 'Sage Spray'],
                ['title' => 'Blue Spruce'],
                ['title' => 'Cyanospatter'],
                ['title' => 'Night Ops'],
                ['title' => 'Mudder'],
                ['title' => 'Teardown'],
                ['title' => 'Cobalt Quartz'],
                ['title' => 'Grassland'],
                ['title' => 'Grassland Leaves'],
                ['title' => 'Blaze Orange'],
                ['title' => 'Modern Hunter'],
                ['title' => 'Splash Jam'],
                ['title' => 'Hunting Blind'],
                ['title' => 'Gator Mesh'],
                ['title' => 'Tropical Storm'],
                ['title' => 'Irradiated Alert'],
                ['title' => 'Nuclear Threat'],
                ['title' => 'Contrast Spray'],
                ['title' => 'Winter Forest'],
                ['title' => 'Arctic Camo'],
                ['title' => 'Blizzard Marbleized'],
                ['title' => 'Detour'],
                ['title' => 'VariCamo Blue'],
                ['title' => 'Road Rash'],
                ['title' => 'Pink DDPAT'],
                ['title' => 'Master Piece'],
                ['title' => 'Mint Kimono'],
                ['title' => 'Orange Kimono'],
                ['title' => 'Bamboo Forest'],
                ['title' => 'Bamboo Shadow'],
                ['title' => 'Bamboo Print'],
                ['title' => 'Midnight Storm'],
                ['title' => 'Terrace'],
                ['title' => 'Counter Terrace'],
                ['title' => 'Aqua Terrace'],
                ['title' => 'Daybreak'],
                ['title' => 'Sunset Storm 弐'],
                ['title' => 'Sunset Storm 壱'],
                ['title' => 'Neon Kimono'],
                ['title' => 'Hydroponic'],
                ['title' => 'Akihabara Accept'],
                ['title' => 'Army Recon'],
                ['title' => 'Army Mesh'],
                ['title' => 'Condemned'],
                ['title' => 'Silver Quartz'],
                ['title' => 'Acid Fade'],
                ['title' => 'Urban Dashed'],
                ['title' => 'Polar Mesh'],
                ['title' => 'Forest Night'],
                ['title' => 'Polar Camo'],
                ['title' => 'Ash Wood'],
                ['title' => 'Metalic DDPAT'],
                ['title' => 'Red Quartz'],
                ['title' => 'Urban Perforated'],
                ['title' => 'Glacier Mesh'],
                ['title' => 'Demolition'],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_patterns');
    }
}