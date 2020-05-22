      <div class="footer">
         <div class="container">
            <div class="pull-left wow fadeInLeft" data-wow-delay="0.3s">
               <ul class="footer-menu">
                  <li><a href="privacy.php#content">מדיניות פרטיות</a></li>
                  <li><a href="terms.php#content">תנאי שימוש</a></li>
                  <li><a href="mailto:y@scale-app.com">צור קשר</a></li>
               </ul>
            </div>
            <div class="pull-right wow fadeInRight" data-wow-delay="0.4s">
               <ul class="social-menu">
                  <li><a href=""><span class="fa fa-facebook"></span></a></li>
                  <li><a href=""><span class="fa fa-twitter"></span></a></li>
                  <li><a href=""><span class="fa fa-linkedin"></span></a></li>
                  <li><a href=""><span class="fa fa-youtube-play"></span></a></li>
                  <li><a href=""><span class="fa fa-instagram"></span></a></li>
               </ul>
            </div>
         </div>
         <!-- container -->
         <div class="copyright">
            <div class="container">
               <p class="text-center" data-wow-delay="0.5s">© 2020 ScaleApp L.A.B. כל הזכויות שמורות</p>
            </div>
         </div>
      </div>
      <!-- footer -->
      <script  src="js/jquery.js"></script>
      <script  src="js/bootstrap.min.js"></script>
      <script  src="js/index.js"></script>
      <script  src="js/wow.js"></script>
      <script>
         $(document).ready(function() {

           new WOW().init();

            $('.panel-collapse').on('show.bs.collapse', function () {
               $(this).siblings('.panel-heading').addClass('active');
            });

            $('.panel-collapse').on('hide.bs.collapse', function () {
               $(this).siblings('.panel-heading').removeClass('active');
            });

            var _second = 1000;
            var _minute = _second * 60;
            var _hour = _minute * 60;
            var _day = _hour * 24;

            function getTimeRemaining(endtime) {
               var t = Date.parse(endtime) - Date.parse(new Date());
               var seconds = Math.floor((t / 1000) % 60);
               var minutes = Math.floor((t / 1000 / 60) % 60);
               var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
               var days = Math.floor(t / (1000 * 60 * 60 * 24));
               return {
                  'total': t,
                  'days': days,
                  'hours': hours,
                  'minutes': minutes,
                  'seconds': seconds
               };
            }

            function initializeClock(endtime) {
               var daysSpan = $('.days');
               var hoursSpan = $('.hours');
               var minutesSpan = $('.minutes');
               var secondsSpan = $('.seconds');

               function updateClock() {
                  var t = getTimeRemaining(endtime);

                  daysSpan.html(t.days);
                  hoursSpan.html(('0' + t.hours).slice(-2));
                  minutesSpan.html(('0' + t.minutes).slice(-2));
                  secondsSpan.html(('0' + t.seconds).slice(-2));

                  if (t.total <= 0) {
                     clearInterval(timeinterval);
                  }
               }

               updateClock();
               var timeinterval = setInterval(updateClock, 1000);
            }

            window.onload = function () {
               var deadline = new Date(Date.parse(new Date()) + 21 * 24 * 60 * 60 * 1000);
               initializeClock(deadline);
            };

            $('#myCarousel').carousel({
               interval: 2000
            });
         });

      </script>
   </body>
</html>