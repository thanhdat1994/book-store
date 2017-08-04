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
        <h4><?= __('Related Writers') ?></h4>
        <?php if (!empty($book->writers)): ?>
            <?php foreach ($book['writers'] as $writer) {
                        echo $this->Html->link($writer['name'],'/tac-gia/'.$writer['slug']);echo "<br>";
            }  ?>
        <?php endif; ?>
    </div>
    <!-- Hiển thị comments -->
    <div class="related">
        <h4><?= __('Related Comments') ?></h4>
        <?php if (!empty($book->comments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Book Id') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($book->comments as $comments): ?>
            <tr>
                <td><?= h($comments->id) ?></td>
                <td><?= h($comments->user_id) ?></td>
                <td><?= h($comments->book_id) ?></td>
                <td><?= h($comments->content) ?></td>
                <td><?= h($comments->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Comments', 'action' => 'view', $comments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Comments', 'action' => 'edit', $comments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Comments', 'action' => 'delete', $comments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>    
</div>
