<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once 'connect.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>onlyzenn homepage</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <header>
        <div class="navbar">
            <nav class="nav-list">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <nav class="homepage">
            <section id="home">
            <h1>- Selamat Datang Di OnlyZenn -</h1>
            <p>Halo <?php $row = mysqli_fetch_assoc($result); echo $row['name']; ?> disini
            <p>Mahasiswa Universitas <?php echo $row['kampus']; ?> Manado
            <p>=============================================
            <p>Manusia biasa yang suka One Piece.
         </section>
        </nav>

        <section id="gallery">
            <h1>- Gallery -</h1>
                <div class="myslides fade">
                    <div class="numtext">I / III</div>
                    <img src="assets/images/17344e5df38aa8eae885e3cd214a667b.jpg" alt="aowkwowkoowo" width="100%">
                </div>
                <div class="myslides fade">
                    <div class="numtext">II / III</div>
                    <img src="assets/images/4dc1f-16669932924573-1920.jpg" alt="zehahahaha" width="100%">
                </div>
                <div class="myslides fade">
                    <div class="numtext">III / III</div>
                    <img src="assets/images/gold_roger__laugh_tale__one_piece_ch__967__by_bryanfavr_ddnr4u2-pre.jpg" alt="wkwkkwkwwk" width="100%">
                </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </section>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
        
        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
            showSlides(slideIndex += n);
            }

                function currentSlide(n) {
                showSlides(slideIndex = n);
                }

                function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("myslides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
                }
        </script>

        <section id="blog">
            <h1>- Blog -</h1>
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, '- Blog 1 -')">- Blog 1 -</button>
                <button class="tablinks" onclick="openCity(event, '- Blog 2 -')">- Blog 2 -</button>
                <button class="tablinks" onclick="openCity(event, '- Blog 3 -')">- Blog 3 -</button>
              </div>
              
              <div id="- Blog 1 -" class="tabcontent">
                <h3>Kapan One Piece tamat?</h3>
                <p>Sebagian besar dari fans anime terutama fans One Piece pasti mempertanyakan kapan One Piece tamat? Dan ini jawaban dari Oda...</p>
                    <a href="https://dailyspin.id/movies-series/anime/kapan-one-piece-tamat-ini-jawabannya-dari-oda/">Baca Selengkapnya...</a>
              </div>

              <div id="- Blog 2 -" class="tabcontent">
                <h3>Sebenarnya harta karun One Piece itu apa?</h3>
                <p>Sudah sejak lama pertanyaan “apa sebenarnya One Piece?” atau “harta karun misterius apa yang sosok Gol D. Roger tinggalkan untuk mereka yang menemukannya?” terdengar di kalangan pecinta seri ini. Karena harta karun ini masih sangat misterius (bahkan kita belum tahu bentuknya seperti apa), banyak orang yang kemudian berspekulasi tentang hal tersebut. Berikut adalah beberapa spekulasi tentang One Piece...</p>
                    <a href="https://www.greenscene.co.id/2019/10/07/apa-sebenarnya-bentuk-harta-karun-one-piece/">Baca Selengkapnya...</a>
              </div>

              <div id="- Blog 3 -" class="tabcontent">
                <h3>Mengapa Anime One Piece sangat populer?</h3>
                <p>One Piece sudah mendapat pengakuan sebagai salah satu anime terbaik sepanjang masa. Popularitas series shounen yang satu ini seakan tak pernah mati dimakan zaman, meski penayangannya sudah dimulai sejak tahun 1999 lalu dan masih mengudara hingga saat ini.</p>
                    <a href="https://duniaku.idntimes.com/anime-manga/anime-lain/viky-nursyafira/alasan-kenapa-one-piece-populer-anime-terbaik-sepanjang-masa">Baca Selengkapnya...</a>
              </div>
            </article>
        </section>

        <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
          
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
              tabcontent[i].style.display = "none";
            }
          
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
              tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
          
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
            }
        </script> 

        
    </main>

    <footer>
        <div class="Footer-Contact">
            <section id="contact">
                <h1>- Contact -</h1>
                <p>E-mail : clifezra@gmail.com</p>
                <p>Instagram : clifftukunang</p>
            </section>
        </div>
    </footer>

</body>
</html>