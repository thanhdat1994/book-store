<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Writer $writer
  */
?>
<div class="writers view large-9 medium-8 columns content">

    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($writer->name) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Biography') ?></h4>
        <?= $this->Text->autoParagraph(h($writer->biography)); ?>
    </div>
    <div class="panel panel-default" style="width: 872px;">
        <div>
            <h4 class="panel-heading" style="border-color: #ddd; margin-left: 0px;"> <i class="fa fa-server"></i> Thông tin tác giả
                </h4>
                    <h3><?= h($writer->name) ?></h3>
            
        </div>
    </div>

    <div class="panel panel-default" style="width: 872px;">
        <div>
            <h4 class="panel-heading" style="border-color: #ddd; margin-left: 0px;"> <i class="fa fa-server"></i> <?php echo $writer['name']; ?>
                </h4>
            <?php if (!empty($books)): ?>
                <?php echo $this->element('books',['books'=>$books]); ?>
                <?php echo $this->element('pagination',['object'=>'quyển sách']); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
