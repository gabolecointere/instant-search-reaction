<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $items = [
        ['imagePath' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/1280px-Flag_of_Argentina.svg.png','title' => 'Argentina', 'description' => 'Argentina is a massive South American nation with terrain encompassing Andes mountains, glacial lakes and Pampas grassland, the traditional grazing ground of its famed beef cattle.'],
        ['imagePath' =>'https://upload.wikimedia.org/wikipedia/en/thumb/0/05/Flag_of_Brazil.svg/1280px-Flag_of_Brazil.svg.png','title' =>'Brazil','description' =>'Brazil, a vast South American country, stretches from the Amazon Basin in the north to vineyards and massive Iguaçu Falls in the south.'],
        ['imagePath' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Colombia.svg/255px-Flag_of_Colombia.svg.png','title' =>'Colombia','description' =>'Colombia is a country at the northern tip of South America. It\'s landscape is marked by rainforests, Andes mountains and numerous coffee plantations. '],
        ['imagePath' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Flag_of_Bolivia_%28state%29.svg/250px-Flag_of_Bolivia_%28state%29.svg.png','title' =>'Bolivia','description' =>'Bolivia is a country in central South America, with a varied terrain spanning Andes Mountains, the Atacama Desert and Amazon Basin rainforest.'],
        ['imagePath' =>'https://upload.wikimedia.org/wikipedia/commons/e/e8/Flag_of_Ecuador.svg','title' =>'Ecuador','description' =>'Ecuador is a country straddling the equator on South America’s west coast. Its diverse landscape encompasses Amazon jungle, Andean highlands and the wildlife-rich Galápagos Islands.'],
        ['imagePath' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Flag_of_Chile.svg/220px-Flag_of_Chile.svg.png','title' =>'Chile','description' =>'Chile is a long, narrow country stretching along South America\'s western edge, with more than 6,000km of Pacific Ocean coastline. Santiago, its capital, sits in a valley surrounded by the Andes and Chilean Coast Range mountains.'],
        ['imagePath' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_Uruguay.svg/255px-Flag_of_Uruguay.svg.png','title' =>'Uruguay','description' =>'Uruguay is a South American country known for its verdant interior and beach-lined coast. The capital, Montevideo, revolves around Plaza Independencia, once home to a Spanish citadel.'],
        ['imagePath' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/Original_Flag_of_Venezuela_2006.png/1200px-Original_Flag_of_Venezuela_2006.png','title' =>'Venezuela','description' =>'Venezuela is a country on the northern coast of South America with diverse natural attractions. Along its Caribbean coast are tropical resort islands including Isla de Margarita and the Los Roques archipelago.'],
        ['imagePath' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Flag_of_Peru_%28state%29.svg/1200px-Flag_of_Peru_%28state%29.svg.png','title' =>'Peru','description' =>'Peru is a country in South America that\'s home to a section of Amazon rainforest and Machu Picchu, an ancient Incan city high in the Andes mountains.']
      ];

foreach ($items as $item) {
  $country = new \App\Country($item);
  $country->save();
}
    }
}
