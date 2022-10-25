<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Project Food</title>
    <link rel="stylesheet" href="assets/css/style.css">
	  <style type="text/css">
      ::-webkit-scrollbar{
        display: none;
      }

      .wave {
        animation: wave 8s linear infinite;
      }

      .wave1 {
        animation: wave1 10s linear infinite;
      }

      .wave2 {
        animation: wave2 12s linear infinite;
      }

      @keyframes wave {
        0% {
          transform: translateX(0%);
        }

        100% {
          transform: translateX(100%);
        }
      }

      @keyframes wave1 {
        0% {
          transform: scaleY(1.2) translateX(0%);
        }

        100% {
          transform: scaleY(1.2) translateX(100%);
        }
      }

      @keyframes wave2 {
        0% {
          transform: scaleY(.8) translateX(0%);
        }

        100% {
          transform: scaleY(.8) translateX(100%);
        }
      }

    </style>
</head>
<body class="bg-blue-200">
	
	<!-- NavBar -->
  <div class="sticky top-0 bg-yellow-500 w-full p-2 z-[200]"></div> 
	<nav class="flex p-2 sticky top-4 z-[100]">
    <a href="">
      <img class="flex object-cover h-20 w-20 relative bottom-6 bg-yellow-500 rounded" src="https://www.nipponpapergroup.com/sustainableproducts/images/products_paperstraw.png" alt="">
    </a>
		<div class="space-x-4">
			<a class="font-bold text-3xl ml-1" href="">Cinema<sup class="bg-yellow-500 px-1 rounded-md">caFe</sup></a>
      <a href="#food" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-500 hover:text-slate-200">Food</a>
      <a href="" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-500 hover:text-slate-200">Drink</a>
      <a href="" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-500 hover:text-slate-200">Contact</a>
      <a href="" class="bg-red-100 font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-500 hover:text-slate-200">Admin</a>
		</div>
	</nav>

    <div class="flex justify-center bg-[#68bcfc] pt-[100px] pb-[300px] relative bottom-[100px]">
      <img class="fade-out" src="https://www.pintscope.com/about/assets/contact_illust.6d29847e.webp" alt="">
    </div>

    <span class="fade-out inline-block cursor-default bg-yellow-500 py-1 pr-3 pl-10 rounded-md text-2xl text-slate-100 font-bold relative -top-[1160px] -left-[16px]">caFe Edition</span>
  </div>

    <div class="relative bottom-[140px]">
      <svg viewbox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <path id='sineWave' fill="#0099ff" fill-opacity="0.2" d="M0,160 C320,300,420,300,740,160 C1060,20,1120,20,1440,160 V0 H0" />
      </defs>
      <use class="wave" href="#sineWave" />
      <use class="wave" x="-100%" href="#sineWave" />
      <use class="wave1" href="#sineWave" />
      <use class="wave1" x="-100%" href="#sineWave" />
      <use class="wave2" href="#sineWave" />
      <use class="wave2" x="-100%" href="#sineWave" />
        </svg>
    </div>

    <div>
    <span class="cursor-default inline-block bg-yellow-500 py-1 pr-3 pl-10 rounded-md text-2xl text-slate-100 font-bold relative top-[20px] -left-[16px]">Cinema yang sedang tayang</span>
  </div>

    <div class="flex flex-col gap-8 px-[400px] text-white font-medium text-5xl mb-[300px]">
      <div>

        <img class="shadow-2xl h-[450px] w-[350px] opacity-80 p-3 bg-white hover:opacity-100" src="https://contentserver.com.au/assets/525768_gnau_yourname_p_v7_aa.jpg" alt="">

        <div class="w-[350px] relative bottom-[77px] rotate-180">
          <svg viewbox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <path id='sineWave2' fill="#ffffff" fill-opacity="0.2" d="M0,160 C320,300,420,300,740,160 C1060,20,1120,20,1440,160 V0 H0" />
          </defs>
          <use class="wave" href="#sineWave2" />
          <use class="wave" x="-100%" href="#sineWave2" />
          <use class="wave1" href="#sineWave2" />
          <use class="wave1" x="-100%" href="#sineWave2" />
          <use class="wave2" href="#sineWave2" />
          <use class="wave2" x="-100%" href="#sineWave2" />
            </svg>
        </div>

      </div>
      <a class="cursor-help relative bottom-12" href="https://myanimelist.net/anime/32281/Kimi_no_Na_wa" target="_blank">Kimi no Na Wa</a>
      <p class="text-3xl relative bottom-12">
        Dua remaja berbagi hubungan magis yang mendalam setelah mengetahui bahwa mereka bertukar tubuh. Segalanya menjadi lebih rumit ketika anak laki-laki dan perempuan itu memutuskan untuk bertemu secara langsung.
      </p>
    </div>

    <div class="flex flex-col gap-8 px-[400px] text-white font-medium text-5xl mb-[300px]">
      <div>

        <img class="shadow-2xl h-[450px] w-[350px] opacity-80 p-3 bg-white hover:opacity-100" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRk0xkR9mo4TC9c1GcNCnAaYwRkEv3dFZvbK__G_vwPDRJPemzw" alt="">

        <div class="w-[350px] relative bottom-[77px] rotate-180">
          <svg viewbox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <path id='sineWave2' fill="#ffffff" fill-opacity="0.2" d="M0,160 C320,300,420,300,740,160 C1060,20,1120,20,1440,160 V0 H0" />
          </defs>
          <use class="wave" href="#sineWave2" />
          <use class="wave" x="-100%" href="#sineWave2" />
          <use class="wave1" href="#sineWave2" />
          <use class="wave1" x="-100%" href="#sineWave2" />
          <use class="wave2" href="#sineWave2" />
          <use class="wave2" x="-100%" href="#sineWave2" />
            </svg>
        </div>
      </div>
      <a class="cursor-help relative bottom-12" href="https://www.imdb.com/title/tt7843946/" target="_blank">Dilan 1990</a>
      <p class="text-3xl relative bottom-12">
      Dilan yang menawan dan pemberontak mencoba untuk memenangkan kasih sayang Milea, siswa baru yang pemalu di sebuah sekolah menengah di Bandung.
      </p>
    </div>


  <div id="food">
    <span class="cursor-default inline-block bg-yellow-500 py-1 pr-3 pl-10 rounded-md text-2xl text-slate-100 font-bold relative bottom-[80px] -left-[16px]">fOod's Area:</span>
  </div>

	<!-- Food -->
	<div class="flex flex-col gap-8 px-[300px] text-black cursor-default">
		<?php foreach ($food as $f):  ?>
			<div class="grid grid-cols-2 bg-red-100 rounded-lg overflow-hidden shadow-2xl">
				<img class="h-72 relative rounded drop-shadow-2xl" src="https://www.nipponpapergroup.com/sustainableproducts/images/products_shieldplus.png" alt="">
		
				<div class="flex justify-between">
					<p class="inline-block self-center mx-auto text-5xl"><?php echo $f->name_food ?></p>
					<p class="inline-block self-end mr-1 text-2xl">Rp.<?php echo $f->price ?></p>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
  
  <div class="mb-[560px]"></div>

  <footer class="text-center">

    <div class="flex justify-center mb-[180px]">
      <a class="font-bold text-3xl ml-1" href="">Cinema<sup class="bg-yellow-500 px-1 rounded-md">caFe</sup> PRODUCTION</a>
    </div>
    <div class="justyfy-end mb-[170px]">
      <a class="font-bold text-slate-400 hover:text-slate-700" href="">PAGE TOP</a>
    </div>
    <div class="justify-end cursor-default">
      <p>Copyright © 2022 yangtawutawuajah🤓 Inc. All Rights Reserved</p>
    </div>

  </footer>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(window).on("load", function() {
        $(window).scroll(function() {
            var windowBottom = $(this).scrollTop() + $(this).innerHeight();
            $(".fade-in").each(function() {
                /* Check the location of each desired element */
                var objectBottom = $(this).offset().top + $(this).outerHeight();

                /* If the element is completely within bounds of the window, fade it in */
                if (objectBottom < windowBottom) { //object comes into view (scrolling down)
                    if ($(this).css("opacity") == 0) {
                        $(this).fadeTo(250, 1);
                    }
                } else { //object goes out of view (scrolling up)
                    if ($(this).css("opacity") == 1) {
                        $(this).fadeTo(250, 0);
                    }
                }
            });
        }).scroll(); //invoke scroll-handler on page-load
    });

    $(window).scroll(function() {
        $(".fade-out").css("opacity", 1 - $(window).scrollTop() / 250)
    });
</script>

</html>