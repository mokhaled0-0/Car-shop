<?php 
require 'header.php';
?>
    <link rel="stylesheet" href="css/home1.css">
    <link rel="stylesheet" href="css/animate.css">
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr{background-color: white;}

#customers tr:hover {background-color: beige;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:black;
  color: white;
}
.title{
    display: flex;
    justify-content: center;
    color: #3a6cf4;
    font-size: 2.2em;
    font-weight: 800;
    margin-bottom: 30px;
}
.content{
    display: flex;
    justify-content: center;
    flex-direction: row;
    flex-wrap: wrap;
}
.card{
    background-color:black;
    width: 20em;
    box-shadow: 0 5px 25px ;
    border-radius: 10px;
    padding: 25px;
    margin: 15px;
    transition: 1s ease;
}
.card p{
    text-align: left;
}
.card:hover{
    transform: scale(1.1);
}
.icon{
    color: #3a6cf4;
    font-size: 8em;
    text-align: center;
}
.info{
    text-align: center;
}
.info h3{
    color: #3a6cf4;
    font-size: 1.2em;
    font-weight: 700;
    margin: 10px;
}
body {
    background-image: url("collection.jpg");
    background-size: 100% 100%;
    background-position: center;
    text-align: center;
    background-attachment: fixed;
}

.cards {
    background-image: url ("collection.JPG") no-repeat;
    background-size: 100% 100%;
    background-position: center;
    background-attachment: fixed;
}
</style>
<script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"3ef3051f0a5cabd075092b0a4c5c690c7","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>
<body>
    
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="mercedes1.jpg" height="500em" class="d-block w-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:white;" >Mercedes benz</h5>
        <p style="color:white;"> A greate comany that will change your life.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="pics\kya-lynch-oysJqn42_Ms-unsplash.jpg"   height="500em" class="d-block w-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:white;">BMW</h5>
        <p style="color:white;"> Run as fast as possible.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="pics\lisa-risager-ljLO9eSZmyA-unsplash.jpg"  height="500em" class="d-block w-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 style="color:white;">Fiat</h5>
        <p style="color:white;">luxary Dark horse.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  </div>


    <h1 class="tips"> tips</h1>
    <section class="cards" id="services">
        <div class="content">
            <div class="card">
                <div class="info">
                    <h3>1. Inspect your vehicle regularly</h3>
                    <p>Take a walk around your vehicle at least once every week. While you take a walk, inspect your car and look for body damage. You should also inspect your tyres for any wear, punctures or cuts
                        and test every lock, window and even the sunroof.</p>
                </div>
            </div>
            <div class="card">
                <div class="info">
                    <h3>2.Check your air filter</h3>
                    <p>A lot of car problems arise when your air filters are clogged or if they fit loosely. Air filters block dust, pollen and other contaminants to keep your engine healthy. But when dirty, the air filter can reduce the airflow into the engine, robbing your
                        vehicle of power, reducing performance and fuel economy. It’s recommended that you replace your air filter every 12,000 miles.</p>
                </div>
            </div>
            <div class="card">
                <div class="info">
                    <h3>3.Check your tyre pressure regularly</h3>
                    <p>Tyre pressure can impact the fuel economy. It also affects the comfort and handling. Your car’s owner manual will have the recommended tyre pressure mentioned on the owner’s manual. Generally, the tyres pressure check should be done every week.</p>
                </div>
            </div>
            <div class="card">
                <div class="info">
                    <h3>4.Clean your engine’s exterior</h3>
                    <p>It’s equally important to clean your car’s exterior engine as much as it’s important to keep the interior engine clean. If not cleaned properly, even minor debris in the wrong place can do damage to your engine. For example, while checking your brake
                        fluid, some grease might fall into it. Due to this, there can be damage to the brake. Thus, ensure you check your brake fluid levels at least once every month.</p>
                </div>
            </div>
            <div class="card">
                <div class="info">
                    <h3>5.Protect your headlights</h3>
                    <p>Turn on your headlights once a month when you park in front of a flat surface to check if both headlights are working properly and well-positioned. Visually inspect both turn signals by walking around your car and see and your parking lights. You can
                        even ask a friend to stand behind the car while you engage the brakes to be certain that your brake lights are functional.</p>
                </div>
            </div>
            <div class="card">
                <div class="info">
                    <h3>6.Check your battery</h3>
                    <p>Your car battery is one of the most important components required for it to run. The car’s battery is responsible for providing a large amount of electrical current for the starter, engine and other electronic accessories in the vehicle. Extreme temperatures
                        affect the performance of the battery so regular battery testing will ensure that the battery will perform when you need it to.</p>
                </div>
            </div>
            <div class="card">
                <div class="info">
                    <h3>7.Change your spark plugs</h3>
                    <p>Spark plugs could affect the efficiency of your car’s engine. They’re responsible for igniting the gas and air mixture that ultimately powers your vehicle. Thus, when the spark plugs don’t function properly, it causes the engine to lose power and it won’t
                        function at its optimal capacity. So get a professional to check your spark plugs so that those plugs are replaced if faulty.</p>
                </div>
            </div>
            <div class="card">
                <div class="info">
                <h3>8.Get your tyres rotated and balanced</h3>
                    <p>Tyre rotation is important to maintain the safety and performance of your vehicle. It gives your vehicle a quicker steering response and a smoother ride of course. Rotating your tyres gives them a chance to even out their wear and helps extend the life
                        of the tyres. Ensure that you check the tyre pressure of your car once every month and even before you take long trips or when you carry an extra load in your car. Your car’s manual will tell you how much air pressure the car tyres
                        require.</p>
                </div>
            </div>
            <div class="card">
                <div class="info">
                    <h3>9.Ensure your cooling system works</h3>
                    <p>Your car’s cooling system and radiator need to be clean to work efficiently and effectively. Your car’s radiator builds up a deposit with normal wear and tear, which can disrupt the cooling system. With a radiator flush, you can keep your cooling system
                        in shape quickly and inexpensively. You can take a look at your car’s manual to find out if you need to flush the radiator once a year or after every two years.</p>
                </div>
            </div>
            <div class="card">
                <div class="info">
                    <h3>10.Know the meaning of different warning light indicators</h3>
                    <p>Almost all cars have elaborate systems of sensors and warning lights that tell you everything from whether you forgot to replace the gas cap to the fact that one of your tyres is low on air. Learn what each of your car’s warning lights means and how to
                        fix it. Your owner’s manual can be of great help here. If any light flashes and you can’t immediately pinpoint and fix the problem, take your vehicle to a trusted mechanic right away.</p>
                </div>
            </div>
        </div>
    </section>

  
  <script src="wow/wow.min.js"></script>
  <script> new WOW().init(); </script>
