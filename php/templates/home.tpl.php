        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
        <h2 class="right__title">Latest News</h2>
        <div class="posts">
          <?php foreach ($allPosts as $postId=>$post) : ?>
          <article class="post">
            <a href="" class="post__category post__category--color-<?= $post['category'] ?>"><?= $post['category'] ?></a>
            <h3><?= $post['title'] ?></h3>
            <div class="post__meta">
              <img class="post__author-icon" src="../images/<?= $post['author_pic'] ?>" alt="">
              <strong class="post__author"><?= $post['author'] ?></strong>
              <time datetime="<?= $post['published_datetime'] ?>">le <?= $post['published_date'] ?></time>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pacers, perferendis, saepe.
            </p>
            <a href="article.php?id=<?= $postId ?>" class="post__link">Continue reading</a>
          </article>
          <?php endforeach ?>
        </div>