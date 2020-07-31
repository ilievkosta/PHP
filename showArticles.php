<?php
include_once('includes/connection.php');
include_once('includes/article.php');
$article=new Article;
$articles= $article->fetch_all();

?>
	
		
		<ol>
		<?php foreach ($articles as $article){ ?>

		
			<li>
				<a href="showNews.php?id=<?php echo $article['article_id'];?>">
				<?php echo $article['article_title'];?>
				</a>
				-<small>

				posted <?php
				
			
				echo date('Y-m-d H:i:s', (int)$article['article_timestamp']);?>
				</small>
			 </h4>
			
			</li>
			<?php } ?>
		</ol>
		

