<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    
</head>
<body style="background:black;">
    <div class="rating">
    <span class="fa fa-star" data-index="0"></span>
    <span class="fa fa-star" data-index="1"></span>
    <span class="fa fa-star" data-index="2" ></span>
    <span class="fa fa-star" data-index="3"></span>
    <span class="fa fa-star" data-index="4"></span>
    </div>
    <script src="jquery-3.6.0.min.js"></script>
    <script>
        var ratedindex=-1;
           $(document).ready(function(){
               resetcolor();
               if(localStorage.getItem('ratedindex')!=null)
                setstars(parseInt(localStorage.getItem('ratedindex')));
               $('.fa-star').on('click',function(){
                   ratedindex=parseInt($(this).data('index'));
                   localStorage.setItem('ratedindex',ratedindex);
               });
               $('.fa-star').ready(function(){
                   $('.fa-star').mouseover(function(){
                    resetcolor()
                       var currentindex= parseInt($(this).data('index'));
                       setstars(currentindex);
                    //    for(var i=0; i<= currentindex;i++)
                    //         $('.fa-star:eq('+i+')').css('color','yellow');
                   }); 
               });
               $('.fa-star').ready(function(){
                   $('.fa-star').mouseleave(function(){
                    resetcolor()
                       if(ratedindex!=-1)
                       setstars(ratedindex);
                    //    for(var i=0; i<= ratedindex;i++)
                    //         $('.fa-star:eq('+i+')').css('color','yellow');

                   }); 
               });

        });
        function setstars(max){
            for(var i=0; i<= max;i++)
                            $('.fa-star:eq('+i+')').css('color','yellow');
        }
        function resetcolor(){
            $('.fa-star').css('color','white');

        }
      
        
    </script>

</body>
</html>