<?php
namespace Faker\Provider\ro_RO;

class Address extends \Faker\Provider\Address
{
    protected static $buildingNumber = array('###', '##', '#', '#/#', '#A', '#B');
    protected static $apartmentNumber = array('#', '##');
    protected static $floor = array('#', '##');
    protected static $block = array('#', '##', 'A', 'B', 'C', 'D');
    protected static $blockSegment = array('A', 'B', 'C', 'D');

    protected static $streetPrefix = array(
        'Str.', 'B-dul.', 'Aleea', 'Splaiul', 'Calea', 'P-ța'
    );

    // random selection of seemingly frequently used streets and naming categories
    protected static $streetPlainName = array(
        // historical events
        'Eroilor', 'Independenței', 'Memorandumului', 'Unirii', '1 Decembrie',
        // historical people
        'Mihai Viteazul', 'Mircea cel Bătrân', 'Vlad Țepeș', 'Traian', 'Decebal', 'Horea', 'Cloșca', 'Crișan',
        // national and international people names
        'Louis Pasteur', 'Albert Einstein', 'Franklin Delano Rosevelt', 'J.J Rousseau', 'Petrache Poenaru', 'Henri Coandă', 'Constantin Brâncuși', 'Aurel Vlaicu', 'Ion Creangă', 'Mihai Eminescu',
        // nature-related
        'Cireșilor', 'Frasinului', 'Salcâmilor', 'Brăduțului', 'Frunzișului', 'Castanilor', 'Mesteacănului', 'Florilor', 'Pădurii', 'Piersicului',
        // work-related
        'Croitorilor', 'Meșterilor', 'Zidarilor', 'Păcurari', 'Muncii', 'Învățătorului',
        // geography related
        'Jiului', 'Bega', 'Someș', 'Făget', 'Sinaia', 'Herculane', 'Padiș'
    );

    protected static $postcode = array('######');

