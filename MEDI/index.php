<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediLearn</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/b660804b78.js" crossorigin="anonymous"></script>
    
</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-md sticky-top navbar-light bg-light " id="navbar-example2">
        <div class="container">
            <!--title-->
            <a href="" class="navbar-brand w-75">
                <img src="Annotation 2023-07-30 093942.png" width="5%" >
                <span id="medi" class="fw-bold text-dark h2" >
                    MediLearn Market
                </span>
            </a>
            <!--toggle when resize and drop down-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav">
                <span class="navbar-toggler-icon " style="font-size: 10px;float: right;"></span>
            </button>

            <!--creat nav-->
            <div class="collapse navbar-collapse justify-content-end align-center " id="main-nav">
                
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a href="#scrollspyHome" class="nav-link text-dark">Home</a>
                    </li>

                    <!--dropdown of products-->
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Products
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#scrollspyPopular">Popular</a></li>
                            <li><a class="dropdown-item" href="#scrollspyVitamins">Vitamins</a></li>
                            <li><a class="dropdown-item" href="#scrollspyPainkiller">Painkiller</a></li>
                            <li><a class="dropdown-item" href="#scrollspyAntibiotics">Antibiotics</a></li>
                        </ul>
                    </div>
                    
                    <li class="nav-item">
                        <a href="#scrollspyContact" class="nav-link text-dark link">Contact</a>
                    </li>
                    <!--when in lg size this will appear-->
                    <i class="fas fa-cart-arrow-down fa-2x"></i>
                    <li class="nav-item ms-2 d-none d-md-inline mt-2">
                        <div class="cart-box">
                            <div class="whole-cart-window hide">
                                <h2>Products</h2>

                                <div class="cart-wrapper" >
                                </div>
                                <div class="subtotal" id="subtotalValue">Subtotal: $0.00</div>
                                <a href="info.php" id="checkout-link"><div class="checkout">Checkout</div></a>
                              <a href="store_subtotal.php" id="checkout-link1">
    <div class="checkout1">Checkout product</div>
