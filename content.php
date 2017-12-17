<div id="templatemo_main_wrapper">
	<div id="templatemo_main">
		<div id="templatemo_main_top">


<div id="templatemo_content">
        
    		<div class="post_section">

            <?php
			/* For Display All Articles */
				if(isset($_GET["page"]))
				{
					/* Convert the value of page into integer*/
					$page = intval($_GET["page"]);
				}
				else
				{
					$page = 1;
				}
			
																
				if(isset($_REQUEST['page_id']))
				{
					extract($mycms->readContent($_REQUEST['page_id'],"menu"));
					?>
                    <h2><?php echo $name; ?></h2>
                    <p><?php echo $content; ?></p>
                    <?php				
				}
				
				elseif(isset($_REQUEST['art_id']))
				{
					extract($mycms->readContent($_REQUEST['art_id'],"articles"));
					?>
                    <h2><?php echo $name; ?></h2>
                    <p><?php echo $content; ?></p>
                    <?php				
				}
				
				elseif(isset($_REQUEST['cat_id']))
				{
					foreach($mycms->readAllArticles($_REQUEST['cat_id']) as $art)
					{
						extract($art);
						?>
                        <h2><?php echo $title; ?></h2>
                    	<p><?php
                        
						$arr = explode(" ",$content);
						$slice = array_slice($arr, 0 , 50);
						echo $con = implode(" ",$slice);
						
						?>
                        &nbsp;
                        <a href="index.php?art_id=<?php echo $id; ?>">Read More..</a>
                        </p>
                        <?php
					}
				}
				
				else
			  {
				  
				   foreach($mycms->readArticles($page) as $articles){
					 
				
					  extract($articles);
				  ?>
                  <h2><?php echo $title; ?></h2>
                  <p><?php 
				  
				  $article=explode(" ",$content);
				  
				  $slice_article=array_slice($article,0,50);
				  
				  echo implode(" ",$slice_article);
				  
				  ?>
                  <a href="index.php?art_id=<?php echo $id;?>">Read More...</a>
                  </p>
                  <?php
				  }
				  ?>
                  
            <table width="400" cellspacing="2" cellpadding="2" align="center">
            <tbody>
            <tr>
            <td align="center">
            
            <?php
            $mycms->forPagination($page);
            ?>
            </td>
            
            </tr>
            </tbody>
            </table>
                  <?php
				  
			  }

				?>
                
                
                
                
                <div class="cleaner"></div>
            </div>
</div>