</div>
<div>
  <h1 style = "color:gold;" > 
            ORDER A CAR NOW!
        </h1>
        <p id = "GFG_UP" style =
            "font-size: 19px; font-weight: bold;">
        </p>
          
        <button style="background-color: gold;" onclick = "GFG_Fun()">
            click here
        </button>
          
        <p id = "GFG_DOWN" style =
            "color:red; font-size: 24px; font-weight: bold;">
        </p>
          
        <script>
            var el_up = document.getElementById("GFG_UP");
            var el_down = document.getElementById("GFG_DOWN");
              
            function GFG_Fun() {
                  
                // Create anchor element.
                var a = document.createElement('a'); 
                  
                // Create the text node for anchor element.
                var link = document.createTextNode("This is link");
                  
                // Append the text node to anchor element.
                a.appendChild(link); 
                  
                // Set the title.
                a.title = "This is Link"; 
                  
                // Set the href property.
                a.href = "https://www.mobile.de/?lang=en"; 
                  
                // Append the anchor element to the body.
                document.body.appendChild(a); 
            }
        </script>
        <br>
</div>
<div><h6 style="color: white;">OUR AUTHORIZED DISTRIBUTORS</h6></div>
<center>
<table id="customers">
<tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Mercedes</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>BMW</td>
    <td>Christina Berglund</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>FIAT</td>
    <td>Francisco Chang</td>
    <td>Germany</td>
  </tr>
  </table>
</center>

<video width="1100" controls>
  <source src="output.mp4" type="video/mp4">
  <source src="output.ogg" type="video/ogg">
  Your browser does not support HTML video.
</video>


<p id="date_time_button" style =
            "color:red; font-size: 24px; font-weight: bold;" ></p>
<button style="background-color:pink"onclick="document.getElementById('date_time_button').innerHTML = Date()">
Click and see your current transent Date and Time.</button>

</body>
<?php require 'footer.php'?>
     


<script> 
  var today = new Date();
  var day = today.getDay();
  var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
  console.log("Today is : " + daylist[day] + ".");
  var hour = today.getHours();
  var minute = today.getMinutes();
  var second = today.getSeconds();
  var prepand = (hour >= 12)? " PM ":" AM ";
  hour = (hour >= 12)? hour - 12: hour;
  if (hour===0 && prepand===' PM ') 
  { 
  if (minute===0 && second===0)
  { 
  hour=12;
  prepand=' Noon';
  } 
  else
  { 
  hour=12;
  prepand=' PM';
  } 
  } 
  if (hour===0 && prepand===' AM ') 
  { 
  if (minute===0 && second===0)
  { 
  hour=12;
  prepand=' Midnight';
  } 
  else
  { 
  hour=12;
  prepand=' AM';
  } 
  } 
console.log("Current Time : "+hour + prepand + " : " + minute + " : " + second);
</script>
