$(function(){
    $('.home-case-items').hide();
    $('.home-case-items:first').show();
    $('.home-case-list li').hover(function(){
        var item_num = $(this).attr('num') - 1;
        console.log(item_num);
        $('.home-case-items').hide();
        $(".home-case-items").eq(item_num).show();
    })
})
