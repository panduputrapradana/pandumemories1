<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Kegiatan - Pandu Memories 1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/output.css">
    <script src="<?= base_url('assets/'); ?>node_modules/tw-elements/dist/js/index.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Edu+SA+Beginner:wght@400;500;600;700&family=Merienda&family=Pacifico&family=Splash&display=swap" rel="stylesheet">
</head>

<body>
	
    <!-- Lagu Start -->
                    <audio autoplay loop id="audio">
                        <source src="<?= base_url('assets/'); ?>dist/sound/lagu.mp3" type="audio/mp3">
                            Browsermu tidak mendukung tag audio
                        </audio>
                        <!-- Lagu End -->

	<!-- Tampilan Awal Start -->
	<div id="buka" class="w-full <?= $this->session->flashdata('hide'); ?> h-full transition ease-in-out duration-500 fixed z-[200]">
		<div class="w-full h-full bg-repeat-y bg-center flex relative" style="background-image: url('<?= base_url('assets/'); ?>dist/img/home.jpeg');">
			<div class="w-full h-full bg-gradient-to-b from-black to-transparent absolute">
				<h1 class="font-bold text-center text-yellow-600 text-xl lg:text-4xl uppercase lg:mb-9 mb-5 mt-60" style="font-family: 'Merienda', cursive;">"Pandu Memories 1"</h1>
				<p class="text-yellow-600 text-center text-sm font-bold uppercase mb-5 lg:text-2xl lg:mb-4" style="font-family: 'Edu SA Beginner', cursive;">Yang Tercinta</p>
				<p class="text-yellow-600 text-base font-bold lg:text-2xl mb-5 text-center lg:mb-8" style="font-family: 'Edu SA Beginner', cursive;">Purna Ambalan RAA Wiranata Kusumah & RD Dewi Sartika</p>
				<p class="text-yellow-600 text-center text-sm font-bold uppercase mb-5 lg:text-2xl lg:mb-4" style="font-family: 'Edu SA Beginner', cursive;">Di tempat</p>
				<div class="flex space-x-2 justify-center">
					<button
                    onclick="PlayStop()"
					id="tombolbuka"
					type="button"
					data-mdb-ripple="true"
					data-mdb-ripple-color="light"
					class="inline-block px-6 py-2.5 bg-yellow-700 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-yellor-800 hover:shadow-lg focus:bg-yellor-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-900 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#surat">
					Buka Undangan </button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
  		id="surat" tabindex="-1" aria-labelledby="exampleModalScrollableLabel" aria-hidden="true">
  			<div class="modal-dialog modal-dialog-scrollable relative w-auto pointer-events-none">
    			<div
      				class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      				<div
        				class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        				<h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
          					SURAT PANDU MEMORIES 1
        				</h5>
				        <button type="button"
				          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
				          data-bs-dismiss="modal" aria-label="Close"></button>
      				</div>
      				<div class="modal-body relative p-4">
      					<p>Baleendah, Juli 2022 <br><br>
      						Yang Tercinta <br><br>
      						Kakak kakak  Purna Ambalan RAA Wiranata Kusumah RD Dewi Sartika <br><br><br>
      						Assalamualaikum  Wr.Wb <br><br>
      						Salam Pramuka <br><br><br>
      						Kak, kami  punya banyak cerita yang ingin kami sampaikan, kami merindukan momen kebersamaan dengan kakak kakak. Sepertinya cerita kakak kakak saat masa lalu hingga kini  pasti mampu memberikan motivasi yang sangat besar bagi kami untuk meraih asa dan cita. <br><br>
      						Kak  mohon ceritakan indahnya masa lalu saat kacu melingkar di leher kakak, saat baret menempel di kepala dengan gagah saat satya dan dharma diucapkan saat  semua yang dulu  kakak jalani hingga kini kesuksesan diraih. <br><br>
      						kami berharap sangat besar untuk bisa bertemu dengan kakak disela kesibukan kakak, penantian dan harapan kami semoga terkabul di acara Pandu Memories. Termakasih kakak tercinta <br><br> 
      						Wswrwb<br><br>
      						Salam Pramuka <br><br> 
      						Dewan Ambalan RAA Wiranata Kusumah – RD Dewi Sartika 


      					</p>
      				</div>
      				<div
      					class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
      						<button type="button"
		      				class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
		      				data-bs-dismiss="modal">
		      				Close
		      				</button>
      				</div>

    			</div>
  			</div>
		</div>
	<!-- Tampilan Awal End -->


	<!-- Section Home Start -->
    <section id="home">
        <div class="w-full">
            <div class="flex justify-center relative">
                <img class="w-full h-full lg:w-full lg:h-[600px] lg:w-full" src="<?= base_url('assets/'); ?>dist/img/home.jpeg" alt="Home">
                <div class="absolute top-0 text-center w-full h-full bg-gradient-to-b from-black to-transparent text-yellow-900">
                    <div class="flex flex-row justify-center mb-2 lg:mb-4 ml-auto mr-auto w-16 h-16 pt-4 lg:pt-0 lg:mt-10">
                        <img src="<?= base_url('assets/'); ?>dist/img/wosm.png" title="World Organization scout of movement" class="mx-2 lg:mx-4" alt="wosm">
                        <img src="<?= base_url('assets/'); ?>dist/img/raa.png" title="RAA Wiranata Kusumah" class="mx-2 lg:mx-4" alt="raa">
                        <img src="<?= base_url('assets/'); ?>dist/img/smk7.png" title="Tunas Kelapa" class="mx-2 lg:mx-4" alt="tunas">
                        <img src="<?= base_url('assets/'); ?>dist/img/rd.png" title="RD Dewi Sartika" class="mx-2 lg:mx-4" alt="rd">
                        <img src="<?= base_url('assets/'); ?>dist/img/tunas.png" title="Tunas Kelapa" class="mx-2 lg:mx-4" alt="tunas">
                    </div>
                    <h1 class="font-extrabold text-yellow-700 lg:text-5xl mb-1 lg:mb-9">Undangan Kegiatan</h1>
                    <h2 class="font-bold text-yellow-600 text-xl lg:text-4xl uppercase lg:mb-9 mb-1" style="font-family: 'Dancing Script', cursive;">"Pandu Memories 1"</h2>
                    <p class="text-yellow-600 text-base mb-1 lg:mb-5 lg:text-xl" style="font-family: 'Edu SA Beginner', cursive;">Minggu 14 Agustus 2022 ( HUT Pramuka ) <br>08.00 WIB</p>
                    <p class="text-yellow-600 text-base font-bold uppercase lg:text-2xl lg:mb-4" style="font-family: 'Edu SA Beginner', cursive;">Yang Tercinta</p>
                    <p class="text-yellow-600 text-base font-semibold lg:text-2xl mb-2 lg:mb-8" style="font-family: 'Edu SA Beginner', cursive;">Purna Ambalan RAA Wiranata Kusumah & RD Dewi Sartika</p>
                    <h1 class="text-base lg:text-4xl italic font-medium text-yellow-600" style="font-family: 'Merienda', cursive;">"Satya ku kudarmakan, Darma ku kubaktikan."</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Home End -->

    <!-- Section Motto Start -->
    <section id="motto">
    	<div class="w-full">
            <div class="flex justify-center relative">
                <img class="w-full h-72 lg:w-full lg:h-[800px] lg:w-full" src="<?= base_url('assets/'); ?>dist/img/motto.jpg" alt="Home">
                <div class="absolute top-28 lg:top-80 text-center w-full h-full text-yellow-900">
                	<h1 class="text-lg lg:text-5xl italic font-medium text-yellow-600" style="font-family: 'Merienda', cursive;">"Yang Jauh Mendekat, Yang Dekat Merapat."</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Motto End -->


    <!-- Section Acara Start -->
    <section id="acara" class="bg-yellow-600 bg-opacity-40">
    	<h1 class="text-3xl lg:text-5xl font-bold text-center text-yellow-600 mb-2 lg:mb-6 lg:p-2" style="font-family: 'Edu SA Beginner', cursive;">Rangkaian Acara</h1>
    	<div class="overflow-x-auto flex lg:justify-around">
            <div class="flex-none w-48 lg:h-64 lg:w-56 h-56 py-2 px-2">
                <div class="flex flex-col items-center justify-center gap-3">
                    <img class="w-18 h-18 rounded-full border-double border-8 border-yellow-700" src="<?= base_url('assets/'); ?>dist/img/upacara.jpg">
                    <strong class="text-yellow-600 font-semibold text-lg lg:text-xl font-medium pb-1" style="font-family: 'Merienda', cursive;">Upacara</strong>
                </div>
            </div>
    		<div class="flex-none w-48 lg:h-64 lg:w-56 h-56 py-2 px-2">
    			<div class="flex flex-col items-center justify-center gap-3">
    				<img class="w-18 h-18 rounded-full border-double border-8 border-yellow-700" src="<?= base_url('assets/'); ?>dist/img/sambutan.jpg">
    				<strong class="text-yellow-600 font-semibold text-lg lg:text-xl font-medium pb-1" style="font-family: 'Merienda', cursive;">Sambutan</strong>
    			</div>
    		</div>
    		<div class="flex-none w-48 h-56 lg:h-64 lg:w-56 py-2 px-2">
    			<div class="flex flex-col items-center justify-center gap-3">
    				<img class="w-18 h-18 rounded-full border-double border-8 border-yellow-700" src="<?= base_url('assets/'); ?>dist/img/kado.jpg">
    				<strong class="text-yellow-600 font-semibold text-lg lg:text-xl font-medium pb-1" style="font-family: 'Merienda', cursive;">Tukar Kado</strong>
    			</div>
    		</div>
    		<div class="flex-none w-48 h-56 lg:h-64 lg:w-56 py-2 px-2">
    			<div class="flex flex-col items-center justify-center gap-3">
    				<img class="w-18 h-18 rounded-full border-double border-8 border-yellow-700" src="<?= base_url('assets/'); ?>dist/img/story.jpg">
    				<strong class="text-yellow-600 font-semibold text-lg lg:text-xl font-medium pb-1" style="font-family: 'Merienda', cursive;">Story Of Us</strong>
    			</div>
    		</div>
    		<div class="flex-none w-48 h-56 lg:h-64 lg:w-56 py-2 px-2">
    			<div class="flex flex-col items-center justify-center gap-3">
    				<img class="w-18 h-18 rounded-full border-double border-8 border-yellow-700" src="<?= base_url('assets/'); ?>dist/img/potstud.jpg">
    				<strong class="text-yellow-600 font-semibold text-lg lg:text-xl font-medium pb-1" style="font-family: 'Merienda', cursive;">Foto Studio</strong>
    			</div>
    		</div>
    		<div class="flex-none w-48 h-56 lg:h-64 lg:w-56 py-2 px-2">
    			<div class="flex flex-col items-center justify-center gap-3">
    				<img class="w-18 h-18 rounded-full border-double border-8 border-yellow-700" src="<?= base_url('assets/'); ?>dist/img/hiburan.jpg">
    				<strong class="text-yellow-600 font-semibold text-lg lg:text-xl font-medium pb-1" style="font-family: 'Merienda', cursive;">Hiburan</strong>
    			</div>
    		</div>
    	</div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ead09a" fill-opacity="1" d="M0,128L34.3,144C68.6,160,137,192,206,197.3C274.3,203,343,181,411,154.7C480,128,549,96,617,85.3C685.7,75,754,85,823,112C891.4,139,960,181,1029,176C1097.1,171,1166,117,1234,106.7C1302.9,96,1371,128,1406,144L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
    <!-- Section Acara Start -->

    <!-- Section Waktu Start -->
    <section id="waktu" class="mb-4">
    	<div class="w-full">
    		<h1 class="text-lg lg:text-4xl text-center uppercase text-yellow-700 mb-4 lg:mb-10" style="font-family: 'Pacifico', cursive;">Acara Dimulai Pada:</h1>
    		<div class="flex justify-around lg:justify-evenly countdown">
    			<div class="text-center w-14 lg:w-20 rounded-md bg-yellow-700 bg-opacity-30">
    				<h1 class="text-2xl lg:text-5xl text-yellow-700" id="hari">Na</h1>
    				<p class="text-base lg:text-lg text-yellow-700" style="font-family: 'Merienda', cursive;">Hari</p>
    			</div>
    			<div class="text-center">
    				<p class="text-base lg:text-lg text-yellow-700" style="font-family: 'Merienda', cursive;">:</p>
    			</div>
    			<div class="text-center w-14 lg:w-20 rounded-md bg-yellow-700 bg-opacity-30">
    				<h1 class="text-2xl lg:text-5xl text-yellow-700" id="jam">Na</h1>
    				<p class="text-base lg:text-lg text-yellow-700" style="font-family: 'Merienda', cursive;">Jam</p>
    			</div>
    			<div class="text-center">
    				<p class="text-base lg:text-lg text-yellow-700" style="font-family: 'Merienda', cursive;">:</p>
    			</div>
    			<div class="text-center w-14 lg:w-20 rounded-md bg-yellow-700 bg-opacity-30">
    				<h1 class="text-2xl lg:text-5xl text-yellow-700" id="menit">Na</h1>
    				<p class="text-base lg:text-lg text-yellow-700" style="font-family: 'Merienda', cursive;">Menit</p>
    			</div>
    			<div class="text-center">
    				<p class="text-base lg:text-lg text-yellow-700" style="font-family: 'Merienda', cursive;">:</p>
    			</div>
    			<div class="text-center w-14 lg:w-20 rounded-md bg-yellow-700 bg-opacity-30">
    				<h1 class="text-2xl lg:text-5xl text-yellow-700" id="detik">Na</h1>
    				<p class="text-base lg:text-lg text-yellow-700" style="font-family: 'Merienda', cursive;">Detik</p>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- Section Waktu Start -->

    <!-- Section Lokasi Start -->
    <section id="lokasi" class="mb-4">
    	<div class="flex justify-center w-full">
    		<div class="rounded-lg shadow-lg bg-yellow-700 w-full">
    			<iframe class="rounded-t-lg w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.9512686541407!2d107.64927911431809!3d-7.015013970664181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6f9cd53f7b9%3A0xf84e76c83055f248!2sSMK%20Negeri%207%20Baleendah!5e0!3m2!1sen!2sid!4v1657465440275!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    			<div class="p-6 flex-col justify-center items-center flex">
    				<h5 class="text-white text-base font-mono mb-2 lg:mb-5 text-center" style="font-family: 'Merienda', cursive;">Jalan Siliwangi KM.15, Manggahang, Baleendah, Jl. Laswi Raya No.171, Manggahang, Kec. Baleendah, Kabupaten Bandung, Jawa Barat</h5>
    				<a href="https://goo.gl/maps/rUJoYt2xLQ8wAjdZ7" class="inline-block w-44 px-6 py-2.5 bg-black text-white font-mono text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 text-center active:shadow-lg transition duration-150 ease-in-out" style="font-family: 'Merienda', cursive;" target="_blank">Lihat Lokasi</a>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- Section Lokasi Start -->

    <!-- Section Foto Start -->
    <section id="foto" class="mb-4">
    	<div class="w-full">
    		<h1 class="text-lg lg:text-4xl text-center uppercase text-yellow-700 mb-4 lg:mb-10" style="font-family: 'Pacifico', cursive;">Galeri:</h1>
    		<div class="container px-5 py-2 mx-auto lg:pt-7 lg:px-32">
    			<div class="flex flex-wrap -m-1 md:-m-2">
    				<div class="flex flex-wrap w-1/2">
    					<div class="w-1/2 p-1 md:p-2 hover:scale-105 transition duration-500 ease-in-out" data-aos="zoom-in">
    						<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
    						src="<?= base_url('assets/'); ?>dist/img/1.jpeg">
    					</div>
    					<div class="w-1/2 p-1 md:p-2 hover:scale-105 transition duration-500 ease-in-out" data-aos="zoom-in">
    						<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
    						src="<?= base_url('assets/'); ?>dist/img/3.jpeg">
    					</div>
    					<div class="w-full p-1 md:p-2 hover:scale-105 transition duration-500 ease-in-out" data-aos="zoom-in">
    						<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
    						src="<?= base_url('assets/'); ?>dist/img/home.jpeg">
    					</div>
    				</div>
    				<div class="flex flex-wrap w-1/2">
    					<div class="w-full p-1 md:p-2 hover:scale-105 transition duration-500 ease-in-out" data-aos="zoom-in">
    						<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
    						src="<?= base_url('assets/'); ?>dist/img/4.jpeg">
    					</div>
    					<div class="w-1/2 p-1 md:p-2 hover:scale-105 transition duration-500 ease-in-out" data-aos="zoom-in">
    						<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
    						src="<?= base_url('assets/'); ?>dist/img/2.jpeg">
    					</div>
    					<div class="w-1/2 p-1 md:p-2 hover:scale-105 transition duration-500 ease-in-out" data-aos="zoom-in">
    						<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
    						src="<?= base_url('assets/'); ?>dist/img/6.jpeg">
    					</div>
    				</div>
    				<div class="flex flex-wrap w-1/2">
    					<div class="w-1/2 p-1 md:p-2 hover:scale-105 transition duration-500 ease-in-out" data-aos="zoom-in">
    						<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
    						src="<?= base_url('assets/'); ?>dist/img/12.jpeg">
    					</div>
    					<div class="w-1/2 p-1 md:p-2 hover:scale-105 transition duration-500 ease-in-out" data-aos="zoom-in">
    						<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
    						src="<?= base_url('assets/'); ?>dist/img/11.jpeg">
    					</div>
    					<div class="w-full p-1 md:p-2 hover:scale-105 transition duration-500 ease-in-out" data-aos="zoom-in">
    						<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
    						src="<?= base_url('assets/'); ?>dist/img/10.jpeg">
    					</div>
    				</div>
    				<div class="flex flex-wrap w-1/2">
    					<div class="w-full p-1 md:p-2 hover:scale-105 transition duration-500 ease-in-out" data-aos="zoom-in">
    						<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
    						src="<?= base_url('assets/'); ?>dist/img/9.jpeg">
    					</div>
    					<div class="w-1/2 p-1 md:p-2 hover:scale-105 transition duration-500 ease-in-out" data-aos="zoom-in">
    						<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
    						src="<?= base_url('assets/'); ?>dist/img/13.jpeg">
    					</div>
    					<div class="w-1/2 p-1 md:p-2 hover:scale-105 transition duration-500 ease-in-out" data-aos="zoom-in">
    						<img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
    						src="<?= base_url('assets/'); ?>dist/img/5.jpeg">
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- Section Foto Start -->

    <!-- Section Ucapan Start -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ead09a" fill-opacity="1" d="M0,64L48,106.7C96,149,192,235,288,261.3C384,288,480,256,576,213.3C672,171,768,117,864,122.7C960,128,1056,192,1152,208C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <section id="ucapan" class="bg-yellow-600 bg-opacity-40">
    	<div class="flex flex-col justify-center">
    		<div class="w-full p-2 top-0 flex flex-col justify-center">
    			<h1 class="text-lg lg:text-4xl text-center uppercase text-yellow-700 mb-4 lg:mb-10" style="font-family: 'Pacifico', cursive;">Kirim Ucapan</h1>
                <?= $this->session->flashdata('user'); ?>
              </div>
    			<div class="block p-6 rounded-lg shadow-lg mx-auto bg-opacity-80 bg-yellow-700 w-80 lg:w-[500px] lg:h-96">
    				<form class="form-user" method="post" enctype="multipart/form-data">
    					<div class="form-group mb-6">
    						<input type="text" name="nama" class="form-control block
    						w-full
    						px-3
    						py-1.5
    						text-base
    						font-normal
    						text-gray-700
    						bg-white bg-clip-padding
    						border border-solid border-gray-300
    						rounded
    						transition
    						ease-in-out
    						m-0
    						focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
    						placeholder="Nama Lengkap" required>
    					</div>
    					<div class="form-group mb-6">
    						<input type="text" name="angkatan" class="form-control block
    						w-full
    						px-3
    						py-1.5
    						text-base
    						font-normal
    						text-gray-700
    						bg-white bg-clip-padding
    						border border-solid border-gray-300
    						rounded
    						transition
    						ease-in-out
    						m-0
    						focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
    						placeholder="Tahun Angkatan" required>
    					</div>
    					<div class="form-group mb-6">
    						<textarea
    						class="
    						form-control
    						block
    						w-full
    						px-3
    						py-1.5
    						text-base
    						font-normal
    						text-gray-700
    						bg-white bg-clip-padding
    						border border-solid border-gray-300
    						rounded
    						transition
    						ease-in-out
    						m-0
    						focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
    						"
    						id="exampleFormControlTextarea13"
    						rows="3"
                            name="kata"
    						placeholder="Ucapan"
    						required
    						></textarea>
    					</div>
    					<button type="submit" class="
                        tombol-simpan
    					w-full
    					px-6
    					py-2.5
    					bg-black
    					text-white
    					font-medium
    					text-xs
    					leading-tight
    					uppercase
    					rounded
    					shadow-md
    					hover:bg-blue-700 hover:shadow-lg
    					focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
    					active:bg-blue-800 active:shadow-lg
    					transition
    					duration-150
    					ease-in-out">Kirim</button>
    				</form>
    			</div>
    			<div class="relative rounded-xl overflow-auto p-8">
    				<div class="overflow-y-scroll h-72 relative max-w-sm lg:max-w-lg mx-auto bg-yellow-600 bg-opacity-25 shadow-lg ring-1 ring-black/5 rounded-xl flex flex-col divide-y divide-black">
                        <?php 
                        foreach ($user as $row) { ?>
                            <div class="flex items-center gap-4 p-4">
                                <div class="flex flex-col">
                                    <strong class="text-slate-900 text-lg font-bold" style="font-family: 'Edu SA Beginner', cursive;">Dari: <?= $row->nama; ?></strong>
                                    <span class="text-yellow-700 font-bold text-sm" style="font-family: 'Merienda', cursive;">Angkatan: <?= $row->angkatan; ?></span>
                                    <br/>
                                    <span class="text-slate-500 text-xs italic font-medium" style="font-family: 'Merienda', cursive;">"<?= $row->kata; ?>"</span>
                                </div>
                            </div>
                        <?php } ?>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- Section Ucapan End -->

    <!-- Section Pendaftaran Start -->
    <section id="pendaftaran" class="bg-yellow-600 bg-opacity-40">
    	<div class="flex flex-col justify-center">
    		<div class="w-full p-2 top-0 flex flex-col justify-center mt-4">
    			<h1 class="text-lg lg:text-4xl text-center uppercase text-yellow-700 mb-4 lg:mb-10" style="font-family: 'Pacifico', cursive;">Pendaftaran</h1>
                <?= $this->session->flashdata('daftar'); ?>
    			<div class="block p-6 rounded-lg shadow-lg mx-auto bg-opacity-80 bg-yellow-700 w-80 h-full lg:w-[500px] lg:h-full">
    				<form class="mb-2" action="<?= base_url('welcome/daftar'); ?>" method="post" enctype="multipart/form-data">
    					<div class="form-group mb-6">
    						<input type="text" class="form-control block
    						w-full
    						px-3
    						py-1.5
    						text-base
    						font-normal
    						text-gray-700
    						bg-white bg-clip-padding
    						border border-solid border-gray-300
    						rounded
    						transition
    						ease-in-out
    						m-0
    						focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput7"
    						placeholder="Nama Lengkap" name="nama_lengkap" required>
    					</div>
    					<div class="form-group mb-6">
    						<input type="text" class="form-control block
    						w-full
    						px-3
    						py-1.5
    						text-base
    						font-normal
    						text-gray-700
    						bg-white bg-clip-padding
    						border border-solid border-gray-300
    						rounded
    						transition
    						ease-in-out
    						m-0
    						focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="exampleInput8"
    						placeholder="Lulusan/Angkatan" name="lulusan" required>
    					</div>
    					<div class="form-group mb-6">
    						<select class="form-select appearance-none
	    						block
	    						w-full
	    						px-3
	    						py-1.5
	    						text-base
	    						font-normal
	    						text-gray-700
	    						bg-white bg-clip-padding bg-no-repeat
	    						border border-solid border-gray-300
	    						rounded
	    						transition
	    						ease-in-out
	    						m-0
	    						focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="data" required>
	    						<option selected>Data Keikutsertaan</option>
	    						<option value="Single">Single</option>
	    						<option value="Double">Double</option>
    						</select>
    					</div>
    					<div class="form-group mb-6">
    						<select class="form-select appearance-none
	    						block
	    						w-full
	    						px-3
	    						py-1.5
	    						text-base
	    						font-normal
	    						text-gray-700
	    						bg-white bg-clip-padding bg-no-repeat
	    						border border-solid border-gray-300
	    						rounded
	    						transition
	    						ease-in-out
	    						m-0
	    						focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" aria-label="Default select example" name="ukuran" required>
	    						<option selected>Ukuran Kaos</option>
	    						<option value="M">M</option>
	    						<option value="L">L</option>
	    						<option value="XL">Xl</option>
	    						<option value="XXL">XXL</option>
	    						<option value="XXXL">XXXL</option>
    						</select>
    					</div>
    					<button type="submit" class="
    					w-full
    					px-6
    					py-2.5
    					bg-black
    					text-white
    					font-medium
    					text-xs
    					leading-tight
    					uppercase
    					rounded
    					shadow-md
    					hover:bg-blue-700 hover:shadow-lg
    					focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
    					active:bg-blue-800 active:shadow-lg
    					transition
    					duration-150
    					ease-in-out">Kirim</button>
    				</form>
    				<h1 class="text-xs lg:text-lg uppercase text-black mb-2 lg:mb-2" style="font-family: 'Pacifico', cursive;">Noted : </h1>
    				<h1 class="text-xs lg:text-lg uppercase text-black mb-1 lg:mb-2" style="font-family: 'Merienda', cursive;">- Single  120000 ( 1kaos  + 1  Kacu + 1 Snack dan 1 makan + Cinderamata) </h1>
    				<h1 class="text-xs lg:text-lg uppercase text-black mb-4 lg:mb-10" style="font-family: 'Merienda', cursive;">- Double 150000  : 1 kaos + Kacu + 2 Snack dan 2 makan + Cinderamata) </h1>
    				<h1 class="text-xs lg:text-lg uppercase text-black mb-2 lg:mb-2" style="font-family: 'Pacifico', cursive;">Info : </h1>
    				<h1 class="text-xs lg:text-lg uppercase text-black mb-2 lg:mb-2" style="font-family: 'Merienda', cursive;">- Nanda Putria Iswara ( XII RPL ) <a href="https://wa.me/085609735705" class="text-white bg-black rounded-md">085609735705</a></h1>
    				<h1 class="text-xs lg:text-lg uppercase text-black mb-2 lg:mb-2" style="font-family: 'Merienda', cursive;">- Dhea Pancabrata ( XI DPIB 2) <a href="https://wa.me/085559692214" class="text-white bg-black rounded-md">085559692214</a></h1>
    				<h1 class="text-xs lg:text-lg uppercase text-black mb-4 lg:mb-10" style="font-family: 'Merienda', cursive;">- Rani Prastuti, S.Pd <a href="https://wa.me/082315852244" class="text-white bg-black rounded-md">082315852244</a></h1>
    				<div class="flex space-x-2 justify-center">
    					<button
    					type="button"
    					data-mdb-ripple="true"
    					data-mdb-ripple-color="light"
    					class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#transfer"
    					>Transfer Pembayaran</button>
    				</div>
    				<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
    					id="transfer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    					<div class="modal-dialog relative w-auto pointer-events-none">
    						<div
    						class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
    						<div
    						class="modal-header text-center flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
    						<h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
    							Transfer Pembayaran
    						</h5>
    						<button type="button"
    						class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
    						data-bs-dismiss="modal" aria-label="Close"></button>
    					</div>
    					<div class="modal-body relative p-4">
    						<h1 class="text-lg font-medium">BRI</h1>
    						<input class="text-lg font-bold" id="dataCopy" value="702301019427535" readonly><button type="button" onclick="copyTeks()"><i class="far fa-copy text-sky-600"></i></button>
    						<h1 class="text-lg font-medium">a/n Rani Prastuti</h1>
    						<br>
    						<h1 class="text-lg font-medium">Konfirmasi Pembayaran bisa via Nomor Whatsapp yang telah disediakan!!</h1>
    					</div>
    					<div
    					class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
    					<button type="button"
    					class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
    					data-bs-dismiss="modal">Close</button>
    					</div>
    				</div>
    			</div>
    			</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- Section Pendaftaran End -->

    <!-- Navbar -->
    <div class="w-full h-10 z-[99] fixed flex justify-center bottom-8">
    	<div class="text-yellow-700 flex flex-wrap justify-around bg-white w-72 h-10 self-center rounded-md">
    		<div class="mt-2 transition ease-in-out hover:-translate-y-1 active:-translate-y-1 active:scale-110 hover:scale-110 duration-300"><a href="#home"><i class="fas fa-home"></i></a></div>
    		<div class="mt-2 transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300"><a href="#motto"><i class="fas fa-closed-captioning"></i></a></div>
    		<div class="mt-2 transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300"><a href="#acara"><i class="fas fa-clipboard-list"></i></a></div>
    		<div class="mt-2 transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300"><a href="#waktu"><i class="fas fa-clock"></i></a></div>
    		<div class="mt-2 transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300"><a href="#foto"><i class="fas fa-photo-video"></i></a></div>
    		<div class="mt-2 transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300"><a href="#ucapan"><i class="fab fa-rocketchat"></i></a></div>
    		<div class="mt-2 transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300"><a href="#pendaftaran"><i class="fab fa-wpforms"></i></a></div>
    	</div>
    </div>
    <!-- End Navbar -->


    <footer class="bg-yellow-700 text-center lg:text-left">
    	<div class="text-white text-center p-4" style="background-color: rgba(0, 0, 0, 0.2);">
    		Develoved By
    		<a class="text-gray-300" href="https://instagram.com/pandupp21/">PanduPP</a>
    	</div>
    </footer>

    <script src="<?= base_url('assets/'); ?>dist/script.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
    <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbyeLYISBQDQ_dw9cr6sJqirlxCCwQZmVWlt70KU-ahT/dev'
      const form = document.forms['submit-to-google-sheet']

      form.addEventListener('submit', e => {
        e.preventDefault()
        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => console.log('Success!', response))
        .catch(error => console.error('Error!', error.message))
    })
</script>
	<script type="text/javascript">
		// Buka Undangan
		const buka = document.querySelector('#buka');
		const tombolbuka = document.querySelector('#tombolbuka');

		tombolbuka.addEventListener('click', function() {
			buka.classList.add('scale-0');
		});

	</script>
    <script>
        var myaudio = document.getElementById("audio");

        function PlayStop() {
        return myaudio.paused ? myaudio.play() : myaudio.pause();
        };
    </script>
    <script type="text/javascript">
    $(document).ready(function(){
        $(".tombol-simpan").click(function(){
            var data = $('.form-user').serialize();
            $.ajax({
                type: 'POST',
                url: "<?= base_url('welcome/tambah'); ?>",
                data: data,
                success: function() {
                    $('.tampildata').load("index.php");
                }
            });
        });
    });
    </script>
</body>

</html>