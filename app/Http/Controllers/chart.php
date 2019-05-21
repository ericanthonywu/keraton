<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class chart extends Controller
{
    function sales()
    {
        return "[{
            \"Status\": \"Gagal\",
            \"Total\": 20
        }, {
            \"Status\": \"Berhasil\",
            \"Total\": 99
        }]";
    }
    function unit()
    {
        return "[{
            \"Status\": \"Belum Terjual\",
            \"Total\": 20
        }, {
            \"Status\": \"Terjual\",
            \"Total\": 99
        }]";
    }
    function groupunit(){
        $a = '';
        $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
        $random_keys=array_rand($countries,51);
        for($x=1;$x <= 50;$x++) {
            if($x == 50){
                $a .= "
                {
                    \"Unit\": \"".$countries[$random_keys[$x]]."\",
                    \"visits\": \"$x\"
                }";
            }else {
                $a .= "
                {
                    \"Unit\": \"".$countries[$random_keys[$x]]."\",
                    \"visits\": \"$x\"
                },";
            }
        }
        return "[$a]";
//        return "
//        [{
//    \"Unit\": \"USA\",
//    \"visits\": 3025
//}, {
//    \"Unit\": \"China\",
//    \"visits\": 1882
//}, {
//    \"Unit\": \"Japan\",
//    \"visits\": 1809
//}, {
//    \"Unit\": \"Germany\",
//    \"visits\": 1322
//}, {
//    \"Unit\": \"UK\",
//    \"visits\": 1122
//}, {
//    \"Unit\": \"France\",
//    \"visits\": 1114
//}, {
//    \"Unit\": \"India\",
//    \"visits\": 984
//}, {
//    \"Unit\": \"Spain\",
//    \"visits\": 711
//}, {
//    \"Unit\": \"Netherlands\",
//    \"visits\": 665
//}, {
//    \"Unit\": \"Russia\",
//    \"visits\": 580
//}, {
//    \"Unit\": \"South Korea\",
//    \"visits\": 443
//}, {
//    \"Unit\": \"Canada\",
//    \"visits\": 441
//}]";
    }
    function kinerjasales(){
        return "[{
            \"Sales\": \"USA\",
            \"visits\": 3025
        }, {
            \"Sales\": \"China\",
            \"visits\": 1882
        }, {
            \"Sales\": \"Japan\",
            \"visits\": 1809
        }, {
            \"Sales\": \"Germany\",
            \"visits\": 1322
        }, {
            \"Sales\": \"UK\",
            \"visits\": 1122
        }, {
            \"Sales\": \"France\",
            \"visits\": 1114
        }, {
            \"Sales\": \"India\",
            \"visits\": 984
        }, {
            \"Sales\": \"Spain\",
            \"visits\": 711
        }, {
            \"Sales\": \"Netherlands\",
            \"visits\": 665
        }, {
            \"Sales\": \"Russia\",
            \"visits\": 580
        }, {
            \"Sales\": \"South Korea\",
            \"visits\": 443
        }, {
            \"Sales\": \"Canada\",
            \"visits\": 441
        }]";
    }
    function dp()
    {
        return "[{
            \"Status\": \"Belum Bayar\",
            \"Total\": 20
        }, {
            \"Status\": \"Bayar\",
            \"Total\": 99
        }]";
    }
    function commission()
    {
        return "[{
            \"Status\": \"Belum Bayar\",
            \"Total\": 20
        }, {
            \"Status\": \"Bayar\",
            \"Total\": 99
        }]";
    }
}
