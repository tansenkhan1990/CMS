<div id="templatemo_sidebar">
            	
                <h4>Categories</h4>
                <ul class="templatemo_list">                
					<?php
                    foreach($mycms->showMenu("categories") as $m)
                    {
                        extract($m);
                        ?>
                        <li><a href="index.php?cat_id=<?php echo $id; ?>"><?php echo $name; ?></a></li>
                        <?php
                    }
                    ?>               
                </ul>
                
                <div class="cleaner_h40"></div>
                
                <h4>Friends</h4>
                <ul class="templatemo_list">
                    <li><a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a></li>
                    <li><a href="http://www.flashmo.com" target="_parent">Flash Templates</a></li>
                    <li><a href="http://www.templatemo.com/page/1" target="_parent">Free Blog Themes</a></li>
                    <li><a href="http://www.webdesignmo.com/blog" target="_parent">Web Design Blog</a></li>
                    <li><a href="http://www.koflash.com" target="_parent">Flash Websites Gallery</a></li>
                    <li><a href="#">Vestibulum laoreet</a></li>
                    <li><a href="#">Nullam nec mi enim</a></li>
                    <li><a href="#">Aliquam quam nulla</a></li>
                </ul>
                
                <div id="ads">
                	<a href="#"><img src="images/templatemo_200x100_banner.jpg" alt="banner 1" /></a>
                    
                    <a href="#"><img src="images/templatemo_200x100_banner.jpg" alt="banner 2" /></a>
                </div>
                
            </div>