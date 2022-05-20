        async function subsjs(e)
        {
            e.preventDefault();

            let response = await fetch('/assets/e-subs.php', {
                method: 'POST',
                body: new FormData(form1) 
            });
        document.querySelector('.modal2').classList.add('active');
        document.querySelector('.js-overlay-modal').classList.add('active');
        };

       
{ form1.onsubmit = subsjs;
       }
!function(e){"function"!=typeof e.matches&&(e.matches=e.msMatchesSelector||e.mozMatchesSelector||e.webkitMatchesSelector||function(e){for(var t=this,o=(t.document||t.ownerDocument).querySelectorAll(e),n=0;o[n]&&o[n]!==t;)++n;return Boolean(o[n])}),"function"!=typeof e.closest&&(e.closest=function(e){for(var t=this;t&&1===t.nodeType;){if(t.matches(e))return t;t=t.parentNode}return null})}(window.Element.prototype);



document.addEventListener('DOMContentLoaded', function() {




       closeButtons = document.querySelectorAll('.js-modal-close');

   closeButtons.forEach(function(item){

      item.addEventListener('click', function(e) {
         var parentModal = this.closest('.modal');

         parentModal.classList.remove('active');
         document.querySelector('.js-overlay-modal').classList.remove('active');
      });

   }); 


    document.body.addEventListener('keyup', function (e) {
        var key = e.keyCode;

        if (key == 27) {

            document.querySelector('.modal.active').classList.remove('active');
            document.querySelector('.overlay').classList.remove('active');

        };
    }, false);


    document.querySelector('.overlay').addEventListener('click', function() {
        document.querySelector('.modal.active').classList.remove('active');
        this.classList.remove('active');
    });




});