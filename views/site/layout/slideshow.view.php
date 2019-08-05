		<style>
          * {
            box-sizing:border-box
          }
          h2 {
            text-align: center;
          }
          /* Slideshow container */
          .slideshow-container {
            max-width: 500px;
            position: relative;
          }
          /* ?n các slider */
          .mySlides {
              display: none; 
              text-align: center;
          }
          /* Ð?nh d?ng n?i dung Caption */
          .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
          }

          /* d?nh d?ng các ch?m chuy?n d?i các slide */
          .dot {
            cursor:pointer;
            height: 13px;
            width: 13px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }
          /* khi du?c hover, active d?i màu n?n */
          .active, .dot:hover {
            background-color: #717171;
          }

          /* Thêm hi?u ?ng khi chuy?n d?i các slide */
          .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 3s;
            animation-name: fade;
            animation-duration: 3s;
          }

          @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }

          @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }

          .slideshow-container{
            text-align: center;
            padding: 20px;
          }

          .slideshow-container img{
              width: 1040px;
              height: 350px;
          }
        </style>

      <div class="slideshow-container">
          <div class="mySlides fade">
              <img src="assets/images/site/slideshow1.png">
          </div>
          <div class="mySlides fade">
              <img src="assets/images/site/slideshow2.png" >
          </div>
          <div class="mySlides fade">
              <img src="assets/images/site/slideshow3.jpg" >
          </div>
          <div class="mySlides fade">
              <img src="assets/images/site/slideshow4.jpg" >
          </div>
      </div>
      <br>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span> 
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>  
    </body>
    <script>
      //khai báo bi?n slideIndex d?i di?n cho slide hi?n t?i
      var slideIndex;
      // KHai bào hàm hi?n th? slide
      function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }

          slides[slideIndex].style.display = "block";  
          dots[slideIndex].className += " active";
          //chuy?n d?n slide ti?p theo
          slideIndex++;
          //n?u dang ? slide cu?i cùng thì chuy?n v? slide d?u
          if (slideIndex > slides.length - 1) {
            slideIndex = 0
          }    
          //t? d?ng chuy?n d?i slide sau 5s
          setTimeout(showSlides, 10000);
      }
      //m?c d?nh hi?n th? slide d?u tiên 
      showSlides(slideIndex = 0);
		
		
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
    </script>