/**
 * Created by BC on 22.07.2015.
 */
$(function () {
    $('[data-toggle="popover"]').popover({html:true})
})

$(function(){
    $('#btnSuper').click(function(){
        window.location.href = 'this.form.action + "-" + this.form.search.value.replace(/[^\w\а-яё\А-ЯЁ]+/g,"_")+ ".html"';
    });
});