<php?
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="design.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=EB Garamond">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
            
            $(document).ready(function() {
                var categry = '.nav li';
                $(categry).on('click', function(){
                    
                    $(categry).removeClass('active');
                    $(this).addClass('active');
                })
                var select_icon = '.imag_nav';
                $(select_icon).on('mouseover',function(){
                    $(select_icon).addClass('inactive');
                    $(this).removeClass('inactive');
                })
                $(select_icon).on('mouseleave',function(){
                    $(select_icon).removeClass('inactive');
                })
                
            });
        </script>
    </head>

    </body>

        <div class="nav">
            <ul>
                <li class="active">Women</li>
                <li >Men</li>
                <li >Girls</li>
                <li >Boys</li>
                
            </ul> 

            <img src="imag/logo3.png" class="logo" alt=""> 
            
            <div class="right_nav">
                
                <div class="container_search_bar">
                    <form action="" class="search_bar">
                        <input type="search" placeholder="Search">
                        <button type="submit"><img src="imag/magnifying_glass.png" class="imag_nav" ></button>
                    </form>
                </div>

                <img src="imag/log_in_2.png" class="imag_nav">
                <img src="imag/favorite.png" class="imag_nav">
                <img src = "imag/shoping_cart.png" class="imag_nav">
            </div>
            
        </div>

        <div class="sub_category">

            <ul>
                <li class="active">Women</li>
                <li >Men</li>
                <li >Girls</li>
                <li >Boys</li>
            </ul> 

        </div>
        {{content}}
        <footer>
            
            <div class="wave">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path style="fill: rgb(255, 255, 255)" d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path style="fill: rgb(255, 255, 255)" d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path style="fill: rgb(255, 255, 255)" d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
            </div>
            
            <div class = "footer-container">
                <div class = "Left-footer"> 
                    <img src="imag/logo_4.png" class="logo-footer" alt=""> 
                    <p>Treat yourself and satisfy your fashion desires</p><br>
                    <div class="Social-Media">
                        <h2>Follow us</h2>
                        <a href="#" ><img src="imag/facebook_icon.png" class="facebook"></a>
                        <a href="#" ><img src="imag/instagram_icon.png" class="instagram"></a>
                        <a href="#" ><img src="imag/twiter_logo.png" class="twitter"></a>
                        <a href="#" ><img src="imag/mail_icon.png" class="mail-icon"></a>
                    </div>
                </div>
                <div  class="middle-footer">

                    <div class="middle-footer-name">
                        <h1>Quick Links</h1>
                    </div>

                    <div class="footer-links">
                        <div class="links">
                            <h3>Store</h3>
                            <a href="#">Home</a>
                            <a href="#">Best Sellers</a>
                            <a href="#">Discounted Products</a>
                            <a href="#">About Us</a>
                        </div>
                        <div class="links">
                            <h3>Help</h3>
                            <a href="#">Contact us</a>
                            <a href="#">FAQ</a>
                            <a href="#">Comand Status</a>
                            
                        </div>
                        <div class="links">
                            <h3>Information</h3>
                            <a href="#">Terms & Privacy Policy</a>
                            <a href="#">Cookie Policy</a>
                            <a href="#">Return Policy</a>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="newsletter">
                    <form>
                        <H2>Never miss out a new and good offert</H2>
                        <input type ="email" placeholder="Enter your email address">
                        <button type="submit">Subscribe</button>
                    </form>
                </div>

            </div>

    </body>
</html>