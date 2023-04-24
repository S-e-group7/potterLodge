$('document').ready(()=>{


    $('.search_result').load('fetchall.php')

    $('#query').keyup(()=>{
        var key=$('#query').val();
        $('.search_result').load('fetchdetails.php',{key:key})
    })
   
})