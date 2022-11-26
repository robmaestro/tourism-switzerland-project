<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Added
use Illuminate\Support\Facades\DB;
use App\Models\Destination;
use App\Models\Dimage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Destination::create([
            'dest_name'=>'Rhine Falls',
            'dest_description'=>"The Rhine Falls (Rheinfall) is a breathtaking stupendous beauty and the largest plain waterfall in Europe. The falls are located on the High Rhine at Neuhausen am Rheinfall Village and just below Schaffhausen in the north of Switzerland. The Rhine's waters flow at the rate of 23 meters over a breadth of 150 meters. The tub's deepness is 13 meters and the average torrential is 600 m per second. Therefore, the visitors are offered a stunning view of the cascading waterfalls."
        ]);
        Destination::create([
            'dest_name'=>'Zurich',
            'dest_description'=>"Zürich is the largest city in Switzerland and the capital of the canton of Zürich. It is located in north-central Switzerland, at the northwestern tip of Lake Zürich. As of January 2020, the municipality has 434,335 inhabitants, the urban area 1.315 million, and the Zürich metropolitan area 1.83 million. Zürich is a hub for railways, roads, and air traffic. Both Zurich Airport and Zürich's main railway station are the largest and busiest in the country. Permanently settled for over 2,000 years, Zürich was founded by the Romans, who called it Turicum."
        ]);
        Destination::create([
            'dest_name'=>'Chillon Castle',
            'dest_description'=>"Chillon Castle is an island castle located on Lake Geneva, south of Veytaux in the canton of Vaud. It is situated at the eastern end of the lake, on the narrow shore between Montreux and Villeneuve, which gives access to the Alpine valley of the Rhône. Chillon is amongst the most visited medieval castles in Switzerland and Europe."
        ]);
        Destination::create([
            'dest_name'=>'Lucerne',
            'dest_description'=>"Lucerne or Luzern is a city in central Switzerland, in the German-speaking portion of the country. Lucerne is the capital of the canton of Lucerne and part of the district of the same name. With a population of approximately 82,000 people, Lucerne is the most populous city in Central Switzerland, and a nexus of economics, transportation, culture, and media in the region. The city's urban area consists of 19 municipalities and towns with an overall population of about 220,000 people. Owing to its location on the shores of Lake Lucerne and its outflow, the river Reuss, within sight of the mounts Pilatus and Rigi in the Swiss Alps, Lucerne has long been a destination for tourists. One of the city's landmarks is the Chapel Bridge, a wooden bridge first erected in the 14th century. The official language of Lucerne is German, but the main spoken language is the local variant of the Alemannic Swiss German dialect, Lucerne German."
        ]);
        Destination::create([
            'dest_name'=>'Interlaken',
            'dest_description'=>"Interlaken is a Swiss town and municipality in the Interlaken-Oberhasli administrative district in the canton of Bern. It is an important and well-known tourist destination in the Bernese Oberland region of the Swiss Alps, and the main transport gateway to the mountains and lakes of that region. The town is located on flat alluvial land called Bödeli between two lakes, Brienz to the east and Thun to the west, and alongside the river Aare, which flows between them. Transport routes to the east and west alongside the lakes are complemented by a route southwards into the near mountain resorts and high mountains, e.g. the famous high Alpine peaks of Eiger, Mönch, and Jungfrau, following upwards the Lütschine."
        ]);
        Destination::create([
            'dest_name'=>'Saint Moritz',
            'dest_description'=>"St. Moritz is a high Alpine resort town in the Engadine in Switzerland, at an elevation of about 1,800 metres above sea level. It is Upper Engadine's major town and a municipality in the district of Maloja in the Swiss canton of Graubünden. St. Moritz lies on the southern slopes of the Albula Alps below the Piz Nair overlooking the flat and wide glaciated valley of the Upper Engadine and eponymous lake: Lake St. Moritz. It hosted the Winter Olympics in 1928 and 1948."
        ]);
        Destination::create([
            'dest_name'=>'Bern',
            'dest_description'=>"Bern or Berne is the de facto capital of Switzerland, referred to as the \"federal city\". With a population of about 133,000, Bern is the fifth-most populous city in Switzerland, behind Zurich, Geneva, Basel and Lausanne. The Bern agglomeration, which includes 36 municipalities, had a population of 406,900 in 2014. The metropolitan area had a population of 660,000 in 2000. Bern is also the capital of the canton of Bern, the second-most populous of Switzerland's cantons. The official language is German, but the main spoken language is the local variant of the Alemannic Swiss German dialect, Bernese German. In 1983, the historic old town in the centre of Bern became a UNESCO World Heritage Site. It is notably surrounded by the Aare, a major river of the Swiss Plateau. Although fortified settlements were established since the antiquity, the medieval city proper was founded by the Zähringer ruling family, probably in 1191 by Berthold V, Duke of Zähringen."
        ]);
        Destination::create([
            'dest_name'=>'Matterhorn',
            'dest_description'=>"The Matterhorn is a mountain of the Alps, straddling the main watershed and border between Switzerland and Italy. It is a large, near-symmetric pyramidal peak in the extended Monte Rosa area of the Pennine Alps, whose summit is 4,478 metres high, making it one of the highest summits in the Alps and Europe. The four steep faces, rising above the surrounding glaciers, face the four compass points and are split by the Hörnli, Furggen, Leone/Lion, and Zmutt ridges. The mountain overlooks the Swiss town of Zermatt, in the canton of Valais, to the northeast; and the Italian town of Breuil-Cervinia in the Aosta Valley to the south."
        ]);
        Destination::create([
            'dest_name'=>'Lake Geneva',
            'dest_description'=>"Lake Geneva, Europe's largest Alpine lake, straddles the Swiss/French border, and laps at the shores of some of Switzerland's most popular cities. The city of Geneva (in French Genève; in German Genf) sits between pretty snowcapped peaks at the point where the Rhône spills into Lake Geneva. This French-speaking \"capital of peace\" is the European seat of the United Nations and exudes a pleasing blend of French joie de vivre and Swiss structure. Promenades, parks, and gardens surround the lake, and the old town is a lovely spot to stroll among the historic buildings. The Jet d'Eau, a fountain in Lake Geneva shooting water 150 meters into the air, is a famous landmark. Cultural attractions include the Opera House and the Grand Théâtre, which stages international acts."
        ]);
        Destination::create([
            'dest_name'=>'Swiss Park',
            'dest_description'=>"Founded in 1914, Swiss National Park in the Engadine Valley is the oldest reserve in the Alps. The park sits right on the border with Italy and encompasses more than 170 square kilometers of flower-dotted hollows, fast-flowing rivers, and limestone crags. The scenery is especially dramatic in winter, when the forested mountains are covered in a blanket of snow, and the views from the cross-country ski trails are stunning.
            Nature-lovers can explore the region on the large network of trails, though veering off these paths is forbidden in an effort to preserve the natural ecosystems. More than 5,000 species of wildlife call the park home, including marmot, red deer, chamois, ibex, fox, and more than 100 species of birds."
        ]);
        Destination::create([
            'dest_name'=>'Jungfrauhoch',
            'dest_description'=>"Icy air sweeps over your face, snow crunches underfoot, and the panorama almost takes your breath away: on one side the view of the Swiss Mittelland towards the Vosges, on the other the Aletsch Glacier, lined with four thousand metre peaks. Standing on the Jungfraujoch 3,454 metres above sea level, you can feel it with your first step: this is a different world. It's one you have to experience."
        ]);
        
        Dimage::create([
            'destination_id'=> '1',
            'image_link'=>""
        ]);
    }
}
