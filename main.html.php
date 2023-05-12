<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://cdn.tiny.cloud/1/4dbjmkwgu616mywraq1qvbv42dx96hknymbewtwa300u1pdh/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="ratings.css">
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<style>
		.tox .tox-statusbar__branding svg {
			fill:white !important;
      cursor: default;
		}
	</style>
</head>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 
  <h1><b>MY BLOG</b></h1>
  <p>Welcome to the blog of <span class="w3-tag"><?php echo $name[0]; ?></span></p>
</header>
<!-- <div class="bell">
 <lottie-player src="https://assets9.lottiefiles.com/private_files/lf30_Xdydlg.json" class="bell" mode="bounce" background="transparent"  speed="0.75"  style="width: 45px; height: 45px;"  loop hover  ></lottie-player> -->
</div>
<a href="createpost.html"><button type="button" name="Add" value="Add" class="addbtn">Add</button></a>
<br>
<a href="about.html" class="menubtn">About</a>



<!-- Grid -->
<div class="w3-row">

<!-- Blog entries -->
<div class="w3-col l8 s12">
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <img src="http://natureinmind.ie/wp-content/uploads/2019/05/IMG_0242.jpg" alt="Nature" style="width:100%">
    <div class="w3-container ">
      <h3><b>Connecting to Care</b></h3>
      <button type="button" class="edtbtn" value="edit">Edit</button>
      <button type="button" class="delbtn" value="edit">Delete</button>
      <h5>This blog deals with true essence of nature. <span class="w3-opacity">April 7, 2022</span></h5>
    </div>

    <div class="w3-container">
    <p>The absence of a deep emotional connection between humans and the natural world is at the root of the environmental crisis.

Can you think of a place in nature that you know really well?

Close your eyes for a moment and see what comes up.

Can you visualise the place in exquisite detail? The sounds, the colours, the smells, the subtleties that only you know....</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
        <p><a href="http://natureinmind.ie/trying-searching-wanting/"><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></a></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag comment-box">0</span></span></p>
        </div>
<div class="cont">
<div class="stars">
<form action="">
  <input class="star star-5" id="star-5-2" type="radio" name="star"/>
  <label class="star star-5" for="star-5-2"></label>
  <input class="star star-4" id="star-4-2" type="radio" name="star"/>
  <label class="star star-4" for="star-4-2"></label>
  <input class="star star-3" id="star-3-2" type="radio" name="star"/>
  <label class="star star-3" for="star-3-2"></label>
  <input class="star star-2" id="star-2-2" type="radio" name="star"/>
  <label class="star star-2" for="star-2-2"></label>
  <input class="star star-1" id="star-1-2" type="radio" name="star"/>
  <label class="star star-1" for="star-1-2"></label>
  <br>
  <div class="rev-box">
    <input type="text" id="review">
    <button type="button" class="subbtn" value="edit">Submit</button>
    <label class="review" for="review"><span><b>Brief Review</b></span></label>

  </div>
</form>
</div>
</div>

        
      </div>
    </div>
  </div>
  <hr>

  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
  <img src="http://natureinmind.ie/wp-content/uploads/2016/12/16-12-23-Bundoran-Sunset.jpg" alt="Norway" style="width:100%">
    <div class="w3-container">
        <h3><b>Seeing with “fresh eyes” – A deeper nature experience </b></h3>
        <button type="button" class="edtbtn" value="edit">Edit</button>
        <button type="button" class="delbtn" value="edit">Delete</button>
        <h5> Experience with nature <span class="w3-opacity">May 15, 2022</span></h5>
    </div>

    <div class="w3-container">
      <p>Around the time I first learned how to meditate, something amazing happened to me. It happened one day, quite spontaneously. 

I was working as a lawyer at the time and I used to walk down a little lane way to the train station on my commute to work. It’s not an especially beautiful lane way – a concrete footpath, metal gates on one side and some shrubs and bushes on the other side. I must have walked this exact same route a thou...</p>
      <div class="w3-row">
        <div class="w3-col m8 s12">
          <p><a href="http://natureinmind.ie/connecting-to-care/"><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></a></p>
        </div>
        <div class="w3-col m4 w3-hide-small">
          <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge w3-tag comment-box">2</span></span></p>
        </div>
