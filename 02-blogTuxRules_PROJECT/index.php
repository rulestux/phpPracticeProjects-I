<?php

// importando 'header':
include_once("templates/header.php");

?>

<main>
    <div id="title-container">
        <h1>TuxRules Blog</h1>
        <p>The ultimate Linux and Programming Blog.</p>
    </div>
    <div id="articles-container">
        <?php foreach($articles as $article): ?>
            <div class="article-box">
                <img src="<?= $BASE_URL ?>/img/<?= $article['img'] ?>" alt="<?= $article['title'] ?>">
                <h2 class="article-title">
                    <!-- referência de para os artigos que já prepara a
                    respectiva URL com as variáveis; note-se a transição
                    para os query-parameters com '?': -->
                    <a href="<?= $BASE_URL ?>article.php?id=<?= $article['id'] ?>"><?= $article['title'] ?></a>
                </h2>
                <p class="article-description"><?= $article['description'] ?></p>
                <div class="tags-container">
                    <?php foreach($article['tags'] as $tag): ?>
                        <a href="#"><?= $tag ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php

// importando 'footer':
include_once("templates/footer.php");

?>

