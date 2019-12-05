							<section>
								<header class="main">
									<h1><?= $page->title ?></h1>
								</header>

								<article>
									<ul class="CategoryList">
<?php foreach($pages->find("template=blog-category, sort=title") as $category) { ?>
										<li>
											<a href="<?= $category->url ?>"><?= $category->title ?></a><br>
											<?= sprintf(_x("Number of blog posts: %d", "blog"), $pages->count("template=blog-post, blog_categories=$category")) ?>
										</li>
<?php } ?>
									</ul>
								</article>
							</section>