    // from http://ro.wikipedia.org/wiki/Lista_ora%C8%99elor_din_Rom%C3%A2nia#Lista_alfabetic.C4.83_a_ora.C8.99elor_din_Rom.C3.A2nia_.28inclusiv_municipii.29
    protected static $cityNames = array(
        'Abrud', 'Adjud', 'Agnita', 'Aiud', 'Alba Iulia', 'Aleșd', 'Alexandria', 'Amara', 'Anina', 'Aninoasa', 'Arad', 'Ardud', 'Avrig', 'Azuga', 'Babadag', 'Băbeni', 'Bacău', 'Baia de Aramă',
        'Baia de Arieș', 'Baia Mare', 'Baia Sprie', 'Băicoi', 'Băile Govora', 'Băile Herculane', 'Băile Olănești', 'Băile Tușnad', 'Băilești', 'Bălan', 'Bălcești', 'Balș', 'Băneasa', 'Baraolt',
        'Bârlad', 'Bechet', 'Beclean', 'Beiuș', 'Berbești', 'Berești', 'Bicaz', 'Bistrița', 'Blaj', 'Bocșa', 'Boldești-Scăeni', 'Bolintin-Vale', 'Borșa', 'Borsec', 'Botoșani', 'Brad', 'Bragadiru',
        'Brăila', 'Brașov', 'Breaza', 'Brezoi', 'Broșteni', 'Bucecea', 'București', 'Budești', 'Buftea', 'Buhuși', 'Bumbești-Jiu', 'Bușteni', 'Buzău', 'Buziaș', 'Cajvana', 'Calafat', 'Călan',
        'Călărași', 'Călimănești', 'Câmpeni', 'Câmpia Turzii', 'Câmpina', 'Câmpulung Moldovenesc', 'Câmpulung', 'Caracal', 'Caransebeș', 'Carei', 'Cavnic', 'Căzănești', 'Cehu Silvaniei',
        'Cernavodă', 'Chișineu-Criș', 'Chitila', 'Ciacova', 'Cisnădie', 'Cluj-Napoca', 'Codlea', 'Comănești', 'Comarnic', 'Constanța', 'Copșa Mică', 'Corabia', 'Costești', 'Covasna', 'Craiova',
        'Cristuru Secuiesc', 'Cugir', 'Curtea de Argeș', 'Curtici', 'Dăbuleni', 'Darabani', 'Dărmănești', 'Dej', 'Deta', 'Deva', 'Dolhasca', 'Dorohoi', 'Drăgănești-Olt', 'Drăgășani', 'Dragomirești',
        'Drobeta-Turnu Severin', 'Dumbrăveni', 'Eforie', 'Făgăraș', 'Făget', 'Fălticeni', 'Făurei', 'Fetești', 'Fieni', 'Fierbinți-Târg', 'Filiași', 'Flămânzi', 'Focșani', 'Frasin', 'Fundulea',
        'Găești', 'Galați', 'Gătaia', 'Geoagiu', 'Gheorgheni', 'Gherla', 'Ghimbav', 'Giurgiu', 'Gura Humorului', 'Hârlău', 'Hârșova', 'Hațeg', 'Horezu', 'Huedin', 'Hunedoara', 'Huși', 'Ianca',
        'Iași', 'Iernut', 'Ineu', 'Însurăței', 'Întorsura Buzăului', 'Isaccea', 'Jibou', 'Jimbolia', 'Lehliu Gară', 'Lipova', 'Liteni', 'Livada', 'Luduș', 'Lugoj', 'Lupeni', 'Măcin', 'Măgurele',
        'Mangalia', 'Mărășești', 'Marghita', 'Medgidia', 'Mediaș', 'Miercurea Ciuc', 'Miercurea Nirajului', 'Miercurea Sibiului', 'Mihăilești', 'Milișăuți', 'Mioveni', 'Mizil', 'Moinești',
        'Moldova Nouă', 'Moreni', 'Motru', 'Murfatlar', 'Murgeni', 'Nădlac', 'Năsăud', 'Năvodari', 'Negrești', 'Negrești-Oaș', 'Negru Vodă', 'Nehoiu', 'Novaci', 'Nucet', 'Ocna Mureș',
        'Ocna Sibiului', 'Ocnele Mari', 'Odobești', 'Odorheiu Secuiesc', 'Oltenița', 'Onești', 'Oradea', 'Orăștie', 'Oravița', 'Orșova', 'Oțelu Roșu', 'Otopeni', 'Ovidiu', 'Panciu', 'Pâncota',
        'Pantelimon', 'Pașcani', 'Pătârlagele', 'Pecica', 'Petrila', 'Petroșani', 'Piatra Neamț', 'Piatra-Olt', 'Pitești', 'Ploiești', 'Plopeni', 'Podu Iloaiei', 'Pogoanele', 'Popești-Leordeni',
        'Potcoava', 'Predeal', 'Pucioasa', 'Răcari', 'Rădăuți', 'Râmnicu Sărat', 'Râșnov', 'Recaș', 'Reghin', 'Reșița', 'Roman', 'Roșiorii de Vede', 'Rovinari', 'Roznov', 'Rupea', 'Săcele',
        'Săcueni', 'Salcea', 'Săliște', 'Săliștea de Sus', 'Salonta', 'Sângeorgiu de Pădure', 'Sângeorz-Băi', 'Sânnicolau Mare', 'Sântana', 'Sărmașu', 'Satu Mare', 'Săveni', 'Scornicești',
        'Sebeș', 'Sebiș', 'Segarcea', 'Seini', 'Sfântu Gheorghe', 'Sibiu', 'Sighetu Marmației', 'Sighișoara', 'Simeria', 'Șimleu Silvaniei', 'Sinaia', 'Siret', 'Slănic', 'Slănic-Moldova',
        'Slatina', 'Slobozia', 'Solca', 'Șomcuta Mare', 'Sovata', 'Ștefănești, Argeș', 'Ștefănești, Botoșani', 'Ștei', 'Strehaia', 'Suceava', 'Sulina', 'Tălmaciu', 'Țăndărei', 'Târgoviște',
        'Târgu Bujor', 'Târgu Cărbunești', 'Târgu Frumos', 'Târgu Jiu', 'Târgu Lăpuș', 'Târgu Mureș', 'Târgu Neamț', 'Târgu Ocna', 'Târgu Secuiesc', 'Târnăveni', 'Tășnad', 'Tăuții-Măgherăuș',
        'Techirghiol', 'Tecuci', 'Teiuș', 'Țicleni', 'Timișoara', 'Tismana', 'Titu',