<!DOCTYPE html>
    <html lang="en">
    <head> 
        <meta charset="UTF-8">
        <meta name-"viewport" content-"width-device-width, initial-scale-1, shrink-to-fit-no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <title>Han Solo</title>
        <link rel="stylesheet"  href="styles.css">
    </head>
    <body onload="askName()"> 
        <nav style="text-align: center;"background-color: gray;> 
            <a href="index.html" title-"Home" target = "_self" id-"home"> Home</a>
            <a href="about.html" title-"About" target ="_about" id-"about">About</a>
            <a href="portfolio.html" title-"Portfolio" target ="_Portfolio" id-"portfolio">Portfolio</a>
        </nav>
        
    <header>
        <h1 class="intro">Welcome to my Site</h1>
   
        <form action="https://www.timpephotos.com/"
        method="get" target="_blank">
         <div>
            <label for="name">Full Name:</label>
        </div>
            <input type="text" name="name" id="name">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="eamil">Email:</label>  
        <input type="text" name="email"id="email">
        <br>
        <label for ="phone">Best Number to reach you at:</label><div>
        <input type="text" name="phone" id="phone"></div>
        
        <label for="comments">Comments:</label><br />
        <textarea name="comments" id="comments"colspan="50" 
        rowspan="10"> Type your Comments here.</textarea>
        <br>
        <p> May we contact you?</p>
        <input type="radio" name="contact-back" id="yes"
        value="Yes" />
        <label for="Yes">Yes</label>
        <input type="radio" name="contact-back" id="no"
        value="No"/>
        <label for="No">No</label>
        
        <button> Click Here! </button>

         <p> Best Contact Methods:</p>
        <input type="checkbox" id="contact-phone">
        <label for="contact-phone">Phone</label>
        <input type="checkbox" id="contact-text">
        <label for="contact-text">Text</label>
        <input type="checkbox" id="contact-email">
        <label for="contact-email">Email</label>


        </form>
</header>

    <h2 class="top">Han Solo</h2>
    <h2> Han SOLO is the BEST!</h2>
        <hr/>
    <div  id="home" style="background-color: #8db8cd">
    <p style="color: black;"  class="box-1">
        This is a story of a place long long long ago. Han Solo is a HERO 
    </p>
    

    <div class="box-2"
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
    <br> Quos culpa minus quaerat fugit perferendis totam nobis quidem? 
    <br>Dolorem voluptates consectetur explicabo obcaecati perferendis.,
    <br> Sed enim totam veritatis at! Libero, voluptatem.       
    <?php 
$skills = ["HTML", "CSS", "JavaScript", "PHP", "React"];
$names = ["kevin", "Robert"];


function newList($arr) {
    echo "<ul>";
    foreach ($arr as $value) {
    echo "<li>" . $value . "</li>";
    }
    echo "</ul>";
}
newList($skills);
?>

   </p>
</div>
    <img
    src="https://tinyurl.com/yc4pxphf" 
        alt="Han Solo"    
    />
    
    <table>
            <tr>
              <th> Actors Real Name</th>
              <th>Character Name</th>
              <th> Year of Movie</th>
            
            </tr>
            <tr>
             <td>Harrison Ford</td> 
             <td style="text-align:left;">Han Solo</td> <td>1977</td>
         </tr>
         <tr>
            <td>Harrison Ford</td> 
            <td>Indiana Jones </td>  <td>1981</td>          
            </tr>
            

 
 

        </table>

    

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
         crossorigin="anonymous"></script>

        
        <script src="/JavaScript/script.js"></script>
</body>
</html>
