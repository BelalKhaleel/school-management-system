<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Nationality;

class NationalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nationalities = [
            'Afghan', 'Albanian', 'Algerian', 'Andorran', 'Angolan',
            'Antiguans and Barbudans', 'Argentine', 'Armenian', 'Australian',
            'Austrian', 'Azerbaijani', 'Bahamian', 'Bahraini', 'Bangladeshi',
            'Barbadian', 'Belarusian', 'Belgian', 'Belizean', 'Beninese',
            'Bhutanese', 'Bolivian', 'Bosnian and Herzegovinian', 'Botswanan',
            'Brazilian', 'British', 'Bruneian', 'Bulgarian', 'Burkinese',
            'Burmese', 'Burundian', 'Cabo Verdean', 'Cambodian', 'Cameroonian',
            'Canadian', 'Central African Republic', 'Chadian', 'Chilean',
            'Chinese', 'Colombian', 'Comoran', 'Congolese', 'Costa Rican',
            'Croatian', 'Cuban', 'Cypriot', 'Czech', 'Danish', 'Djiboutian',
            'Dominican', 'Dominican Republic', 'Dutch', 'East Timorese',
            'Ecuadorean', 'Egyptian', 'Emirati', 'Equatorial Guinean',
            'Eritrean', 'Estonian', 'Ethiopian', 'Fijian', 'Filipino',
            'Finnish', 'French', 'Gabonese', 'Gambian', 'Georgian', 'Ghanaian',
            'Greek', 'Grenadian', 'Guatemalan', 'Guinean', 'Guinea-Bissauan',
            'Guyanese', 'Haitian', 'Honduran', 'Hungarian', 'Icelander', 'Indian',
            'Indonesian', 'Iranian', 'Iraqi', 'Irish', 'Israeli', 'Italian',
            'Jamaican', 'Japanese', 'Jordanian', 'Kazakhstani', 'Kenyan',
            'Kittian and Nevisian', 'Korean', 'Kuwaiti', 'Kyrgyzstani',
            'Laotian', 'Latvian', 'Lebanese', 'Lesotho', 'Liberian', 'Libyan',
            'Liechtenstein', 'Lithuanian', 'Luxembourger', 'Macedonian',
            'Malagasy', 'Malawian', 'Malaysian', 'Maldivian', 'Malian', 'Maltese',
            'Marshallese', 'Mauritian', 'Mexican', 'Micronesian', 'Moldovan',
            'Monacan', 'Mongolian', 'Montenegrin', 'Moroccan', 'Mozambican',
            'Namibian', 'Nauruan', 'Nepali', 'Nicaraguan', 'Nigerien', 'Nigerian',
            'North Korean', 'Norwegian', 'Omani', 'Pakistani', 'Palauan',
            'Panamanian', 'Papua New Guinean', 'Paraguayan', 'Peruvian', 'Philippine',
            'Polish', 'Portuguese', 'Qatari', 'Romanian', 'Russian', 'Rwandan',
            'Saint Kitts and Nevisian', 'Saint Lucian', 'Saint Vincent and Grenadines',
            'Samoan', 'San Marinese', 'Sao Tomean', 'Saudi Arabian', 'Scottish',
            'Senegalese', 'Serbian', 'Seychellois', 'Sierra Leonean', 'Singaporean',
            'Slovak', 'Slovenian', 'Solomon Islander', 'Somali', 'South African',
            'South Korean', 'Spanish', 'Sri Lankan', 'Sudanese', 'Surinamese',
            'Swazi', 'Swedish', 'Swiss', 'Syrian', 'Taiwanese', 'Tajikistani',
            'Tanzanian', 'Thai', 'Togolese', 'Tongan', 'Trinidadian or Tobagonian',
            'Tunisian', 'Turkish', 'Tuvaluan', 'Ugandan', 'Ukrainian', 'Uruguayan',
            'Uzbekistani', 'Vanuatuan', 'Venezuelan', 'Vietnamese', 'Yemenite',
            'Zambian', 'Zimbabwean',
        ];

        foreach($nationalities as $nationality) {
            Nationality::firstOrCreate(['nationality' => $nationality]);
        }
    }
}
