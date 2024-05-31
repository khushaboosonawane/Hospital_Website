<?php
include("navbar.php");
?>

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Our blog</span>
          <h1 class="text-capitalize mb-5 text-lg">Blog articles</h1>

          <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><a href="#" class="text-white-50">Our blog</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section blog-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
					<?php
					include("../connection/connection.php");
					$sql="SELECT * FROM blog";
					$data=mysqli_query($con,$sql);
					if($data->num_rows>0){
						foreach($data as $row){
                    ?>
					<div class="col-lg-12 col-md-12 mb-5">
						<div class="blog-item">
							<div class="blog-thumb">
								<img src="../public/upload_image/blog_image/<?= $row['blog_image'] ?>" alt="" class="img-fluid" style="height:450px;width:100%">
							</div>

							<div class="blog-item-content">
								<div class="blog-item-meta mb-3 mt-4">
									<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> <?= $row['blog_date'] ?></span>
								</div> 

								<h2 class="mt-3 mb-3"><?= $row['blog_title'] ?></h2>

								<p class="mb-4"><?= $row['blog_desc'] ?></p>
							</div>
						</div>
					</div>
					<?php
						}
					}else{
                    ?>
					<div class="col-lg-12 col-md-12 mb-5">
		<div class="blog-item">
			<div class="blog-thumb">
				<img src="../public/images/blog/blog-1.jpg" alt="" class="img-fluid ">
			</div>

			<div class="blog-item-content">
				<div class="blog-item-meta mb-3 mt-4">
					<span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
					<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
				</div> 

				<h2 class="mt-3 mb-3"><a href="blog-single.html">Choose quality service over cheap service  all type of things</a></h2>

				<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>

				<a href="blog-single.html" target="_blank" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a>
			</div>
		</div>
	</div>

	<div class="col-lg-12 col-md-12 mb-5">
		<div class="blog-item">
			<div class="blog-thumb">
				<img src="../public/images/blog/blog-2.jpg" alt="" class="img-fluid">
			</div>

			<div class="blog-item-content">
				<div class="blog-item-meta mb-3 mt-4">
					<span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
					<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
				</div> 

				<h2 class="mt-3 mb-3"><a href="blog-single.html">All test cost 25% in always in our laboratory</a></h2>
				
				<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>

				<a href="blog-single.html" target="_blank" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a>
			</div>
		</div>
	</div>


	<div class="col-lg-12 col-md-12 mb-5">
		<div class="blog-item">
			<div class="blog-thumb">
				<img src="../public/images/blog/blog-4.jpg" alt="" class="img-fluid" style="height:500px;width:100%">
			</div>

			<div class="blog-item-content">
				<div class="blog-item-meta mb-3 mt-4">
					<span class="text-muted text-capitalize mr-3"><i class="icofont-comment mr-2"></i>5 Comments</span>
					<span class="text-black text-capitalize mr-3"><i class="icofont-calendar mr-1"></i> 28th January</span>
				</div> 
				<h2 class="mt-3 mb-3"><a href="blog-single.html">Get Free consulation from our special surgeon and doctors</a></h2>

				<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro, dicta ad.</p>

				<a href="blog-single.html" target="_blank" class="btn btn-main btn-icon btn-round-full">Read More <i class="icofont-simple-right ml-2  "></i></a>
			</div>
		</div>
	</div>
					<?php
					}
					?>
	
</div>
            </div>
            


    </div>
</section>

<?php
include("footer.php");
?>