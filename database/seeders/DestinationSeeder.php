<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinations')->insert([
            [
                'destination_category_id'       => '1',
                'destination_device_code'       => 'Alun-alun_Bandung',
                'destination_title'             => 'Alun-alun Bandung',
                'destination_image'             => 'https://cdn-cms.pgimgs.com/areainsider/2021/12/Alt-Text-1.-Taman-di-Bandung-sang-Ikonik-Alun-alun-Kota-Bandung-738x738.png',
                'destination_latitude'          => '',
                'destination_longitude'         => '',
                'destination_description_first' => 'Terletak di jantung kota, Alun-alun Bandung menjadi tempat yang sangat ikonik. Taman di Bandung yang paling hits ini sangat mendukung untuk tempat berbincang dan bersantai bersama keluarga atau teman-teman.',
                'destination_description_second'=> 'Di atas hamparan rumput sintetisnya yang indah, kita bebas bersantai. Terutama ketika menjelang senja, kita akan disuguhi pemandangan langit jingga yang eksotik. Tidak heran banyak warga Bandung yang bersantai sore di sini.',
                'destination_price'             => '0',
                'destination_status'            => '1',
                'destination_rating'            => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'destination_category_id'       => '1',
                'destination_device_code'       => 'The_Great_Asia_Afrika',
                'destination_title'             => 'The Great Asia Afrika',
                'destination_image'             => 'https://cdn-2.tstatic.net/kaltim/foto/bank/images/instagramridwankamil-the-great-asia-africa-lembang.jpg',
                'destination_latitude'          => '',
                'destination_longitude'         => '',
                'destination_description_first' => 'Terletak di lembang, tempat ini akan memberikan anda informasi tentang budaya di sebagian negara. Budaya yang dapat dilihat berasal dari tuju negara dari benua Asia dan Afrika, yaitu Indonesia, Korea, Jepang, India, Thailand, Afrika, dan Timur Tengah.',
                'destination_description_second'=> 'Disini juga menyediakan berbagai aksesoris yang identik atau khas dari negara yang Anda kunjungi. Selain itu, terdapat juga tempat yang menyewakan baju tradisional yang bisa digunakan untuk berfoto.',
                'destination_price'             => '0',
                'destination_status'            => '1',
                'destination_rating'            => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'destination_category_id'       => '2',
                'destination_device_code'       => 'Monumen_Bandung_Lautan_Api',
                'destination_title'             => 'Monumen Bandung Lautan Api',
                'destination_image'             => 'https://upload.wikimedia.org/wikipedia/id/6/66/Monumen_Bandung_lautan_api.jpg',
                'destination_latitude'          => '',
                'destination_longitude'         => '',
                'destination_description_first' => 'Monumen yang menjadi markah tanah Bandung. Monumen ini setinggi 45 meter, memiliki sisi sebanyak 9 bidang. Monumen ini dibangun untuk memperingati peristiwa Bandung Lautan Api, dimana terjadi pembumihangusan Bandung Selatan yang dipimpin oleh Muhammad Toha.',
                'destination_description_second'=> 'Monumen ini berada di tengah-tengah kota yaitu terletak di kawasan Lapangan Tegallega. Monumen ini menjadi salah satu monumen terkenal di Bandung. Monumen ini menjadi pusat perhatian setiap tanggal 23 Maret mengenang peristiwa Bandung Lautan Api.',
                'destination_price'             => '0',
                'destination_status'            => '1',
                'destination_rating'            => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'destination_category_id'       => '2',
                'destination_device_code'       => 'Gedung_Merdeka',
                'destination_title'             => 'Gedung Merdeka',
                'destination_image'             => 'https://cdn1.katadata.co.id/media/images/thumb/2020/04/18/2020_04_18-20_12_10_5e7d0e07275f109f58711842b5875206_400x267_thumb.jpg',
                'destination_latitude'          => '',
                'destination_longitude'         => '',
                'destination_description_first' => 'Gedung bersejarah yang pernah digunakan sebagai tempat Konferensi Tingkat Tinggi Asia-Afrika tahun 1955.',
                'destination_description_second'=> 'Kini gedung ini digunakan sebagai museum yang memamerkan berbagai benda koleksi dan foto Konferensi Asia-Afrika yang merupakan cikal bakal Gerakan Non-Blok pertama yang pernah digelar disini tahun 1955.',
                'destination_price'             => '0',
                'destination_status'            => '1',
                'destination_rating'            => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'destination_category_id'       => '3',
                'destination_device_code'       => 'Glamping_Legok_Kondang',
                'destination_title'             => 'Glamping Legok Kondang',
                'destination_image'             => 'https://sikidang.com/wp-content/uploads/Glamping-Legok-Kondang-Lodge.jpg',
                'destination_latitude'          => '',
                'destination_longitude'         => '',
                'destination_description_first' => 'Terletak di Ciwidey, Glamping Legok Kondang merupakan tempat wisata alam yang konsepnya seperti berada di Ubud, Bali.',
                'destination_description_second'=> 'Suasana ditempat ini dilengkapi dengan view perbukitan dan view lampu-lampu yang berada di perkotaan pada malam hari.',
                'destination_price'             => '0',
                'destination_status'            => '1',
                'destination_rating'            => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'destination_category_id'       => '3',
                'destination_device_code'       => 'Padma_Hotel_Bandung',
                'destination_title'             => 'Padma Hotel Bandung',
                'destination_image'             => 'https://ik.imagekit.io/tvlk/apr-asset/dgXfoyh24ryQLRcGq00cIdKHRmotrWLNlvG-TxlcLxGkiDwaUSggleJNPRgIHCX6/hotel/asset/10029705-2400x1600-FIT_AND_TRIM-a03c5e396dcb12ee0d4ab3c77ef6ff49.jpeg?_src=imagekit&tr=c-at_max,h-488,q-40,w-768',
                'destination_latitude'          => '',
                'destination_longitude'         => '',
                'destination_description_first' => 'Terletak di Jalan Ranca Bentang No. 56-18, tepatnya di lokasi yang strategis di kawasan pegunungan. Padma Hotel Bandung menawarkan hunian dengan desain sederhana tanpa meninggalkan kesan glamor dan modern.',
                'destination_description_second'=> 'Pengelola menghadirkan juru masak terbaik untuk memasak hidangan spesial bagi pasangan yang ingin makan malam secara outdoor dan eksklusif. Sebuah balkon disiapkan untuk Anda yang ingin merasakan sensasi makan malam di atas bukit dengan langit penuh bintang.',
                'destination_price'             => '0',
                'destination_status'            => '1',
                'destination_rating'            => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'destination_category_id'       => '1',
                'destination_device_code'       => 'Trans_Studio_Bandung',
                'destination_title'             => 'Trans Studio Bandung',
                'destination_image'             => 'https://ik.imagekit.io/tvlk/blog/2020/01/Wisata-Keluarga-Bandung-5-Traveloka.jpeg?tr=dpr-1,w-675',
                'destination_latitude'          => '',
                'destination_longitude'         => '',
                'destination_description_first' => 'Trans Studio Bandung dapat menjadi pilihan wisata keluarga di Bandung, terdapat sekitar 20 wahana permainan yang bisa kamu jelajahi disini. Trans Studio Bandung merupakan Taman Reakreasi Indoor.',
                'destination_description_second'=> 'Selain permainan, terdapat juga pertunjukan hiburan yang diselenggarakan oleh Trans Studio Bandung. Tempat ini juga terintegrasi dengan Trans Studio Mall.',
                'destination_price'             => '0',
                'destination_status'            => '1',
                'destination_rating'            => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'destination_category_id'       => '1',
                'destination_device_code'       => 'Orchid_Forest_Cikole',
                'destination_title'             => 'Orchid Forest Cikole',
                'destination_image'             => 'https://static.republika.co.id/uploads/images/inpicture_slide/orchid-forest-cikole-dihadirkan-untuk-seluruh-usia-dan-juga_200914130147-237.jpg',
                'destination_latitude'          => '',
                'destination_longitude'         => '',
                'destination_description_first' => 'Tempat ini bisa menjadi wisata keluarga yang edukatif, karena terdapat lebih dari dari 157 jenis tanaman anggrek asli dari Indonesia maupun luar negeri yang ditanam di sini. Selain itu, suasana tempat ini disuguhi dengan pemandangan hutan pinus yang asri.',
                'destination_description_second'=> 'Tempat ini juga menyediakan outbound, melihat penangkaran rusa, atau menyusuri hutan pinus melalui jembatan gantung.',
                'destination_price'             => '0',
                'destination_status'            => '1',
                'destination_rating'            => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'destination_category_id'       => '2',
                'destination_device_code'       => 'Gedung_Sate',
                'destination_title'             => 'Gedung Sate',
                'destination_image'             => 'https://upload.wikimedia.org/wikipedia/commons/5/5a/Gedung-Sate-Trees.jpg',
                'destination_latitude'          => '',
                'destination_longitude'         => '',
                'destination_description_first' => 'Gedung Sate dengan ciri khasnya berupa ornamen tusuk sate pada menara sentralnya, telah lama menjadi penanda atau markah tanah Kota Bandung yang tidak saja dikenal masyarakat di Jawa Barat, tetapi juga seluruh Indonesia bahkan model bangunan itu dijadikan pertanda bagi beberapa bangunan dan tanda-tanda kota di Jawa Barat.',
                'destination_description_second'=> 'Misalnya bentuk gedung bagian depan Stasiun Kereta Api Tasikmalaya. Mulai dibangun tahun 1920, gedung berwarna putih ini masih berdiri kokoh namun anggun dan kini berfungsi sebagai gedung pusat pemerintahan kota bandung.',
                'destination_price'             => '0',
                'destination_status'            => '1',
                'destination_rating'            => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'destination_category_id'       => '2',
                'destination_device_code'       => 'Museum_Wangsit_Mandala_Siliwangi',
                'destination_title'             => 'Museum Wangsit Mandala Siliwangi',
                'destination_image'             => 'https://tourbandung.id/wp-content/uploads/2018/11/47.-Museum-Mandala-Wangsit-Siliwangi-Bandung-750x450.jpg',
                'destination_latitude'          => '',
                'destination_longitude'         => '',
                'destination_description_first' => 'Museum militer yang berada di Kota Bandung, Jawa Barat. Siliwangi merupakan nama komando daerah militer TNI-AD di Jawa Barat dan Banten yang namanya diambil dari raja dari Kerajaan Sunda yang beribu kota di Pakuan Pajajaran yang kekuasaanya konon tak terbatas, juga arif dan bijaksana serta wibawa dalam menjalankan roda pemerintahan.',
                'destination_description_second'=> 'Sedangkan arti Mandala Wangsit merupakan sebuah tempat untuk menyimpan amanat, petuah atau nasihat dari pejuang masa lalu kepada generasi penerus melalu benda-benda yang ditinggalkannya. Museum ini diresmikan oleh panglima divisi Siliwangi Kolonel Ibrahim Adjie pada tanggal 23 Mei 1966.',
                'destination_price'             => '0',
                'destination_status'            => '1',
                'destination_rating'            => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'destination_category_id'       => '3',
                'destination_device_code'       => 'Sandalwood_Boutique_Hotel',
                'destination_title'             => 'Sandalwood Boutique Hotel',
                'destination_image'             => 'https://origin.pegipegi.com/jalan/images/pict1L/Y0/Y968730/Y968730025.jpg',
                'destination_latitude'          => '',
                'destination_longitude'         => '',
                'destination_description_first' => 'Terletak di Jalan Seskoau No 1, Lembang, Bandung. Sandalwood Boutique menyediakan kolam renang outdoor dengan air langsung dari pegunungan dan tamu dapat menikmati asrinya pemandangan alam.',
                'destination_description_second'=> 'Sandalwood Boutique Hotel menyediakan halaman rumput yang luas dengan meja dan kursi dari kayu jati yang membentuk lingkaran dengan alas kerikil. Di tengah-tengahnya, tamu bisa menyalakan api unggun untuk menghalau udara dingin sembari berbincang dan menikmati minuman hangat bersama pasangan.',
                'destination_price'             => '0',
                'destination_status'            => '1',
                'destination_rating'            => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'destination_category_id'       => '3',
                'destination_device_code'       => 'Villa_Air_Natural_Resort',
                'destination_title'             => 'Villa Air Natural Resort',
                'destination_image'             => 'https://s1.bukalapak.com/bukalapak-kontenz-production/content_attachments/41616/original/36848349_221783728476000_2844586033033510912_n_2.jpg',
                'destination_latitude'          => '',
                'destination_longitude'         => '',
                'destination_description_first' => 'Villa Air Natural Resort  didesain dengan dekorasi serba kayu layaknya rumah tradisional di Jepang.',
                'destination_description_second'=> 'Sesuai namanya, Villa Air Natural Resort memberikan suasana yang alami dengan adanya dekorasi berupa air mengalir di sepanjang sungai yang letaknya berada di depan kamar.  Fasilitas lain yang ditawarkan tempat ini di antaranya, berkuda, berkebun di kebun buah stroberi, dan belajar mengenai botani.',
                'destination_price'             => '0',
                'destination_status'            => '1',
                'destination_rating'            => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

        ]);
    }
}
