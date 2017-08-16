<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Book $book
  */
?>
<div class="books view large-9 medium-8 columns content">
    <h3><?= h($book->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($book->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?php echo $this->Html->image($book['image'],['class'=>'img img-responsive', 'style'=>'width:110px;height:110px;float:right']); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Publisher') ?></th>
            <td><?= h($book->publisher) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sale Price') ?></th>
            <td><?= $this->Number->format($book->sale_price,['places'=> 0,'after'=>' VNĐ']) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Info') ?></h4>
        <?= $this->Text->autoParagraph(h($book->info)); ?>
    </div>
    <!-- Hiển thị tác giả -->
    <div class="related">
        <h4><?= __('Tác giả') ?></h4>
        <?php if (!empty($book->writers)): ?>
            <?php foreach ($book['writers'] as $writer) {
                echo $this->Html->link($writer['name'],'/tac-gia/'.$writer['slug']);echo "<br>";
            }  ?>
        <?php endif; ?>
    </div>
    <!-- Hiển thị comments -->
    <div class="related">
        <h4><?= __('Bình luận') ?></h4>
        <?php if (!empty($comments)): ?>
            <?php foreach ($comments as $comment): ?>
                <?php echo $comment['user']['username']; ?> đã gửi:
                "<?php echo $comment['content']; ?>"<br>
            <?php endforeach ?>
        <?php endif; ?>
    </div>    
</div>
