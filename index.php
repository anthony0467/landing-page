<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--ICONE FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js" defer></script>
    <title>Document</title>
</head>

<body>
    <?php include('db-functions.php'); ?>
    <header>

        <!--BARRE DE NAVIGATION-->

        <nav class="flex space-around">
            <h2>Kucra</h2>
            <ul class="flex">
                <li><a class="color-white" href="#">HOME</a></li>
                <li><a class="color-white" href="#first_section">FEATURES</a></li>
                <li><a class="color-white" href="#client_section">CLIENT</a></li>
                <li><a class="color-white" href="#pricing_section">PRICING</a></li>
                <li><a class="color-white" href="#footer">FAQ</a></li>
                <li><a class="color-white" href="#second_section">ABOUT</a></li>
                <li><a class="color-white" href="#blog_section">BLOG</a></li>
                <li><a class="color-white" href="#footer">CONTACT</a></li>
            </ul>
            <ul class="flex">
                <li><a class="color-white" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a class="color-white" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a class="color-white" href="#"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </nav>

        <!--BARRE DE NAVIGATION MOBILE-->

        <div class="topnav">
            <a href="#home" class="active">Kucra</a>
            <ul id="myLinks" class="flex column flex-center">
                <li><a class="color-white" href="#">HOME</a></li>
                <li><a class="color-white" href="#first_section">FEATURES</a></li>
                <li><a class="color-white" href="#client_section">CLIENT</a></li>
                <li><a class="color-white" href="#pricing_section">PRICING</a></li>
                <li><a class="color-white" href="#footer">FAQ</a></li>
                <li><a class="color-white" href="#second_section">ABOUT</a></li>
                <li><a class="color-white" href="#blog_section">BLOG</a></li>
                <li><a class="color-white" href="#footer">CONTACT</a></li>
                <li class="flex">
                    <a class="color-white" href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a class="color-white" href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a class="color-white" href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
            </ul>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
          </div>

        <!--SECTION TEXT + IMAGE-->

        <div class="container flex column-query">

            <!--TEXT-->

            <article class="flex">
                <h1>We are StartUp Creative Kucra Agency</h1>
                <p>Carefully crafted after analysing the needs of different industries and the design achieves a great
                    balance between purpose & presentation</p>
                <form>
                    <div class="container-form">
                        <input type="text" placeholder="Enter your email">
                        <button>SUBSCRIBE</button>
                    </div>
                </form>
            </article>

            <!--IMAGE-->

            <figure>
                <picture>
                    <img src="illustration.svg" alt="illustration" title="illustration">
                </picture>
            </figure>

        </div>

    </header>

    <main>

        <!--Bouton Parametre-->
        <div class="icon-parameter">
            <a href="#"><i class="fa-solid fa-gear"></i></a>
        </div>
        <!--CARD-->

        <section id="first_section" class="container">
           
            <h3>Products Features</h3>
            <p class="color-grey txt-center">It is a long established fact that a reader will be of a page when<br>
                established fact looking at its layout.</p>
             <div class="product-large-ecran">
            <ul class="flex flex-center">

                <li class="flex column">
                    <i class="fa-solid fa-globe"></i>
                    <h4>Digital Design</h4>
                    <p>Some quick example text to build on the card title and make up the bulk of the card the platform.
                    </p>
                </li>

                <li class="flex column">
                    <i class="fa-solid fa-brush"></i>
                    <h4>Unlimited Colors</h4>
                    <p>Credibly brand stanaads compliant user exteible services College Anibh ocean euismod tincidunt
                        laoret</p>
                </li>

                <li class="flex column">
                    <i class="fa-sharp fa-solid fa-chess"></i>
                    <h4>Strategy Solutions</h4>
                    <p>Separated they live in Bookmarks grove right at the coast of the Semantics, a large ocean
                        regelialia</p>
                </li>
            </ul>
        </div>
        
            <ul class="flex flex-center product-none">
            <swiper-container autoplay>
                <swiper-slide data-swiper-autoplay="1500">
                    <li class="flex column">
                        <i class="fa-solid fa-globe"></i>
                        <h4>Digital Design</h4>
                        <p>Some quick example text to build on the card title and make up the bulk of the card the platform.
                        </p>
                    </li>
                </swiper-slide>

                <swiper-slide data-swiper-autoplay="1500">
                    <li class="flex column">
                        <i class="fa-solid fa-brush"></i>
                        <h4>Unlimited Colors</h4>
                        <p>Credibly brand stanaads compliant user exteible services College Anibh ocean euismod tincidunt
                            laoret</p>
                    </li>
                </swiper-slide>
                <swiper-slide data-swiper-autoplay="1500">
                    <li class="flex column">
                        <i class="fa-sharp fa-solid fa-chess"></i>
                        <h4>Strategy Solutions</h4>
                        <p>Separated they live in Bookmarks grove right at the coast of the Semantics, a large ocean
                            regelialia</p>
                    </li>
                </swiper-slide>
              </swiper-container>
            </ul> 

        </section>
              

        <!--MEMBRES-->

        <section id="second_section">
            <h3>We'r dynamic team of talented people of<br> innovative & marketing expert</h3>
            <p class="color-grey txt-center">To achieve this, it would be necessary to have uniform grammar,
                pronunciation <br> and more common words. If several languages of the resulting language.</p>
            <ul class="flex flex-center wrap container large-ecran">
                <li class="flex column members">
                    <p><strong>1499+</strong></p>
                    <p class="color-grey">Complete projects</p>
                    <div class="relative img-box">
                        <img src="img/person1.png" alt="personne1" title="personne1">
                        <div class="flex column absolute flex-center test">
                            <a href="#"><i class="icon-fb fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-skype"></i></a>
                        </div>
                    </div>
                    <div>
                        <h5>Anna G. Wilhite</h5>
                        <p class="color-grey">CEO/Founder</p>
                    </div>
                </li>

                <li class="flex column members">
                    <p><strong>1080K</strong></p>
                    <p class="color-grey">Satisfied Clients</p>
                    <div class="relative img-box">
                        <img src="img/person2.png" alt="personne1" title="personne1">
                        <div class="flex column absolute flex-center test">
                            <a href="#"><i class="icon-fb fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-skype"></i></a>
                        </div>
                    </div>
                    <div>
                        <h5>William S.Blay</h5>
                        <p class="color-grey">CTO/Co-Founder</p>
                    </div>
                </li>

                <li class="flex column members">
                    <p><strong>608</strong></p>
                    <p class="color-grey">Team Members</p>
                    <div class="relative img-box">
                        <img src="img/person3.png" alt="personne1" title="personne1">
                        <div class="flex column absolute flex-center test">
                            <a href="#"><i class="icon-fb fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-skype"></i></a>
                        </div>
                    </div>
                    <div>
                        <h5>Maria B.Morales</h5>
                        <p class="color-grey">Web Designer</p>
                    </div>
                </li>

                <li class="flex column members">
                    <p><strong>252</strong></p>
                    <p class="color-grey">Employee</p>
                    <div class="relative img-box">
                        <img src="img/person4.png" alt="personne1" title="personne1">
                        <div class="flex column absolute flex-center test">
                            <a href="#"><i class="icon-fb fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-skype"></i></a>
                        </div>
                    </div>
                    <div>
                        <h5>Luke L.Johnston</h5>
                        <p class="color-grey">Web Developer</p>
                    </div>
                </li>
            </ul>
            <ul class="flex flex-center wrap container">
                <swiper-container class="mobile-galery" autoplay>
                    <swiper-slide>
                        <li class="flex column members">
                            <p><strong>1499+</strong></p>
                            <p class="color-grey">Complete projects</p>
                            <div class="relative img-box">
                                <img src="img/person1.png" alt="personne1" title="personne1">
                                <div class="flex column absolute flex-center test">
                                    <a href="#"><i class="icon-fb fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-skype"></i></a>
                                </div>
                            </div>
                            <div>
                                <h5>Anna G. Wilhite</h5>
                                <p class="color-grey">CEO/Founder</p>
                            </div>
                        </li>
                    </swiper-slide>
    
                    <swiper-slide>
                        <li class="flex column members">
                            <p><strong>1080K</strong></p>
                            <p class="color-grey">Satisfied Clients</p>
                            <div class="relative img-box">
                                <img src="img/person2.png" alt="personne1" title="personne1">
                                <div class="flex column absolute flex-center test">
                                    <a href="#"><i class="icon-fb fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-skype"></i></a>
                                </div>
                            </div>
                            <div>
                                <h5>William S.Blay</h5>
                                <p class="color-grey">CTO/Co-Founder</p>
                            </div>
                        </li>
                    </swiper-slide>
    
                    <swiper-slide>
                        <li class="flex column members">
                            <p><strong>608</strong></p>
                            <p class="color-grey">Team Members</p>
                            <div class="relative img-box">
                                <img src="img/person3.png" alt="personne1" title="personne1">
                                <div class="flex column absolute flex-center test">
                                    <a href="#"><i class="icon-fb fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-skype"></i></a>
                                </div>
                            </div>
                            <div>
                                <h5>Maria B.Morales</h5>
                                <p class="color-grey">Web Designer</p>
                            </div>
                        </li>
                    </swiper-slide>
                    <swiper-slide>
                        <li class="flex column members">
                            <p><strong>252</strong></p>
                            <p class="color-grey">Employee</p>
                            <div class="relative img-box">
                                <img src="img/person4.png" alt="personne1" title="personne1">
                                <div class="flex column absolute flex-center test">
                                    <a href="#"><i class="icon-fb fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-skype"></i></a>
                                </div>
                            </div>
                            <div>
                                <h5>Luke L.Johnston</h5>
                                <p class="color-grey">Web Developer</p>
                            </div>
                        </li>
                    </swiper-slide>
                  </swiper-container>
            </ul>
            

        </section>

        <!--PARALLAX-->

        <section id="third_section">
            <h1 class="parallax-title">Let's get started with Kucra</h1>
            <p>They are a good way to get you started if you want to build something similar or use from existing app which will reduce the cost,<br> efforts and time of the developers</p>
            <div class="txt-center "><a class="btn" href="#">Get Started</a></div>
        </section>

        <!--CLIENT-->

            <section id="client_section" class="container flex column flex-center align-center">
                <h1>What your client says</h1>
                <p class="txt-center color-grey">The big Oxmoxe advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious pulvenar metus molestie sed Semikoli</p>
                <ul class="flex wrap flex-center">
                    <li>
                        <a href="#">
                            <img src="img/01.png" alt="img" title="img">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="img/02.png" alt="img" title="img">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="img/03.png" alt="img" title="img">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="img/04.png" alt="img" title="img">
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="img/05.png" alt="img" title="img">
                        </a>
                    </li>
                </ul>
            </section>
    

        <!--BLOG-->

        <section id="blog_section" class="container">
            <h3>Our Blog</h3>
            <p class="color-grey txt-center">It is a long established fact that a reader will be of a page when<br>
                established fact looking at its layout.</p>
                <div id="collapse_container" class="collapse-section">
            <ul class="flex wrap flex-center">
                <li>
                    <article class="relative">
                        <div class="contain-img">
                            <a href="#">
                                <img src="img/blog3.png" alt="blog" title="blog">
                                <div class="flex column absolute author">
                                    <span><i class="fa-regular fa-user"></i> Calvin Carlo</span>
                                    <span><i class="fa-regular fa-clock"></i> 20th March 2021</span>
                                </div>
                            </a>
                        </div>
                              
                                <h4>Doing a cross country road trip</h4>
                                <p>We craft digital graphic and dimensional<br> thinking to create category leading brand.</p>
                                <div><a href="#">Read more</a></div>                     
                    </article>
                </li>

                <li>
                    <article class="relative">
                        <div class="contain-img">
                            <a href="#">
                                <img src="img/blog1.png" alt="blog" title="blog">
                                <div class="flex column absolute author">
                                    <span><i class="fa-regular fa-user"></i> Ruben Reed</span>
                                    <span><i class="fa-regular fa-clock"></i> 01th July 2021</span>
                                </div>
                            </a>
                        </div>
                              
                                <h4>New exhibition at our Museum</h4>
                                <p>Even the all-powerful Pointing has no control <br> about the blind almost unorthographic.</p>
                                <div><a href="#">Read more</a></div>                     
                    </article>
                </li>

                <li>
                    <article class="relative">
                        <div class="contain-img">
                            <a href="#">
                                <img src="img/blog2.png" alt="blog" title="blog">
                                <div class="flex column absolute author">
                                    <span><i class="fa-regular fa-user"></i> Theresa Sinclair</span>
                                    <span><i class="fa-regular fa-clock"></i> 25th July 2021</span>
                                </div>
                            </a>
                        </div>
                              
                                <h4>Design your apps in your own way</h4>
                                <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                                <div><a href="#">Read more</a></div>                     
                    </article>
                </li>

            </ul>
        </div>
        <div class="button-add btn-blue txt-center button-blog-none">En savoir plus</div>
        </section>

    
        <!--PRICING-->

        <section id="pricing_section">
            <div class="flex space-around wrap container">
                <article>
                    <h5>We are digital creative Landing Page</h5>
                    <p>The difference between a successful person and others is not a lack of strength, not a lack of knowledge, but
                        rather a lack of will Composed in a pseudo-Latin language which more or less pseudo-latin language
                        corresponds</p>
                    <ul class="flex gap-3x">
                        <li>
                            <span>4957</span>
                            <p>Happy User</p>
                        </li>
            
                        <li>
                            <span>1599</span>
                            <p>Complete Project</p>
                        </li>
                    </ul>
            
                    <div>
                        <a href="#" class="btn-blue">Learn More</a>
                    </div>
                </article>
            
                <figure>
                    <img src="img/creativity.png" alt="creativity" title="creativity">
                </figure>
            
            </div>
            <div class="bg-grey">
                <h3>Our Pricing</h3>
                <p class="color-grey font-size-15">It is a long established fact that a reader will be of a page when<br> established fact looking at its layout.</p>
                
                <ul class="flex wrap flex-center gap-3x card-prices">
                <?php

                foreach($pricings as $pricing){
                    // MB OU GB en fonction du resultat
                    $onlineSpace = ($pricing['OnlineSpace'] >= 1000) ? ($pricing['OnlineSpace'] / 1000).  'GB' : ($pricing['OnlineSpace']).  'MB';
                    // GERER ICONE SUPPORT 
                    $support = ($pricing['support'] == 1 ? '<i class="fa-sharp fa-regular fa-circle-check color-green"></i> Support:</p>' : '<i class="fa-regular fa-circle-xmark color-red"></i> Support: ');
                    //GERER ICONE HIDDEN FEES
                    $fees = ($pricing['hidden_fees'] == 0 ? '<i class="fa-sharp fa-regular fa-circle-check color-green"></i> Hidden Fees:</p>' : '<i class="fa-regular fa-circle-xmark color-red"></i> Hidden Fees: ');
                    


                echo '<li class="card relative">
                        <h5 class="txt-center">'.$pricing['nom_pricing'].'</h5>
                        <div class="txt-center color-grey"><var><sup>$</sup>'.$pricing['price'].'</var>/month</div>
                        <ul>
                            <li class="flex space-between card-price">
                                <p><i class="fa-sharp fa-regular fa-circle-check color-green"></i> Bandwidth</p>
                                <p>'.$pricing['bandwidth'].'GB</p>
                            </li>
            
                            <li class="flex space-between card-price">
                                <p><i class="fa-sharp fa-regular fa-circle-check color-green"></i> Onlinespace</p>
                                <p>'.$onlineSpace.'</p>
                            </li>
            
                            <li class="flex space-between card-price">

                            <p>'.$support.'</p>

                                
                                <p>'.$pricing['domainYes'].'</p>
                            </li>
            
                            <li class="flex space-between card-price">
                                <p><i class="fa-sharp fa-regular fa-circle-check color-green"></i> Domain</p>
                                <p>'.$pricing['domain'].'</p>
                            </li>
            
                            <li class="flex space-between card-price">
                            <p>'.$fees.'</p>
                                <p>'.$pricing['feesYes'].'</p>
                            </li>
                        </ul>
                        <div class="txt-center">
                            <a href="#" class="btn-white">Join Now</a>
                        </div>';
                            if($pricing['Sale'] !== null){
                               echo '<span class="absolute promo">'.$pricing['Sale'].'%<br>sale</span>';
                            }
                        
                    '</li>';
                }
                    ?>

                 
                </ul>
            
            </div>
        </section>

    </main>

    <footer id="footer">
        <div class="scroll-to-top">
            <a href="#">
                <i class="fa-solid fa-arrow-up"></i>
            </a>
        </div>
        <div class="bg-black">
            <ul class="flex flex-center icon-footer">
                <li class="font-size-13">
                    <a href="#">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="fa-brands fa-google-plus-g"></i>
                    </a>
                </li>
            </ul>
            <ul  class="flex flex-center wrap lien-footer">
                <li class="font-size-13">
                    <a href="#">Terms & Condition</a> <span> | </span> 
                </li>

                <li class="font-size-13">
                    <a href="#"> Privacy Policy </a> <span> | </span> 
                </li>

                <li class="font-size-13">
                    <a href="#">Contact Us</a> 
                </li>
            </ul>
            <p class="font-size-13 color-grey">2022?? Kucra - Landing Page Template by Pichforest</p>
        </div>
    </footer>

    <script>
  
        function myFunction() {
          var x = document.getElementById("myLinks");
          if (x.style.display === "flex") {
            x.style.display = "none";
          } else {
            x.style.display = "flex";
          }
        }

        //Fonction pour ouvrir fermer la section
        const collapse = document.getElementById('collapse_container')
        const buttonAdd = document.querySelector('.button-add')

        buttonAdd.addEventListener('click', function(){
            collapse.classList.toggle('block')

            if(buttonAdd.innerHTML === 'En savoir plus'){
                buttonAdd.innerHTML = 'cacher l\'article'
            }else{
                buttonAdd.innerHTML = 'En savoir plus'
            }
        })

        </script>

</body>

</html>