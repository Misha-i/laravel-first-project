$(function(){
    let xhttp = new XMLHttpRequest()

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200) {
            myFunction(this.responseText)
        }
    }
    xhttp.open('GET', 'https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_siblings2', true)
    xhttp.send()

    function myFunction(data){
        console.log(data)
    }
})
