$(document).ready(function () {

   $('.col-a').mouseenter(function () {
      $(this).children('.main-page-custom').addClass("hover_active");
   });
   $('.col-a').mouseleave(function () {
      $(this).children('.main-page-custom').removeClass("hover_active");
   });


   // подписка на рассылку без перезагрузки страницы agyakunin
   $('.main-page-form button').click(function (e) {
      e.preventDefault();
      var email = $('.main-page-form input').val();
      if (email == '') {
         $('#distribution-error').css('opacity', '1');
      } else {
         $.post('subscription.php', {
               email: email,
            },
            function (data) {

               var email_id = getUrlVars()["email_id"]; // нужно получить гет парамметр со стороны сервера

               function getUrlVars() {
                  var vars = {};
                  var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (m, key, value) {
                     vars[key] = value;
                  });
                  return vars;
               }

               if (!email_id == 1) { // если приходит 1 то всё норм, если нет то не очень
                  $('#distribution-error').css('opacity', '1').text('Что-то не так, попробуйте ещё раз...');

               } else {
                  $('#distribution-error').css('opacity', '1').text('Ваша зявка принята!');
               }

            });
      }
   }); // end click

   $('.main-page-form input').on('focus', function () {
      $('#distribution-error').css('opacity', '0');
   }) // убираем информацию об ошибке при фокусе на ней

   






});