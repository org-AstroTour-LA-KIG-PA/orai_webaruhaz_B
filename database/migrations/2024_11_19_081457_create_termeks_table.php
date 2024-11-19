<?php

use App\Models\Termek;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('termeks', function (Blueprint $table) {
            $table -> id();
            $table -> string("nev", 100);
            $table -> string("kategoria", 30);
            $table -> text('leiras') -> nullable();
            $table -> bigInteger('ar');
            $table->timestamps();
        });
   
    Termek::create([
        'nev' => 'World of Tanks',
        'kategoria' => 'Akció-stratégia',
        'leiras' => 'A World of Tanks egy 3D-s csapatalapú többjátékos freemium videójáték, amelyben az 1910-es és 1970-es évek közötti páncélozott harcjárművek harcait szimulálják. A játék PvP alapú, vagyis a játékosok egymással harcolnak benne. A kiadott változatban 94 amerikai, 130 szovjet, 119 német, 78 brit, 75 francia, 42 kínai, 12 cseh, 29 svéd, 26 japán, 12 olasz harcjármű és 12 lengyel harcjármű, amelyeket könnyű, közepes és nehéz harckocsikra, páncélvadászokra és önjáró lövegekre osztottak fel.',
        'ar' => 3000
    ]);

    Termek::create([
        'nev' => 'Valorant',
        'kategoria' => 'Taktikai FPS',
        'leiras' => 'A VALORANT egy taktikai lövöldözős játék, amelyben 4 csapattársaddal együtt szállsz szembe 5 másik ügynökkel. A tűzharc 13 nyertes körig tart, és körönként csak egy életed van. ',
        'ar' => 1000        
    ]);

    Termek::create([
        'nev' => 'Rainbow Six Siege',
        'kategoria' => 'Taktikai FPS',
        'leiras' => "A Tom Clancy's Rainbow Six Siege egy 2015-ös online taktikai lövöldözős videojáték, amelyet a Ubisoft Montreal fejlesztettés a Ubisoft adott ki . A játék nagy hangsúlyt fektet a környezet pusztítására és a játékosok közötti együttműködésre. ",
        'ar' => 8000
    ]);

    Termek::create([
        'nev' => 'World of Warcraft',
        'kategoria' => 'MMORPG',
        'leiras' => 'A World of Warcraft ( WoW ) egy 2004-es, masszívan többszereplős online szerepjáték (MMORPG) videojáték , amelyet a Blizzard Entertainment készített. A Warcraft fantasy univerzumbanjátszódó World of Warcraft az Azeroth világában játszódik, körülbelül négy évvel a sorozat előző játékának, a Warcraft III: The Frozen Throne-nak az eseményei után .',
        'ar' => 13000
    ]);

}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('termeks');
    }
};
