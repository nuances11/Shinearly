<!-- banner -->
  <div class="courses_banner">
  	<div class="container">
  		<h3>Blog</h3>
  		<p class="description">
             Welcome to our blog page, feel free to read our latest blogs and updates. Enjoy your stay. 
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.html">Home</a></li>
                <li class="current-page">Blogs</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="features">
	   <div class="container">
	   	  <h1>Blogs</h1>
		  
	<?php
                    //$sql1 = "SELECT * FROM blog";
                   // $res = $conn->query($sql1);

                //if ($res->num_rows > 0){
                  //  while ($blog = $res->fetch_assoc()){
                        
				?>
	
	   	  <div class="blog_box1">
	   	   <dl class="item_info_dl">
	   	   	<h2><a href="blog-content.php"><?php //echo $blog['title']; ?>Why Take Online Classes</a></h2>
		    <dd>
				<address class="item_createdby">
					Posted by Monde Aytalin	<?php //echo $blog['user']; ?>		
				</address>
			</dd>
			<dd>
		       <p datetime="<?php //echo $blog['date_posted']; ?>4/29/17" class="item_published">
			   on <?php //echo $blog['date_posted']; ?>	April 29,  2017		</p>
	        </dd>
			<dd>
		      
	       </dd>
		 </dl>
		 <img src="<?php //echo $blog['image']; ?><?php echo base_url()?>templates/shinearly/images/blog1.jpg" class="img-responsive center-block col-md-12" alt=""/>
		 
		 <p>  <?php //echo $blog['content_preview']; ?>	What are your ways and means to improve your English skills? The answer to this question varies depending on what aspect (grammar, listening, pronunciation, speaking, vocabulary, etc.) you want to enhance. For example, writing short essays or journals at least once a day, and practicing the rules that you have learned whenever you speak are great tips on improving grammar. </p>
	     <a href="blog-content.php?id=<?php //echo $blog['id']; ?>" class="radial_but">Read More</a>
		</div>
					<?php 
					//	}
					//}
					
					
					?>
				
		 <ul class="pagination">
	   	 	<li class="active"><a href="#">1</a></li>
	   	 	<li><a href="#">2</a></li>
	   	 </ul>
		 
		 </div>	
	   	</div>