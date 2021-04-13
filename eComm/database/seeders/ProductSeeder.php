<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'Three Act Tragedy',
            "price"=>"600",
            "description"=>"At an apparently respectable dinner party, a vicar is the first to die…

            Thirteen guests arrived at dinner at the actor’s house. It was to be a particularly unlucky evening for the mild-mannered Reverend Stephen Babbington, who choked on his cocktail, went into convulsions and died.
            
            But when his martini glass was sent for chemical analysis, there was no trace of poison – just as Poirot had predicted. Even more troubling for the great detective, there was absolutely no motive…",
           "category"=>"mistery",
           "gallery"=>"https://www.dreamstime.com/three-act-tragedy-book-agatha-christie-facsimile-first-edition-table-london-england-uk-january-three-act-tragedy-image206318090"
            ],
            [
            'name'=>'Murder on the Orient Express',
            "price"=>"700",
            "description"=>"Agatha Christie’s most famous murder mystery.

            Just after midnight, a snowdrift stops the Orient Express in its tracks. The luxurious train is surprisingly full for the time of the year, but by the morning it is one passenger fewer. An American tycoon lies dead in his compartment, stabbed a dozen times, his door locked from the inside.",
           "category"=>"mistery",
           "gallery"=>"https://www.dreamstime.com/murder-orient-express-book-agatha-christie-facsimile-first-edition-table-london-england-uk-january-murder-image206318051"
            ],
            [
            'name'=>"Harry Potter and the Philosopher's Stone ",
            "price"=>"1000",
            "description"=>"Harry Potter has never even heard of Hogwarts when the letters start dropping on the doormat at number four, Privet Drive. Addressed in green ink on yellowish parchment with a purple seal, they are swiftly confiscated by his grisly aunt and uncle. Then, on Harry's eleventh birthday, a great beetle-eyed giant of a man called Rubeus Hagrid bursts in with some astonishing news: Harry Potter is a wizard, and he has a place at Hogwarts School of Witchcraft and Wizardry. An incredible adventure is about to begin!",
           "category"=>"fantasy",
           "gallery"=>"https://www.dreamstime.com/cali-colombia-april-beautiful-vintage-decoration-famous-books-like-harry-potter-j-k-rowling-agatha-christie-more-image180324415"
            ],
            [
                'name'=>'Relikvija',
            "price"=>"1000",
            "description"=>"It was always difficult being Harry Potter and it isn’t much easier now that he is an overworked employee of the Ministry of Magic, a husband, and father of three school-age children.While Harry grapples with a past that refuses to stay where it belongs, his youngest son, Albus, must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: Sometimes, darkness comes from unexpected places.",
           "category"=>"fantasy",
           "gallery"=>"https://www.dreamstime.com/cali-colombia-april-beautiful-vintage-decoration-famous-books-like-harry-potter-j-k-rowling-agatha-christie-more-image180324721"
            ]
        ]);
    }
}
