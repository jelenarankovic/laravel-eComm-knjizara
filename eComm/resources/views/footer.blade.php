<div style="clear:both"class="panel panel-default">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
body{
	line-height: 1.5;
	font-family: 'Poppins', sans-serif;
}
*{
	margin:0;
	padding:0;
	box-sizing: border-box;
}
.container{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}

.footer{
	background-color: #11406b;
    padding: 70px 0;
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
}
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
}
}
  </style>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
 </head>
 
    <body class="footer-body">
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>“So many books, so little time.”</h4>
            <h3>― Frank Zappa</h3>
          </div>
          <div class="footer-col">
            <h4>Pronadjite nas</h4>
            <ul>
              <li>Knez Mihajlova 25</li>
              <li>11000 Beograd, Srbija></li>
              <li>Tel: +381 11 3087-515</li>
              <li>Fax: +381 11 3087-614</li>
              <li>office@akiba.com</li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Specijal</h4>
            <ul>
              <li><a href="https://sr.wikipedia.org/wiki/%D0%90%D1%83%D1%82%D0%BE%D0%B1%D0%B8%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%98%D0%B0_(%D0%91%D1%80%D0%B0%D0%BD%D0%B8%D1%81%D0%BB%D0%B0%D0%B2_%D0%9D%D1%83%D1%88%D0%B8%D1%9B)">Preporuka 1</a></li>
              <li><a href="https://www.goodreads.com/book/show/91767.Frida">Preporuka 2</a></li>
              <li><a href="https://en.wikipedia.org/wiki/Into_the_Wild_(book)">Preporuka 3</a></li>
              <li><a href="https://www.amazon.com/Napoleon-Life-Andrew-Roberts-ebook/dp/B00INIX">Preporuka 4</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Kontaktirajte nas</h4>
            <div class="social-links">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
   </footer>
  </body>
 

</div>