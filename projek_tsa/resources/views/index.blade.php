
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Web | Portofolio</title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <nav>
                <ul>
                    <li><a href="https://www.educastudio.com/contact-us">Daftar Produk</a></li>
                    <li><a href="">News</a></li>
                    <li><a href="">Progtam</a></li>
                    <li><a href="">About US</a></li>   
                    <li><a href="">Contact US</a></li>  
                </ul>
            </nav>
        </div>
        <main class="content">
              <section class="hero">
                  <img src="online.png" alt="">
              <div class="hero-content">
                  <h1>LARAVEL</h1><br></h2>Routing dan Controller</h2><br><br>   
<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, aperiam dolore assumenda velit repellendus recusandae magni consectetur mollitia facere incidunt inventore perspiciatis  debitis doloribus ullam minima culpa voluptatem. Repellendus, option.</p>
<a href="" class="action-btn">Profile Saya</a>
              </div>
                </section>
        </div>
        <div class="footer">
            <footer>
            <ul>
                <li><img src="instagram.png" alt=""><p>Instagram</p></a></li>
                <li><img src="facebook.png" alt=""><p>Facebook</p></a></li>
                <li><img src="twitter.png" alt=""><p>Twitter</p></a></li>
                <li><img src="telegram.png" alt=""><p>Telegram</p></a></li>
            </ul>
            </footer>
        </div>
    </div>    
        <style>
            {
      margin: 0;
      padding: 0;
 
  }
 
  body {
      background-color: #eff1f2;
      font-family: sans-serif;
  }
 
.content {
    grid-area: content;
}
.sidebar{
    grid-area: sidebar;
    background: linear-gradient(to right, rgba(200,107,142,1), rgba(218,105,250,1),
     rgba(110,125,253,1)) ;
    justify-content: center;
}
.footer {
    grid-area: footer;
    background: white;
}
.container {
    font-size: 1.5em;
    width: 100%;
    height: 100;
    height: 100vh;
    display: grid;
    grid-template-areas: "sidebar" "content" "footer";
    grid-template-columns: 1fr;
    grid-template-rows: 130px 800px 250px;
 
}
 
.content, .sidebar, .footer{
    padding: 1em;
}
 
nav ul {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: space-between;
    text-align: center;
}
 
nav li{
    list-style: none;
    padding: 1em 0;
}
 
nav li a {
    color: white;
    font-weight: 700;
    opacity: 0.6;
    text-decoration: none;
    transition: 0.3s;
}
 
nav li a:hover {
    opacity: 1;
}
.hero {
    max-width: 90 px;
    margin: 0 auto;
    text-align: center;
}
 
.hero img {
    width: 200px;
}
 
.hero h1 {
    font-size: 2em;
    font-weight: 300;
    color: #373046;
}
 
.hero p {
    font-weight: 300;
    line-height: 1.3em;
    color: #98aBad;
}
 
.action-btn {
    display: inline-block;
    text-decoration: none;
    color: white;
    font-weight: 700;
    background: #567bfb;
    padding: 0.5em 2em;
    border-radius: 60px;
    margin: 1em 0;
    transition: 0.3s;
}
 
footer ul {
max-width: 640px;
margin: 2em auto;
padding: 0;
text-align: center;
display: flex;
flex-direction: row;
 
}
 
footer ul li {
    list-style: none;
    align-self: flex-end;
}
 
footer ul li a{
    text-decoration: none;
    color: #c1c6ce;
}
 
footer ul li img {
    width: 30%;
}
 
footer p {
    font-size: 0.8em;
}
 
@media (min-width: 1040px){
    .container {
        grid-template-areas:"sidebar content" "sidebar footer" ;
        grid-template-rows: 1fr auto ;
        grid-template-columns: 300px 1f;
    }
 
    nav ul{
        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }
    .sidebar{
        background: linear-gradient( rgba(200,107,142,1), rgba(218,105,250,1),
        rgba(110,125,253,1)) ;
        padding-top: 10em;
    }
    .hero{
        text-align: left;
        margin: 7em 0;
    }
    .hero img {
        width: 200px;
        float: right;
    }
    .hero h1{
        font-size: 3em;
    }
    .hero p{
        width: 60%;
    }
    footer ul {
        max-width: 900px;
        margin: 0 auto;
        padding: 1em 0;
    }
 
    footer ul li a img {
        width: 20%;
    }
}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>