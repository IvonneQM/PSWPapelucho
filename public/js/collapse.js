/**
 * EFECTO PARA FLECHAS EN ACORDEON
 */






/*$(function(){
    var Accordion = function(el, multiple){
        this.el = el || {};
        this.multiple = multiple || false;

        var links = this.el.find('.accordion-item-title');
        links.on('click',{el: this.el, multiple: this.multiple}, this.dropdown)

    }

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el,
        $this = $(this),
        $next = $this.next();

        $next.slideToggle();
        $this.parent().toggleClass('open');

        if(!e.data.multiple){
            $el.find('.accordion-item-content').not($next).slideUp().parent.removeClass('open');
        };

        }

    var accordion = new Accordion($('#accordion'),false);

    });*/

/*{
    $('.accordion-item-title i').click(function(){

        $(this).closest('.accordion').children('.accordion-item-content').slideUp(400);

        if($(this).parent().next('.accordion-item-content').is(':visible')) {
            $(this).parent().next('.accordion-item-content').slideUp(400);
        }else{
            $(this).parent().next('.accordion-item-content').slideDown(400);
        }
    });
});


$function()*/
