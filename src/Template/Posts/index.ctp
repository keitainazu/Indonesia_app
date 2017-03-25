<!-- File: /app/View/Posts/index.ctp -->

<h1>Blog posts</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->
    <?php foreach ($posts as $post): ?>
   
    <tr>
        <td><?= h($post->id) ?></td>
        <td><?= h($post->title) ?></td>
        <td><?= h($post->created) ?></td>
        <td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>

</table>