<div class="cont">
<div class="stars">
<form action="">
  <input class="star star-5" id="star-5-2" type="radio" name="star"/>
  <label class="star star-5" for="star-5-2"></label>
  <input class="star star-4" id="star-4-2" type="radio" name="star"/>
  <label class="star star-4" for="star-4-2"></label>
  <input class="star star-3" id="star-3-2" type="radio" name="star"/>
  <label class="star star-3" for="star-3-2"></label>
  <input class="star star-2" id="star-2-2" type="radio" name="star"/>
  <label class="star star-2" for="star-2-2"></label>
  <input class="star star-1" id="star-1-2" type="radio" name="star"/>
  <label class="star star-1" for="star-1-2"></label>
  <br>
  <div class="rev-box">
    <input type="text" id="review">

    <label class="review" for="review"><span><b>Brief Review</b></span></label>
  </div>
</form>
</div>
</div>
      </div>
      
    </div>
  </div>
<!-- END BLOG ENTRIES -->
</div>

<!-- Introduction menu -->
<div class="w3-col l4">
  <!-- About Card -->
  <div class="w3-card w3-margin w3-margin-top">
  <img src="https://th.bing.com/th/id/OIP.3EwQQrCFFDFlhoGzcBoLeQHaF1?pid=ImgDet&rs=1" style="width:100%">
    <div class="w3-container w3-white">
      <h4><b>My Name</b></h4>
      <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam blog. I want to share my world with you.</p>
    </div>
  </div><hr>
  
  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Popular Posts</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/63737f07-4eee-4ae6-8545-4b22f79c8fa0/d7eilgj-9376ac1d-2fc0-4853-9aa8-266003b616cc.jpg/v1/fill/w_894,h_894,q_75,strp/landscape_square_by_comsic-d7eilgj.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwic3ViIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl0sIm9iaiI6W1t7InBhdGgiOiIvZi82MzczN2YwNy00ZWVlLTRhZTYtODU0NS00YjIyZjc5YzhmYTAvZDdlaWxnai05Mzc2YWMxZC0yZmMwLTQ4NTMtOWFhOC0yNjYwMDNiNjE2Y2MuanBnIiwid2lkdGgiOiI8PTg5NCIsImhlaWdodCI6Ijw9ODk0In1dXX0._WahLDsv4kiMgfIa06D4M8hYRUu6HyJYo15UMA2PZxw" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Beauty of nature</span><br>
        <span>Mother nature at its peak</span>
      </li>
      <li class="w3-padding-16">
        <img src="https://th.bing.com/th/id/R.5715b17a82698f6c60032b4ed795123f?rik=XhIEnUdhXBp6yw&riu=http%3a%2f%2fwww.fubiz.net%2fwp-content%2fuploads%2f2014%2f04%2f1.jpg&ehk=5cNE0GwmY6sZVoojJtJE8mlBuWKGki1KWGTKcQbVu0Q%3d&risl=&pid=ImgRaw&r=0" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">True wildlife</span><br>
        <span>Majestic beasts</span>
      </li> 
      <li class="w3-padding-16">
        <img src="https://i2.wp.com/theverybesttop10.com/wp-content/uploads/2015/05/Top-10-Crazy-and-Unusual-Square-Foods-7-510x541.jpg?resize=600%2C636" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Street foods</span><br>
        <span>Satisfying tatste buds food</span>
      </li>   
      <li class="w3-padding-16 w3-hide-medium w3-hide-small">
        <img src="https://i.pinimg.com/originals/23/86/00/238600b83026a472e6287e4153faa97e.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Flavors of america</span><br>
        <span>Heritage of the states</span>
      </li>  
    </ul>
  </div>
  <hr> 
 
  <!-- Labels / tags -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Tags</h4>
    </div>
    <div class="w3-container w3-white">
    <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
      <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
    </p>
    </div>
  </div>
  

  <!-- <textarea>Welcome to the blog!</textarea> -->
<!-- END Introduction Menu -->
</div>

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
  <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
  <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
  <p>Developed by sandesh</a></p>
</footer>
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script>
$('.w3-tag').on("click",function(){
    $(this).addClass("w3-black");
    $(this).removeClass("w3-light-grey");
    $(this).siblings().addClass("w3-light-grey");
});
</script>
<script src="main.js"></script>
<script src="editor.js"></script>
</body>
</html>
