/*$(document).ready(function (){

});*/

// import {functionsIn} from "lodash/object";

$(function () {
    /*$('#main-heading').text('Хай')*/

    /*var tagP = $('#main-heading').hide(3000)
    alert(tagP);*/

    /*var tapP = $('.container div>p')
    tapP.hide().text('Новий текст ну як би').show(2000)*/

    /*$('main div > p').hide(1000).show(2000)
    var w = $('nav .btn').width()
    alert(w)
    var h = $('nav .btn').height()
    alert(h)*/

    /*function widthAndHeight(element) {
        var className="."+element // container
        var w = $(className).width()
        var h = $(className).height()
        $('.container div>p').text('Ширина: '+w+'; Висота: '+h)
    }
    widthAndHeight('container')*/


    /*alert($('.container h1').html('Щось там і тут.')) // можемо міняти вміст їхній*/

    // $('.container h1').fadeOut(2000).fadeOut(3000)
    /*function elementOut(element, time) {
        if (time > 5000 || time < 1000 || isNaN(time)) {
            return false
        } else {
            let className = element
            $(className).fadeOut(time).fadeIn()
        }
    }

    elementOut('.container h1', 2000)*/
    /* let src = $('.container h1').attr('main')
     alert(src)*/

    /*function changeAttr(element, newAttr, newValue) {
        let className = "." + element
        $(className).attr(newAttr, newValue)
    }
    changeAttr('.container div', 'title', 'якийсь новий текст до картинки')*/

    //  $('.container h1').removeClass('bor')

    /*$('.container div>p').animate({
        'color':'#ff0000',
        'font-size':'26px',
        'padding':'12px'
    },2000)
    $('.container h1').animate({
        'font-size':'15px',
        'padding':'16px'
    },2000,function(){
        alert('Анімація працює')
    })*/

    // alert($('li').length)
    /*var mainText = $('.container h1').clone()
    $('body').append(mainText)*/
    /*$('.icons img').each(function(){
        if($(this).attr('src')=='img/icon3.png'){
            $(this)
        }
    })*/
    // $('header, a').css('background', '#222')
    /*$('header a').mouseout(function(){
        alert('Подія ')
    })*/
    /*$(window).scroll(function(){
        alert('What it`s')
    })*/
    /*$('.text-white .lead').click(function (){
        let clone = $(this).clone()
        $(this).after(clone)
    })
    var link = $('li a')
    link.mouseover(function(){
        $(this).addClass('bor')
    })
    link.mouseout(function(){
        $(this).removeClass('bor')
    })*/
    /*link.hover(
        function(){
        $(this).addClass('bor')
    },  function(){
        $(this).removeClass('bor')
    })*/
    /*$('.container').click(function(e){
        alert(e.altKey)
    })*/
    /*$('.container').click(function(e){
        e.preventDefault()
    })*/
    /*$('.container').click(function(e){
        var answer = confirm('Ви хочете віправити дані.')
        if(!answer){
            e.preventDefault()
        }
    })*/
    $('.small a').click(function(e){
        if($('.big img').attr('src')!==$(this).attr('href')) {
            $('.big img').hide().attr('src', $(this).attr('href')).fadeIn(1000)
        }
        e.preventDefault()
    })
    $('.button').click(function(){
        $('.gallery').slideToggle(500)
        if($('.button').text()=='-'){
            $('.button').text('+')
        } else {
            $('.button').text('-')
        }
    })
    $('.small a img').click(function (){
        $('.small a img').fadeTo(500,1).css({
            'border':'none'
        })
        $(this).fadeTo(500,0.6).css({
            'border':'1px dotted red'
        })
    })
    // $(':checkbox').fadeOut(1000)
    // $(':submit').fadeOut(1000)
    // $(':input').fadeOut(1000)
    // $(':reset').fadeOut(1000)
    // $(':text').fadeOut(1000)
    // $(':password').fadeOut(1000)
    // $('.form1 :checkbox:checked').fadeOut(1000)
    /*$(':submit').click(function (){
        var value = $(':checkbox:checked').each(function(){
            var value = $(this).val()
            alert(value)
        })
    })*/
    /*$('.form1').submit(function (e){
        if($('.text1').val()==""){
            e.preventDefault()
            alert('Ви не заповнили поля')
        }
    })*/
    /*$('.text1').focus(function(){
        $(this).addClass('bor')
    })
    $('.text1').blur(function(){
        $(this).removeClass('bor')
    })*/
    $('#select1').change(function () {
        let v = $('#select1 :selected').val()
        if (v == 1) {
            $('#select2').html('<option value="1">Значення номер 1</option><option value="2">Значення номер 2</option>')
        } else if (v == 2) {
            $('#select2').html('<option value="1">Значення номер 1</option><option value="2">Значення номер 2</option>' +
                '<option value="3">Значення номер 3</option>')
        } else if (v == 3) {
            $('#select2').html('<option value="1">Значення номер 1</option><option value="2">Значення номер 2</option>' +
                '<option value="3">Значення номер 3</option><option value="4">Значення номер 4</option>')
        } else {
            $('#select2').html('<option value="1">Значення номер 1</option>')
        }
    })
    $(':submit').click(function(e){
        $('.text2').attr('disabled', 'disabled')
        e.preventDefault()
    })
    $(':reset').click(function (e){
        $('text2').removeAttr('disabled')
        e.preventDefault()
    })
    $('.form1 select').click(function (){
        $(this).css('background-color', 'pink').css('border', '5px dotted red')
    })
})

