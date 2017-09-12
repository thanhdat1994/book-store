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
        <tr>
            <th scope="row"><?=__('Comments') ?></th>
            <td>
                
                <?= $this->Number->format($book->comment_count,['places'=>0,'before'=>'(','after'=>') Comments'])?> 
                <!--<?php echo $book['Books']['comment_count']; ?>-->
            </td>
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
        <?php if (!empty($comments)){
                foreach ($comments as $comment) {
                    echo $comment['user']['username']."  đã gửi:";
                    echo $comment['content']."<br>";
                }
             } else{
                    echo "Chưa có nhận xét cho quyển sách này.";
             }
        ?>        
    </div><br>
    <!-- Gởi comments -->
    <div class="comments form">
        <?php if (isset($error)): ?>
            <?php foreach ($errors as $error ): ?>
                <?php echo $error[0]; ?>
            <?php endforeach ?>
        <?php endif ?>
        
        <?php echo $this->Form->create('Comment',['url'=>['controller'=>'Comments','action'=>'add'],'novalidator'=>true]); ?>
        <fieldset>
            <legend><?php echo __('Thêm bình luận'); ?></legend>
            <?php
            echo $this->Form->input('user_id',['type'=>'hidden','value'=>1]);
            echo $this->Form->input('book_id',['type'=>'hidden','value'=>$book['id']]);
            echo $this->Form->input('content',['type'=>'textarea','label'=>'']);
            ?>
            <?php echo $this->Form->input('Chấp nhận',['type'=>'submit']); ?>
        </fieldset>
        <?php echo $this->Form->end(); ?>
    </div>
    <!-- Hiển thị sách liên quan -->
    <div class="related">
        <h4><?= __('Sách cùng chuyên mục') ?></h4>
        <?php if (!empty($related_books)): ?>
            <?php echo $this->element('books',['books'=>$related_books]); ?>
        <?php endif; ?>
    </div>    
</div>
