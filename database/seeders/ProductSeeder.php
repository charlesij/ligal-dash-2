<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductPhoto;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = 
        [
            [
                'user_id' => 1,
                'name' => 'Kambing Bandot',
                'description' => 
                    'Ini kambing bukan sembarang kambing, bisa senyum bos.

                    Kambing asli pilihan, dirawat dan dibesarkan seperti anak sendiri.
                    Dengan ini apapun makanan nya minumnya teh tumblr sorso. 

                    Dilengkapi dengan teknologi canggih, bisa nyari makan sendiri, bisa minum sendiri, tidak rusak saat terkena hujan, biaya perawatan rendah.
                    Tersedia 5x10 jam 

                    Order sekarang, dan menangkan hadiah nya!',
                'brand' => 'Haji Slamet',
                'stock' => 20,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 35000000,
                'fixed_price' => 35000000,
                'discount' => 0,
                'discount_type' => 'no Discount',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Kura Kura Brazil',
                'description' => 
                'Kura kura haji Slamet emang Jos',
                'brand' => 'Haji Slamet',
                'stock' => 500,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 25000,
                'fixed_price' => 20000,
                'discount' => 20,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Bebek Madura',
                'description' => 
                'Bebeque Haji Slamet paling pol',
                'brand' => 'Haji Slamet',
                'stock' => 10,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 35999,
                'fixed_price' => 24999,
                'discount' => 31,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Karya Seni Gambar 2D',
                'description' => 
                    'Agus Buntung
                    Hoi
                    Agus
                    Buntung
                    Sange
                    Bajingan',
                'brand' => 'Agus Buntung',
                'stock' => 3,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 200000,
                'fixed_price' => 200000,
                'discount' => 0,
                'discount_type' => 'no discount',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Babi Ternak',
                'description' => 
                    'Babi ternak',
                'brand' => 'Haji Slamet',
                'stock' => 20,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 24000000,
                'fixed_price' => 20000000,
                'discount' => 17,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Ferrari 488',
                'description' => 
                    'Tersedia berbagai macam rasa',
                'brand' => 'Ferrari',
                'stock' => 20,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 2000000,
                'fixed_price' => 1900000,
                'discount' => 10,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Versace Eros EDT',
                'description' => 
                    'Gambar ini asli bos, wangi nya enak, pokoknya wajib beli',
                'brand' => 'Versace',
                'stock' => 5,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 1750000,
                'fixed_price' => 1659500,
                'discount' => 6,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Ranjang Susun Tingkat',
                'description' => 
                    'PT JAVA CARTEL INDUSTRY
                    ======================= Custom desain

                    Catatan :
                    WAJIB KONSULTASI, AGAR BARANG SESUAI..
                    Membeli = Setuju mengikuti aturan toko. Harus menyertakan video Unboxing apabila ingin pengembalian barang..
                    =============
                    Tanpa Video / Lupa Unboxing, maka penukaran barang tidak bisa kami terima..',
                'brand' => 'Dekoruma',
                'stock' => 10,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 6500000,
                'fixed_price' => 6200000,
                'discount' => 5,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'EROC - MEGA Projector Full HD 600 ANSI Wifi 2.4 + 5G Fully Auto Focus - MEGA',
                'description' => 
                    'EROC merupakan salah satu pelopor perusahaan ritel produk elektronik secera e-commerce di Indonesia. Berdiri sejak tahun 2018 yang berpusat di Shenzhen, China yang memiliki cabang di 5 negara Asia Tenggara yaitu Indonesia, Filipina, Malaysia, Vietnam dan Thailand. Distributor resmi brand Coocaa, Midea, Toshiba, Gree, Flife, Eureka, Vimgo. Menjual semua kebutuhan elektronik dengan garansi resmi dan terjangkau.

                    Model: MEGA [NEW]
                    Core Display : LCD
                    Physical Resolution : 1920x1080
                    ANSI LUMENS: 600
                    Throw Ratio : 1.36:1
                    Offset : N.A.
                    Projecting Size(inches): 49--200 Inch
                    Focus Mode : AUTO
                    Keystone : AUTO
                    Zoom : 50%
                    SOC : Hi351
                    RAM+ROM :1G+8G
                    WiFi : 2.4G+5G
                    Bluetooth : BT5.0
                    HDMI : 1
                    USB :USB 2.0*2
                    AV In : N.A.
                    Audio Out : 3.5mm*1
                    Power Port : AC
                    OS : AOSP(Android 9)
                    Speaker : 5W*2
                    Dolby Audio : YES
                    Cast : Android Miracast
                    IOS Air Play
                    Power : 150 Watt
                    Remote : Infrared
                    Product size (mm) : 220*210*140
                    Product Weight : 2.1 KG
                    Warranty : 1 Year

                    Model : MATE
                    Core Display : LCD
                    Physical Resolution: 1080P
                    Display Brightness: 415( 15%)
                    Projecting Size (Inches): 49--120
                    Focus Mode : AUTO
                    Keystone: AUTO
                    RAM+ROM: 1G+8G
                    WIFI: 2.4G+5G(2T2R)
                    Bluetooth: BT5.1
                    Operation System: Linux (Netflix Turnkey)
                    Speaker : 5W*2
                    Dolby Audio : YES
                    Cast: Android Miracast
                    Product Size (mm): 182*128*208
                    Product Net Weight (KG): 1.8
                    Video Format Support : AVI/MP4/MKV/MOV/3GP/MPEG1/MPEG2/H.264/XVID
                    Photo Format Supported: BMP/JPG/JPEG/PNG
                    Ports: HDIN*2/USB*1/5VOut*1/VGAPort*1/AVIN*1/AudioOut*1/TFCardSlot*1
                    Audio Format Supported: MP2/MP3/PCM/WMA/AAC
                    Resolution: 2160p, 1080p, 720p, 4Kp60 10-bit H.265,4Kp60 VP9 Profile 2, 4Kp30 H.264
                    Chromecast: Yes
                    Netflix: Yes
                    YouTube: Yes


                    Catatan untuk kenyamanan & Keamanan berbelanja di Eroc Official store :
                    Pengiriman : Senin - Jumat (Hari Kerja)
                    Jam Operasional Chat Customer Service : Senin Jumat (09:00 - 24:00), Sabtu & Minggu (09:00 12:00)
                    Semua Produk Garansi Resmi
                    Jangan tekan "Pesanan Diterima" sebelum cek produk pesanan dan memastikan tidak ada masalah denga produk yang anda pesan.
                    Wajib sertakan video unboxing untuk pengajuan return
                    Mohon infokan ke team kami apabila ada kendala atau masalah dengan pesanan sebelum memberi Review Bintang1',
                'brand' => 'Eroc',
                'stock' => 115,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 8999000,
                'fixed_price' => 3999000,
                'discount' => 56,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Kahf Complete Body Wash Pack 200 ml x 2 pcs',
                'description' => 
                    'Paket ini terdiri dari:

                    Kahf Brightening and Cooling Body Wash 200 ml
                    Kahf Acne Fight and Relaxing Body Wash 200 ml

                    Kahf Brightening and Cooling Body Wash 200 ml adalah sabun mandi khusus pria dengan scrub yang berikan sensasi dingin serta cerahkan tubuh kulit. Dengan kandungan Hydrobalance yang dapat melembapkan kulit tubuh.
                    Other Claims
                    > Mind awakening fragrance
                    > Deeply cleanse body skin without drying out skin
                    > -5 C cooling sensation


                    Kahf Acne Fight and Relaxing Body Wash 200ml adalah sabun mandi khusus pria yang dapat melawan jerawat serta kemerahan pada kulit pria. Dengan aroma soul calming scent yang dapat berikan ketenangan pada saat mandi. Kandungan Hydrobalance yang dapat melembapkan kulit tubuh.
                    Other Claims:
                    > Relaxing fragrance
                    > Fight body acne - causing bacteria within 10s
                    > HydroBalance
                    > -5 C cooling sensation
                    > Kill 99,9% bacteria within 30s',
                'brand' => 'Kahf',
                'stock' => 1121,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 56000,
                'fixed_price' => 50400,
                'discount' => 10,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'AC Midea 1/2 PK (0.5 PK) Standard - R32 Series - MSAF-05CRN2',
                'description' => 
                    'BARANG DIKIRIM PADA 11-09-2024
                    Midea AC Standard 1/2 PK ( 0.5 PK ) R32 Series MSAF-05CRN2 (Unit Indoor & Outdoor)

                    ● Keunggulan :
                    1. R32
                    Refrigerant generasi terbaru, pendinginan cepat dengan daya efisiensi tinggi
                    2. Hypergrafin
                    3. 3 Layer High Density Filter
                    1st and 3rd layer is High Density Filter : Mechanical Filtration menyaring partikel-partikel debu halus；Middle Filter is cold catalyst filter : Chemical filtration to decompose harmful gases such as formaldehyde and toluene in the air
                    4. Self Clean: Guaranteed energy efficiency membersihkan Evaporator AC secara otomatis, menghilangkan jamur dan bakteri. Hanya dengan menekan 1 tombol Remote Button
                    5. Turbo : Quick cooling function
                    6. CIA (sistem proteksi pada AC saat kebocoran pipa, dengan memberika kode EC)
                    7. Self diagnose : Show Error code on Pannel to find out the problem
                    8. Comfort : Sleep Mode , tidak bising saat kita tidur
                    9. Stabilizer Free (160V-240V)
                    10. Fire Proof Electric Box

                    ● Spesifikasi :
                    Merk : MIDEA
                    Model : MSAF-05CRN2
                    Type : Standard
                    Min/Max Volt : 160/240 V
                    Kapasitas : 1/2 (0.5) PK
                    Tipe Refrigrant : R-32
                    Kapasitas Pendingin : 4500 Btu/h
                    Daya Listrik : 350 Watt
                    EER : 12.86 (Btu/h)/W
                    Ukuran Pipas Liquid (mm-inch) : 6.35 (1/4)
                    Ukuran Pipa Gas (mm-inch) : 9.52 (3/8)
                    Dimension (mm) / Weight Indoor (Kg) : 715x194x285 mm / 8.5 Kg
                    Dimension (mm) / Weight Outdoor (Kg) : 681x285x434 mm / 22Kg
                    Tingkat Efisiensi : 4*
                    SNI IEC 60335-2-40:2009

                    ● Garansi:
                    Garansi 5 Tahun Suku Cadang & Jasa Service
                    Garansi 10 Tahun Kompressor & Motor',
                'brand' => 'Midea',
                'stock' => 78,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 3799000,
                'fixed_price' => 2895000,
                'discount' => 24,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'UGREEN Kabel Data Gaming Fast Charging Samsung Android Charger USB A Type C Cable - C-C 100w, 2m',
                'description' => 
                    'GARANSI RUSAK GANTI BARU selama 24 BULAN!
                    (Bukan cuma 18 bulan seperti yang lain)

                    Kabel USB C Angled to USB C Angled Ugreen For Samsung yang pasti bikin aman saat isi daya dan support fast charging, bikin main nyaman, baterai tetap aman !

                    Mengapa Beli di toko Kami ?
                    - Garansi barang ORIGINAL (Terbukti palsu, kami ganti uang Anda 2x lipat)
                    - Garansi Uang Kembali (salah pilih produk dapat direfund selama segel belum dibuka)
                    - Distributor RESMI dan TERPERCAYA
                    - Pengiriman CEPAT, TEPAT dan AMAN (packing khusus dari Unicase Store)
                    - FAST Response dan FAST Service

                    Compatibility :
                    - Universal Compatibility
                    - USB Type C Port
                    - Ugreen Wall Charger
                    - SFC/AFC

                    Varian :
                    V2 Varian (C-C 100w V2/C-C 60w V2/A-C 60w V2)
                    - Kabel dengan Elbow Design pada kedua kepala port

                    Feature :
                    - L Design
                    L Design berfungsi untuk memberikan kenyamanan khususnya saat bermain game
                    - Braided Cable
                    Kabel dibalut dengan Nylon braided yang meningkatkan durabilitas kabel
                    - 480Mb/s Data Transfer
                    Dapat melakukan transfer data dengan kecepatan maksimal 480Mb/s

                    Highlight :
                    - Gaming Cable
                    - Support PD
                    - Support QC 3.0
                    - Support AFC Protocol
                    - Durable Cable

                    Notice :
                    - Pastikan Wall Charger sudah support Output Max 100W / 60W untuk hasil maksimal

                    Dimension :
                    - Panjang Kabel 1 Meter / 2 Meter

                    What is in the box :
                    1x USB C Angled to USB C Angled Cable Ugreen US323 / US335

                    MOHON PERHATIKAN VARIAN PRODUK SEBELUM MELAKUKAN PEMBELIAN

                    S&K Complain :
                    1. Box dan isi masih lengkap
                    2. Dapat menunjukan invoice pembelian
                    3. Chat komplain menyertakan video unboxing dan video yang menunjukan letak permasalahan produk',
                'brand' => 'UGREEN',
                'stock' => 8,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 175000,
                'fixed_price' => 110500,
                'discount' => 37,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Bowers & Wilkins B&W Px8 McLaren Edition Over-ear noise-canceling headphones',
                'description' => 
                    'Ready Stock! Distributor resmi Bowers & Wilkins di Indonesia.
                    Part of MUSIQUE Leading Stuff High-End Audio Store

                    Instagram : @musique.co.id
                    Website : https://www.musique.co.id/
                    Web company : https://www.v2indonesia.com
                    CP/WA : 0821-2121-1509
                    Offline Store location :
                    📍Level 3 Plaza Indonesia, Jakarta.
                    📍4th Floor Pacific Place, Jakarta.
                    📍2nd Floor Pondok Indah Mall Jakarta.
                    📍3rd Floor Tunjungan Plaza, Surabaya.
                    📍First Floor Pakuwon Mall, Surabaya.

                    --------------------------------------------------------
                    ❗❗IMPORTANT NOTE❗❗
                    Please do not easily believe in sellers who speak on behalf of MUSIQUE or with similar language, please check the credibility of the seller before making a transaction."
                    --------------------------------------------------------

                    Dalam merayakan kemitraan yang telah lama terjalin antara Bowers & Wilkins dengan Automotive supercar dan hypercar McLaren yang telah terintegrasi dengan Bowers & Wilkins, headphone Px8 McLaren Edition menghadirkan perpaduan gaya yang terinspirasi dari McLaren dengan suara nirkabel berkinerja tinggi yang identik dengan headphone unggulan Bowers & Wilkins.

                    McLaren inspired Merayakan hubungan yang telah terjalin sejak tahun 2015, Px8 McLaren Edition dibalut dengan bahan kulit abu-abu yang elegan dengan detail warna oranye pepaya yang terinspirasi dari supercar dan hypercar McLaren.

                    Designed highlights Integrasi isyarat McLaren Automotive sangat halus namun bergaya, dengan sentuhan akhir abu-abu Galvanic dan sorotan oranye Pepaya, yang terakhir terinspirasi oleh oranye Pepaya yang terkenal yang berasal dari mobil balap awal Bruce McLaren. Logo McLaren dengan warna tone-on-tone yang tersembunyi di ikat kepala melengkapi desain headphone yang berbeda dan mencolok.

                    Audio partners Kemitraan ini dibangun di atas fondasi teknis yang kokoh, sesuatu yang telah diakui dengan tiga penghargaan desain iF untuk integrasi sistem Bowers & Wilkins pada McLaren Speedtail, McLaren GT, dan yang terbaru, McLaren Artura hibrida, yang sekali lagi telah meningkatkan standar untuk performa audio berkat kolaborasi teknik dan optimalisasi yang erat.

                    Suara resolusi tinggi dengan DSP canggih, Px8 McLaren Edition menggunakan teknologi nirkabel aptX™ Adaptive dan Pemrosesan Sinyal Digital yang kuat untuk memastikan kualitas suara resolusi tinggi 24-bit yang luar biasa dari layanan streaming yang sesuai. Anda juga dapat terhubung ke laptop Anda melalui USB untuk menikmati streaming resolusi tinggi.

                    Teknologi peredam bising milik Px8 McLaren Edition memastikan kinerja yang luar biasa tanpa berdampak pada kualitas Musik. Enam mikrofon bekerja sama untuk memberikan hasil terbaik, baik untuk peredam bising maupun panggilan suara yang lebih jernih.

                    Kenyamanan, lebih lama, Px8 McLaren Edition memiliki bahan yang mewah dan desain yang terarah. Lengan aluminiumnya sangat ringan dan kaku untuk daya tahan yang unggul: kulit Nappa yang mewah berpadu dengan earpad busa memori yang dibuat dengan sempurna untuk memberikan kenyamanan sepanjang hari dan daya tahan yang luar biasa. Detail logam cerah dengan potongan berlian menyempurnakan tampilan premium yang mewah.

                    SPESIFIKASI ⤵

                    -) Wearing style : Bluetooth Wireless Over-Ear Headphones
                    -) Technical features : Hybrid Noise Cancellation, Ambient Pass-Through, Wear-Detection Sensor
                    Bluetooth® audio - Bluetooth 5.2 with aptX™ Adaptive, USB-C charging & audio interface.
                    -) Bluetooth codecs : aptX™ Adaptive, aptX™ HD, aptX™, AAC, SBC.
                    -) Bluetooth profiles : A2DP, AVRCP, HFP, HSP, BLE GATT (Generic Attribute Profile).
                    -) Drive units : 2 x 40mm dynamic full range carbon driver.
                    -) Microphones : 4x mics for ANC, 2x mics for telephony
                    -) Distortion (THD) : <0.1% (1 kHz/10mW)
                    -) Battery type : Rechargeable Lithium Ion
                    -) Battery life & charging : 30 hours playback, 15 minute charge for 7 hours playback.
                    -) In box accessories : 1.2m USB-C to 3.5mm stereo jack audio cable, 1.2m USB-C to USB-C cable,
                    -) Dimensions Carry Case : 189mm (w) x 63mm (d) x 233mm (h)
                    -) Net weight : 320g (without carry case)

                    Info lengkap produk silahkan visit link berikut ➜ https://www.bowerswilkins.com/en-us/product/headphones/px8-mclaren/300494-06-00-308.html

                    --------------------------------------------------------

                    Nb: Untuk semua keluhan apa pun harus melampirkan video unboxing',
                'brand' => 'Bowers & Wilkins',
                'stock' => 1,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 14990000,
                'fixed_price' => 13491000,
                'discount' => 10,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'BARDI Smart IP Camera BARDION Series (Dual-Band Version)',
                'description' => 
                    'Distributor Resmi BARDI Smart Home
                    - Garansi RESMI 1 tahun
                    - Proses Claim Garansi lebih mudah dan lebih cepat
                    - Pengiriman setiap hari Senin sampai Minggu (kecuali hari libur nasional)
                    - Fast Chat Response dan Fast Delivery
                    - Pilihan pengiriman GOJEK /GRAB READY
                    - Pesanan banyak bisa menggunakan kargo (lebih murah)

                    PENTING!!
                    Klaim kekurangan/kesalahan/kerusakan barang wajib disertai video unboxing dari awal paket di buka. Video tidak boleh terputus dan harus memperlihatkan kondisi awal paket dari semua sisi hingga tampak isi. Segala klaim tanpa video sesuai ketentuan tersebut tidak akan dilayani.
                    Transaksi=Setuju

                    *NOTE!!
                    1. Pengiriman Instant/ Sameday untuk order setelah jam 14.00 akan dikirim di hari berikutnya
                    2. Apabila ingin terhubung dengan Google Assistant dan Alexa dapat membeli Add On yang ada di toko kami (https://www.tokopedia.com/bardistore/add-on-google-assistant-alexa-untuk-ip-camera-per-1-ip-camera)

                    Link jasa pemasangan:
                    https://www.tokopedia.com/bardistore/jasa-pasang-ip-camera-ip-camera-indoor-static-ptz-atau-outdoor

                    BARDI Smart IP Camera BARDION Series (Dual-Band) kolaborasi dengan karakter BARDION. Slot SD Card 256GB, night vision otomatis. Motion tracking, siren alarm, aplikasi kontrol. WIFI dual band 2.4Ghz dan 5Ghz.

                    BARDI Smart IP Camera BARDION Series (Dual-Band Version) Version memiliki slot SD Card max 256GB (tidak termasuk) dan pada posisi gelap maka akan otomatis switch ke night vision. bisa orientasi video dalam aplikasi bisa di putar 350° secara horizontal dan 65° secara vertikal dan memiliki fitur motion tracking human filter yang bisa memfilter gerakan orang.

                    Kamera ini sudah build in siren alarm untuk kebutuhan menakuti orang yang tidak dikenal. Segera download aplikasi dan disambungkan dengan koneksi WIFI dual band 2.4Ghz dan 5Ghz untuk dapat berfungsi dengan ideal.',
                'brand' => 'Bardi',
                'stock' => 10,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 991000,
                'fixed_price' => 594000,
                'discount' => 40,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Bose QuietComfort Ultra Bluetooth Headphones ANC With Spatial Audio - White Smoke',
                'description' => 
                    '#STTOMSCO #pastiORIGINAL #pastiLEBIHMURAH #pastiGANTIBARU
                    Garansi GANTI UNIT BARU jika ada temuan "FACTORY DEFECT" selama 7 hari dari barang diterima

                    Garansi 12 Bulan Resmi

                    Contact Marketing:
                    * MISS RANNIE 0853-5626-7733
                    * MISS SUZY 0823-8851-8899

                    Isi Dalam Kemasan:
                    1x Bose QuietComfort Ultra Headphones
                    1x Carry case
                    1x 3.5 mm to 2.5 mm audio cable
                    1x USB-C (A to C) cable (20")
                    1x Safety sheet

                    Fitur Utama:
                    LEVELED-UP LISTENING: Bose QuietComfort Ultra Headphones with spatial audio give you an immersive experience that makes music feel more real; CustomTune technology offeres personalized sound, shaped to you
                    WORLD-CLASS NOISE CANCELLATION: These noise cancelling headphones feature Quiet Mode, Aware Mode and Immersion Mode, which combines full noise cancellation and Bose Immersive Audio
                    CRYSTAL CLEAR CALLS: Microphones focus on the sound of your voice and the noise cancelling headphones with mic filter out background noise for the clearest phone calls of any Bose headphones
                    ELEVATED DESIGN, LUXE COMFORT: Soft ear cushions hug your ears, the band spreads pressure evenly and elevated materials let you make a statement with these noise cancelling over-the-ear headphones

                    Spesifikasi:
                    Headphone Fit Around Ear Circumaural
                    Headband On Head Adjustable
                    Cushions Removable Cushion
                    Microphones Built-in Microphone
                    Noise Cancelling Yes
                    Noise Control Type Active Noise Cancelling, Echo Reduction, Adjustable Noise Cancelling
                    Audio cable included Yes
                    Case Carry
                    Headphone 7.7" H x 5.5" W x 2.0" D (0.56 lb)
                    Product Material Plastic, Aluminum, Leather (Protein)
                    Product Case Material Plastic (Hard)
                    Ear Cushion Material Protein Leather
                    Rechargeable Yes
                    Battery Life 24 hours
                    Battery Charge Time 3 hours
                    Charging Accessory included Yes
                    Charging Interface(s) USB C PORT
                    Wireless Connectivity Bluetooth, A2DP Bluetooth Audio Streaming, HFP Bluetooth, AVRCP Bluetooth, Bluetooth Low Energy
                    Bluetooth Version 5.3
                    Bluetooth Range 30\'
                    Bose App Bose Music App',
                'brand' => 'Bose',
                'stock' => 2,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 7399000,
                'fixed_price' => 6599000,
                'discount' => 11,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'UGREEN kabel data charging usb type c ke c Qualcomm 2 meter 90 degree - 70698',
                'description' => 
                    'UGREEN usb c cable
                    UGREEN 90 Degree USB C Right Angled Nylon-Braided & Aluminum Cable Support PD 60W 20V/3A Power Delivery
                    60W Fast Charge

                    Supports PD quick charge up to 20V/3A (max), 15V/3A, 12V/3A, 9V/3A, 5V/3A at 60W (with USB-C Power Delivery chargers).

                    USB C Right Angle Cable

                    Unique design with the 90 degree plug on both end, much better and never falls out even though you accidentally move the cable.

                    Durable & Flexible

                    It made of Hi-Q nylon braided and aluminum alloy shell, withstand over 10,000+ bending test to ensures a long lasting life span.

                    480Mbps Data Transfer

                    Data transfer rates up to 480Mbps, 1G large files, pictures or videos will be transferred in few second


                    【PD 60W Quick-Charge】UGREEN USB C-C Cable supports PD fast charge up to 60W 20V/3A (max), 15V/3A, 12V/3A, 9V/3A, 5V/3A with USB C Power Delivery chargers like PD 18W/ 30W/ 45W/ 60W/ 61W/ 87W. It also supports FCP and QC 3.0 & 2.0 Fast Charge. Only takes 105min to full recharge 13 "MacBook Air! Besides, this USB-C to USB-C cable also supports data transfer rates up to 480Mbps, 1G files will be finished in 30s.

                    【Universal Compatible】: This 90 degree USB C cable works well with most USB-C devices such as iPad Pro 12.9"/11", 2018 2017 MacBook Pro, New MacBook Air, Google Chromebook Pixel, Dell XPS 13/15; Huawei P30, P30 Pro, P20, P20 Pro, P10; Samsung S10, S10 Plus, S9, S9+, S8, A70, Note 10 / 9 / 8 / 7; Xiaomi Mi 9, Mi 8, Mi A2; HTC U11 10, LG G5 G6 V30; OnePlus 7 Pro, 6T, 5T, 3T; Google Pixel 3a, XL; Nexus 5X, 6P; GoPro Hero 7 6 5; Nintendo Switch, HP Spectre X360, Asus Zenpad, Razer phone 2, etc',
                'brand' => 'UGREEN',
                'stock' => 76,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 160000,
                'fixed_price' => 160000,
                'discount' => 0,
                'discount_type' => 'no discount',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Official Xiaomi Pad 6S Pro 12.4',
                'description' => 
                    'Xiaomi Pad 6S Pro 12.4
                    Menghadirkan Pengalaman Layar Maksimal
                    Dengan layar besar berukuran 12,4 inci, Xiaomi Pad 6S Pro 12.4 membawa pengalaman visual yang memukau untuk kreativitas tanpa batas. Format vertikal 3:2 memperluas pandangan Anda, memungkinkan untuk lebih leluasa berkreasi dan menyelesaikan berbagai tugas dengan mudah. Layar ultra-jernih 3K dengan kalibrasi warna profesional memberikan kejernihan yang tiada banding, sementara perlindungan mata tingkat profesional memastikan kesehatan mata Anda terjaga.

                    Performa yang Tak Tertandingi
                    Ditenagai oleh Snapdragon 8 Gen 2, Xiaomi Pad 6S Pro 12.4 menawarkan pengalaman yang canggih dan stabil. Perpaduan LPDDR5X dan UFS 4.0 memberikan kecepatan tinggi dalam membaca dan menulis data, menghadirkan performa yang efisien untuk berbagai kebutuhan kreatif dan profesional Anda.

                    Produktivitas Tanpa Batas dengan Xiaomi HyperOS
                    Xiaomi HyperOS membawa pengalaman multitugas yang lancar, memungkinkan Anda mengatur jendela sesuai kebutuhan layaknya di PC. Pengelola file layaknya PC mempermudah pencarian dan pengelolaan file, sementara fitur interkoneksi Xiaomi memungkinkan Anda untuk berbagi konten antar perangkat dengan mudah dan cepat.

                    Kreativitas Profesional dengan Fitur Tambahan
                    Berkreasilah dengan lebih profesional dengan fitur Mode Sutradara, pengeditan video dan gambar tingkat profesional, serta Seni AI untuk mengubah ide menjadi karya seni yang menakjubkan. Dukungan dari Xiaomi Pad 6S Pro 12.4 untuk berbagai aplikasi lintas-perangkat juga memungkinkan Anda untuk mengakses kamera ponsel dan mengintegrasikan konten dengan mudah.

                    Baterai Super Besar dan Pengisian Cepat
                    Nikmati keseharian tanpa khawatir dengan baterai super besar 10.000 mAh yang setia menemani Anda. Teknologi HyperCharge 120 W memungkinkan Anda mengisi daya perangkat dengan cepat, sehingga Anda bisa kembali bekerja hanya dalam hitungan menit.
                    Desain Unggulan dan Pengalaman Audio-Visual yang Mengagumkan
                    Dengan desain yang tipis, ringan, dan modern, Xiaomi Pad 6S Pro 12.4 hadir dalam varian warna Graphite Gray yang elegan. Pengalaman audio-visual yang memukau dengan 6 speaker yang menghasilkan suara berkualitas tinggi dan pengalaman suara 3D yang luar biasa.

                    *Spesifikasi Lengkap:
                    Desain Elegan:
                    Hadir dengan warna Graphite Gray yang modern, Xiaomi Pad 6S Pro 12.4 menampilkan dimensi yang ideal dengan tinggi 278,70 mm, lebar 191,58 mm, tebal hanya 6,26 mm, dan bobot ringan 590 g, memberikan pengalaman penggunaan yang nyaman dan stylish.

                    Performa Tangguh:
                    Ditenagai oleh prosesor Snapdragon 8 Gen 2 Mobile Platform, tersedia dalam varian penyimpanan 8 GB+256 GB, dengan RAM LPDDR5X + UFS 4.0, Xiaomi Pad 6S Pro 12.4 menawarkan performa yang andal dan responsif untuk memenuhi kebutuhan pengguna modern.

                    Layar Berkualitas Tinggi:
                    Layar 3K 12,4" dengan rasio aspek 3:2 dan resolusi 3048*2032 294 ppi memberikan pengalaman visual yang memukau. Dengan refresh rate AdaptiveSync 144 Hz dan kecerahan hingga 900 nit (HBM), serta teknologi Dolby Vision dan HDR10, Xiaomi Pad 6S Pro 12.4 memberikan detail gambar yang tajam dan warna yang hidup.

                    Kamera Profesional:
                    Dilengkapi dengan kamera belakang 50 MP dan kamera depan 32 MP, Xiaomi Pad 6S Pro 12.4 memungkinkan pengguna untuk mengabadikan momen berharga dalam kualitas yang luar biasa. Dukungan untuk perekaman video 4K hingga 60 fps menambahkan dimensi baru pada kreativitas visual.

                    Daya Tahan Baterai yang Luar Biasa:
                    Dengan baterai berkapasitas 10.000 mAh (standar)/9.800 mAh (min) dan teknologi HyperCharge 120 W, Xiaomi Pad 6S Pro 12.4 dapat diisi daya hingga penuh hanya dalam waktu 35 menit, memastikan pengguna tidak pernah kehabisan daya saat beraktivitas.

                    Konektivitas Canggih:
                    Mendukung Wi-Fi 802.11 a/b/g/n/ac/ax, Bluetooth 5.3, USB 3.2 Gen 1, serta tag NFC, Xiaomi Pad 6S Pro 12.4 memastikan pengguna terhubung dengan lancar ke berbagai perangkat dan layanan online.

                    Sensor yang Lengkap:
                    Dibekali dengan beragam sensor seperti G-sensor, Giroskop, Sensor Sidik Jari, dan lainnya, Xiaomi Pad 6S Pro 12.4 memberikan pengalaman pengguna yang lebih responsif dan intuitif.

                    Sistem Operasi Terkini:
                    Menjalankan Xiaomi HyperOS berbasis Android U, Xiaomi Pad 6S Pro 12.4 memberikan pengalaman penggunaan yang lancar dan terintegrasi dengan ekosistem Xiaomi yang luas.

                    *Catatan:
                    Gambar kreatif fitur yang ditampilkan di halaman ini hanya ditujukan untuk ilustrasi dan tidak menunjukkan struktur yang sebenarnya. Acuan yang digunakan adalah produk sebenarnya.

                    Memori dan kapasitas penyimpanan sebenarnya yang tersedia mungkin berbeda atau lebih kecil karena beberapa faktor: Karena sistem operasinya telah menggunakan sebagian ruang memori (RAM), ruang sebenarnya yang tersedia lebih kecil dari kapasitas memori yang tertera; karena sistem operasi dan program bawaannya telah menggunakan sebagian ruang memori flash (ROM), ruang penyimpanan sebenarnya yang tersedia lebih kecil dari kapasitas memori flash yang tertera.',
                'brand' => 'Xiaomi',
                'stock' => 40,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 8078990,
                'fixed_price' => 8078990,
                'discount' => 0,
                'discount_type' => 'no discount',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'JSAUX BG0111 Carrying Case Legion Go Travel Storage Bag,Tas Legion Go',
                'description' => 
                    '🏆 100% Brand New In Box
                    😱 ORIGINAL JSAUX
                    💯 BG0111


                    Introducing the Lenovo Legion Go Carrying Case! 🎮👜

                    Elevate your gaming experience with our specially crafted carrying case designed to enhance the portability and convenience of your Lenovo Legion Go. 💼✨

                    Robust Protection: Built tough with a thickened EVA shell, our case offers top-notch protection against external pressures, ensuring your Legion Go stays safe and sound wherever you go. 🛡️

                    Shock-Absorbing Interior: Inside, a soft foam layer cushions your device, shielding it from damage caused by bumps and jolts during travel. 🛌💢

                    Spacious Organization: With multiple compartments tailored to fit various accessories such as game controllers, a foldable keyboard, USB C Hub, mouse, charger adapter, and more, our case keeps everything neatly organized and easily accessible. 🎮🔌🖱️

                    User-Friendly Design: Equipped with a comfortable handle strap and double zipper closure, carrying and accessing your gaming essentials has never been easier. Whether by hand or on your shoulder, take your Legion Go anywhere with ease. 💪🚶‍♂️

                    What\'s Included: Please note that the purchase includes only the carrying case itself. While the images may showcase various gaming accessories, such as controllers and chargers, these items are for display purposes only and are not included in your purchase. 🚫🎁

                    Level up your gaming on-the-go experience with the Lenovo Legion Go Carrying Case! Order yours today and game with confidence wherever you roam. 🌟🎮',
                'brand' => 'JSAUX',
                'stock' => 8,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 399000,
                'fixed_price' => 399000,
                'discount' => 0,
                'discount_type' => 'no discount',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Hush Puppies Tas Pria Stanlee Backpack Turquoise',
                'description' => 
                    '- Backpack bernuansa monokrom untuk casual style
                    - Material nilon
                    - Kompartemen utama dengan resleting
                    - Detail kompartemen sleeve dalam
                    - 1 kompartemen laptop dengan velcro fastening
                    - 2 kantong slot samping
                    - Top handle
                    - Adjustable shoulder strap

                    Ukuran Produk
                    Panjang x Lebar x Tinggi:
                    - 28cm x 0cm x 43cm

                    Warna pada gambar dapat sedikit berbeda dengan warna asli produk akibat pencahayaan saat proses photoshoot.

                    Petunjuk Perawatan
                    Simpan ditempat kering, tidak lembap dan jauh dari sinar matahari, Bersihkan permukaan barang dengan kain lembut dan sikat halus, Hindari kontak langsung dengan barang yang berbeda warna dan mengandung alkohol',
                'brand' => 'Hush Puppies',
                'stock' => 85,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 999000,
                'fixed_price' => 489500,
                'discount' => 51,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Hush Puppies Tas Pria Lake Backpack Grey - 0, Abu-abu',
                'description' => 
                    '- Backpack
                    desain klasik modern dengan siluet versatile dan timeless
                    - Warna abu-abu
                    - Material Fabric & Leather
                    - Kompartemen utama dengan resleting
                    - 2 kantong depan dengan resleting
                    - 1 kantong belakang dengan resleting
                    - 1 kompartemen laptop dengan velcro fastening
                    - Twin handle
                    - Adjustable shoulder strap

                    Warna pada gambar dapat sedikit berbeda dengan warna asli produk akibat
                    pencahayaan saat proses photoshoot.

                    Petunjuk Perawatan
                    Bersihkan dengan sikat gigi yang diberi air sabun lalu diangin-anginkan',
                'brand' => 'Hush Puppies',
                'stock' => 2,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 2599000,
                'fixed_price' => 1804300,
                'discount' => 31,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Hush Puppies Clutch Pria Maple Clutch Grey - 0, Grey',
                'description' => 
                    '- Clutch sling bag bernuansa monokrom untuk tampilan basic versatile
                    - Warna abu-abu
                    - Material Fabric & Leather
                    - Kompartemen utama dengan resleting
                    - 1 kantong belakang dengan resleting
                    - 1 kantong dalam dengan resleting
                    - Adjustable dan detachable long strap

                    Warna pada gambar dapat sedikit berbeda dengan warna asli produk akibat pencahayaan saat proses photoshoot.

                    Petunjuk Perawatan
                    Bersihkan dengan sikat gigi yang diberi air sabun lalu diangin-anginkan',
                'brand' => 'Hush Puppies',
                'stock' => 5,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 199000,
                'fixed_price' => 1384300,
                'discount' => 31,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Alisan Kemeja Lengan Pendek Batik Kombinasi 00257 BTKKB00257BIRUSS - XL',
                'description' => 
                    'Alisan Kemeja Lengan Pendek Batik Kombinasi 00257 Biru BTKKB00257BIRUSS Slimfit

                    Batik merupakan warisan budaya Indonesia. Pembuat design batik Alisan melakukan gambar dengan cara yang tradisional pada kertas/kain. Kemudian design di scan dan dipindahkan ke computer untuk di cetak dan dip roses menggunakan mesin dengan technology modern. Batik Alisan menggunakan teknik memotong pola secara tradisional dan modern, maka gambar pada bagian badan depan, pundak, lengan, kerah, dan badan belakang dapat terlihat rapih dan menarik. Batik Alisan sangat cocok di pakai untuk pergi ke kantor, acara formal, dan acara non-formal.

                    Di Proses menggunakan:
                    Mercerize : Proses supaya membuat warna pada kain lebih cerah dan tidak mudah pudar.
                    Pre-Shrunk: dimana tingkat susut pada pada kain bisa di kendalikan dan di minimalisasi.
                    Soft-Finished: Kain terasa lebih halus dan nyaman.

                    Bahan:
                    Cotton (100% Katun)


                    Ukuran:
                    Size 14.5 (S) Kerah: 38.5 cm, Dada: 51 cm, Pinggang: 45 cm,Panjang lengan: 23 cm
                    Size 15 (M) Kerah: 40 cm, Dada: 54 cm, Pinggang: 48.5 cm, Panjang lengan: 24 cm
                    Size 15.5 (L) Kerah: 41.5 cm, Dada: 58.5 cm, Pinggang: 52.5 cm, Panjang lengan: 25 cm
                    Size 16 (XL) Kerah: 42.5 cm, Dada: 62 cm, Pinggang: 56.5 cm,Panjang lengan: 26 cm',
                'brand' => 'Alisan',
                'stock' => 57,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 316000,
                'fixed_price' => 240000,
                'discount' => 24,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Houseofcuff Celana Chino Panjang Pria Slim fit Stretch Jeans Hitam',
                'description' => 
                    'Deskripsi Produk :

                    chino houseofcuff kini tersedia hingga size besar / ukuran jumbo, mulai dari size 27 (ukuran terkecil) hingga size 44 (ukuran terbesar)

                    semua ukuran ready stock terus, bisa langsung di order aja kak


                    JANGAN LUPA KLIK UKURAN YANG ANDA INGINKAN (KAMI TIDAK MENERIMA PEMILIHAN / PERUBAHAN UKURAN VIA CHAT ATAU PESAN)


                    INFO : tinggi badan model 182cm berat 72kg menggunakan celana size 32

                    Note : apabila bingung mau pesan ukuran apa, cara mudahnya adalah cek celana yang biasa di pakai ukuran berapa, lalu samakan size nya disini. kalaupun ternyata salah, produk dapat ditukar sepuasnya sampai ketemu ukuran yang tepat


                    Deskripsi Produk :

                    - jenis celana : Celana Chino Slim Fit

                    - bahan : Katun Twill stretch (melar / karet) sehingga sangat nyaman apabila di pakai sehari-hari baik kerja maupun jalan-jalan

                    - Cutting : Slim Fit

                    - Terdapat 2 kantong saku belakang model tanam (bukan tempel)

                    - Packaging : bubble wrap dan plastik packaging

                    - Detail ukuran : ada digambar (geser foto nya)

                    untuk wilayah jakarta dan sekitar nya (jabodetabek) bisa menggunakan gojek / grab

                    Note :

                    - Houseofcuff memberikan garansi / free retur atau refund uang kembali apabila barang yang diterima tidak cocok, salah ukuran atau apapun alasannya. sehingga tidak perlu ragu untuk membeli produk kami. (tanyakan kepada CS kami apabila butuh informasi lebih lanjut perihal tukar barang)

                    - foto produk kami adalah asli produk kami, sehingga sudah pasti sesuai dengan barang aslinya. akan tetapi dikarenakan faktor cahaya, layar monitor hape anda, dll, perbedaan warna dapat terjadi, toleransi perbedaan warna 3% - 7%.',
                'brand' => 'House Of Cuff',
                'stock' => 3,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 280000,
                'fixed_price' => 169000,
                'discount' => 40,
                'discount_type' => 'percentage',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'MILLS Polo Shirt Sport Style Force Polo Shirt 17104',
                'description' => 
                    'Simple, Sporty, Self-confident..!! 
                    Temukan rasa nyamanmu dalam bergaya. Dengan Force Polo Shirt tingkatkan rasa percaya diri dan lebih produktif dalam beraktivitas. Kesan-kesan tersebut akan menempel di dirimu saat mengenakan Force Polo Shirt dari MILLS. Maksimalkan penampilan dengan kenyamanan produk terbaik dari MILLS 

                    Force Polo Shirt 17104  hadir dalam 5 warna :
                    Army
                    Navy
                    Red
                    Black
                    White

                    Material :
                    87% Nylon
                    13% Spandex

                    OCCASIONS :
                    LIFE STYLE
                    DAILY WEAR

                    SIZE Chart Poloshirt
                    S : 48cm x 68cm
                    M : 50cm x 70cm
                    L : 52cm x 72cm
                    XL : 54cm x 74cm
                    XXL : 56cm x 76cm
                    XXXL: 58cm x 78cm

                    Miliki segera.!! Tersedia di offline dan online store official MILLS dan toko sport rekanan MILLS di berbagai kota.',
                'brand' => 'MILLS',
                'stock' => 20,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 379000,
                'fixed_price' => 379000,
                'discount' => 0,
                'discount_type' => 'no discount',
                'availability' => 'In Stock',
            ],
            [
                'user_id' => 1,
                'name' => 'Sepatu Training Pria UNDER ARMOUR PROJECT ROCK BSR 4 3027344001 ORIGINAL',
                'description' => 
                    'Brand New In Box - Fullset
                    Original Guarantee 100%

                    Size
                    (Tertera di variant product)

                    Untuk menjaga agar dus sepatumu tetap aman, silahkan gunakan Additional Double Box dari Sneakersdept. Cuman 10rb!

                    It\'s totally worth to buy,
                    so what are you waiting for? Contact us!

                    Customer Service :
                    Senin - Minggu : 09.00-18.00 WIB

                    Note :
                    Apabila terjadi kerusakan pada produk yang diorder, silahkan chat ke customer service kami dengan melampirkan bukti video unboxing. Tim kami dengan senang hati akan membantu setiap prosesnya :)

                    #sneakersdept #sneakersdeptstealdeal',
                'brand' => 'Under Armour',
                'stock' => 0,
                'sold' => 0,
                'liked' => 0,
                'rating' => 0,
                'price' => 1899000,
                'fixed_price' => 1492938,
                'discount' => 21,
                'discount_type' => 'percentage',
                'availability' => 'out of Stock',
            ],
        ];

        foreach($products as $product) {
            Product::create([
                'user_id' => $product['user_id'],
                'name' => $product['name'],
                'description' => $product['description'],
                'brand' => $product['brand'],
                'stock' => $product['stock'],
                'sold' => $product['sold'],
                'liked' => $product['liked'],
                'rating' => $product['rating'],
                'price' => $product['price'],
                'fixed_price' => $product['fixed_price'],
                'discount' => $product['discount'],
                'discount_type' => $product['discount_type'],
                'availability' => $product['availability'],
            ]);
        }

        $productPhotos = 
        [
            [
                'product_id' => 1,
                'photo' => 'uploads/V26BhYEWzlPZLAHsOsJyuOyCNcKIR06hTZYpnuqw.jpg',
            ],
            [
                'product_id' => 1,
                'photo' => 'uploads/mKGn0Kg7uULFrUffzUvGZMELUyANzNd9jeMP6HxB.jpg',
            ],
            [
                'product_id' => 1,
                'photo' => 'uploads/x9y5SHlthHG4tapwNWok3F3waMlebMc3kQbBzvNt.jpg',
            ],
            [
                'product_id' => 2,
                'photo' => 'uploads/V0MAKfOZ6fIHYeMWwIeGFmVAYUw5T8l8xqBA3sOl.jpg',
            ],
            [
                'product_id' => 2,
                'photo' => 'uploads/6pxStPbkZfB67g6WORl3LKidLPZBuZaoPeHGssVY.jpg',
            ],
            [
                'product_id' => 2,
                'photo' => 'uploads/cXBBZJ0mpmR0Uz4fo1H9pyLnsyOPPGbbaW266kqp.jpg',
            ],
            [
                'product_id' => 3,
                'photo' => 'uploads/UoT7UM4CsJrCp4gbSK05rRysegHpv4JzLPPSK2GV.jpg',
            ],
            [
                'product_id' => 3,
                'photo' => 'uploads/qc6TVAGNXWMHCEZBUT4vrJbDBPKtYwOwN64uITpM.png',
            ],
            [
                'product_id' => 3,
                'photo' => 'uploads/pjNEMWCVqrNp1wGuwPmzNLgjpmxy87M6qvU93UAb.jpg',
            ],
            [
                'product_id' => 3,
                'photo' => 'uploads/DWvFoVXhZmx361AAzA9p9ettuC3bojfyDvUJbLx8.jpg',
            ],
            [
                'product_id' => 4,
                'photo' => 'uploads/0GIQ5gPr7VguzQ8HRtzjseYHTzoqufoGEg10xuwH.jpg',
            ],
            [
                'product_id' => 4,
                'photo' => 'uploads/G8SIjPb6mmZcwhIGApQegzlBGzttgOOoO3MTwzcO.jpg',
            ],
            [
                'product_id' => 4,
                'photo' => 'uploads/RRmE35M6XRyOB8iv4VZtGrAQUXXzGzju2JyKpTI2.jpg',
            ],
            [
                'product_id' => 5,
                'photo' => 'uploads/DYzKADrBuLvjSmm9Zgzr0OyvdlYgN1V0pvcWS5eY.webp',
            ],
            [
                'product_id' => 5,
                'photo' => 'uploads/gBT03fC8rpxrZtA2P6PPAA2XHnHbHWtOmAMvqzKD.jpg',
            ],
            [
                'product_id' => 5,
                'photo' => 'uploads/3MolxoPszscaJ3iJNe8EShOMX0j7pJaYACtUMulj.jpg',
            ],
            [
                'product_id' => 6,
                'photo' => 'uploads/kQjEEEuueZICBMPeIkn4bYtCpBzvtuInYDUCqHRj.jpg',
            ],
            [
                'product_id' => 6,
                'photo' => 'uploads/IQqTzRfSV6ufOqpFUp743hyjk7j0WF13BJZFlzAD.jpg',
            ],
            [
                'product_id' => 6,
                'photo' => 'uploads/0RtliksTaqdG5WsrEIaT8oAaVliydKXYbhuxUkA8.jpg',
            ],
            [
                'product_id' => 6,
                'photo' => 'uploads/T4mfWLRd93FP2avgsANaxArtjhFIpCelskHc5d0Y.jpg',
            ],
            [
                'product_id' => 6,
                'photo' => 'uploads/gCAWbff8cHf6Ar87TOAf4cDkDDq5yPo1fk1Xsnl8.jpg',
            ],
            [
                'product_id' => 7,
                'photo' => 'uploads/ntAJ7u9msnlKuMOXq3VCPf2rYe9rlbxfRAMmvBXI.jpg',
            ],
            [
                'product_id' => 8,
                'photo' => 'uploads/LAPBXq9llNyyWwAHw4WKwsJxCcr0DjfmtlhoFVJe.jpg',
            ],
            [
                'product_id' => 8,
                'photo' => 'uploads/dCFemdgk5GbpN3E1FSR7vSCcA8pxmdbiX5SENTlx.jpg',
            ],
            [
                'product_id' => 8,
                'photo' => 'uploads/s3Q3OrggktZR7G72zCUFiWe3ksyDYcxTwKd0Q8OF.jpg',
            ],
            [
                'product_id' => 9,
                'photo' => 'uploads/J4XQZVVwWd3BJ985GDizwKyPE1UasIqD1K6ejsgX.jpg',
            ],
            [
                'product_id' => 9,
                'photo' => 'uploads/GFDpBcVEtWuzHjP7EhQybroDveJBVYnTriumKU7Z.jpg',
            ],
            [
                'product_id' => 9,
                'photo' => 'uploads/soF3BRBJ4voXSqWMghPQGm4p8v9AIyhA6L7dGmDN.jpg',
            ],
            [
                'product_id' => 10,
                'photo' => 'uploads/zyHAYkFoIUSmVGWuIBg6LkPL6jKUcnXHM4Z5eUYi.jpg',
            ],
            [
                'product_id' => 10,
                'photo' => 'uploads/AHVAN5VNavyhwIfA63XOKzOmQvP0hdfuRvT5iYor.jpg',
            ],
            [
                'product_id' => 10,
                'photo' => 'uploads/QuLSfpeC71GnkefLQO5nDx0ASaIlBr6G1supAOtD.jpg',
            ],
            [
                'product_id' => 10,
                'photo' => 'uploads/Fl4sOm03YEBSHrST5s0yAEIfARXopwlQnu59V0M8.jpg',
            ],
            [
                'product_id' => 10,
                'photo' => 'uploads/3UqrZjERYObYPvM6XvYSW4k9xW3WnDKMocinVnfi.jpg',
            ],
            [
                'product_id' => 11,
                'photo' => 'uploads/0pnrpCA0NxSKMTmvcaIZtQ1Qzr3M0zn2VWoB4ud9.jpg',
            ],
            [
                'product_id' => 11,
                'photo' => 'uploads/JwwS3vY0amuqw2YbXvHMy8qvslmbS8yk6TLepkWZ.jpg',
            ],
            [
                'product_id' => 11,
                'photo' => 'uploads/zFELDwJBxtZqDt1n2gUXJrePOv04mO6DjEU27Nvh.jpg',
            ],
            [
                'product_id' => 11,
                'photo' => 'uploads/abTZYED47BTWNQjDfegi3Z9ndabiv7YnGOFjd1Hu.jpg',
            ],
            [
                'product_id' => 11,
                'photo' => 'uploads/luL9KqVc83zOYhWdFYV4Wa6rE4kC5hW5sXbNQNab.jpg',
            ],
            [
                'product_id' => 11,
                'photo' => 'uploads/ksTwC1sXPmXHCWYdOVZVq0SQO49Ox6LIarBI8LV2.jpg',
            ],
            [
                'product_id' => 11,
                'photo' => 'uploads/iw2V89GRhli9Pj52F3vJ5RyRYIaxNZ7jZ7Gge1Ka.jpg',
            ],
            [
                'product_id' => 12,
                'photo' => 'uploads/5oWQcpz1Tz3aEyQPAImsB8xAct0ViV86vtwUwAVD.jpg',
            ],
            [
                'product_id' => 12,
                'photo' => 'uploads/2agiYeDVuTxrCuRX8OjhcLgQrcPLTA8j5iCmbdCg.jpg',
            ],
            [
                'product_id' => 12,
                'photo' => 'uploads/6JhJMYFNYraqMyEZfYJZHRHbhCFvR8kXaJUp9FvW.jpg',
            ],
            [
                'product_id' => 13,
                'photo' => 'uploads/ms9RhMmpzmHmmGBSk5khqnbqhID1WvkhRCGJl2eT.jpg',
            ],
            [
                'product_id' => 13,
                'photo' => 'uploads/BZp8LoGsMftL6VRNduEhsTiagbbfkSpXsD7fW3Kk.jpg',
            ],
            [
                'product_id' => 13,
                'photo' => 'uploads/KGgTUiKvUeH2ahkSzsRGozaOiiS0bTFer5QkXi2m',
            ],
            [
                'product_id' => 13,
                'photo' => 'uploads/LRFxA4aaEYenolkPU7L41xMscZBcfKlnOrFBcvXL.jpg',
            ],
            [
                'product_id' => 13,
                'photo' => 'uploads/ZRLbky4JRQBOYOIloDojC8HlXv4yGTgZcHvdJwu3.jpg',
            ],
            [
                'product_id' => 14,
                'photo' => 'uploads/F2Vg7bBzqEIK0NVsdKGRF9TjGNePTRtCL2ckpbKr.jpg',
            ],
            [
                'product_id' => 14,
                'photo' => 'uploads/qmmj0NVexgLDEAMHEYveWvPU4JgrdbeKnzZyyPfa.jpg',
            ],
            [
                'product_id' => 14,
                'photo' => 'uploads/WSCtt0hZhckd4glSgjKT64YXgYV9s72Mjv4berJu.jpg',
            ],
            [
                'product_id' => 14,
                'photo' => 'uploads/EXOVRl8shGoc0Ofc8f2g8q1piWAFpgWbBXnyognd.jpg',
            ],
            [
                'product_id' => 14,
                'photo' => 'uploads/Xwccf9zbHSvTEbIitb3YdCyGgdCh1YpAkYlgfsFk.jpg',
            ],
            [
                'product_id' => 15,
                'photo' => 'uploads/nXxFQIESXESSpTa6LfEfCInpnn5ZZ42XqqE7b3DU.jpg',
            ],
            [
                'product_id' => 15,
                'photo' => 'uploads/fICggALTBBPnHvgVR2Jx4CTtrRRxpwbsGwDs2ouX.jpg',
            ],
            [
                'product_id' => 15,
                'photo' => 'uploads/LYyIL4AqeQGFMidDxOKkNWvVYSTTJQzK5cTOKjoP.jpg',
            ],
            [
                'product_id' => 15,
                'photo' => 'uploads/EJaCnmQadUIb1vK0eCL9VfCc32DEIWSZOIO8tCpt.jpg',
            ],
            [
                'product_id' => 16,
                'photo' => 'uploads/nMKKti6YUErmFqqOipdBExQuqfepJ3f1wzfsuYNl.jpg',
            ],
            [
                'product_id' => 16,
                'photo' => 'uploads/3qpsCH9flBL6P6RWAs9U8pjkp07ffly1tgj4ppQa.jpg',
            ],
            [
                'product_id' => 16,
                'photo' => 'uploads/7eAUR5D3uvGW65yuPlROAvfoFUwdmaHVlO6LF8SS.jpg',
            ],
            [
                'product_id' => 16,
                'photo' => 'uploads/REaHVf6C4mtWRdSXurcVDrtog1KmL6ln9MAUzr56.jpg',
            ],
            [
                'product_id' => 16,
                'photo' => 'uploads/RCVX8rThKRsVCmDV869UPLpjw5JzjyPF95vVmwi9.jpg',
            ],
            [
                'product_id' => 17,
                'photo' => 'uploads/RgylzKrvJ2jJqzdiWjH4D4059lHBondcUot1dADY.jpg',
            ],
            [
                'product_id' => 17,
                'photo' => 'uploads/vJRHuXlnhiJz6JiIvvUv23kxi0xQppEM5bkdPgHN.jpg',
            ],
            [
                'product_id' => 17,
                'photo' => 'uploads/NYVlQIzUyQqHb9qESqBbIRPFVd91VmAjpgGNLE4s.jpg',
            ],
            [
                'product_id' => 17,
                'photo' => 'uploads/v1rPhQZPxYydcT2pqDYidhRz3uC68NTeT2wHrOW3.jpg',
            ],
            [
                'product_id' => 17,
                'photo' => 'uploads/p21SlGL7UBaVKq234vw1epKIHNAjG78nHGnm2XKs.jpg',
            ],
            [
                'product_id' => 18,
                'photo' => 'uploads/g0hgKL4zviDCN3KdHbhevtQvXo3q7gTn8axV7a3s.jpg',
            ],
            [
                'product_id' => 18,
                'photo' => 'uploads/EL1fP4A8JBwMq9uoVnGjG5vj7Kfq1PpNTvK0Dnf9.jpg',
            ],
            [
                'product_id' => 18,
                'photo' => 'uploads/19eJgBKcZdoqYeqYM3h9qqWvHZWGJRhH6S5kmz0v.jpg',
            ],
            [
                'product_id' => 18,
                'photo' => 'uploads/YSIg8RqdBdfpQD53OBX9te014DsygtzDB8XYLnPA.jpg',
            ],
            [
                'product_id' => 18,
                'photo' => 'uploads/cKHUwjaMpBdRcGFlaOGHj6Ekp4UdAPQSjPDm1hg1.jpg',
            ],
            [
                'product_id' => 19,
                'photo' => 'uploads/UVojzmsnpZEUSDC8hKFf6KUmFbbSr9lKKSz3f6Vm.jpg',
            ],
            [
                'product_id' => 19,
                'photo' => 'uploads/dEDNbiRvGPh58Mscw2Bj5t7AYBCuOiDPZtWBpew5.jpg',
            ],
            [
                'product_id' => 19,
                'photo' => 'uploads/pTq1J9ITJ3m87daGmgRRrmKpbn6Wgag0Ey0iHrWW.jpg',
            ],
            [
                'product_id' => 19,
                'photo' => 'uploads/JTZpwGb7IGrWtvi3EPA8l1a8AWvndJSpdlsFVCSZ.jpg',
            ],
            [
                'product_id' => 19,
                'photo' => 'uploads/jGZqVwJolvZgQ3KSlz28i7ra4Dq6WOgazZ61vt1P.jpg',
            ],
            [
                'product_id' => 20,
                'photo' => 'uploads/8EiwmW4M1eDwrvAKwkglabK34TH0lcXqvjqsghcG.jpg',
            ],
            [
                'product_id' => 20,
                'photo' => 'uploads/PJ3CEbBPYl1v10UdaCvYkxrBs06iYzh8aQDeL7bO.jpg',
            ],
            [
                'product_id' => 20,
                'photo' => 'uploads/GOfZ8n7MLOLv67Zmkyw0V4j6qRzMGTZgxW2VBIR7.jpg',
            ],
            [
                'product_id' => 20,
                'photo' => 'uploads/8Hf2YzAS4m3tB5QSS0wAYuGLDrkmN9flHuVcx7i2.jpg',
            ],
            [
                'product_id' => 20,
                'photo' => 'uploads/AQn9LFnvZN3hji2XngfdJHljhy0RRcT8PbKXnFg8.jpg',
            ],
            [
                'product_id' => 21,
                'photo' => 'uploads/eT2zserJb0V4RL1YbSBmSo3qPRlXHodUpEaglGo5.jpg',
            ],
            [
                'product_id' => 21,
                'photo' => 'uploads/N2A4WH3hWftOzcOnx3Zzt0CiATTRKvILLzjwp4mK.jpg',
            ],
            [
                'product_id' => 21,
                'photo' => 'uploads/uegZ6HdDbIP41YpWxdQszevKyW3Y2vmNjRznYfQP.jpg',
            ],
            [
                'product_id' => 21,
                'photo' => 'uploads/QDLk1jWRNYQGPAWmbkcXcINWY0AFvSFXYTCvK6mc.jpg',
            ],
            [
                'product_id' => 21,
                'photo' => 'uploads/Bywj4efUrycRF4yg2Bdl8sksjZV8UJDwvIGBfww4.jpg',
            ],
            [
                'product_id' => 22,
                'photo' => 'uploads/iqxUQeIVVgTUVeeXX3blPOQWDvBNpZjvVZwIbBr8.jpg',
            ],
            [
                'product_id' => 22,
                'photo' => 'uploads/OKZ4pW59BV6GupRc6rsQ9s5z8CuiuEpKG1dpDGhO.jpg',
            ],
            [
                'product_id' => 22,
                'photo' => 'uploads/Uwmdc7yxRzB8DkmKHU5Vj606RYxv2GJZrhdTd3pC.jpg',
            ],
            [
                'product_id' => 22,
                'photo' => 'uploads/Qj4e0gs76pEU07KzDMkeRTuQb3uKyKhU1vVKc86j.jpg',
            ],
            [
                'product_id' => 22,
                'photo' => 'uploads/z2BJuH3EBmyFhu7WbfAdfejYjID6Vfveq8IwVBMD.jpg',
            ],
            [
                'product_id' => 23,
                'photo' => 'uploads/2c8vT65t8YcZbqmFhvYh2xqwYp9CiGGeVWAtlB8r.jpg',
            ],
            [
                'product_id' => 23,
                'photo' => 'uploads/uTkS9aY9AfIC5tndiETVZFZB9DC995IecUK1X5Ta.jpg',
            ],
            [
                'product_id' => 23,
                'photo' => 'uploads/KjwE8H3UVJKrVZQmw0hzkTC20g6jMpUAA1IAXQei.jpg',
            ],
            [
                'product_id' => 23,
                'photo' => 'uploads/9daauEtUlkzr8Mz3s1juazVFfEAfzBiizkuZn8Af.jpg',
            ],
            [
                'product_id' => 24,
                'photo' => 'uploads/BqfibnU8ufZJrHiARqT8vKKiF6KVm47dYTPR81Om.jpg',
            ],
            [
                'product_id' => 24,
                'photo' => 'uploads/pEfLUZ6U052jDHq9wW3BYZji9TFpl9oaYuQoT3jB.jpg',
            ],
            [
                'product_id' => 24,
                'photo' => 'uploads/jFmFuTEnGWKPsOHRepbEsCT3kXlGJCkWo7Tjd8ae.jpg',
            ],
            [
                'product_id' => 24,
                'photo' => 'uploads/BDLrSKPd6SiW5ssTg4E3zO1ttTsSsN0CoPn9g2HU.jpg',
            ],
            [
                'product_id' => 25,
                'photo' => 'uploads/LjWZOtZWHPxD3UameRi9B9iXrvOg2cPdcTeYfF9d.jpg',
            ],
            [
                'product_id' => 25,
                'photo' => 'uploads/Cak4HMPlMLdXzKGKZEaSlSP3dnGlVg9tqia8Hn8u.jpg',
            ],
            [
                'product_id' => 25,
                'photo' => 'uploads/4UsAUNxm2KzFtiOq1d6ZMeOdrmeRGXI9s9eIWaVV.jpg',
            ],
            [
                'product_id' => 25,
                'photo' => 'uploads/1OZZoy5lFtYElJ7b9eV5YAsWZCrllyZ1uCZLQc6i.jpg',
            ],
        ];

        foreach($productPhotos as $productPhono) {
            ProductPhoto::create([
                'product_id' => $productPhono['product_id'],
                'photo' => $productPhono['photo'],
            ]);
        }
    }
}
