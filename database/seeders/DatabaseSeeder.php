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
            'dest_name' => 'Rhine Falls',
            'dest_description' => "The Rhine Falls (Rheinfall) is a breathtaking stupendous beauty and the largest plain waterfall in Europe. The falls are located on the High Rhine at Neuhausen am Rheinfall Village and just below Schaffhausen in the north of Switzerland. The Rhine's waters flow at the rate of 23 meters over a breadth of 150 meters. The tub's deepness is 13 meters and the average torrential is 600 m per second. Therefore, the visitors are offered a stunning view of the cascading waterfalls."
        ]);
        Destination::create([
            'dest_name' => 'Zurich',
            'dest_description' => "Zürich is the largest city in Switzerland and the capital of the canton of Zürich. It is located in north-central Switzerland, at the northwestern tip of Lake Zürich. As of January 2020, the municipality has 434,335 inhabitants, the urban area 1.315 million, and the Zürich metropolitan area 1.83 million. Zürich is a hub for railways, roads, and air traffic. Both Zurich Airport and Zürich's main railway station are the largest and busiest in the country. Permanently settled for over 2,000 years, Zürich was founded by the Romans, who called it Turicum."
        ]);
        Destination::create([
            'dest_name' => 'Chillon Castle',
            'dest_description' => "Chillon Castle is an island castle located on Lake Geneva, south of Veytaux in the canton of Vaud. It is situated at the eastern end of the lake, on the narrow shore between Montreux and Villeneuve, which gives access to the Alpine valley of the Rhône. Chillon is amongst the most visited medieval castles in Switzerland and Europe."
        ]);
        Destination::create([
            'dest_name' => 'Lucerne',
            'dest_description' => "Lucerne or Luzern is a city in central Switzerland, in the German-speaking portion of the country. Lucerne is the capital of the canton of Lucerne and part of the district of the same name. With a population of approximately 82,000 people, Lucerne is the most populous city in Central Switzerland, and a nexus of economics, transportation, culture, and media in the region. The city's urban area consists of 19 municipalities and towns with an overall population of about 220,000 people. Owing to its location on the shores of Lake Lucerne and its outflow, the river Reuss, within sight of the mounts Pilatus and Rigi in the Swiss Alps, Lucerne has long been a destination for tourists. One of the city's landmarks is the Chapel Bridge, a wooden bridge first erected in the 14th century. The official language of Lucerne is German, but the main spoken language is the local variant of the Alemannic Swiss German dialect, Lucerne German."
        ]);
        Destination::create([
            'dest_name' => 'Interlaken',
            'dest_description' => "Interlaken is a Swiss town and municipality in the Interlaken-Oberhasli administrative district in the canton of Bern. It is an important and well-known tourist destination in the Bernese Oberland region of the Swiss Alps, and the main transport gateway to the mountains and lakes of that region. The town is located on flat alluvial land called Bödeli between two lakes, Brienz to the east and Thun to the west, and alongside the river Aare, which flows between them. Transport routes to the east and west alongside the lakes are complemented by a route southwards into the near mountain resorts and high mountains, e.g. the famous high Alpine peaks of Eiger, Mönch, and Jungfrau, following upwards the Lütschine."
        ]);
        Destination::create([
            'dest_name' => 'Saint Moritz',
            'dest_description' => "St. Moritz is a high Alpine resort town in the Engadine in Switzerland, at an elevation of about 1,800 metres above sea level. It is Upper Engadine's major town and a municipality in the district of Maloja in the Swiss canton of Graubünden. St. Moritz lies on the southern slopes of the Albula Alps below the Piz Nair overlooking the flat and wide glaciated valley of the Upper Engadine and eponymous lake: Lake St. Moritz. It hosted the Winter Olympics in 1928 and 1948."
        ]);
        Destination::create([
            'dest_name' => 'Bern',
            'dest_description' => "Bern or Berne is the de facto capital of Switzerland, referred to as the \"federal city\". With a population of about 133,000, Bern is the fifth-most populous city in Switzerland, behind Zurich, Geneva, Basel and Lausanne. The Bern agglomeration, which includes 36 municipalities, had a population of 406,900 in 2014. The metropolitan area had a population of 660,000 in 2000. Bern is also the capital of the canton of Bern, the second-most populous of Switzerland's cantons. The official language is German, but the main spoken language is the local variant of the Alemannic Swiss German dialect, Bernese German. In 1983, the historic old town in the centre of Bern became a UNESCO World Heritage Site. It is notably surrounded by the Aare, a major river of the Swiss Plateau. Although fortified settlements were established since the antiquity, the medieval city proper was founded by the Zähringer ruling family, probably in 1191 by Berthold V, Duke of Zähringen."
        ]);
        Destination::create([
            'dest_name' => 'Matterhorn',
            'dest_description' => "The Matterhorn is a mountain of the Alps, straddling the main watershed and border between Switzerland and Italy. It is a large, near-symmetric pyramidal peak in the extended Monte Rosa area of the Pennine Alps, whose summit is 4,478 metres high, making it one of the highest summits in the Alps and Europe. The four steep faces, rising above the surrounding glaciers, face the four compass points and are split by the Hörnli, Furggen, Leone/Lion, and Zmutt ridges. The mountain overlooks the Swiss town of Zermatt, in the canton of Valais, to the northeast; and the Italian town of Breuil-Cervinia in the Aosta Valley to the south."
        ]);
        Destination::create([
            'dest_name' => 'Lake Geneva',
            'dest_description' => "Lake Geneva, Europe's largest Alpine lake, straddles the Swiss/French border, and laps at the shores of some of Switzerland's most popular cities. The city of Geneva (in French Genève; in German Genf) sits between pretty snowcapped peaks at the point where the Rhône spills into Lake Geneva. This French-speaking \"capital of peace\" is the European seat of the United Nations and exudes a pleasing blend of French joie de vivre and Swiss structure. Promenades, parks, and gardens surround the lake, and the old town is a lovely spot to stroll among the historic buildings. The Jet d'Eau, a fountain in Lake Geneva shooting water 150 meters into the air, is a famous landmark. Cultural attractions include the Opera House and the Grand Théâtre, which stages international acts."
        ]);
        Destination::create([
            'dest_name' => 'Swiss Park',
            'dest_description' => "Founded in 1914, Swiss National Park in the Engadine Valley is the oldest reserve in the Alps. The park sits right on the border with Italy and encompasses more than 170 square kilometers of flower-dotted hollows, fast-flowing rivers, and limestone crags. The scenery is especially dramatic in winter, when the forested mountains are covered in a blanket of snow, and the views from the cross-country ski trails are stunning.
            Nature-lovers can explore the region on the large network of trails, though veering off these paths is forbidden in an effort to preserve the natural ecosystems. More than 5,000 species of wildlife call the park home, including marmot, red deer, chamois, ibex, fox, and more than 100 species of birds."
        ]);
        Destination::create([
            'dest_name' => 'Jungfraujoch',
            'dest_description' => "Icy air sweeps over your face, snow crunches underfoot, and the panorama almost takes your breath away: on one side the view of the Swiss Mittelland towards the Vosges, on the other the Aletsch Glacier, lined with four thousand metre peaks. Standing on the Jungfraujoch 3,454 metres above sea level, you can feel it with your first step: this is a different world. It's one you have to experience."
        ]);
        // Rhine Falls
        Dimage::create([
            'image_link' => "https://arzotravels.com/wp-content/uploads/2016/07/shutterstock_187912775.jpg",
            'destination_id' => 1
        ]);
        Dimage::create([
            'image_link' => "https://img1.goodfon.com/wallpaper/nbig/0/cd/rhine-falls-schaffhausen.jpg",
            'destination_id' => 1
        ]);
        Dimage::create([
            'image_link' => "https://s1.1zoom.me/big0/306/Rivers_Waterfalls_Switzerland_Schaffhausen_Rhein_573602_1280x640.jpg",
            'destination_id' => 1
        ]);
        Dimage::create([
            'image_link' => "https://images.unsplash.com/photo-1511013073992-f75281f0ff01?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
            'destination_id' => 1
        ]);
        Dimage::create([
            'image_link' => "https://switzerland-tour.com/images/city/rheinfall-top/Rhine-Falls-in-Switzerland.jpg",
            'destination_id' => 1
        ]);
        //Zurich
        Dimage::create([
            'image_link' => "https://free4kwallpapers.com/uploads/originals/2021/07/05/zurich-switzerland-wallpaper1.jpg",
            'destination_id' => 2
        ]);
        Dimage::create([
            'image_link' => "https://img.theculturetrip.com/1440x807/smart/wp-content/uploads/2021/05/e7rb2c.jpg",
            'destination_id' => 2
        ]);
        Dimage::create([
            'image_link' => "https://img.theculturetrip.com/768x/smart/wp-content/uploads/2021/05/kfhf3m.jpg",
            'destination_id' => 2
        ]);
        Dimage::create([
            'image_link' => "https://img.theculturetrip.com/768x/smart/wp-content/uploads/2021/05/2d689b3.jpg",
            'destination_id' => 2
        ]);
        Dimage::create([
            'image_link' => "https://img.theculturetrip.com/768x/smart/wp-content/uploads/2021/05/2c5nf2m.jpg",
            'destination_id' => 2
        ]);
        //Chillon Castle
        Dimage::create([
            'image_link' => "https://lp-cms-production.imgix.net/2019-06/114832813.jpg?auto=format&q=40&ar=16%3A9&fit=crop&crop=center&fm=auto&w=1946",
            'destination_id' => 3
        ]);
        Dimage::create([
            'image_link' => "https://upload.wikimedia.org/wikipedia/commons/2/23/Ch%C3%A2teau_de_Chillon%3B_Veytaux-Montreux.jpg",
            'destination_id' => 3
        ]);
        Dimage::create([
            'image_link' => "https://www.peaktransfer.com/wp-content/uploads/2017/02/chateau-de-chillon-a-fairytale-castle-with-a-darker-history-by-peak-transfer-1.jpg",
            'destination_id' => 3
        ]);
        Dimage::create([
            'image_link' => "https://lp-cms-production.s3.amazonaws.com/public/2021-08/shutterstockRF_281953322.jpg",
            'destination_id' => 3
        ]);
        Dimage::create([
            'image_link' => "https://lp-cms-production.s3.amazonaws.com/public/2021-03/500pxRF_65852287.jpg",
            'destination_id' => 3
        ]);
        //Lucerne
        Dimage::create([
            'image_link' => "https://wallpaperaccess.com/full/1667411.jpg",
            'destination_id' => 4
        ]);
        Dimage::create([
            'image_link' => "https://a.cdn-hotels.com/gdcs/production181/d401/8351bef0-ef7f-4979-b020-21621c88cdc0.jpg?impolicy=fcrop&w=1600&h=1066&q=medium",
            'destination_id' => 4
        ]);
        Dimage::create([
            'image_link' => "https://a.cdn-hotels.com/gdcs/production125/d1694/d57b4da2-65f1-4693-8c0e-104311f5fa65.jpg?impolicy=fcrop&w=1600&h=1066&q=medium",
            'destination_id' => 4
        ]);
        Dimage::create([
            'image_link' => "https://a.cdn-hotels.com/gdcs/production80/d745/17094940-c9cd-4976-aab8-dcfd47979d2c.jpg?impolicy=fcrop&w=1600&h=1066&q=medium",
            'destination_id' => 4
        ]);
        Dimage::create([
            'image_link' => "https://a.cdn-hotels.com/gdcs/production62/d613/c71ada37-a0c2-4f23-bf82-248637949b0b.jpg?impolicy=fcrop&w=1600&h=1066&q=medium",
            'destination_id' => 4
        ]);
        //interlaken
        Dimage::create([
            'image_link' => "https://www.jordan-road.com/wp-content/uploads/2018/03/interlkn.jpg",
            'destination_id' => 5
        ]);
        Dimage::create([
            'image_link' => "https://media.audleytravel.com/-/media/images/home/europe/switzerland/places/istock_1172758329_interlaken_letterbox.webp?q=79&w=1920&h=640",
            'destination_id' => 5
        ]);
        Dimage::create([
            'image_link' => "https://cdn.audleytravel.com/1920/1371/60/15986030-interlaken.webp",
            'destination_id' => 5
        ]);
        Dimage::create([
            'image_link' => "https://cdn.audleytravel.com/1050/750/79/15986029-lake-thun-interlaken.webp",
            'destination_id' => 5
        ]);
        Dimage::create([
            'image_link' => "https://cdn.audleytravel.com/1050/748/79/15986031-lake-brienzersee-interlaken.webp",
            'destination_id' => 5
        ]);
        //Saint Moritz
        Dimage::create([
            'image_link' => "https://images8.alphacoders.com/541/thumb-1920-541656.jpg",
            'destination_id' => 6
        ]);
        Dimage::create([
            'image_link' => "https://images.unsplash.com/photo-1547980562-3c008cd4b769?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c3QuJTIwbW9yaXR6fGVufDB8fDB8fA%3D%3D&w=1000&q=80",
            'destination_id' => 6
        ]);
        Dimage::create([
            'image_link' => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/03/c0/7e/20160721-134356-resized.jpg?w=1400&h=900&s=1",
            'destination_id' => 6
        ]);
        Dimage::create([
            'image_link' => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0f/03/c0/74/20170413-182309-resized.jpg?w=2400&h=-1&s=1",
            'destination_id' => 6
        ]);
        Dimage::create([
            'image_link' => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/06/ad/cb/bf/lake-st-moritz.jpg?w=2000&h=-1&s=1",
            'destination_id' => 6
        ]);
        Dimage::create([
            'image_link' => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/02/1e/9b/1e/lake-silvaplana.jpg?w=1400&h=-1&s=1",
            'destination_id' => 6
        ]);
        //Bern
        Dimage::create([
            'image_link' => "https://wallpapercave.com/wp/wp4194904.jpg",
            'destination_id' => 7
        ]);
        Dimage::create([
            'image_link' => "https://deih43ym53wif.cloudfront.net/bern-switzerland-shutterstock_1845136612.jpg_ecb4c93750.jpg",
            'destination_id' => 7
        ]);
        Dimage::create([
            'image_link' => "https://deih43ym53wif.cloudfront.net/large_emmental-switzerland-shutterstock_1232068477.jpg_f0e0b7971a.jpg",
            'destination_id' => 7
        ]);
        Dimage::create([
            'image_link' => "https://deih43ym53wif.cloudfront.net/large_ST_3x2_Murten-Berntor_51506.jpg_52ad95f368.jpg",
            'destination_id' => 7
        ]);
        Dimage::create([
            'image_link' => "https://deih43ym53wif.cloudfront.net/large_ST_Bern-Kramgasse_34545.jpg_65e636b28c.jpg",
            'destination_id' => 7
        ]);
        //Matterhorn
        Dimage::create([
            'image_link' => "https://th-thumbnailer.cdn-si-edu.com/vEunLFozxVYZg5GEgDsZ6N-aMH8=/fit-in/1600x0/filters:focal(898x449:899x450)/https://tf-cmsv2-smithsonianmag-media.s3.amazonaws.com/filer/9e/fa/9efad142-22d0-481f-9738-49e516b732b1/42-81494958.jpg",
            'destination_id' => 8
        ]);
        Dimage::create([
            'image_link' => "https://th-thumbnailer.cdn-si-edu.com/71EnRKyBUAHRmLIP1YkKRZ_jn90=/fit-in/1072x0/https://tf-cmsv2-smithsonianmag-media.s3.amazonaws.com/filer/da/10/da10aee5-72c4-47c0-9f22-8e3e4cec1f7b/42-79657286.jpg",
            'destination_id' => 8
        ]);
        Dimage::create([
            'image_link' => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0a/13/e4/fd/the-matterhorn.jpg?w=2200&h=-1&s=1",
            'destination_id' => 8
        ]);
        Dimage::create([
            'image_link' => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/05/aa/dc/42/the-matterhorn.jpg?w=1000&h=-1&s=1",
            'destination_id' => 8
        ]);
        Dimage::create([
            'image_link' => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/06/00/68/54/caption.jpg?w=1100&h=-1&s=1",
            'destination_id' => 8
        ]);
        //Lake Geneva
        Dimage::create([
            'image_link' => "https://images.unsplash.com/photo-1571296176377-22f2debfaa3b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
            'destination_id' => 9
        ]);
        Dimage::create([
            'image_link' => "https://a.cdn-hotels.com/gdcs/production71/d1104/0e1a66ff-f44e-4407-97d1-e0b787e01947.jpg?impolicy=fcrop&w=1600&h=1066&q=medium",
            'destination_id' => 9
        ]);
        Dimage::create([
            'image_link' => "https://a.cdn-hotels.com/gdcs/production125/d882/347f73d7-bd57-44cf-b3fa-0837c96cb193.jpg?impolicy=fcrop&w=1600&h=1066&q=medium",
            'destination_id' => 9
        ]);
        Dimage::create([
            'image_link' => "https://deih43ym53wif.cloudfront.net/large_lausanne-city-view-over-roofs-old-town-switzerland-shutterstock_2038232318.jpg_74f7a148c4.jpg",
            'destination_id' => 9
        ]);
        Dimage::create([
            'image_link' => "https://deih43ym53wif.cloudfront.net/large_vevey-wine-switzerland-shutterstock_703703299_bf32692367.jpeg",
            'destination_id' => 9
        ]);
        //Swiss National Park
        Dimage::create([
            'image_link' => "https://houseofswitzerland.org/sites/default/files/story/gallery/%C2%A9SNP_LO_20181018_77626-min_1.jpg",
            'destination_id' => 10
        ]);
        Dimage::create([
            'image_link' => "https://peakvisor.com/img/news/swiss-national-park-trail.jpg",
            'destination_id' => 10
        ]);
        Dimage::create([
            'image_link' => "https://peakvisor.com/img/news/chamois.jpg",
            'destination_id' => 10
        ]);
        Dimage::create([
            'image_link' => "https://peakvisor.com/img/news/zernez.jpg",
            'destination_id' => 10
        ]);
        Dimage::create([
            'image_link' => "https://images.unsplash.com/photo-1611571492921-846193520cb8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
            'destination_id' => 10
        ]);
        //Jungfraujoch
        Dimage::create([
            'image_link' => "https://media.jungfrau.ch/image/upload/ar_1680:700,c_crop,fl_lossy,q_auto/c_scale,w_1827/v1548413476/fileadmin/Jungfraujoch_Top_of_Europe/Jungfraujoch-Sphinx-Gletscher.jpg",
            'destination_id' => 11
        ]);
        Dimage::create([
            'image_link' => "https://media.jungfrau.ch/image/upload/ar_16:8,c_crop,fl_lossy,q_auto/c_scale,w_1748/v1479762153/fileadmin/Jungfraujoch_Top_of_Europe/Jungfraujoch-Sphinx-Aussicht-Sonnenuntergang.jpg",
            'destination_id' => 11
        ]);
        Dimage::create([
            'image_link' => "https://images.unsplash.com/photo-1565248327933-1f0a6ceec7fe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
            'destination_id' => 11
        ]);
        Dimage::create([
            'image_link' => "https://images.unsplash.com/photo-1598789204154-49fdd3fdbdba?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80",
            'destination_id' => 11
        ]);
        Dimage::create([
            'image_link' => "https://www.newlyswissed.com/wp-content/uploads/2016/12/Jungfraujoch-Switzerland-21.jpg",
            'destination_id' => 11
        ]);
    }
}
