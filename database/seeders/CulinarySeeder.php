<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CulinarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('culinaries')->insert([
            [
                'culinary_category_id'          => '1',
                'culinary_device_code'          => 'Seblak',
                'culinary_title'                => 'Seblak',
                'culinary_image'                => 'https://selerasa.com/wp-content/uploads/2018/11/seblak-bandung-kumplit.jpg',
                'culinary_description_first'    => 'Seblak merupakan jajanan khas Bandung yang memiliki cita rasa gurih pedas. Terbuat dari aneka kerupuk warna-warni yang direbus bersama bumbu hingga lembek, sosis, bakso, makaroni, mie, kwetiau, dan topping lainnya.',
                'culinary_description_second'   => 'Diolah dengan campuran bumbu gurih pedas yang aroma kencurnya sangat kuat. Untuk kamu yang suka pedas-pedas, jangan lupa cobain seblak ya!',
                'culinary_price'                => '0',
                'culinary_status'               => '1',
                'culinary_rating'               => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'culinary_category_id'          => '1',
                'culinary_device_code'          => 'Batagor',
                'culinary_title'                => 'Batagor',
                'culinary_image'                => 'https://selerasa.com/wp-content/uploads/2021/11/Resep-Batagor-Bandung-500x500.jpg',
                'culinary_description_first'    => 'Batagor adalah jajanan khas Sunda yang cocok untuk mengganjal perut di sore hari. Nama batagor merupakan singkatan  Bakso Tahu Goreng yang merujuk pada bahan dan cara membuat batagor.',
                'culinary_description_second'   => 'Banyak orang menyukai gurih renyahnya adonan bakso dan tahu goreng. Batagor makin enak saat ditambahkan dengan saus kacang. Jangan lupa untuk mencicipi batagor ya!',
                'culinary_price'                => '0',
                'culinary_status'               => '1',
                'culinary_rating'               => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'culinary_category_id'          => '1',
                'culinary_device_code'          => 'Cuanki',
                'culinary_title'                => 'Cuanki',
                'culinary_image'                => 'https://img.okezone.com/content/2015/08/02/298/1189258/cuanki-jajanan-bandung-yang-bikin-nagih-MfeAS60UK7.jpg',
                'culinary_description_first'    => 'Cuanki adalah jajanan khas Kota Bandung semacam siomay atau bakso tahu kering, yang kemudian diberi kuah. Sepintas cuanki memang tak berbeda dengan bakso pada umumnya.',
                'culinary_description_second'   => 'Bedanya, cuanki tidak disertai topping berupa mie atau sayuran. Cuanki biasa dijual oleh pedagang keliling menggunakan pikulan. Sebutan cuanki sendiri konon merupakan singkatan dari kata Cari Uang Jalan Kaki.',
                'culinary_price'                => '0',
                'culinary_status'               => '1',
                'culinary_rating'               => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'culinary_category_id'          => '2',
                'culinary_device_code'          => 'Gepuk',
                'culinary_title'                => 'Gepuk',
                'culinary_image'                => 'https://cdn-2.tstatic.net/jambi/foto/bank/images/cara-membuat-empal-gepuk-daging.jpg',
                'culinary_description_first'    => 'Gepuk merupakan lauk yang terbuat dari daging sapi, berbentuk pipihdan dimasak dengan bumbu gurih. Biasanya gepuk disebut juga dengan empal.',
                'culinary_description_second'   => 'Bandung memiliki gepuk legendarisnya sendiri. Gepuk cocok untuk teman makan nasi di rumah. Jangan lupa coba gepuk ya!',
                'culinary_price'                => '0',
                'culinary_status'               => '1',
                'culinary_rating'               => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'culinary_category_id'          => '2',
                'culinary_device_code'          => 'Surabi',
                'culinary_title'                => 'Surabi',
                'culinary_image'                => 'https://bisniswisata.co.id/wp-content/uploads/2020/01/surabi.jpg',
                'culinary_description_first'    => 'Makanan khas Bandung ini sudah menjamur hampir di seluruh penjuru Indonesia. Tapi kamu wajib mencobanya di kota asli Surabi itu berasal. Makanan yang satu ini mirip dengan pancake, karena sama-sama terbuat dari bahan tepung terigu.',
                'culinary_description_second'   => 'Bedanya,Surabi Bandung dimasak dengan cara dibakar diatas tungku dengan adonan tebal, sehingga terasa nikmat untuk disantap dalam keadaan masih hangat. Untuk menambah cita rasa dari Surabi, kamu bisa memilih bermacam varian toping seperti coklat, durian, keju bahkan sosis untuk diletakan di atasnya. Surabi Bandung menjadi teman yang sangat cocok menyeruput teh di sore hari.',
                'culinary_price'                => '0',
                'culinary_status'               => '1',
                'culinary_rating'               => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'culinary_category_id'          => '2',
                'culinary_device_code'          => 'Mie_Kocok',
                'culinary_title'                => 'Mie Kocok',
                'culinary_image'                => 'https://upload.wikimedia.org/wikipedia/commons/f/f5/Mie-kocok-khas-Bandung-IGisnasutanto.jpg',
                'culinary_description_first'    => 'Kuliner khas Bandung yang tidak boleh kamu lewatkan berikutnya adalah Mie Kocok Bandung. Olahan mie berbentuk pipih dengan ditambah bermacam sayuran tauge serta kikil sapi membuat makanan khas Bandung ini memiliki cita rasa yang akan dirindukan setiap harinya.',
                'culinary_description_second'   => 'Nama “Mie Kocok” sendiri diberikan karena sebelum disajikan, olahan mie terlebih dahulu diaduk dan dikocok. Makanan khas Bandung satu ini pastinya akan masuk dalam daftar kuliner terfavorit yang akan paling kamu indukan tiap kali hendak berkunjung ke Kota Bandung.',
                'culinary_price'                => '0',
                'culinary_status'               => '1',
                'culinary_rating'               => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'culinary_category_id'          => '3',
                'culinary_device_code'          => 'Peyeum',
                'culinary_title'                => 'Peyeum',
                'culinary_image'                => 'https://cdn-2.tstatic.net/travel/foto/bank/images/peuyeum-camilan-khas-bandung-yang-terbuat-dari-singkong.jpg',
                'culinary_description_first'    => 'Peuyeum merupakan tape singkong khas Bandung yang bisa Anda temukan dengan mudah di warung-warung pinggir jalan dekat perbatasan Bandung. Tape ini juga menjadi salah satu oleh-oleh khas Bandung favorit wisatawan karena memiliki rasa dan aroma yang khas.',
                'culinary_description_second'   => 'Kamu bisa membeli peuyeum Bandung yang masih mentah atau sebentar lagi matang agar saat tiba di rumah, peuyeum bisa langsung dinikmati.',
                'culinary_price'                => '0',
                'culinary_status'               => '1',
                'culinary_rating'               => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'culinary_category_id'          => '3',
                'culinary_device_code'          => 'Tahu_Susu_Lembang',
                'culinary_title'                => 'Tahu Susu Lembang',
                'culinary_image'                => 'https://tempatwisatadibandung.info/wp-content/uploads/tahu-susu-lembang-3-500x300.jpg',
                'culinary_description_first'    => 'Setelah puas bermain di daerah Lembang Bandung, Anda bisa mampir terlebih dahulu ke warung Tahu Susu Lembang yang terkenal enak.',
                'culinary_description_second'   => 'Tahu Bandung satu ini memiliki rasa lebih gurih dengan tekstur yang lembut saat di mulut dan tentunya tidak masam. Tahu Susu Lembang ini sangat cocok Anda nikmati saat masih hangat dengan tambahan cabai rawit pedas.',
                'culinary_price'                => '0',
                'culinary_status'               => '1',
                'culinary_rating'               => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

            [
                'culinary_category_id'          => '3',
                'culinary_device_code'          => 'Wajit_Cililin',
                'culinary_title'                => 'Wajit Cililin',
                'culinary_image'                => 'https://img.inews.co.id/media/822/files/inews_new/2018/10/25/wajit1.jpg',
                'culinary_description_first'    => 'Wajit Cililin termasuk makanan tradisional Khas Bandung lain yang juga bisa Anda jadikan oleh-oleh saat berkunjung ke Bandung. Jajanan ini bisa kamu temukan di sekitar daerah Cililin dan juga pusat oleh-oleh Bandung di Cihampelas.',
                'culinary_description_second'   => 'Ciri khas dari Wajit Cililin ini terdapat pada rasanya yang manis dan legit serta bungkus daun jagung keringnya. Bahan utama pembuatan wajit Cililin khas Bandung ini adalah ketan, kelapa, gula aren, dan vanili.',
                'culinary_price'                => '0',
                'culinary_status'               => '1',
                'culinary_rating'               => '5',
                'created_at'                    => date('Y-m-d H:i:s'),
                'updated_at'                    => date('Y-m-d H:i:s')
            ],

        ]);
    }
}