</a>
                            </div>
                        </div>
                    </li>
                    <!--when in md it appear-->
                    <li class="nav-item d-md-none ">
                        <i class="fas fa-cart-arrow-down fa-sm"></i>
                    </li>
                </ul>
            </div>  
        </div>
    </nav>

    <!--Header-->
    <header class="header mt-2" id="scrollspyHome">
        <div class="container">
            <div class="pt-5">
                <h1 class="head-text">Empowering <br> Medical <br>Education and<br> Supply Solution</h1>
            </div> 
        </div>
    </header>

    <!--Sec1-->
    <div id="scrollspyPopular">
        <div class="mt-3 p-4 mx-auto product">
            <div class="text-start ms-4">
                <p class="fw-bold text-dark h2">Product & Supply</p>
            </div>

            <!--Popular sec-->
            <div class="box-shadow">
                <h4 class="text-center">Popular</h4>
            </div>

            <div class="product-container ">
                <!--popular1-->
                <div class="container mt-4 details" data-id="1">
                    <img src="./med/popular/clindamycin.png" />
                    <div class="details">
                        <h3>Clindamycin</h3>
                        <p>
                            <span>A medication used for the treatment of numerous infections,<br> including but not limited to septicemia, 
                                intra-abdominal infections, lower respiratory infectionsgynecological infections, bone and joint infections,<br>
                                and skin and skin structure infections.</span>
                            <span class="price"><br>Price: $59.44</span>
                            <span  class="add-to-cart-btn">Buy</span>
                          </p>
                    </div>  
                </div>
                
                <div class="container mt-4" data-id="2" >
                         <img src="./med/popular/amoclav.jpg">
                        <div class="details">
                            <h3>Amoclav</h3>
                                <p>
                                    <span>>used in adults and children to treat the following infections middle ear and sinus infections 
                                        <br>respiratory tract infections <br> urinary tract infections <br>• 
                                        skin and soft tissue infections including dental infections 
                                        <br>bone and joint infections</span>
                                    <span class="price"><br>Price: $59.44</span>
                                    <span class="add-to-cart-btn">Buy</span>
                                </p>
                            </div>  
                         </div>

                
                         <div class="container mt-4" data-id="3" >
                            <img src="./med/popular/amoxicillin.jpg">
                           <div class="details">
                            <h3>Amoxicillin</h3>
                                   <p>
                                    <span>Treat bacterial infections, such as chest infections (including pneumonia) and dental abscesses.
                                        It can also be used together with other antibiotics and medicines to treat stomach ulcers.
                                         It's often prescribed for children, to treat ear infections and chest infections.</span>
                                    <span class="price"><br>Price:  $69.00</span>
                                    <span class="add-to-cart-btn">Buy</span>
                                   </p>
                               </div>  
                            </div>
            
                <div class="container mt-4" data-id="4">
                    <img src="./med/popular/ciprofloxacin.jpg" alt="">
                            <div class="details">
                                <h3>Ciprofloxacin</h3>
                                <p>
                                    <span>This medication is used to treat a variety of bacterial infections. Ciprofloxacin belongs to a class of drugs called quinolone antibiotics.
                                        It works by stopping the growth of bacteria.This antibiotic treats only bacterial infections. 
                                        It will not work for virus infections (such as common cold, flu). </span>
                      
                                    <span class="price"><br>Price: $79.00</span>
                                    <span class="add-to-cart-btn">Buy</span>
                                    
                                  </p>
                            </div>
                           
                </div>
                
                <div class="container mt-4" data-id="5">
                            <img src="./med/popular/paracetamol.jpg" alt="">
                            <div class="details">
                            <h3>Paracetamol</h3>
                            <p>
                                <span>Paracetamol is a medicine used for mild to moderate pain. It can be bought over the counter in pharmacies,
                                    supermarkets and other shops.Paracetamol has been in use for more than 70 years. The way it works to reduce pain and fever is not fully understood.</span>
                  
                                <span class="price"><br>Price: $21.00</span>
                                <span class="add-to-cart-btn">Buy</span>
                                
                              </p>
                        </div>         
                </div>
            </div>
        </div>
    </div>
    <div id="scrollspyVitamins">
        <div class="mt-3 p-4 mx-auto product">
            

            <!--Popular sec-->
            <div class="box-shadow">
                <h4 class="text-center">Vitamins</h4>
            </div>

            <div class="product-container ">
                <!--popular1-->
                <div class="container mt-4 details" data-id="6">
                    <img src="./med/vitamins/adults/CENTRUM.jpg" alt="">
                    <div class="details">
                        <h3>Centrum</h3>
                        <p>
                            <span>The vitamins in Centrum help support normal immune function, healthy eyes, bone health, energy production, and muscle health245.
                                Centrum is also non-GMO, gluten-free, and sugar-free.</span>
              
                            <span class="price"><br>Price: $279.00</span>
                            <span class="add-to-cart-btn">Buy</span>
                            
                          </p>
                    </div>  
                </div>
                
                <div class="container mt-4" data-id="7" >
                    <img src="./med/vitamins/adults/CLUSIVOL.jpg" alt="">
                        <div class="details">
                            <h3>Clusivol</h3>
                            <p>
                                <span>Clusivol multivitamins are used to prevent or treat vitamin deficiency due to certain illnesses, poor diet, or during pregnancy, Clusivol offers products that boost immunity and energy, allowing you to make the most out of your days.</span>
                  
                                <span class="price"><br>Price: $150.00</span>
                                <span class="add-to-cart-btn">Buy</span>
                                
                              </p> 
                        </div>  
                </div>
                
                <div class="container mt-4" data-id="8">
                    <img src="./med/vitamins/adults/CONZACE.jpg">
                            <div class="details">
                            <h3>Conzace</h3>
                            <p>
                                <span>ConZace is a nutritional supplement for adults1. It is a multivitamin and mineral supplement that contains the highest levels of Zinc, Vitamins A, C, and E23.</span>
                  
                                <span class="price"><br>Price: $292.00</span>
                                <span class="add-to-cart-btn">Buy</span>
                                
                              </p>
                            </div>
                                
                </div>
              
                <div class="container mt-4" data-id="9">
                    <img src="./med/vitamins/adults/ENERVON.jpg" alt="">
                            <div class="details">
                                <h3>Ciprofloxacin</h3>
                                <p>
                                    <span>Enervon is a nutritional supplement that contains vitamin-B complex and vitamin C12. It works with food to provide the synergistic benefits of B-vitamins (namely B1, B2, B6, B12) and Vitamin C to the body</span>
                      
                                    <span class="price"><br>Price: $199.00</span>
                                    <span class="add-to-cart-btn">Buy</span>
                                    
                                  </p>
                            </div>
                           
                </div>
                
                <div class="container mt-4" data-id="10">
                    <img src="./med/vitamins/adults/STRESSTABS.jpg" alt="">
                            <div class="details">
                            <h3>Stresstabs</h3>
                            <p>
                                <span>Stresstabs is a vitamin and mineral supplement that helps to replenish nutrients lost during periods of stress. 
                                    It is a high-potency B-complex vitamin formula that works by providing extra vitamins and minerals to the body when you do not get enough from your diet.</span>
                  
                                <span class="price"><br>Price:$48.00</span>
                                <span class="add-to-cart-btn">Buy</span>
                                
                              </p>
                        </div>         
                </div>
            </div>
        </div>
    </div>
    
    <div id="scrollspyPainkiller">
        <div class="mt-3 p-4 mx-auto product">
            

            
            <div class="box-shadow">
                <h4 class="text-center">Painkiller</h4>
            </div>

            <div class="product-container ">
                
                <div class="container mt-4 details" data-id="11">
                    <img src="./med/painkiller/hydrocodone.jpg" alt="">
                    <div class="details">
                        <h3>Hydrocodone</h3>
                        <p>
                            <span>The vitamins in Centrum help support normal immune function, healthy eyes, bone health, energy production, and muscle health245.
                                Centrum is also non-GMO, gluten-free, and sugar-free.</span>
              
                            <span class="price"><br>Price: $48.00</span>
                            <span class="add-to-cart-btn">Buy</span>
                            
                          </p>
                    </div>  
                </div>
                
                <div class="container mt-4" data-id="12" >
                    <img src="./med/painkiller/ibuprofen.jpg" alt="">
                        <div class="details">
                            <h3>Ibuprofen</h3>
                            <p>
                                <span>Ibuprofen is a nonsteroidal anti-inflammatory drug (NSAID) used to treat mild to moderate pain, and helps to relieve symptoms of arthritis (osteoarthritis, rheumatoid arthritis, or juvenile arthritis), such as inflammation, swelling, stiffness, and joint pain.</span>
                  
                                <span class="price"><br>Price:$30.90</span>
                                <span class="add-to-cart-btn">Buy</span>
                                
                              </p> 
                        </div>  
                </div>
                
                <div class="container mt-4" data-id="13">
                    
                    <img src="./med/painkiller/oxycodone.jpg" alt="">
                            <div class="details">
                            <h3>Oxycodone</h3>
                            <p>
                                <span>Oxycodone is used to relieve pain severe enough to require opioid treatment and when other pain medicines did not work well enough or cannot be tolerated. It belongs to the group of medicines called narcotic analgesics (pain medicines). Oxycodone acts on the central nervous system (CNS) to relieve pain</span>
                  
                                <span class="price"><br>Price:$152.11</span>
                                <span class="add-to-cart-btn">Buy</span>
                                
                              </p>
                            </div>
                                
                </div>
              
                <div class="container mt-4" data-id="14">
                    <img src="./med/vitamins/adults/ENERVON.jpg" alt="">
                            <div class="details">
                                <h3>Enervon</h3>
                                <p>
                                    <span>Enervon is a nutritional supplement that contains vitamin-B complex and vitamin C12. It works with food to provide the synergistic benefits of B-vitamins (namely B1, B2, B6, B12) and Vitamin C to the body</span>
                      
                                    <span class="price"><br>Price:$152.11</span>
                                    <span class="add-to-cart-btn">Buy</span>
                                    
                                  </p>
                            </div>
                           
                </div>
                
                <div class="container mt-4" data-id="15">
                    <img src="./med/painkiller/Paracetamol.png" alt="">
                            <div class="details">
                            <h3>Paracetamol</h3>
                            <p>
                                <span>Paracetamol (Panadol, Calpol, Alvedon) is an analgesic and antipyretic drug that is used to temporarily relieve mild-to-moderate pain and fever. It is commonly included as an ingredient in cold and flu medications and is also used on its own.</span>
                  
                                <span class="price"><br>Price: $152.11</span>
                                <span class="add-to-cart-btn">Buy</span>
                                
                              </p>
                        </div>         
                </div>
            </div>
        </div>
    </div>

    <div id="scrollspyAntibiotics">
        <div class="mt-3 p-4 mx-auto product2">
            <div class="box-shadow">
                <h4 class="text-center">Antibiotics</h4>
            </div>

            <div class="product-container ">
                
                <div class="container mt-4 details" data-id="16">
                    <img src="./med/antibiotics/trimethoprim.jpg" alt="">
                    <div class="details">
                        <h3>Trimethoprim</h3>
                        <p>
                            <span>Trimethoprim is an antibiotic used to treat bacterial infections. It works by stopping the growth of bacteria by preventing them from producing a substance called folate, which is necessary for DNA production.</span>
              
                            <span class="price"><br>Price: $500.00</span>
                            <span class="add-to-cart-btn">Buy</span>
                            
                          </p>
                    </div>  
                </div>
                
                <div class="container mt-4" data-id="17" >
                    <img src="./med/antibiotics/metronidazole.jpg" alt="">
                        <div class="details">
                            <h3>Metronidazole</h3>
                            <p>
                                <span> Metronidazole is an antibiotic that fights bacteria. It is in a class of medications called nitroimidazole antimicrobials. It works by stopping the growth of bacteria and parasites. Metronidazole is used to treat bacterial infections of the vagina, stomach or intestines, liver, skin, joints, brain, heart, and respiratory tract. </span>
                  
                                <span class="price"><br>Price: $152.11</span>
                                <span class="add-to-cart-btn">Buy</span>
                                
                              </p> 
                        </div>  
                </div>
                
                <div class="container mt-4" data-id="18">
                    
                    <img src="./med/antibiotics/clindamycin.png" alt="">
                            <div class="details">
                            <h3>Clindamycin</h3>
                            <p>
                                <span> Clindamycin is an antibiotic that fights bacteria in the body. It is used to treat a wide variety of bacterial infections, such as middle ear infections, bone or joint infections, pelvic inflammatory disease, strep throat, pneumonia, and endocarditis. It does not work for virus infections </span>
                  
                                <span class="price"><br>Price:$152.11</span>
                                <span class="add-to-cart-btn">Buy</span>
                                
                              </p>
                            </div>
                                
                </div>
              
                <div class="container mt-4" data-id="19">
                    <img src="./med/antibiotics/Azithromycin.jpg" alt="">
                            <div class="details">
                                <h3>Azithromycin</h3>
                                <p>
                                    <span>Azithromycin is an antibiotic medication used to treat many different types of bacterial infections, such as respiratory infections, skin infections, ear infections, eye infections, and sexually transmitted diseases. It is also used to prevent and treat a serious type of infection called mycobacteria or MAC4.</span>
                      
                                    <span class="price"><br>Price: $152.11</span>
                                    <span class="add-to-cart-btn">Buy</span>
                                    
                                  </p>
                            </div>
                           
                </div>
                
                <div class="container mt-4" data-id="20">
                    <img src="./med/antibiotics/amoxicillin.jpeg" alt="">
                            <div class="details">
                            <h3>Amoxicillin</h3>
                            <p>
                                <span>Amoxicillin is a penicillin antibiotic that fights bacteria. Amoxicillin is used to treat many different types of infection caused by bacteria, such as tonsillitis, bronchitis, pneumonia, and infections of the ear, nose, throat, skin, or urinary tract </span>
                  
                                <span class="price"><br>Price: $30.90</span>
                                <span class="add-to-cart-btn">Buy</span>
                                
                              </p>
                        </div>         
                </div>
            </div>
        </div>
    </div>
                           
    
        <!--Footer -->
    <footer id="scrollspyContact">
        <div class="container ">
            <div class="title text-center fw-bold text-dark h2 ">
                <p style="color: #fff; padding-top: 10px; margin-bottom:20px ;" >MediLearn Market</p>
            </div>
            <hr class="border border-light">

            <div class=" text-center">
                <ul class="d-flex" style="margin-right: 380px;"> 
                    <li>
                        <i class="fa-brands fa-facebook fa-xl" style="color: #000000;"></i>
                        <a href="">Facebook</a>
                    </li>
                    <li>
                        <i class="fa-brands fa-twitter fa-xl" style="color: #000000;"></i>
                        <a href="">Twitter</a>
                    </li>
                    <li>
                        <i class="fa-brands fa-instagram fa-xl" style="color: #000000;"></i>
                        <a href="">Instagram</a>
                    </li>
                </ul>
            </div>

            <div class=" vh-10 text-center">
                <p style="color: white;">2023 MediLearn Market | All rights Reserved</p>
            </div>
        </div>
    </footer>

    <script>
document.addEventListener("DOMContentLoaded", () => {
    const buyButtons = document.querySelectorAll(".add-to-cart-btn");

    buyButtons.forEach(button => {
        button.addEventListener("click", () => {
            const productDetails = button.closest(".details");
            const productName = productDetails.querySelector("h3").textContent;
            const productPrice = productDetails.querySelector(".price").textContent.replace("Price: ", "").replace("$", "");
            
            const url = `checkout_data.php?name=${encodeURIComponent(productName)}&price=${encodeURIComponent(productPrice)}`;
            
            fetch(url)
                .then(response => response.text())
                .then(data => {
                    console.log(data); // You can handle the response from PHP here
                })
                .catch(error => {
                    console.error("Error:", error);
                });
        });
    });
});
</script>
    <script src="bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
   </body>
</html>

