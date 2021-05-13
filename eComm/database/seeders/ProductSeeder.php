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
           "gallery"=>"https://thumbs.dreamstime.com/z/three-act-tragedy-book-agatha-christie-facsimile-first-edition-table-london-england-uk-january-three-act-tragedy-206318090.jpg"
            ],
            [
            'name'=>'Murder on the Orient Express',
            "price"=>"700",
            "description"=>"Agatha Christie’s most famous murder mystery.

            Just after midnight, a snowdrift stops the Orient Express in its tracks. The luxurious train is surprisingly full for the time of the year, but by the morning it is one passenger fewer. An American tycoon lies dead in his compartment, stabbed a dozen times, his door locked from the inside.",
           "category"=>"mistery",
           "gallery"=>"https://thumbs.dreamstime.com/z/murder-orient-express-book-agatha-christie-facsimile-first-edition-table-london-england-uk-january-murder-206318051.jpg"
            ],
            [
            'name'=>"Harry Potter and the Philosopher's Stone ",
            "price"=>"1000",
            "description"=>"Harry Potter has never even heard of Hogwarts when the letters start dropping on the doormat at number four, Privet Drive. Addressed in green ink on yellowish parchment with a purple seal, they are swiftly confiscated by his grisly aunt and uncle. Then, on Harry's eleventh birthday, a great beetle-eyed giant of a man called Rubeus Hagrid bursts in with some astonishing news: Harry Potter is a wizard, and he has a place at Hogwarts School of Witchcraft and Wizardry. An incredible adventure is about to begin!",
           "category"=>"fantasy",
           "gallery"=>"https://thumbs.dreamstime.com/z/cali-colombia-april-beautiful-vintage-decoration-famous-books-like-harry-potter-j-k-rowling-agatha-christie-more-180324415.jpg"
            ],
            [
                'name'=>'Relikvija',
            "price"=>"1000",
            "description"=>"It was always difficult being Harry Potter and it isn’t much easier now that he is an overworked employee of the Ministry of Magic, a husband, and father of three school-age children.While Harry grapples with a past that refuses to stay where it belongs, his youngest son, Albus, must struggle with the weight of a family legacy he never wanted. As past and present fuse ominously, both father and son learn the uncomfortable truth: Sometimes, darkness comes from unexpected places.",
           "category"=>"fantasy",
           "gallery"=>"https://thumbs.dreamstime.com/z/cali-colombia-april-beautiful-vintage-decoration-famous-books-like-harry-potter-j-k-rowling-agatha-christie-more-180324721.jpg"
            ],
            [
            'name'=>'The complete Persepolis',
            "price"=>"1100",
            "description"=>"Persepolis is the story of Satrapi's unforgettable childhood and coming of age within a large and loving family in Tehran during the Islamic Revolution; of the contradictions between private life and public life in a country plagued by political upheaval; of her high school years in Vienna facing the trials of adolescence far from her family; of her homecoming--both sweet and terrible; and, finally, of her self-imposed exile from her beloved homeland. It is the chronicle of a girlhood and adolescence at once outrageous and familiar, a young life entwined with the history of her country yet filled with the universal trials and joys of growing up.

            Edgy, searingly observant, and candid, often heartbreaking but threaded throughout with raw humor and hard-earned wisdom--Persepolis is a stunning work from one of the most highly regarded, singularly talented graphic artists at work today.",
           "category"=>"graphic memoir, biography",
           "gallery"=>"https://thumbs.dreamstime.com/z/cali-colombia-april-beautiful-vintage-decoration-famous-books-like-harry-potter-j-k-rowling-agatha-christie-more-180324316.jpg"
            ]
        ]);
    }
}


