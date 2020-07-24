<style type="text/css">

html{
	scroll-behavior: smooth;
}



	*{
		margin: 0; padding: 0; box-sizing: border-box;
		font-family: 'Merienda One', cursive; 
			}

 .nav_style{
 	background-color: purple;
 } 

.nav_style a{
	color: white;
}


/////////////cat////////////////

.cat{
	height: 450px;
	width: 100%;

}

.rightside h1{
	font-size: 2.5rem;
}

.covid-19 img{
	animation: corona 3s linear infinite;
}

 @keyframes corona{
 	0% {transform: rotate(0); 	}
 	100%{transform: rotate(360deg);}
 }

.leftside img{
	animation: gocorona 5s linear infinite;
}

@keyframes  gocorona{
	0%{transform: scale(.75);}
	20%{transform: scale(1);}
	40%{transform: scale(.75);}
	60%{transform: scale(1);}
	80%{transform: scale(.75);} 
	100%{transform: scale(.75);}
}


.d-flex{
	justify-content: space-around;
}
.update h3{ color: #ff7675; }

.update h1{ font-size: 2rem; text-align: center; }



.sub_section{
	background-color:#fbfafd;
}


</style>